<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Deposit;
use App\Models\Transaction;
use App\Models\Withdraw;
use App\Models\WithdrawGateway;
use App\Models\Payment;
use App\Models\Plan;
use App\Models\UserInterest;
use App\Models\GeneralSetting;
use App\Models\Ranking;
use App\Models\RefferedCommission;
use App\Models\User;
use App\Models\MoneyTransfer;
use App\Models\UserRanking;
use Illuminate\Http\Request;
use Nette\Utils\Random;
use Purifier;
use Auth;
use Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function __construct()
    {
        $general = GeneralSetting::first();
        $this->template = $general->theme == 1 ? 'frontend.' : "theme{$general->theme}.";
    }

    public function dashboard()
    {

        $pageTitle = "Dashboard";
        $totalInvest = Payment::where('user_id', Auth::id())->where('payment_status', 1)->sum('amount');
        $currentInvest = Payment::where('user_id', Auth::id())
            ->where('payment_status', 1)
            ->where(
                'next_payment_date',
                '>=',
                now()
            )
            ->latest()
            ->first('amount');
        $currentPlan = Payment::with('plan')->where('user_id', Auth::id())->where('payment_status', 1)->latest()->first();
        $allPlan = Payment::with('plan')->where('user_id', Auth::id())->latest()->paginate(10, ['*'], 'plan');
        $withdraw = Withdraw::where('user_id', Auth::id())->where('status', 1)->sum('withdraw_amount');
        $interestLogs = UserInterest::with('payment')->where('user_id', Auth::id())->latest()->paginate(10, ['*'], 'log');

        $commison = RefferedCommission::where('reffered_by', Auth::id())->sum('amount');
        $currentDayCommision = RefferedCommission::where('reffered_by', Auth::id())->latest()->first('amount');
        $pendingInvest = Payment::where('user_id', Auth::id())->where('payment_status', 2)->sum('amount');
        $pendingWithdraw = Withdraw::where('user_id', Auth::id())->where('status', 0)->sum('withdraw_amount');
        $totalDeposit = Deposit::where('user_id', Auth::id())->where('payment_status', 1)->sum('final_amount');



        // perfomane chart work
        $LvlOneUsers = Db::table('users')
            ->select('id')
            ->where('reffered_by', Auth::id())
            ->where('status', 1) // Add this line
            ->pluck('id')
            ->toArray();


        $SumLvlOneDepositAmnt = DB::table('deposits')
            ->selectRaw('SUM(amount) AS total_amount')
            ->whereIn('user_id', $LvlOneUsers)
            ->where('payment_status', 1)
            ->first();

        $LvlTwoUsers = DB::table('users')
            ->select('id')
            ->whereIn('reffered_by', $LvlOneUsers)
            ->where('status', 1)
            ->pluck('id')
            ->toArray();

        $SumLvlTwoDepositAmnt = DB::table('deposits')
            ->selectRaw('SUM(amount) AS total_amount')
            ->whereIn('user_id', $LvlTwoUsers)
            ->where('payment_status', 1)
            ->first();

        $LvlThreeUsers = DB::table('users')
            ->select('id')
            ->whereIn('reffered_by', $LvlTwoUsers)
            ->where('status', 1)
            ->pluck('id')
            ->toArray();

        $SumLvlThreeDepositAmnt = DB::table('deposits')
            ->selectRaw('SUM(amount) AS total_amount')
            ->whereIn('user_id', $LvlThreeUsers)
            ->where('payment_status', 1)
            ->first();


        $SumLvlOneComAmnt = DB::table('reffered_commissions')
            ->selectRaw('SUM(amount) AS total_com')
            ->whereIn('reffered_to', $LvlOneUsers)
            ->first();
        $SumLvlTwoComAmnt = DB::table('reffered_commissions')
            ->selectRaw('SUM(amount) AS total_com')
            ->whereIn('reffered_to', $LvlTwoUsers)
            ->first();
        $SumLvlThreeComAmnt = DB::table('reffered_commissions')
            ->selectRaw('SUM(amount) AS total_com')
            ->whereIn('reffered_to', $LvlThreeUsers)
            ->first();

        $TotalTeamDeposit = $SumLvlOneDepositAmnt->total_amount + $SumLvlTwoDepositAmnt->total_amount + $SumLvlThreeDepositAmnt->total_amount;
        $TotalTeamMembers = count($LvlOneUsers) + count($LvlTwoUsers) + count($LvlThreeUsers);
        $totalTeamCom = $SumLvlOneComAmnt->total_com + $SumLvlTwoComAmnt->total_com + $SumLvlThreeComAmnt->total_com;
        // perfomane chart work

        // vip work
        $user = User::find(Auth::id());
        $general = GeneralSetting::first();
        // Define an array to store the VIP level reward statuses
        $vipRewardStatus = [
            1 => 'vip_1_reward_status',
            2 => 'vip_2_reward_status',
            3 => 'vip_3_reward_status',
            4 => 'vip_4_reward_status',
            5 => 'vip_5_reward_status',
        ];

        for ($i = 1; $i <= 5; $i++) {
            // Check if total team deposit is greater than or equal to the VIP level amount
            // and the user's VIP status is less than the current VIP level
            if ($TotalTeamDeposit >= $general["vip{$i}_amount"] && $user->vip_status < $i) {
                // Retrieve the required active users count for VIP upgrade
                $requiredUsers = $general["req_active_users_vip$i"];

                // Count the actual active users referred by the current user
                $getActiveUsers = User::where('reffered_by', $user->id)
                    ->where('status', 1) // Filter for active users
                    ->count();

                // Check if the actual active users count meets the requirement for VIP upgrade
                if ($getActiveUsers >= $requiredUsers) {
                    $user->vip_status = $i;
                    if ($general->is_vip_reward == 1 && $general["vip{$i}_reward_amount"] != 0 && $user->{$vipRewardStatus[$i]} == 0) {
                        $user->balance += $general["vip{$i}_reward_amount"];
                        $user->{$vipRewardStatus[$i]} = 1;
                        Transaction::create([
                            'trx' => strtoupper(Str::random(16)),
                            'gateway_id' => 0,
                            'amount' => $general["vip{$i}_reward_amount"],
                            'currency' => @$general->site_currency,
                            'charge' => 0,
                            'details' => 'Vip Upgradation Bonus',
                            'type' => '+',
                            'gateway_transaction' => '',
                            'user_id' => $user->id,
                        ]);
                    }
                    $user->save();
                    break; // Break the loop after updating VIP status
                }
            }
        }


        // vip work
        $plans = Plan::where('status', 1)->get();
        $today_deposit_amount = DB::table('deposits')
            ->where('user_id', Auth::id())
            ->where('payment_status', 1)
            ->whereDate('created_at', Carbon::today())
            ->sum('amount');
        $today_withdraw_amount = DB::table('withdraws')
            ->where('user_id', Auth::id())
            ->where('status', 1)
            ->whereDate('created_at', Carbon::today())
            ->sum('withdraw_amount');
        $uplainer_id = DB::table('users')->where('id', auth()->id())->value('reffered_by');
        $uplainer_name = DB::table('users')->where('id', $uplainer_id)->first(['fname', 'lname']);


        // deposit reward work
       // Ensure $SumLvlOneDepositAmnt and $lastCheckedDeposit are numeric
// Access the total_amount property correctly
$SumLvlOneDepositAmnt = $SumLvlOneDepositAmnt->total_amount ?? 0;
$lastCheckedDeposit = $user->last_checked_deposit ?? 0; // Default to 0 if null

// deposit reward work
if (is_numeric($SumLvlOneDepositAmnt) && is_numeric($lastCheckedDeposit)) {
    $increments = floor(($SumLvlOneDepositAmnt - $lastCheckedDeposit) / 100000);

    if ($increments > 0) {
        $user->balance += $increments * 3000; // Add 3000 Rs for each increment of 100,000
        $user->last_checked_deposit = $SumLvlOneDepositAmnt; // Update the last checked deposit
        $user->save();

        // Create a transaction record for the reward
        Transaction::create([
            'trx' => strtoupper(Str::random(16)),
            'gateway_id' => 0,
            'amount' => $increments * 3000, // The reward amount
            'currency' => @$general->site_currency,
            'charge' => 0,
            'details' => 'Level One 1 lack Achieve Reward',
            'type' => '+',
            'gateway_transaction' => '',
            'payment_status' => 1,
            'user_id' => auth()->id(),
        ]);
    }
}


        // deposit reward work

        return view($this->template . 'user.dashboard', compact('commison', 'pageTitle', 'interestLogs', 'totalInvest', 'currentInvest', 'currentPlan', 'allPlan', 'withdraw', 'pendingInvest', 'pendingWithdraw', 'totalDeposit', 'plans', 'LvlOneUsers', 'SumLvlOneDepositAmnt', 'LvlTwoUsers', 'SumLvlTwoDepositAmnt', 'LvlThreeUsers', 'SumLvlThreeDepositAmnt', 'TotalTeamDeposit', 'TotalTeamMembers', 'totalTeamCom', 'SumLvlThreeComAmnt', 'SumLvlTwoComAmnt', 'SumLvlOneComAmnt', 'currentDayCommision', 'today_deposit_amount', 'today_withdraw_amount', 'uplainer_name'));
    }

    public function profile()
    {
        $pageTitle = 'Profile Edit';

        $user = auth()->user();

        return view($this->template . 'user.profile', compact('pageTitle', 'user'));
    }

    public function profileUpdate(Request $request)
    {



        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'username' => 'required|unique:users,username,' . Auth::id(),
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'image' => 'sometimes|image|mimes:jpg,png,jpeg'

        ], [
            'fname.required' => 'First Name is required',
            'lname.required' => 'Last Name is required',

        ]);

        $user = auth()->user();


        if ($request->hasFile('image')) {
            $filename = uploadImage($request->image, filePath('user'), $user->image);
            $user->image = $filename;
        }


        $data = [
            'country' => $request->country,
            'city' => $request->city,
            'zip' => $request->zip,
            'state' => $request->state,
        ];

        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->username = $request->username;
        $user->address = $data;
        $user->email = $request->email;
        $user->save();



        $notify[] = ['success', 'Successfully Updated Profile'];

        return back()->withNotify($notify);
    }


    public function changePassword()
    {
        $pageTitle = 'Change Password';
        return view($this->template . 'user.auth.changepassword', compact('pageTitle'));
    }


    public function updatePassword(Request $request)
    {

        $request->validate([
            'oldpassword' => 'required|min:6',
            'password' => 'min:6|confirmed',

        ]);

        $user = User::find(Auth::id());

        if (!Hash::check($request->oldpassword, $user->password)) {
            return redirect()->back()->with('error', 'Old password do not match');
        } else {
            $user->password = bcrypt($request->password);

            $user->save();

            return redirect()->back()->with('success', 'Password Updated');
        }
    }


    public function transaction()
    {
        $pageTitle = "Transactions";

        $transactions = Transaction::where('user_id', auth()->id())->latest()->with('user')->paginate();

        return view($this->template . 'user.transaction', compact('pageTitle', 'transactions'));
    }

    public function withdraw()
    {
        $pageTitle = 'Withdraw Money';

        $withdraws = WithdrawGateway::where('status', 1)->latest()->get();

        return view($this->template . 'user.withdraw.index', compact('pageTitle', 'withdraws'));
    }

    public function withdrawCompleted(Request $request)
    {



        $general = GeneralSetting::first();

        $withdraw = Withdraw::where('user_id', auth()->id())->whereDate('created_at', now())->count();

        if ($general->withdraw_limit <= $withdraw) {
            return back()->with('error', 'Per day withdrawal limit exceed');
        }



        $request->validate([
            'method' => 'required|integer',
            'amount' => 'required|numeric',
            'final_amo' => 'required|numeric',
            'email' => 'required'
        ]);


        $payment = Payment::where('user_id', auth()->id())->where('payment_status', 1)->count();

        if ($payment <= 0) {
            $notify[] = ['error', 'You have to invest on a plan to withdraw'];

            return back()->withNotify($notify);
        }




        $withdraw = WithdrawGateway::findOrFail($request->method);

        if (auth()->user()->balance < $request->final_amo) {
            $notify[] = ['error', 'Insuficient Balance'];

            return back()->withNotify($notify);
        }

        if ($request->final_amo < $withdraw->min_amount || $request->final_amo > $withdraw->max_amount) {
            $notify[] = ['error', 'Please follow the withdraw limits'];

            return back()->withNotify($notify);
        }

        if ($withdraw->charge_type == 'percent') {

            $total = $request->amount + ($withdraw->charge * $request->amount) / 100;
        } else {
            $total = $request->amount + $withdraw->charge;
        }

        if ($total != $request->final_amo) {
            $notify[] = ['error', 'Invalid Amount'];

            return back()->withNotify($notify);
        }



        auth()->user()->balance = auth()->user()->balance - $total;
        auth()->user()->save();


        $data = [
            'email' => $request->email,
            'account_information' => Purifier::clean($request->account_information),
            'note' => Purifier::clean($request->note)
        ];


        $mailData = Withdraw::create([
            'user_id' => auth()->id(),
            'withdraw_method_id' => $request->method,
            'transaction_id' => strtoupper(Random::generate(15)),
            'user_withdraw_prof' => $data,
            'withdraw_charge' => $withdraw->charge,
            'withdraw_amount' => $request->amount,
            'status' => 0
        ]);

        $admin = Admin::first();

        $notify[] = ['success', 'Withdraw Successfully done'];

        return back()->withNotify($notify);
    }

    public function withdrawFetch(Request $request)
    {
        $withdraw = WithdrawGateway::findOrFail($request->id);

        return $withdraw;
    }

    public function allWithdraw(Request $request)
    {
        $pageTitle = 'All withdraw';

        $withdrawlogs = Withdraw::when($request->trx, function ($item) use ($request) {
            $item->where('transaction_id', $request->trx);
        })->when($request->date, function ($item) use ($request) {
            $item->whereDate('created_at', $request->date);
        })->where('user_id', auth()->id())->latest()->with('withdrawMethod')->paginate(10);

        return view($this->template . 'user.withdraw.withdraw_log', compact('pageTitle', 'withdrawlogs'));
    }

    public function pendingWithdraw()
    {
        $pageTitle = 'Pending withdraw';

        $withdrawlogs = Withdraw::where('user_id', auth()->id())->where('status', 0)->latest()->with('withdrawMethod')->paginate(10);

        return view($this->template . 'user.withdraw.withdraw_log', compact('pageTitle', 'withdrawlogs'));
    }

    public function completeWithdraw()
    {
        $pageTitle = 'Complete withdraw';

        $withdrawlogs = Withdraw::where('user_id', auth()->id())->where('status', 1)->latest()->with('withdrawMethod')->paginate(10);

        return view($this->template . 'user.withdraw.withdraw_log', compact('pageTitle', 'withdrawlogs'));
    }

    public function team()
    {
        // total users
        $LvlOneUsers = Db::table('users')
            ->select('id')
            ->where('reffered_by', Auth::id())
            ->where('status', 1)
            ->pluck('id')
            ->toArray();

        $LvlTwoUsers = DB::table('users')
            ->select('id')
            ->whereIn('reffered_by', $LvlOneUsers)
            ->where('status', 1)
            ->pluck('id')
            ->toArray();

        $LvlThreeUsers = DB::table('users')
            ->select('id')
            ->whereIn('reffered_by', $LvlTwoUsers)
            ->where('status', 1)
            ->pluck('id')
            ->toArray();
        // total users

        // sum deposit
        $SumLvlOneDepositAmnt = DB::table('deposits')
            ->selectRaw('SUM(amount) AS total_amount')
            ->whereIn('user_id', $LvlOneUsers)
            ->where('payment_status', 1)
            ->first();

        $SumLvlTwoDepositAmnt = DB::table('deposits')
            ->selectRaw('SUM(amount) AS total_amount')
            ->whereIn('user_id', $LvlTwoUsers)
            ->where('payment_status', 1)
            ->first();

        $SumLvlThreeDepositAmnt = DB::table('deposits')
            ->selectRaw('SUM(amount) AS total_amount')
            ->whereIn('user_id', $LvlThreeUsers)
            ->where('payment_status', 1)
            ->first();
        // sum deposit

        // sum commission
        $SumLvlOneComAmnt = DB::table('reffered_commissions')
            ->selectRaw('SUM(amount) AS total_com')
            ->whereIn('reffered_to', $LvlOneUsers)
            ->first();

        $SumLvlTwoComAmnt = DB::table('reffered_commissions')
            ->selectRaw('SUM(amount) AS total_com')
            ->whereIn('reffered_to', $LvlTwoUsers)
            ->first();

        $SumLvlThreeComAmnt = DB::table('reffered_commissions')
            ->selectRaw('SUM(amount) AS total_com')
            ->whereIn('reffered_to', $LvlThreeUsers)
            ->first();
        // sum commission

        // total
        $TotalTeamDeposit = $SumLvlOneDepositAmnt->total_amount + $SumLvlTwoDepositAmnt->total_amount + $SumLvlThreeDepositAmnt->total_amount;
        $TotalTeamMembers = count($LvlOneUsers) + count($LvlTwoUsers) + count($LvlThreeUsers);
        $totalTeamCom = $SumLvlOneComAmnt->total_com + $SumLvlTwoComAmnt->total_com + $SumLvlThreeComAmnt->total_com;
        // total

        // total Today Commission
        $levelOneTodayComAmnt = DB::table('reffered_commissions')
            ->selectRaw('SUM(amount) AS total_com')
            ->whereIn('reffered_to', $LvlOneUsers)
            ->whereDate('created_at', Carbon::today())
            ->first();

        $levelTwoTodayComAmnt = DB::table('reffered_commissions')
            ->selectRaw('SUM(amount) AS total_com')
            ->whereIn('reffered_to', $LvlTwoUsers)
            ->whereDate('created_at', Carbon::today())
            ->first();

        $levelThreeTodayComAmnt = DB::table('reffered_commissions')
            ->selectRaw('SUM(amount) AS total_com')
            ->whereIn('reffered_to', $LvlThreeUsers)
            ->whereDate('created_at', Carbon::today())
            ->first();
        $totalTodayCommission = $levelOneTodayComAmnt->total_com ?? 0 + $levelTwoTodayComAmnt->total_com ?? 0 + $levelThreeTodayComAmnt->total_com ?? 0;
        // totalToday Commission

        // total this month comm
        $levelOnemonthComAmnt = DB::table('reffered_commissions')
            ->selectRaw('SUM(amount) AS total_com')
            ->whereIn('reffered_to', $LvlOneUsers)
            ->whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->first();

        $levelTwomonthComAmnt = DB::table('reffered_commissions')
            ->selectRaw('SUM(amount) AS total_com')
            ->whereIn('reffered_to', $LvlTwoUsers)
            ->whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->first();

        $levelThreemonthComAmnt = DB::table('reffered_commissions')
            ->selectRaw('SUM(amount) AS total_com')
            ->whereIn('reffered_to', $LvlThreeUsers)
            ->whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->first();

        $totalmonthCommission = $levelOnemonthComAmnt->total_com ?? 0 + $levelTwomonthComAmnt->total_com ?? 0 + $levelThreemonthComAmnt->total_com ?? 0;
        // total this month comm

        // Total Today's Deposit
        $todayLevelOneDeposit = DB::table('deposits')
            ->selectRaw('SUM(amount) AS total_amount')
            ->whereIn('user_id', $LvlOneUsers)
            ->whereDate('created_at', Carbon::today())
            ->where('payment_status', 1)
            ->first()->total_amount ?? 0;

        $todayLevelTwoDeposit = DB::table('deposits')
            ->selectRaw('SUM(amount) AS total_amount')
            ->whereIn('user_id', $LvlTwoUsers)
            ->whereDate('created_at', Carbon::today())
            ->where('payment_status', 1)
            ->first()->total_amount ?? 0;

        $todayLevelThreeDeposit = DB::table('deposits')
            ->selectRaw('SUM(amount) AS total_amount')
            ->whereIn('user_id', $LvlThreeUsers)
            ->whereDate('created_at', Carbon::today())
            ->where('payment_status', 1)
            ->first()->total_amount ?? 0;

        $totalTodayDeposit = $todayLevelOneDeposit + $todayLevelTwoDeposit + $todayLevelThreeDeposit;
        // Total Today's Deposit

        // Total this month Deposit
        $thisMonthLevelOneDeposit = DB::table('deposits')
            ->selectRaw('SUM(amount) AS total_amount')
            ->whereIn('user_id', $LvlOneUsers)
            ->whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->where('payment_status', 1)
            ->first()->total_amount ?? 0;

        $thisMonthLevelTwoDeposit = DB::table('deposits')
            ->selectRaw('SUM(amount) AS total_amount')
            ->whereIn('user_id', $LvlTwoUsers)
            ->whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->where('payment_status', 1)
            ->first()->total_amount ?? 0;

        $thisMonthLevelThreeDeposit = DB::table('deposits')
            ->selectRaw('SUM(amount) AS total_amount')
            ->whereIn('user_id', $LvlThreeUsers)
            ->whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->where('payment_status', 1)
            ->first()->total_amount ?? 0;

        $totalThisMonthDeposit = $thisMonthLevelOneDeposit
            + $thisMonthLevelTwoDeposit
            + $thisMonthLevelThreeDeposit;
        // Total this month Deposit

        // Today User
        $currentDate = Carbon::now();
        $todayLvlOneCount = Db::table('users')
            ->where('reffered_by', Auth::id())
            ->where('status', 1)
            ->whereDate('created_at', $currentDate)
            ->count();

        $todayLvlTwoCount = DB::table('users')
            ->whereIn('reffered_by', $LvlOneUsers)
            ->where('status', 1)
            ->whereDate('created_at', $currentDate)
            ->count();

        $todayLvlThreeCount = DB::table('users')
            ->whereIn('reffered_by', $LvlTwoUsers)
            ->where('status', 1)
            ->whereDate('created_at', $currentDate)
            ->count();

        $totalTodayUsers = $todayLvlOneCount + $todayLvlTwoCount + $todayLvlThreeCount;
        // Today User

        // This month User
        $thisMonthLvlOneCount = Db::table('users')
            ->where('reffered_by', Auth::id())
            ->where('status', 1)
            ->whereYear('created_at', $currentDate->year)
            ->whereMonth('created_at', $currentDate->month)
            ->count();

        $thisMonthLvlTwoCount = DB::table('users')
            ->whereIn('reffered_by', $LvlOneUsers)
            ->where('status', 1)
            ->whereYear('created_at', $currentDate->year)
            ->whereMonth('created_at', $currentDate->month)
            ->count();

        $thisMonthLvlThreeCount = DB::table('users')
            ->whereIn('reffered_by', $LvlTwoUsers)
            ->where('status', 1)
            ->whereYear('created_at', $currentDate->year)
            ->whereMonth('created_at', $currentDate->month)
            ->count();

        $totalThisMonthUsers = $thisMonthLvlOneCount + $thisMonthLvlTwoCount + $thisMonthLvlThreeCount;
        // This month User

        // perfomane chart work
        $pageTitle = 'My Team';
        return view($this->template . 'user.team', compact(
            'pageTitle',
            'LvlOneUsers',
            'SumLvlOneDepositAmnt',
            'LvlTwoUsers',
            'SumLvlTwoDepositAmnt',
            'LvlThreeUsers',
            'SumLvlThreeDepositAmnt',
            'SumLvlOneComAmnt',
            'SumLvlTwoComAmnt',
            'SumLvlThreeComAmnt',
            'TotalTeamDeposit',
            'TotalTeamMembers',
            'totalTeamCom',
            'levelOneTodayComAmnt',
            'levelTwoTodayComAmnt',
            'levelThreeTodayComAmnt',
            'totalTodayDeposit',
            'totalThisMonthDeposit',
            'totalTodayUsers',
            'totalThisMonthUsers',
            'totalTodayCommission',
            'totalmonthCommission'
        ));
    }

    public function commision(Request $request)
    {

        $pageTitle = 'Complete withdraw';

        $commison = RefferedCommission::when($request->date, function ($item) use ($request) {
            $item->whereDate('created_at', $request->date);
        })->where('reffered_by', Auth::id())->latest()->paginate(10, ['*'], 'commison');

        return view($this->template . 'user.commision_log', compact('pageTitle', 'commison'));
    }
    public function returnInterest()
    {
        $general = GeneralSetting::first();
        $invests = Payment::with('plan', 'user')->where('payment_status', 1)->latest()->get();

        foreach ($invests as $invest) {

            //check_user
            $user = $invest->user;

            if ($invest->next_payment_date) {
                //check current time == paymentdate
                if ($user) {

                    if (now()->greaterThanOrEqualTo($invest->next_payment_date)) {
                        //find interest rate

                        $interestRate = $invest->plan->return_interest;
                        $returnAmount = 0;

                        if ($invest->plan->interest_status == 'percentage') {
                            $returnAmount = ($invest->amount * $interestRate) / 100;
                        }
                        if ($invest->plan->interest_status == 'fixed') {
                            $returnAmount = $invest->plan->return_interest;
                        }

                        $user->balance += $returnAmount;
                        $updatePaymentDate = $invest->next_payment_date->addHour($invest->plan->time->time);
                        $interestAmount = $returnAmount;

                        if ($user->reffered_by != 0) {
                            $checkuplainerlvl1 = (int) DB::table('users')
                                ->where('id', auth()->id())
                                ->where('status', 1) // Add this line
                                ->value('reffered_by');

                            $checkuplainerlvl2 = (int) DB::table('users')
                                ->where('id', $checkuplainerlvl1)
                                ->where('status', 1) // Add this line
                                ->value('reffered_by');

                            $checkuplainerlvl3 = (int) DB::table('users')
                                ->where('id', $checkuplainerlvl2)
                                ->where('status', 1) // Add this line
                                ->value('reffered_by');

                            $checkuplainerlvl4 = (int) DB::table('users')
                                ->where('id', $checkuplainerlvl3)
                                ->where('status', 1) // Add this line
                                ->value('reffered_by');

                            $checkuplainerlvl5 = (int) DB::table('users')
                                ->where('id', $checkuplainerlvl4)
                                ->where('status', 1) // Add this line
                                ->value('reffered_by');

                            if ($checkuplainerlvl1 != 0 && $general->ic_lvl_one != 0) {
                                $general_percentage = $general->ic_lvl_one;
                                $PercentAmount = $interestAmount * ($general_percentage / 100);
                                $chkuser = User::find($checkuplainerlvl1);
                                $chkuser->balance += $PercentAmount;
                                $chkuser->save();
                                Transaction::create([
                                    'trx' => strtoupper(Str::random(16)),
                                    'gateway_id' => 0,
                                    'amount' =>  $PercentAmount,
                                    'currency' => @$general->site_currency,
                                    'charge' => 0,
                                    'details' => 'Refferal Invest Commission',
                                    'type' => '+',
                                    'gateway_transaction' => '',
                                    'payment_status' => 1,
                                    'user_id' => $chkuser->id,
                                ]);
                            }
                            if ($checkuplainerlvl2 != 0 && $general->ic_lvl_two != 0) {
                                $general_percentage = $general->ic_lvl_two;
                                $PercentAmount = $interestAmount * ($general_percentage / 100);
                                $chkuser = User::find($checkuplainerlvl2);
                                $chkuser->balance += $PercentAmount;
                                $chkuser->save();
                                Transaction::create([
                                    'trx' => strtoupper(Str::random(16)),
                                    'gateway_id' => 0,
                                    'amount' =>  $PercentAmount,
                                    'currency' => @$general->site_currency,
                                    'charge' => 0,
                                    'details' => 'Refferal Invest Commission',
                                    'type' => '+',
                                    'gateway_transaction' => '',
                                    'payment_status' => 1,
                                    'user_id' => $chkuser->id,
                                ]);
                            }
                            if ($checkuplainerlvl3 != 0 && $general->ic_lvl_three != 0) {
                                $general_percentage = $general->ic_lvl_three;
                                $PercentAmount = $interestAmount * ($general_percentage / 100);
                                $chkuser = User::find($checkuplainerlvl3);
                                $chkuser->balance += $PercentAmount;
                                $chkuser->save();
                                Transaction::create([
                                    'trx' => strtoupper(Str::random(16)),
                                    'gateway_id' => 0,
                                    'amount' =>  $PercentAmount,
                                    'currency' => @$general->site_currency,
                                    'charge' => 0,
                                    'details' => 'Refferal Invest Commission',
                                    'type' => '+',
                                    'gateway_transaction' => '',
                                    'payment_status' => 1,
                                    'user_id' => $chkuser->id,
                                ]);
                            }
                            if ($checkuplainerlvl4 != 0 && $general->ic_lvl_four != 0) {
                                $general_percentage = $general->ic_lvl_four;
                                $PercentAmount = $interestAmount * ($general_percentage / 100);
                                $chkuser = User::find($checkuplainerlvl4);
                                $chkuser->balance += $PercentAmount;
                                $chkuser->save();
                                Transaction::create([
                                    'trx' => strtoupper(Str::random(16)),
                                    'gateway_id' => 0,
                                    'amount' =>  $PercentAmount,
                                    'currency' => @$general->site_currency,
                                    'charge' => 0,
                                    'details' => 'Refferal Invest Commission',
                                    'type' => '+',
                                    'gateway_transaction' => '',
                                    'payment_status' => 1,
                                    'user_id' => $chkuser->id,
                                ]);
                            }
                            if ($checkuplainerlvl5 != 0 && $general->ic_lvl_five != 0) {
                                $general_percentage = $general->ic_lvl_five;
                                $PercentAmount = $interestAmount * ($general_percentage / 100);
                                $chkuser = User::find($checkuplainerlvl5);
                                $chkuser->balance += $PercentAmount;
                                $chkuser->save();
                                Transaction::create([
                                    'trx' => strtoupper(Str::random(16)),
                                    'gateway_id' => 0,
                                    'amount' =>  $PercentAmount,
                                    'currency' => @$general->site_currency,
                                    'charge' => 0,
                                    'details' => 'Refferal Invest Commission',
                                    'type' => '+',
                                    'gateway_transaction' => '',
                                    'payment_status' => 1,
                                    'user_id' => $chkuser->id,
                                ]);
                            }
                        }

                        //paymentupdate on next date
                        $updatePayment = Payment::where('plan_id', $invest->plan_id)->where('next_payment_date', $invest->next_payment_date)->first();

                        $count = Payment::where('plan_id', $invest->plan_id)->where('next_payment_date', $invest->next_payment_date)->sum('pay_count');

                        if ($invest->plan->return_for == 1) {

                            if ($count < $invest->plan->how_many_time) {
                                $updatePayment->next_payment_date = $updatePaymentDate;
                                $updatePayment->interest_amount += $interestAmount;
                                $updatePayment->pay_count += 1;

                                UserInterest::create([
                                    'user_id' => $user->id,
                                    'payment_id' => $invest->id,
                                    'interest_amount' => $interestAmount,
                                    'purpouse' => 'Invest Return Commission'
                                ]);

                                sendMail('RETURN_INTEREST', [
                                    'plan' => $invest->plan->plan_name,
                                    'amount' => $returnAmount,
                                    'currency' => @$general->site_currency
                                ], $invest->user);

                                $updatePayment->save();
                                $user->save();

                                refferMoney($user->id, $user->refferedBy, 'interest', $returnAmount, $invest->plan->id);

                                if ($updatePayment->pay_count == $invest->plan->how_many_time) {
                                    $updatePayment->next_payment_date = null;
                                    $updatePayment->save();
                                }

                                if ($invest->plan->capital_back == 1) {
                                    if ($updatePayment->pay_count == $invest->plan->how_many_time) {
                                        $user->balance = $user->balance +  $invest->amount;
                                        $updatePayment->next_payment_date = null;
                                        $updatePayment->pay_count = null;
                                        $updatePayment->save();
                                        $user->save();

                                        Transaction::create([
                                            'trx' => strtoupper(Str::random(16)),
                                            'gateway_id' => 0,
                                            'amount' => $invest->amount,
                                            'currency' => @$general->site_currency,
                                            'details' => 'Capital Back For Plan ' . $invest->plan->plan_name,
                                            'charge' => 0,
                                            'type' => '+',
                                            'gateway_transaction' => '',
                                            'user_id' => $user->id,
                                            'payment_status' => 1
                                        ]);

                                        refferMoney($user->id, $user->refferedBy, 'interest', $returnAmount, $invest->plan->id);
                                    }
                                }
                            }
                        } else {

                            $updatePayment->next_payment_date = $updatePaymentDate;
                            $updatePayment->interest_amount += $interestAmount;
                            $updatePayment->pay_count += 1;

                            UserInterest::create([
                                'user_id' => $user->id,
                                'payment_id' => $invest->id,
                                'interest_amount' => $interestAmount,
                                'purpouse' => 'Invest Return Commission'
                            ]);

                            sendMail('RETURN_INTEREST', [
                                'plan' => $invest->plan->plan_name,
                                'amount' => $returnAmount,
                                'currency' => @$general->site_currency
                            ], $invest->user);

                            $updatePayment->save();
                            $user->save();
                            refferMoney($user->id, $user->refferedBy, 'interest', $returnAmount, $invest->plan->id);
                        }
                    }
                }
            }
        }
    }

    public function pendingInvest()
    {
        $data['payments'] = Payment::where('user_id', Auth::id())->where('payment_status', 2)->latest()->get();
        $data['pageTitle'] = 'Pending Invest';

        return view($this->template . 'user.pending_invest')->with($data);
    }

    public function allInvest()
    {
        $data['payments'] = Payment::where('user_id', Auth::id())->where('payment_status', '!=', 0)->latest()->get();
        $data['pageTitle'] = 'All Invest';

        return view($this->template . 'user.pending_invest')->with($data);
    }

    public function MyReward(){
        $transactions = Transaction::where('user_id', auth()->id())->where('details', 'Level One 1 lack Achieve Reward')->latest()->paginate();;
        return view($this->template . 'user.my_reward',compact('transactions'));
    }
    public function interestLog(Request $request)
    {

        $data['interestLogs'] = UserInterest::when($request->date, function ($item) use ($request) {
            $item->whereDate('created_at', $request->date);
        })->with('payment')->where('user_id', Auth::id())->latest()->paginate(10);


        $data['pageTitle'] = 'Return interest Log';

        return view($this->template . 'user.interest_log')->with($data);
    }


    public function transfer()
    {
        $pageTitle = 'Transfer Money';

        return view($this->template . 'user.transfer_money', compact('pageTitle'));
    }

    public function transferMoney(Request $request)
    {
        $general = GeneralSetting::first();

        $request->validate([
            'email' => 'required|email',
            'amount' => 'required|numeric|gt:0'
        ]);


        $range = range($general->min_amount, $general->max_amount);

        if (!in_array($request->amount, $range)) {
            $notify[] = ['error', 'Please follow transfer Limit'];

            return back()->withNotify($notify);
        }



        $transferCount = Transaction::where('user_id', auth()->id())->where('type', 'send')->whereDate('created_at', now())->count();


        if ($transferCount >= $general->trans_limit) {
            $notify[] = ['error', 'Transfer Limit exceeded for today'];

            return back()->withNotify($notify);
        }





        $payment = Payment::where('user_id', auth()->id())->where('payment_status', 1)->count();

        if ($payment <= 0) {
            $notify[] = ['error', 'You have to invest on a plan to use Signup Balance'];

            return back()->withNotify($notify);
        }



        $receiver = User::where('email', $request->email)->first();

        if (auth()->user()->email == $request->email) {
            $notify[] = ['error', 'You can not send money to your account'];

            return back()->withNotify($notify);
        }

        if (!$receiver) {
            $notify[] = ['error', 'No User Found With this email'];

            return back()->withNotify($notify);
        }


        $commison = $general->trans_type === 'percent' ? ($request->amount * $general->trans_charge) / 100 :  $general->trans_charge;

        $totalSendAmount = $commison + $request->amount;


        if (auth()->user()->balance < $totalSendAmount) {

            $notify[] = ['error', 'Insufficient Balance'];

            return back()->withNotify($notify);
        }




        $user = auth()->user();

        $user->balance = $user->balance - $totalSendAmount;

        $user->save();

        $general = GeneralSetting::first();

        $trx = strtoupper(Str::random());


        MoneyTransfer::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $receiver->id,
            'transaction_id' => $trx,
            'details' => 'Money Transfer',
            'amount' => $request->amount,
            'charge' => $commison
        ]);


        Transaction::create([
            'trx' => $trx,
            'gateway_id' => 0,
            'amount' => $request->amount,
            'currency' => @$general->site_currency,
            'details' => 'Send Money',
            'charge' => $commison,
            'type' => 'send',
            'gateway_transaction' => $trx,
            'user_id' => auth()->id(),
            'payment_status' => 1
        ]);




        $receiver->balance = $receiver->balance + $request->amount;

        $receiver->save();

        $trx = strtoupper(Str::random());

        Transaction::create([
            'trx' => $trx,
            'gateway_id' => 0,
            'amount' => $request->amount,
            'currency' => @$general->site_currency,
            'details' => 'Receive Money',
            'charge' => 0,
            'type' => 'receive',
            'gateway_transaction' => $trx,
            'user_id' => $receiver->id,
            'payment_status' => 1
        ]);



        $notify[] = ['success', 'Successfully Send Money'];

        return back()->withNotify($notify);
    }

    public function transactionLog(Request $request)
    {
        $pageTitle = 'Transaction Log';

        $transactions = Transaction::when($request->trx, function ($item) use ($request) {
            $item->where('trx', $request->trx);
        })->when($request->date, function ($item) use ($request) {
            $item->whereDate('created_at', $request->date);
        })->where('user_id', auth()->id())->where('payment_status', 1)->latest()->paginate();


        return view($this->template . 'user.transaction', compact('pageTitle', 'transactions'));
    }


    public function kyc()
    {
        if (auth()->user()->kyc == 1) {
            return redirect()->route('user.dashboard')->with('error', 'You already verify KYC');
        }
        $pageTitle = 'Kyc Verification';
        return view($this->template . 'user.kyc', compact('pageTitle'));
    }


    public function kycUpdate(Request $request)
    {
        $general = GeneralSetting::first();

        $user = auth()->user();

        if ($user->kyc == 2) {
            return redirect()->back()->with('error', 'You have already submitted KYC form');
        }


        $validation = [];
        if ($general->kyc != null) {
            foreach ($general->kyc as $params) {
                if ($params['type'] == 'text' || $params['type'] == 'textarea') {

                    $key = strtolower(str_replace(' ', '_', $params['field_name']));

                    $validationRules = $params['validation'] == 'required' ? 'required' : 'sometimes';

                    $validation[$key] = $validationRules;
                } else {

                    $key = strtolower(str_replace(' ', '_', $params['field_name']));

                    $validationRules = ($params['validation'] == 'required' ? 'required' : 'sometimes') . "|image|mimes:jpg,png,jpeg|max:2048";

                    $validation[$key] = $validationRules;
                }
            }
        }

        $data = $request->validate($validation);

        foreach ($data as $key => $upload) {

            if ($request->hasFile($key)) {

                $filename = uploadImage($upload, filePath('user'));

                $data[$key] = ['file' => $filename, 'type' => 'file'];
            }
        }




        $user->kyc_infos = $data;

        $user->kyc = 2;

        $user->save();

        return back()->with('success', 'Successfully send Kyc Information to Admin');
    }

    public function checkLevel()
    {
        $general = GeneralSetting::first();

        $payments = Payment::where('payment_status', 1)->groupBy('user_id')->selectRaw('SUM(amount) as amount, user_id')->get();


        foreach ($payments as $pay) {


            $ranking = Ranking::where('minimum_invest', '<=', $pay->amount)
                ->where('maximum_invest', '>=', $pay->amount)->where('status', 1)->first();




            if ($ranking) {


                $user = $pay->user;

                $hasRanking = $user->badges()->where('ranking_id', $ranking->id)->first();


                if (!$hasRanking) {

                    DB::table('user_rankings')->where('user_id', $user->id)->update(['is_current' => 0]);

                    UserRanking::create([
                        'user_id' => $pay->user_id,
                        'ranking_id' => $ranking->id
                    ]);

                    $user->balance = $user->balance + $ranking->bonus;

                    $user->save();

                    if ($ranking->bonus > 0) {
                        $trx = strtoupper(Str::random());
                        Transaction::create([
                            'trx' => $trx,
                            'gateway_id' => 0,
                            'amount' => $ranking->bonus,
                            'currency' => $general->site_currency,
                            'details' => 'Badge Unlock Bonus',
                            'charge' => 0,
                            'type' => '+',
                            'gateway_transaction' => '',
                            'user_id' => $pay->user_id,
                            'payment_status' => 1,
                        ]);
                    }
                }
            }
        }
    }


    public function planRemove(Request $request, $id)
    {
        $user = User::find($id);


        $payment = Payment::where('user_id', $user->id)->where('plan_id', $request->plan)->first();


        $user->balance = $user->balance + $payment->amount;

        $user->save();


        $payment->delete();

        return back()->with('success', 'Successfully Unsubscribe from plan');
    }
}
