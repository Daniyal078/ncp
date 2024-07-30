@extends(template() . 'layout.master2')
<style>
    .payment-box {
        background: #aef32d;
        padding-bottom: 20px;
        border-radius: 16px;
    }

    .nk-content {
        background: #232721 !important;
        height: 100vh;
        overflow: auto;
    }

    .modal_amount {
        padding: 0 10px !important;
        border: 1px solid #549653 !important;
        width: -webkit-fill-available !important;
        height: auto !important;
        background: #f0f8ff00 !important;
        border-radius: 10px !important;
        margin: 15px 0 0 0 !important;
        font-size: 10px !important;
    }

    .modal-backdrop.fade.show {
        display: none;
    }
</style>
@section('content2')
    {{-- <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="card-header d-flex flex-wrap justify-content-between align-items-center">

                                <div class="row g-sm-4 g-3 justify-content-center">
                                    @forelse ($gateways as $gateway)
                                        <div class="col-6 my-4">
                                            <div class="payment-box text-center">
                                                <div class="payment-box-thumb">
                                                    <img src="{{ getFile('gateways', $gateway->gateway_image) }}"
                                                        alt="Lights" class="trans-img">
                                                </div>
                                                <div class="payment-box-content">
                                                    <h5 class="title">
                                                        {{ ucwords(str_replace('_', ' ', $gateway->gateway_name)) }}</h5>
                                                    <button data-href="{{ route('user.paynow', $gateway->id) }}"
                                                        data-id="{{ $gateway->id }}"
                                                        class="btn main-btn paynow mt-0 btn-primary"><span>{{ __('Pay Now') }}</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        {{ __('Not Found') }}
                                    @endforelse

                                </div>
                            </div>

                            @if (isset($type) && $type == 'deposit')
                                <div class="modal
                            fade
                            bg-transparent"
                                    tabindex="-1" role="dialog" id="paynow">
                                    <div class="modal-dialog" role="document">
                                        <form style="width: 100%;" action="" method="post">
                                            @csrf
                                            <div class="modal-content p-3">
                                                <div class="d-flex align-items-center justify-content-between p-0">
                                                    <h5 class="modal-title mt-0 mb-3">{{ __('Deposit Amount') }}</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true" class="text-light">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body p-0">
                                                    <div class="row">
                                                        <input type="hidden" name="id" value="">
                                                        <div class="form-group p-0">
                                                            <label for="">{{ __('Amount') }}</label>
                                                            <input type="text" name="amount"
                                                                class="modal_amount mt-0 form-control"
                                                                placeholder="{{ __('Enter Amount') }}">

                                                            <input type="hidden" name="user_id" class="form-control"
                                                                value="{{ auth()->id() }}">
                                                            <input type="hidden" name="type" class="form-control"
                                                                value="deposit">
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-light"><span>{{ __('Deposit Now') }}</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @else
                                <div class="modal
                            fade
                            bg-transparent"
                                    tabindex="-1" role="dialog" id="paynow">
                                    <div class="modal-dialog" role="document">
                                        <form style="width: 100%;" action="" method="post">
                                            @csrf
                                            <div class="modal-content p-3">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">{{ __('Invest Amount') }}</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true" class="text-light">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body p-0">
                                                    <div class="row">
                                                        <input type="hidden" name="id" value="">
                                                        <div class="form-group p-0">
                                                            <label for="">{{ __('Amount') }}</label>
                                                            <input type="text" name="amount" class="form-control"
                                                                placeholder="{{ __('Enter Amount') }}">

                                                            <input type="text" name="plan_id" class="form-control"
                                                                value="{{ $plan->id }}" hidden>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn sp_btn_danger btn-danger"
                                                        data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                    <button type="submit"
                                                        class="w-auto"><span>{{ __('Invest Now') }}</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif --}}
    <div class="row">
        @forelse ($gateways as $gateway)
            <div class="col-12 col-md-12 col-lg-6 col-xxl-4 mt-2">
                <div class="card border-0 mb-4">
                    <div class="card-header">
                        <div class="row align-items-center ">
                            <div class="col">
                                <img src="{{ getFile('gateways', $gateway->gateway_image) }}" alt="Lights" class="trans-img img-fluid">
                                <p class="fw-medium fw-0">{{ ucwords(str_replace('_', ' ', $gateway->gateway_name)) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <button data-href="{{ route('user.paynow', $gateway->id) }}"
                                    data-id="{{ $gateway->id }}" class="btn btn-theme btn-md paynow">Pay Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            {{ __('Not Found') }}
        @endforelse
    </div>
    @if (isset($type) && $type == 'deposit')
                                <div class="modal
                            fade
                            bg-transparent mt-5"
                                    tabindex="-1" role="dialog" id="paynow">
                                    <div class="modal-dialog" role="document" style="box-shadow: 6px 7px 13px 0px rgba(0,0,0,0.75)!important;">
                                        <form style="width: 100%;" action="" method="post">
                                            @csrf
                                            <div class="modal-content p-3">
                                                <div class="d-flex align-items-center justify-content-between p-0">
                                                    <h5 class="modal-title mt-0 mb-3">{{ __('Deposit Amount') }}</h5>
                                                    <button type="button" class="close btn btn-danger" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true" class="text-light">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body p-0">
                                                        <input type="hidden" name="id" value="">
                                                        <div class="form-group p-0">
                                                            <label for="">{{ __('Amount') }}</label>
                                                            <input type="text" name="amount"
                                                                class="form-control"
                                                                placeholder="{{ __('Enter Amount') }}">

                                                            <input type="hidden" name="user_id" class="form-control"
                                                                value="{{ auth()->id() }}">
                                                            <input type="hidden" name="type" class="form-control"
                                                                value="deposit">
                                                        </div>
                                                    <button type="submit"
                                                        class="btn btn-theme mt-2 w-100"><span>{{ __('Deposit Now') }}</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @else
                                <div class="modal
                            fade
                            bg-transparent"
                                    tabindex="-1" role="dialog" id="paynow">
                                    <div class="modal-dialog" role="document">
                                        <form style="width: 100%;" action="" method="post">
                                            @csrf
                                            <div class="modal-content p-3">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">{{ __('Invest Amount') }}</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true" class="text-light">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body p-0">
                                                    <div class="row">
                                                        <input type="hidden" name="id" value="">
                                                        <div class="form-group p-0">
                                                            <label for="">{{ __('Amount') }}</label>
                                                            <input type="text" name="amount" class="form-control"
                                                                placeholder="{{ __('Enter Amount') }}">

                                                            <input type="text" name="plan_id" class="form-control"
                                                                value="{{ $plan->id }}" hidden>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn sp_btn_danger btn-danger"
                                                        data-bs-dismiss="modal">{{ __('Close') }}</button>
                                                    <button type="submit"
                                                        class="w-auto"><span>{{ __('Invest Now') }}</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection

@push('script')
    <script>
        $(function() {
            'use strict'

            $('.paynow').on('click', function() {
                const modal = $('#paynow')

                modal.find('form').attr('action', $(this).data('href'))
                modal.find('input[name=id]').val($(this).data('id'))

                modal.modal('show')
            })
        })
    </script>
@endpush
