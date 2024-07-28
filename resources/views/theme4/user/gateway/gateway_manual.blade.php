@extends(template() . 'layout.master2')
<style>
    input{
        border: 1px solid #15215a!important;
    }
</style>
@section('content2')
    {{-- <div class="dashboard-body-part">

        <div class="row gy-4">
            <div class="col-xl-6">
                <div class="site-card">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Bank Payment Information') }}</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>{{ __('Method Currency') }}</span>
                                <span>{{ $gateway->gateway_parameters->gateway_currency }}</span>
                            </li>
                            <li class="list-group-item text-light">
                                <span class="w-100"><?= clean($gateway->gateway_parameters->instruction) ?></span>
                                <span class="w-100">
                                    <img src="{{ getFile('gateways', @$gateway->gateway_parameters->qr_code) }}"
                                        alt="">
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="site-card">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Payment Information') }}</h5>
                    </div>

                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>{{ __('Gateway Name') }}:</span>

                                <span>{{ str_replace('_', ' ', $deposit->gateway->gateway_name) }}</span>

                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>{{ __('Amount') }}:</span>
                                <span>{{ number_format($deposit->amount, 2) . ' ' . @$general->site_currency }}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between">
                                <span>{{ __('Charge') }}:</span>
                                <span>{{ number_format($deposit->charge, 2) . ' ' . @$general->site_currency }}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between">
                                <span>{{ __('Conversion Rate') }}:</span>
                                <span>{{ '1 ' . @$general->site_currency . ' = ' . $deposit->rate }}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between">
                                <span>{{ __('Total Payable Amount') }}:</span>
                                <span>{{ $deposit->final_amount .' ' . @$deposit->gateway->gateway_parameters->gateway_currency }}</span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-md-12">
                <div class="site-card">
                    <div class="card-header">
                        <h5 class="mb-0">{{ __('Requirments') }}</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                @if ($gateway->user_proof_param != null)
                                    @foreach ($gateway->user_proof_param as $proof)
                                        @if ($proof['type'] == 'text')
                                            <div class="form-group p-0 col-md-12">
                                                <label for=""
                                                    class="mb-2 mt-2">{{ __($proof['field_name']) }}</label>
                                                <input type="text"
                                                    name="{{ strtolower(str_replace(' ', '_', $proof['field_name'])) }}"
                                                    class="form-control"
                                                    {{ $proof['validation'] == 'required' ? 'required' : '' }}>
                                            </div>
                                        @endif
                                        @if ($proof['type'] == 'textarea')
                                            <div class="form-group p-0 col-md-12">
                                                <label for=""
                                                    class="mb-2 mt-2">{{ __($proof['field_name']) }}</label>
                                                <textarea name="{{ strtolower(str_replace(' ', '_', $proof['field_name'])) }}" class="form-control"
                                                    {{ $proof['validation'] == 'required' ? 'required' : '' }}></textarea>
                                            </div>
                                        @endif

                                        @if ($proof['type'] == 'file')
                                            <div class="form-group p-0 col-md-12">
                                                <label for=""
                                                    class="mb-2 mt-2">{{ __($proof['field_name']) }}</label>
                                                <input type="file"
                                                    name="{{ strtolower(str_replace(' ', '_', $proof['field_name'])) }}"
                                                    class="form-control"
                                                    {{ $proof['validation'] == 'required' ? 'required' : '' }}>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                                <div class="form-group p-0">
                                    <button class="btn bg-warning text-dark w-100" type="submit">{{ __('Deposit Now') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

      <div class="container">
        <div class="row">
            <!-- Top Funds-->
            <div class="col-12 col-md-12 col-lg-6 col-xxl-3 mb-4 mt-3">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col">
                                <h6 class="fw-medium">{{ __('Bank Payment Information') }}</h6>
                            </div>
                            <div class="col-auto">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 px-0">
                                <ul class="list-group list-group-flush bg-none">
                                    <li class=" list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <p class="mb-0">{{ __('Method Currency') }}</p>
                                            </div>
                                            <div class="col ps-0 text-end">
                                                <p class=" mb-0">{{ $gateway->gateway_parameters->gateway_currency }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <p class="mb-0"><?= clean($gateway->gateway_parameters->instruction) ?></p>
                                            </div>
                                            <div class="col ps-0 text-end">
                                                <p class="mb-0"> <img src="{{ getFile('gateways', @$gateway->gateway_parameters->qr_code) }}"
                                                    alt=""></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xxl-3 mb-4 ">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col">
                                <h6 class="fw-medium">{{ __('Payment Information') }}</h6>
                            </div>
                            <div class="col-auto">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 px-0">
                                <ul class="list-group list-group-flush bg-none">
                                    <li class=" list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <p class="mb-0">{{ __('Gateway Name') }} :</p>
                                            </div>
                                            <div class="col ps-0 text-end">
                                                <p class=" mb-0">{{ str_replace('_', ' ', $deposit->gateway->gateway_name) }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <p class="mb-0">{{ __('Amount') }} :</p>
                                            </div>
                                            <div class="col ps-0 text-end">
                                                <p class="mb-0">{{ number_format($deposit->amount, 2) . ' ' . @$general->site_currency }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <p class="mb-0">{{ __('Charge') }} :</p>
                                            </div>
                                            <div class="col ps-0 text-end">
                                                <p class="mb-0">{{ number_format($deposit->charge, 2) . ' ' . @$general->site_currency }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <p class="mb-0">{{ __('Conversion Rate') }} :</p>
                                            </div>
                                            <div class="col ps-0 text-end">
                                                <p class="mb-0">{{ '1 ' . @$general->site_currency . ' = ' . $deposit->rate }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <p class="mb-0">{{ __('Total Payable Amount') }} :</p>
                                            </div>
                                            <div class="col ps-0 text-end">
                                                <p class="mb-0">{{ $deposit->final_amount .' ' . @$deposit->gateway->gateway_parameters->gateway_currency }}</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xxl-3 mb-4 ">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col">
                                <h6 class="fw-medium">{{ __('Requirments') }}</h6>
                            </div>
                            <div class="col-auto">

                            </div>
                        </div>
                        <div class="row">
                            <form action="" method="post" enctype="multipart/form-data" class="mb-4 text-start">
                                @csrf
                                <div class="row">
                                    @if ($gateway->user_proof_param != null)
                                        @foreach ($gateway->user_proof_param as $proof)
                                            @if ($proof['type'] == 'text')
                                                <div class="form-group p-0 col-md-12">
                                                    <label for=""
                                                        class="mb-2 mt-2">{{ __($proof['field_name']) }}</label>
                                                    <input type="text"
                                                        name="{{ strtolower(str_replace(' ', '_', $proof['field_name'])) }}"
                                                        class="form-control border-start-0 px-5"
                                                        {{ $proof['validation'] == 'required' ? 'required' : '' }}>
                                                </div>
                                            @endif
                                            @if ($proof['type'] == 'textarea')
                                                <div class="form-group p-0 col-md-12">
                                                    <label for=""
                                                        class="mb-2 mt-2">{{ __($proof['field_name']) }}</label>
                                                    <textarea name="{{ strtolower(str_replace(' ', '_', $proof['field_name'])) }}" class="form-control border-start-0"
                                                        {{ $proof['validation'] == 'required' ? 'required' : '' }}></textarea>
                                                </div>
                                            @endif

                                            @if ($proof['type'] == 'file')
                                                <div class="form-group p-0 col-md-12">
                                                    <label for=""
                                                        class="mb-2 mt-2">{{ __($proof['field_name']) }}</label>
                                                    <input type="file"
                                                        name="{{ strtolower(str_replace(' ', '_', $proof['field_name'])) }}"
                                                        class="form-control border-start-0"
                                                        {{ $proof['validation'] == 'required' ? 'required' : '' }}>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                    <div class="form-group p-0">
                                        <button class="btn btn-theme w-100 mt-2" type="submit">{{ __('Deposit Now') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
