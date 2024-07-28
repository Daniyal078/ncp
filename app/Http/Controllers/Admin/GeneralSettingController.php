<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use Artisan;
use Illuminate\Validation\Rule;

class GeneralSettingController extends Controller
{
    public function index()
    {
        $data['pageTitle'] = 'General Setting';
        $data['navGeneralSettingsActiveClass'] = 'active';
        $data['subNavGeneralSettingsActiveClass'] = 'active';
        $data['general'] = GeneralSetting::first();
        $data['timezone'] = json_decode(file_get_contents(resource_path('views/backend/setting/timezone.json')));

        return view('backend.setting.general_setting')->with($data);
    }
    public function setDepCom()
    {
        $data['pageTitle'] = 'General Setting';
        $data['navGeneralSettingsActiveClass'] = 'active';
        $data['subNavGeneralSettingsActiveClass'] = 'active';
        $data['general'] = GeneralSetting::first();
        $data['timezone'] = json_decode(file_get_contents(resource_path('views/backend/setting/timezone.json')));

        return view('backend.setting.dep_commision')->with($data);
    }

    public function generalSettingUpdate(Request $request)
    {


        $general = GeneralSetting::first();

        $request->validate([
            'sitename' => 'required',
            'signup_bonus' => 'gte:0',

            'trans_type' => 'required|in:fixed,percent',
            'trans_limit' => 'required|numeric',
            'trans_charge' => 'required|numeric',
            'min_amount' => 'required|numeric',
            'max_amount' => 'required|numeric',

            'withdraw_limit' => 'integer',
            'site_currency' => 'required|max:10',
            'logo' => [Rule::requiredIf(function () use ($general) {
                return $general == null;
            }), 'image', 'mimes:jpg,png,jpeg'],
            'icon' => [Rule::requiredIf(function () use ($general) {
                return $general == null;
            }), 'image', 'mimes:jpg,png,jpeg'],
            'login_image' => [Rule::requiredIf(function () use ($general) {
                return $general == null;
            }), 'image', 'mimes:jpg,png,jpeg'],
            'whitelogo' => [Rule::requiredIf(function () use ($general) {
                return $general == null;
            }), 'image', 'mimes:jpg,png,jpeg'],
        ]);

        if ($request->has('logo')) {

            $logo = 'logo' . '.' . $request->logo->getClientOriginalExtension();

            $request->logo->move(filePath('logo'), $logo);
        }

        if ($request->has('whitelogo')) {

            $whitelogo = 'whitelogo' . '.' . $request->whitelogo->getClientOriginalExtension();

            $request->whitelogo->move(filePath('logo'), $whitelogo);
        }

        if ($request->has('icon')) {

            $icon = 'icon' . '.' . $request->icon->getClientOriginalExtension();

            $request->icon->move(filePath('icon'), $icon);
        }
        if ($request->has('login_image')) {

            $login_image = 'login_image' . '.' . $request->login_image->getClientOriginalExtension();

            $request->login_image->move(filePath('login'), $login_image);
        }

        if ($request->has('frontend_login_image')) {

            $frontend_login_image = 'frontend_login_image' . '.' . $request->frontend_login_image->getClientOriginalExtension();

            $request->frontend_login_image->move(filePath('frontendlogin'), $frontend_login_image);
        }

        if ($request->has('breadcrumbs')) {

            $breadcrumbs = 'breadcrumbs' . '.' . $request->breadcrumbs->getClientOriginalExtension();

            $request->breadcrumbs->move(filePath('breadcrumbs'), $breadcrumbs);
        }

        if ($request->has('main')) {

            $main = 'main' . '.' . $request->main->getClientOriginalExtension();

            $request->main->move(filePath('main'), $main);
        }


        GeneralSetting::updateOrCreate([
            'id' => 1
        ], [
            'sitename' => $request->sitename,
            'signup_bonus' => $request->signup_bonus,
            'site_currency' => $request->site_currency,
            'user_reg' => $request->user_reg == 'on' ? 1 : 0,
            'is_email_verification_on' => $request->is_email_verification_on == 'on' ? 1 : 0,
            'is_sms_verification_on' => $request->is_sms_verification_on == 'on' ? 1 : 0,
            'logo' => isset($logo) ? ($logo ?? '') : GeneralSetting::first()->logo,
            'favicon' => isset($icon) ? ($icon ?? '') : GeneralSetting::first()->favicon,
            'login_image' => isset($login_image) ? ($login_image ?? '') : GeneralSetting::first()->login_image,
            'whitelogo' => isset($whitelogo) ? ($whitelogo ?? '') : GeneralSetting::first()->whitelogo,
            'primary_color' =>  $request->primary_color ?? '',
            'copyright' => $request->copyright,
            'map_link' => $request->map_link,
            'frontend_login_image' => isset($frontend_login_image) ? ($frontend_login_image ?? '') : GeneralSetting::first()->frontend_login_image,
            'breadcrumbs' => isset($breadcrumbs) ? ($breadcrumbs ?? '') : GeneralSetting::first()->breadcrumbs,
            'frontend_main_background_image' => isset($main) ? ($main ?? '') : GeneralSetting::first()->frontend_main_background_image,
            'withdraw_limit' => $request->withdraw_limit,

            'trans_type' => $request->trans_type,
            'trans_limit' => $request->trans_limit,
            'trans_charge' => $request->trans_charge,
            'min_amount' => $request->min_amount,
            'max_amount' => $request->max_amount,
            'is_vip_reward' => $request->vip_reward_status,

            'user_kyc' => $request->user_kyc == 'on' ? 1 : 0,

            'vip1_amount' => $request->vip1_anmt_limit,
            'vip2_amount' => $request->vip2_anmt_limit,
            'vip3_amount' => $request->vip3_anmt_limit,
            'vip4_amount' => $request->vip4_anmt_limit,
            'vip5_amount' => $request->vip5_anmt_limit,

            'vip1_reward_amount' => $request->vip1_rwd_limit,
            'vip2_reward_amount' => $request->vip2_rwd_limit,
            'vip3_reward_amount' => $request->vip3_rwd_limit,
            'vip4_reward_amount' => $request->vip4_rwd_limit,
            'vip5_reward_amount' => $request->vip5_rwd_limit,

            'dc_lvl_one' => $request->dc_lvl_one,
            'dc_lvl_two' => $request->dc_lvl_two,
            'dc_lvl_three' => $request->dc_lvl_three,
            'dc_lvl_four' => $request->dc_lvl_four,
            'dc_lvl_five' => $request->dc_lvl_five,


            'req_active_users_vip1' => $request->act_user_req_1,
            'req_active_users_vip2' => $request->act_user_req_2,
            'req_active_users_vip3' => $request->act_user_req_3,
            'req_active_users_vip4' => $request->act_user_req_4,
            'req_active_users_vip5' => $request->act_user_req_5,
            'whatsapp_number' => $request->whatsapp_number,
        ]);

        $this->setEnv([
            'NEXMO_KEY' => $request->sms_username,
            'NEXMO_SECRET' => $request->sms_password,
            'APP_TIMEZONE' => $request->timezone
        ]);


        $notify[] = ['success', 'General setting has been updated.'];
        return back()->withNotify($notify);
    }
    public function setDepComPost(Request $request)
    {


        $general = GeneralSetting::first();

        $request->validate([
            'dc_lvl_one' => 'required',
            'dc_lvl_two' => 'required',
            'dc_lvl_three' => 'required',
            'dc_lvl_four' => 'required',
            'dc_lvl_five' => 'required',

            'ic_lvl_one' => 'required',
            'ic_lvl_two' => 'required',
            'ic_lvl_three' => 'required',
            'ic_lvl_four' => 'required',
            'ic_lvl_five' => 'required'


        ]);

        GeneralSetting::updateOrCreate([
            'id' => 1
        ], [
            'dc_lvl_one' => $request->dc_lvl_one,
            'dc_lvl_two' => $request->dc_lvl_two,
            'dc_lvl_three' => $request->dc_lvl_three,
            'dc_lvl_four' => $request->dc_lvl_four,
            'dc_lvl_five' => $request->dc_lvl_five,

            'ic_lvl_one' => $request->ic_lvl_one,
            'ic_lvl_two' => $request->ic_lvl_two,
            'ic_lvl_three' => $request->ic_lvl_three,
            'ic_lvl_four' => $request->ic_lvl_four,
            'ic_lvl_five' => $request->ic_lvl_five,
        ]);



        $notify[] = ['success', 'Deposit Commisiion has been updated.'];
        return back()->withNotify($notify);
    }

    public function setEnv(array $values)
    {

        $envFile = app()->environmentFilePath();
        $str = file_get_contents($envFile);

        if (count($values) > 0) {
            foreach ($values as $envKey => $envValue) {

                $str .= "\n";
                $keyPosition = strpos($str, "{$envKey}=");
                $endOfLinePosition = strpos($str, "\n", $keyPosition);
                $oldLine = substr($str, $keyPosition, $endOfLinePosition - $keyPosition);

                if (!$keyPosition || !$endOfLinePosition || !$oldLine) {
                    $str .= "{$envKey}={$envValue}\n";
                } else {
                    $str = str_replace($oldLine, "{$envKey}={$envValue}", $str);
                }
            }
        }

        $str = substr($str, 0, -1);
        if (!file_put_contents($envFile, $str)) return false;
        return true;
    }

    public function preloader()
    {
        $data['pageTitle'] = 'Preloader Setting';
        $data['navGeneralSettingsActiveClass'] = 'active';
        $data['subNavPreloaderActiveClass'] = 'active';

        $data['general'] = GeneralSetting::first();

        return view('backend.setting.preloader')->with($data);
    }

    public function preloaderUpdate(Request $request)
    {
        $general = GeneralSetting::first();

        $request->validate([
            'preloader_status' => 'required',
        ]);


        $general->preloader_status = $request->preloader_status;

        $general->save();



        $notify[] = ['success', "Preloader Updated Successfully"];

        return redirect()->back()->withNotify($notify);
    }

    public function analytics()
    {
        $data['pageTitle'] = 'Google Analytics Setting';
        $data['navGeneralSettingsActiveClass'] = 'active';
        $data['subNavAnalyticsActiveClass'] = 'active';
        $data['general'] = GeneralSetting::first();

        return view('backend.setting.analytics')->with($data);
    }

    public function analyticsUpdate(Request $request)
    {
        $general = GeneralSetting::first();

        $data = $request->validate([
            'analytics_key' => 'required',
            'analytics_status' => 'required'
        ]);

        $general->update($data);


        $notify[] = ['success', "Analytics Updated Successfully"];

        return redirect()->back()->withNotify($notify);
    }

    public function cookieConsent()
    {
        $data['pageTitle'] = 'Cookie Consent';
        $data['navGeneralSettingsActiveClass'] = 'active';
        $data['subNavCookieActiveClass'] = 'active';
        $data['cookie'] = GeneralSetting::first();

        return view('backend.setting.cookie')->with($data);
    }

    public function cookieConsentUpdate(Request $request)
    {
        $data = $request->validate([
            'allow_modal' => 'required|integer',
            'button_text' => 'required|max:100',
            'cookie_text' => 'required'
        ]);

        GeneralSetting::updateOrCreate(['id' => 1], $data);

        $notify[] = ['success', "Cookie Consent Updated Successfully"];

        return redirect()->back()->withNotify($notify);
    }

    public function recaptcha()
    {
        $data['pageTitle'] = 'Google Recaptcha';
        $data['navGeneralSettingsActiveClass'] = 'active';
        $data['subNavRecaptchaActiveClass'] = 'active';

        $data['recaptcha'] = GeneralSetting::first();



        return view('backend.setting.recaptcha')->with($data);
    }

    public function recaptchaUpdate(Request $request)
    {
        $data = $request->validate([
            'allow_recaptcha' => 'required',
            'recaptcha_key' => 'required',
            'recaptcha_secret' => 'required'
        ]);

        GeneralSetting::updateOrCreate(['id' => 1], $data);

        $notify[] = ['success', "Recaptcha Updated Successfully"];

        return redirect()->back()->withNotify($notify);
    }

    public function liveChat()
    {
        $data['pageTitle'] = 'Twak To Live Chat Setting';
        $data['navGeneralSettingsActiveClass'] = 'active';
        $data['subNavLiveChatActiveClass'] = 'active';
        $data['twakto'] = GeneralSetting::first();

        return view('backend.setting.twakto')->with($data);
    }

    public function liveChatUpdate(Request $request)
    {
        $data = $request->validate([
            'twak_allow' => 'required',
            'twak_key' => 'required'
        ]);

        $twak = GeneralSetting::first();

        $twak->update($data);

        $notify[] = ['success', "Twak Updated Successfully"];

        return redirect()->back()->withNotify($notify);
    }

    public function seoManage()
    {
        $data['pageTitle'] = 'Manage SEO';
        $data['navGeneralSettingsActiveClass'] = 'active';
        $data['subNavSEOManagerActiveClass'] = 'active';
        $data['seo'] = GeneralSetting::first();

        return view('backend.setting.seo')->with($data);
    }

    public function seoManageUpdate(Request $request)
    {

        $general = GeneralSetting::first();

        $data = $request->validate([
            'seo_description' => 'required',
        ]);

        $general->update($data);

        $notify[] = ['success', "Seo Updated Successfully"];

        return redirect()->back()->withNotify($notify);
    }


    public function cacheClear()
    {

        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('optimize:clear');

        return back()->with('success', 'Caches cleared successfully!');
    }

    public function manageTheme()
    {
        $data['pageTitle'] = 'Manage Theme';
        return view('backend.setting.theme')->with($data);
    }

    public function themeUpdate($name)
    {
        $general = GeneralSetting::first();

        $general->theme = $name;

        $general->save();

        return redirect()->back()->with('success','Template Actived successfully');
    }
}
