@extends(template() . 'layout.master2')

@section('content2')
    <div class="container">
        <!-- Descriptive pricing  plans-->
        <h5 class="title">Descriptive Plans</h5>
        <div class="row">
            @forelse ($plans as $plan)
                @php
                    $plan_exist = App\Models\Payment::where('plan_id', $plan->id)
                        ->where('user_id', Auth::id())
                        ->where('next_payment_date', '!=', null)
                        ->where('payment_status', 1)
                        ->count();
                @endphp
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card mb-4 border-0 bg-theme">
                        <div class="card-body px-lg-4 px-xl-5 bg-none">
                            <div class="text-center mb-4">
                                <span class="tag bg-light-white text-white">Best</span>
                            </div>
                            <div class="row mb-4">
                                <div class="col-auto">
                                    {{-- <i class="avatar avatar-50 rounded-circle bg-light-white text-white h5 bi bi-building vm"></i> --}}
                                </div>
                                <div class="col">
                                    <h4 class="mb-1">{{ $plan->plan_name }}</h4>
                                    <p class="text-muted">Required Vip {{ $plan->vip_status }}</p>
                                </div>
                            </div>
                            <div class="row align-items-center mb-4">
                                <div class="col-auto">
                                    @if ($plan->amount_type == 0)
                                        <li>
                                            <span class="caption">{{ __('Minimum') }} </span>
                                            <span class="details">
                                                {{ number_format($plan->minimum_amount, 2) . ' ' . @$general->site_currency }}</span>
                                        </li>
                                        <li>
                                            <span class="caption">{{ __('Maximum') }} </span>
                                            <span class="details">
                                                {{ number_format($plan->maximum_amount, 2) . ' ' . @$general->site_currency }}</span>
                                        </li>
                                    @else
                                        <li>
                                            <span class="caption">{{ __('Amount') }} </span>
                                            <span class="details">
                                                {{ number_format($plan->amount, 2) . ' ' . @$general->site_currency }}</span>
                                        </li>
                                    @endif
                                    {{-- <h1 class="display-4"><span class="text-muted">$</span>150</h1> --}}
                                </div>
                            </div>
                            <h6>Basic includes:</h6>
                            <ul class="list-group list-group-flush bg-none no-border">
                                @if ($plan->return_for == 1)
                                    <li class="list-group-item text-white"><i class="bi bi-check-circle vm me-1"></i>
                                        {{ __('For') }} {{ $plan->how_many_time }} {{ __('Times') }}</li>
                                @else
                                    <li class="list-group-item text-white"><i class="bi bi-check-circle vm me-1"></i>
                                        {{ __('For Life time') }}</li>
                                @endif
                                <li class="list-group-item text-white"><i class="bi bi-check-circle vm me-1"></i>
                                    {{ __('EVERY') }} {{ $plan->time->name }}</li>
                                @if ($plan->capital_back == 1)
                                    <li class="list-group-item text-white"><i class="bi bi-check-circle vm me-1"></i>
                                        {{ __('Capital Back Yes') }}</li>
                                @else
                                    <li class="list-group-item text-white"><i class="bi bi-check-circle vm me-1"></i>
                                        {{ __('Capital Back No') }}</li>
                                @endif
                                <li class="list-group-item text-white"><i class="bi bi-check-circle vm me-1"></i>
                                    {{ __('ROI') }} {{ number_format($plan->return_interest, 2) }} @if ($plan->interest_status == 'percentage')
                                        {{ '%' }}
                                    @else
                                        {{ @$general->site_currency }}
                                    @endif
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer bg-none text-center border-0">
                            @if ($plan_exist >= $plan->invest_limit)
                                <a class="main-btn plan-btn btn btn-theme disabled" href="#">
                                    <span>{{ __('Max Limit exceeded') }}</span>
                                </a>
                            @else
                                {{-- <a class="main-btn plan-btn w-100"
                        href="{{ route('user.gateways', $plan->id) }}">
                        <span>{{ __('Invest Now') }}</span>
                    </a> --}}
                                @auth
                                    @if (number_format(auth()->user()->balance, 2) > 0)
                                        <button class="balance btn btn-theme" data-plan="{{ $plan }}"
                                            data-plan_percentage="{{ number_format($plan->return_interest, 2) }}"
                                            data-url=""><span>{{ __('Invest') }}</span></button>
                                    @else
                                        <button disabled
                                            class="balance btn btn-theme"><span>{{ __('Insufficient balance 😔') }}</span></button>
                                    @endauth
                                @endauth
                            @endif
                            {{-- <button class="btn btn-theme">Buy Now!</button> --}}
                    </div>
                </div>
            </div>
        @empty
        @endforelse
    </div>

</div>
@endsection

@push('script')
<div class="modal mt-5
                                                                                                                            fade
                                                                                                                            bg-transparent"
id="invest" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document" style="box-shadow: 6px 7px 13px 0px rgba(0,0,0,0.75)!important;">
        <form class="invest-form" style="width: 100%;" action="{{ route('user.investmentplan.submit') }}"
            method="post">
            @csrf
            <div class="modal-content p-3">
                <div class="d-flex align-items-baseline justify-content-between">
                    <p class="p-0 m-0">
                        Invest Now
                    </p>
                    <button type="button" class="close btn btn-danger mb-1" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="form-group mb-1">
                        <input type="number" placeholder="Enter the amount you want to invest:" name="amount"
                            class="form-control modal_amount">
                        <p class="modal-table-p text-danger modal-error-message"></p>
                        <input type="hidden" name="plan_id" class="form-control">
                        <input type="hidden" name="plan_percentage" class="form-control">
                        <input type="hidden" name="timestamp">
                        <input type="hidden" name="min_pay">
                        <input type="hidden" name="max_pay">
                        <input type="hidden" name="fix_amount">
                    </div>
                </div>
                <button class="btn btn-theme submit-payment w-auto"><span>{{ __('Invest Now') }}</span></button>
            </div>
        </form>
    </div>
</div>
<script>
    $(function() {
        'use strict'
        $('.balance').on('click', function() {
            const modal = $('#invest');
            modal.find('input[name=plan_id]').val($(this).data('plan').id);
            modal.find('input[name=plan_percentage]').val($(this).data('plan_percentage'));
            modal.find('input[name=min_pay]').val($(this).data('min_amount'));
            modal.find('input[name=max_pay]').val($(this).data('max_amount'));
            modal.find('input[name=fix_amount]').val($(this).data('fix_amount'));
            modal.modal('show')
        })
    })
</script>
<script>
    var invest_form = $('.invest-form')
    $('.modal_amount').keyup(function(e) {

        function parseValue(value) {
            return parseFloat(value.replace(/,/g, ''));
        }

        var currentValue = parseValue($(this).val());
        var minPay = parseValue(invest_form.find('input[name=min_pay]').val());
        var maxPay = parseValue(invest_form.find('input[name=max_pay]').val());
        var fixAmount = parseValue(invest_form.find('input[name=fix_amount]').val());
        var modalMessage = $('.modal-error-message');
    });
</script>
<script>
    var invest_form = $('.invest-form')
    $('.success-img-wrapper').hide()
    $('.payment-loading').hide()

    $('.submit-payment').click(function(e) {
        e.preventDefault();
        invest_form.submit()
    })
</script>
@endpush
