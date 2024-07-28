@extends(template() . 'layout.auth')
@php

    $content = content('breadcrumb.content');

@endphp

@section('content')
    @push('seo')
        <meta name='description' content="{{ @$general->seo_description }}">
    @endpush


    {{-- <div class="nk-wrap nk-wrap-nosidebar">
        <div class="nk-content ">
            <div class="nk-split nk-split-page nk-split-lg">
                <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                    <div class="absolute-top-right d-lg-none p-3 p-sm-5"><a href="#"
                            class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em
                                class="icon ni ni-info"></em></a></div>
                    <div class="nk-block nk-block-middle nk-auth-body">
                        <div class="brand-logo pb-2"><a href="/" class="logo-link"><img
                                    src="{{ asset('asset/theme4/dashboard_assets/assets/images/logo.png') }}"
                                    alt="logo" />
                            </a></div>
                        @if ($general->is_email_verification_on && !auth()->user()->ev)
                            <div class="nk-block-head">
                                <h5 class="text-center mb-4">{{ __('Verify Email') }}</h5>
                            </div>
                            <form class="reg-form" action="{{ route('user.authentication.verify.email') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <div class="form-label-group"><label class="form-label"
                                            for="default-01">{{ __('Verification Code') }}</label></div>
                                    <div class="form-control-wrap"><input type="text"
                                            class="form-control form-control-lg" name="code"
                                            placeholder="{{ __('Enter Verification Code') }}"></div>
                                </div>
                                @if (@$general->allow_recaptcha)
                                    <div class="mb-3">
                                        <script src="https://www.google.com/recaptcha/api.js"></script>
                                        <div class="g-recaptcha" data-sitekey="{{ @$general->recaptcha_key }}"
                                            data-callback="verifyCaptcha"></div>
                                        <div id="g-recaptcha-error"></div>
                                    </div>
                                @endif
                                <div class="form-group"><button class="btn btn-lg btn-primary btn-block"
                                        type="submit">{{ __('Verify Now') }}</button></div>
                            </form>
                        @elseif($general->is_sms_verification_on && !auth()->user()->sv)
                            <form method="POST" action="{{ route('user.authentication.verify.sms') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="form-label-group"><label class="form-label"
                                            for="default-01">{{ __('Sms Verify Code') }}</label></div>
                                    <div class="form-control-wrap"><input type="text"
                                            class="form-control form-control-lg" name="code" id="exampleInputEmail1"
                                            aria-describedby="emailHelp"></div>
                                </div>
                                @if (@$general->allow_recaptcha)
                                    <div class="mb-3">
                                        <script src="https://www.google.com/recaptcha/api.js"></script>
                                        <div class="g-recaptcha" data-sitekey="{{ @$general->recaptcha_key }}"
                                            data-callback="verifyCaptcha"></div>
                                        <div id="g-recaptcha-error"></div>
                                    </div>
                                @endif
                                <div class="form-group"><button class="btn btn-lg btn-primary btn-block"
                                        type="submit">{{ __('Verify Now') }}</button></div>
                            </form>
                            @endif
                    </div>
                </div>
                <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right"
                    data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                    <div class="w-100 w-max-550px p-3 p-sm-5 m-auto">
                        <div class="nk-feature nk-feature-center">
                            <div class="nk-feature-img"><img class="round" src="../../images/slides/promo-a.png"
                                    srcset="/demo6/images/slides/promo-a2x.png 2x" alt=""></div>
                            <div class="nk-feature-content py-4 p-sm-5">
                                <h4>quantum</h4>
                                <p>You can start to create your products easily with its user-friendly design &
                                    most completed responsive layout.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    @if ($general->is_email_verification_on && !auth()->user()->ev)
        <div class="nk-block-head">
            <h5 class="text-center mb-4">{{ __('Verify Email') }}</h5>
        </div>
        <form class="reg-form" action="{{ route('user.authentication.verify.email') }}"
            class="row h-100 justify-content-center" method="POST">
            @csrf
            <div class="col-12 mb-auto">
                <!-- time and temperature -->
                <div class="row text-white my-2">
                    <div class="col">
                        <p class="display-3 mb-0"><span id="time"></span><small><span class="h4 text-uppercase"
                                    id="ampm"></span></small></p>
                        <p class="lead fw-normal" id="date"></p>
                    </div>
                    <div class="col-auto text-end">
                        <p class="display-3 mb-0">
                            <span id="temperature">46</span><span class="h4 text-uppercase"> <sup>0</sup>C</span>
                        </p>
    
                        <a href="javascript:void()" class="btn btn-link text-white dd-arrow-none dropdown-toggle p-0"
                            id="selectCity" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="h5 fw-normal" id="citymy">New York</span> <i
                                class="bi bi-pencil-square small fw-light"></i>
                        </a>
                    </div>
                </div>
                <!-- time and temperature ends -->

            </div>
            <div class="col-12 align-self-center">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 text-center text-white">
                        <h3 class="mb-3 mb-lg-4">Verify now</h3>
                        <p class="mb-4">Enter your credentials for<br>signing to your account</p>

                        <div class="mb-4 text-start">
                            <!-- alert messages -->
                            <div class="alert alert-danger fade show d-none mb-2 global-alert text-start" role="alert">
                                <div class="row">
                                    <div class="col"><strong>Requierd!</strong> Please enter valid data.</div>
                                </div>
                            </div>
                            <div class="alert alert-success fade show d-none mb-2 global-success text-start" role="alert">
                                <div class="row">
                                    <div class="col-auto align-self-center ">
                                        <div class="spinner-border spinner-border-sm text-success me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                    <div class="col ps-0">
                                        <strong>Awesome!</strong> Taking you to the next page.
                                    </div>
                                </div>
                            </div>
                            <!-- Form elements -->
                            <div class="form-group mb-2 position-relative check-valid text-dark">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text text-theme border-end-0"><i
                                            class="bi bi-envelope"></i></span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-start-0" name="code"
                                            placeholder="{{ __('Enter Verification Code') }}">
                                        <label>{{ __('Verification Code') }}</label>
                                    </div>
                                </div>
                            </div>
                            @if (@$general->allow_recaptcha)
                                <div class="mb-3">
                                    <script src="https://www.google.com/recaptcha/api.js"></script>
                                    <div class="g-recaptcha" data-sitekey="{{ @$general->recaptcha_key }}"
                                        data-callback="verifyCaptcha"></div>
                                    <div id="g-recaptcha-error"></div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 mt-auto mb-4 text-center d-grid">
                    <!-- submit button -->
                    <button class="btn btn-lg btn-theme z-index-5 mb-4" type="submit" id="submitbtn">Verify now<i
                            class="bi bi-arrow-right"></i></button>
                </div>
        </form>
    @elseif($general->is_sms_verification_on && !auth()->user()->sv)
        <form class="reg-form" class="row h-100 justify-content-center" method="POST"
            action="{{ route('user.authentication.verify.sms') }}">
            @csrf
            <div class="col-12 align-self-center">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 text-center text-white">
                        <h3 class="mb-3 mb-lg-4">Verify now</h3>
                        <p class="mb-4">Enter your credentials for<br>signing to your account</p>

                        <div class="mb-4 text-start">
                            <!-- alert messages -->
                            <div class="alert alert-danger fade show d-none mb-2 global-alert text-start" role="alert">
                                <div class="row">
                                    <div class="col"><strong>Requierd!</strong> Please enter valid data.</div>
                                </div>
                            </div>
                            <div class="alert alert-success fade show d-none mb-2 global-success text-start" role="alert">
                                <div class="row">
                                    <div class="col-auto align-self-center ">
                                        <div class="spinner-border spinner-border-sm text-success me-2" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                    <div class="col ps-0">
                                        <strong>Awesome!</strong> Taking you to the next page.
                                    </div>
                                </div>
                            </div>
                            <!-- Form elements -->
                            <div class="form-group mb-2 position-relative check-valid text-dark">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text text-theme border-end-0"><i
                                            class="bi bi-envelope"></i></span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-start-0" name="code"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <label>{{ __('Sms Verify Code') }}</label>
                                    </div>
                                </div>
                            </div>
                            @if (@$general->allow_recaptcha)
                                    <div class="mb-3">
                                        <script src="https://www.google.com/recaptcha/api.js"></script>
                                        <div class="g-recaptcha" data-sitekey="{{ @$general->recaptcha_key }}"
                                            data-callback="verifyCaptcha"></div>
                                        <div id="g-recaptcha-error"></div>
                                    </div>
                                @endif
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 mt-auto mb-4 text-center d-grid">
                    <!-- submit button -->
                    <button class="btn btn-lg btn-theme z-index-5 mb-4" type="submit" id="submitbtn">Verify now<i
                            class="bi bi-arrow-right"></i></button>
                </div>
        </form>
        @endif
    @endsection
