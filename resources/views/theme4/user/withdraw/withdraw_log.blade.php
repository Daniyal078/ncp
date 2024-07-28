@extends(template() . 'layout.master2')

@push('style')
    <style>
        .activebtn {
            background-color: #ffc451;
        }
    </style>
@endpush
    <style>
        .nk-content-fluid {
            padding: 80px 0 50px 0 !important;
            height: 100vh;
            overflow: auto;
        }

        #invoice-POS {
            box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5);
            padding: 2mm;
            margin: 0 auto;
            width: 100%;
            background: #000;
            border-radius: 10px;
        }

        #invoice-POS ::selection {
            background: #f31544;
            color: #fff;
        }

        #invoice-POS ::moz-selection {
            background: #f31544;
            color: #fff;
        }

        #invoice-POS h1 {
            font-size: 1.5em;
            color: #222;
        }

        #invoice-POS h2 {
            font-size: 0.9em;
        }

        #invoice-POS h3 {
            font-size: 1.2em;
            font-weight: 300;
            line-height: 2em;
        }

        #invoice-POS p {
            font-size: 0.7em;
            color: #ffffff;
            line-height: 1.2em;
        }

        #invoice-POS #top,
        #invoice-POS #mid,
        #invoice-POS #bot {
            /* Targets all id with 'col-' */
            border-bottom: 1px solid #eeeeee33;
        }

        #invoice-POS #top {
            padding-bottom: 10px;
        }

        #invoice-POS #mid {
            min-height: 80px;
        }

        #invoice-POS #bot {
            min-height: 50px;
        }

        #invoice-POS #top .logo {
            height: 60px;
            width: 60px;
            background: url(https://cdn.dribbble.com/userupload/10543014/file/original-4703d0ba72b72f87fa49a618a24a1f6d.gif) no-repeat;
            background-size: 100% 100%;
            border-radius: 50%;
        }

        #invoice-POS .clientlogo {
            float: left;
            height: 60px;
            width: 60px;
            background: url(http://michaeltruong.ca/images/client.jpg) no-repeat;
            background-size: 60px 60px;
            border-radius: 50px;
        }

        #invoice-POS .info {
            display: block;
            margin-left: 0;
        }

        #invoice-POS .title {
            float: right;
        }

        #invoice-POS .title p {
            text-align: right;
        }

        #invoice-POS table {
            width: 100%;
            border-collapse: collapse;
        }

        #invoice-POS .tabletitle {
            font-size: 0.5em;
            background: #eee;
        }

        #invoice-POS .service {
            border-bottom: 1px solid #aef32d54;
        }

        #invoice-POS .item {
            width: 24mm;
        }

        #invoice-POS .itemtext {
            font-size: 9px;
        }

        #invoice-POS #legalcopy {
            margin-top: 5mm;
        }

        td,
        th,
        .tableitem {
            padding: 10px 5px !important;
        }

        .loader7 {
            width: auto;
            height: 16px;
            border: 1px solid #a6ff0052;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
            background: #c8c8c800;
            margin: 0;
        }

        .loader7::after,
        .loader7::before {
            content: " ";
            position: absolute;
            height: 100%;
            left: 0;
            width: 10px;
            z-index: 1;
            background: linear-gradient(to right, rgba(170, 170, 170, 0) 0%, rgba(170, 170, 170, 0) 100%);
        }

        .loader7::after {
            left: auto;
            right: 0;
            background: linear-gradient(to right, rgba(170, 170, 170, 0) 0%, rgba(170, 170, 170, 0) 100%);
        }

        .loader7>span {
            content: " ";
            top: 0;
            z-index: 3;
            width: 100%;
            height: 100%;
            box-shadow: 0 0 1px #ffffff00 inset;
            position: absolute;
        }

        .loader7>span:before {
            content: " ";
            top: 0;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            background: transparent;
        }

        .greenlight {
            width: 120px;
            top: -50%;
            height: 250%;
            position: absolute;
            animation: greenglow 3s linear infinite;
            -webkit-animation: greenglow 3s linear infinite;
            z-index: 2;
            mask-image: radial-gradient(ellipse at center, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0) 70%, rgba(0, 0, 0, 0) 100%);
            background: rgba(0, 219, 49, 1);
        }

        @keyframes greenglow {
            from {
                left: -120px;
            }

            to {
                left: 100%;
            }
        }

        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        a {
            color: #06c;
            text-decoration: none;
        }

        a:hover {
            color: #39f;
            text-decoration: underline;
        }
        .heading{
            margin-top: 290px;
        }
        .top-btn{
            color:#15215a!important;
        }
    </style>

@section('content2')
    <div class="container">
                    <div class="components-preview px-2">
                            <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                                <h5 class="mb-sm-0 mb-2 heading">{{ __('Withdraw Log') }}</h5>
                                <form action="" method="get" class="d-inline-flex">
                                    <input type="text" name="trx" class="form-control form-control-sm me-2"
                                        placeholder="transaction id">
                                    <input type="date" class="form-control form-control-sm me-3"
                                        placeholder="Search User" name="date">
                                    <button type="submit" class="btn btn-theme btn-sm">{{ __('Search') }}</button>
                                </form>
                            </div>
                        </div>

                        <div class="tab-btn-group tab-btn-group w-100 text-end">
                            <a class="tab-btn m-3 fw-bold top-btn {{ Request::routeIs('user.withdraw.all') ? 'active' : '' }}"
                                href="{{ route('user.withdraw.all') }}">{{ __('All') }} <span
                                    class="d-sm-inline-block d-none">{{ __('Withdraw') }}</span></a>

                            <a class="tab-btn m-3 fw-bold mb-3 top-btn {{ Request::routeIs('user.withdraw.pending') ? 'active' : '' }}"
                                href="{{ route('user.withdraw.pending') }}">{{ __('Pending') }} <span
                                    class="d-sm-inline-block d-none">{{ __('Withdraw') }}</span></a>

                            <a class="tab-btn m-3 fw-bold mb-3 top-btn {{ Request::routeIs('user.withdraw.complete') ? 'active' : '' }}"
                                href="{{ route('user.withdraw.complete') }}">{{ __('Complete') }} <span
                                    class="d-sm-inline-block d-none">{{ __('Withdraw') }}</span></a>
                        </div>

                        <div class="nk-block nk-block-lg">
                            @forelse ($withdrawlogs as $key => $withdrawlog)
                                <div class="card w-100">
                                    <div id="invoice-POS">
                                        <div id="bot">
                                            <div id="table">
                                                <table>


                                                    <tr class="service">
                                                        <td class="tableitem">
                                                            <p class="itemtext">
                                                                {{ __('TRX') }}
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="itemtext">
                                                                {{ $key + $withdrawlogs->firstItem() }}
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr class="service">
                                                        <td class="tableitem">
                                                            <p class="itemtext">
                                                                {{ __('Date') }}
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="itemtext">
                                                                {{ __($withdrawlog->created_at->format('d F Y')) }}
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr class="service">
                                                        <td class="tableitem">
                                                            <p class="itemtext">
                                                                {{ __('Method Name') }}
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="itemtext">
                                                                {{ __($withdrawlog->withdrawMethod->name) }}
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr class="service">
                                                        <td class="tableitem">
                                                            <p class="itemtext">
                                                                {{ __('Getable Amount') }}
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="itemtext">
                                                                {{ $withdrawlog->withdraw_amount }}
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr class="service">
                                                        <td class="tableitem">
                                                            <p class="itemtext">
                                                                {{ __('Charge Type') }}
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="itemtext">
                                                                {{ ucwords($withdrawlog->withdrawMethod->charge_type) }}
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr class="service">
                                                        <td class="tableitem">
                                                            <p class="itemtext">
                                                                {{ __('Charge') }}
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="itemtext">
                                                                @if ($withdrawlog->withdrawMethod->charge_type == 'percent')
                                                                    {{ ($withdrawlog->withdraw_amount * $withdrawlog->withdraw_charge) / 100 . ' ' . $general->site_currency }}
                                                                @else
                                                                    {{ number_format($withdrawlog->withdraw_charge, 2) . ' ' . @$general->site_currency }}
                                                                @endif
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr class="service">
                                                        <td class="tableitem">
                                                            <p class="itemtext">
                                                                {{ __('status') }}
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="itemtext">
                                                                @if ($withdrawlog->status == 1)
                                                                    <span
                                                                        class="sp_badge sp_badge_success">{{ __('Success') }}</span>
                                                                @elseif($withdrawlog->status == 2)
                                                                    <span
                                                                        class="sp_badge sp_badge_danger">{{ __('Rejected') }}</span>
                                                                @else
                                                                    <span
                                                                        class="sp_badge sp_badge_warning">{{ __('Pending') }}</span>
                                                                @endif
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    <tr class="service">
                                                        <td class="tableitem">
                                                            <p class="itemtext">
                                                                {{ __('Action') }}
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <p class="itemtext">
                                                                <button class="btn mt-0 details" style="font-size: 9px;"
                                                                    data-user_data="{{ json_encode($withdrawlog->user_withdraw_prof) }}"
                                                                    data-withdraw="{{ $withdrawlog }}">View</button>
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>

                                                @if ($withdrawlogs->hasPages())
                                                    {{ $withdrawlogs->links() }}
                                                @endif
                                            </div><!--End Table-->
                                        </div><!--End InvoiceBot-->
                                    </div><!--End Invoice-->
                                </div>
                            @empty
                                {{ __('No Data Found') }}
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal w-100 bg-transparent shadow-none fade" id="details" tabindex="-1" role="dialog"
            aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content p-0">
                    <div class="modal-header bg-dark p-2">
                        <h5 class="modal-title">{{ __('Withdraw Details') }}</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="text-white">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body bg-dark p-2">
                        <div class="withdraw-details">
                        </div>
                    </div>
                    <div class="modal-footer bg-dark p-2">
                        <button type="button" class="btn m-0 bg-dark text-success"
                            data-bs-dismiss="modal">{{ __('Close') }}</button>
                    </div>
                </div>
            </div>
        </div>
    @endsection


    @push('script')
        <script>
            $(function() {
                'use strict'

                $('.details').on('click', function() {
                    const modal = $('#details');

                    let html = `

                    <ul class="list-group ">
                            <li class="text-success bg-dark list-group-item d-flex justify-content-between align-items-center">
                               {{ __('Withdraw Email') }}
                                <span>${$(this).data('user_data').email}</span>
                            </li>
                            <li class="text-success bg-dark list-group-item d-flex justify-content-between align-items-center">
                                {{ __('Withdraw Account Information') }}
                                <span>${$(this).data('user_data').account_information}</span>
                            </li>


                            <li class="text-success bg-dark list-group-item d-flex justify-content-between align-items-center">
                                {{ __('Note For Withdraw') }}
                                <span>${$(this).data('user_data').note}</span>
                            </li>

                            <li class="text-success bg-dark list-group-item d-flex justify-content-between align-items-center">
                                {{ __('Withdraw Transaction') }}
                                <span>${$(this).data('withdraw').transaction_id}</span>
                            </li>
                        </ul>
                `;

                    modal.find('.withdraw-details').html(html);

                    modal.modal('show');
                })

            })
        </script>
    @endpush
