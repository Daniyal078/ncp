@extends(template() . 'layout.auth')

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
                        <div class="brand-logo pb-2"><a href="../../index-2.html" class="logo-link"><img
                                    src="{{ asset('asset/theme4/dashboard_assets/assets/images/logo.png') }}"
                                    alt="logo" />
                            </a></div>
                        <div class="nk-block-head">
                        </div>
                        <form action="{{ route('user.auth.verify') }}" method="POST">
                            @csrf
                            <input type="hidden" name="email" value="{{ $email }}">
                            <div class="form-group">
                                <div class="form-label-group"><label class="form-label"
                                        for="default-01">{{ __('Verify Code') }}</label></div>
                                <div class="form-control-wrap"><input type="text" class="form-control form-control-lg"
                                        id="default-01" name="code" placeholder="{{ __('Enter Code Here') }}"></div>
                            </div>
                            @if (@$general->allow_recaptcha == 1)
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
                        <div class="form-note-s2 pt-5"><a href="{{ route('user.login') }}"><strong>Return to
                                    login</strong></a></div>
                    </div>
                </div>
                <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right"
                    data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                    <div class="w-100 w-max-550px p-3 p-sm-5 m-auto">
                        <div class="nk-feature nk-feature-center">
                            <div class="nk-feature-img"><img class="round" src="../../images/slides/promo-a.png"
                                    srcset="/demo6/images/slides/promo-a2x.png 2x" alt=""></div>
                            <div class="nk-feature-content py-4 p-sm-5">
                                <h4>Quantum</h4>
                                <p>You can start to create your products easily with its user-friendly design &
                                    most completed responsive layout.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <form action="" class="row h-100 justify-content-center" action="{{ route('user.auth.verify') }}" method="POST">
        @csrf
        <input type="hidden" name="email" value="{{ $email }}">
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
                    <h3 class="mb-3 mb-lg-4">Sign in</h3>
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
                                    <input type="text" class="form-control border-start-0"
                                        id="default-01" name="code" placeholder="{{ __('Enter Code Here') }}">
                                    <label>{{ __('Verify Code') }}</label>
                                </div>
                            </div>
                        </div>
                        @if (@$general->allow_recaptcha == 1)
                        <div class="mb-3">
                            <script src="https://www.google.com/recaptcha/api.js"></script>
                            <div class="g-recaptcha" data-sitekey="{{ @$general->recaptcha_key }}"
                                data-callback="verifyCaptcha"></div>
                            <div id="g-recaptcha-error"></div>
                        </div>
                    @endif
                        <!-- Form elements -->

                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 mt-auto mb-4 text-center d-grid">
            <!-- submit button -->
            <button class="btn btn-lg btn-theme z-index-5 mb-4" type="submit">Verify now<i
                    class="bi bi-arrow-right"></i></button>
            <p class="text-white"><a href="{{ route('user.login') }}" class="text-white">Retur to login</a></p>
        </div>
    </form>
@endsection

@push('script')
    <script>
        "use strict";

        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML =
                    "<span class='sp_text_danger'>{{__('Captcha field is required.')</span>";
                return false;
            }
            return true;
        }

        function verifyCaptcha() {
            document.getElementById('g-recaptcha-error').innerHTML = '';
        }
    </script>
@endpush
