@extends(template() . 'layout.auth')

@section('content')
    @push('seo')
        <meta name='description' content="{{ @$general->seo_description }}">
    @endpush

    {{-- <section class="auth-section">
        <div class="auth-wrapper">
            <div class="auth-top-part">
                <a href="{{ route('home') }}" class="auth-logo">
                    <img class="img-fluid rounded sm-device-img text-align" src="{{ getFile('logo', @$general->whitelogo) }}"
                        width="100%" alt="pp">
                </a>
                <p class="text-center"><span class="me-2">{{ __('Login Again') }}?</span> <a href="{{ route('user.login') }}" class="btn main-btn btn-sm" >{{ __('Login') }}</a></p>
            </div>

            <div class="auth-body-part">
                <div class="auth-form-wrapper">
                    <h3 class="text-center mb-4">{{ __('Request For Reset Password') }}</h3>
                    <form action="{{ route('user.forgot.password') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>{{ __('Email Address') }} <span class="sp_text_danger">*</span></label>
                            <input type="email" class="form-control" name="email" id="email"
                            placeholder="{{ __('Enter Email') }}">
                        </div>
                        @if (@$general->allow_recaptcha == 1)
                            <div class="mb-3">
                                <script src="https://www.google.com/recaptcha/api.js"></script>
                                <div class="g-recaptcha" data-sitekey="{{ @$general->recaptcha_key }}"
                                    data-callback="verifyCaptcha"></div>
                                <div id="g-recaptcha-error"></div>
                            </div>
                        @endif
                        <button type="submit" id="recaptcha" class="btn main-btn w-100"><span>{{ __('Send Verification Code') }}</span></button>
                    </form>
                </div>
            </div>
            <div class="auth-footer-part">
                <p class="text-center mb-0">
                    @if (@$general->copyright)
                        {{ __(@$general->copyright) }}
                    @endif
                </p>
            </div>
        </div>
        <div class="auth-thumb-area" style="background-image: url('{{ asset('asset/theme3/images/bg/plan.jpg') }}')">
            <div class="auth-thumb">
                <img src="{{ getFile('frontendlogin', @$general->frontend_login_image) }}" alt="image">
            </div>
        </div>
    </section> --}}
    <div class="nk-wrap nk-wrap-nosidebar">
        <div class="nk-content ">
            <div class="nk-split nk-split-page nk-split-lg">
                <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                    {{-- <div class="absolute-top-right d-lg-none p-3 p-sm-5"><a href="#"
                            class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em
                                class="icon ni ni-info"></em></a></div> --}}
                    <div class="nk-block nk-block-middle nk-auth-body">
                        {{-- <div class="brand-logo pb-2"><a href="../../index-2.html" class="logo-link"><img
                                    src="{{ asset('asset/theme4/dashboard_assets/assets/images/logo.png') }}"
                                    alt="logo" />
                            </a></div> --}}
                        <div class="nk-block-head">
                            <h5 class="text-center mb-4">{{ __('Request For Reset Password') }}</h5>
                        </div>
                        <form action="{{ route('user.forgot.password') }}" method="POST">
                            @csrf
                            <input type="hidden" name="email" value="">
                            <div class="form-group">
                                <div class="form-label-group"><label class="form-label"
                                        for="default-01">{{ __('Email Address') }}</label></div>
                                <div class="form-control-wrap"><input type="email" class="form-control form-control-lg"
                                        name="email" id="email" placeholder="{{ __('Enter Email') }}"></div>
                            </div>
                            @if (@$general->allow_recaptcha == 1)
                                <div class="mb-3">
                                    <script src="https://www.google.com/recaptcha/api.js"></script>
                                    <div class="g-recaptcha" data-sitekey="{{ @$general->recaptcha_key }}"
                                        data-callback="verifyCaptcha"></div>
                                    <div id="g-recaptcha-error"></div>
                                </div>
                            @endif
                            <div class="form-group"><button id="recaptcha" class="btn btn-lg btn-primary btn-block"
                                    type="submit">{{ __('Send Verification Code') }}</button></div>
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
                                <h4>Spark-X</h4>
                                <p>You can start to create your products easily with its user-friendly design &
                                    most completed responsive layout.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
