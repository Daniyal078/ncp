@php
$content = content('contact.content');
$contentlink = content('footer.content');
$footersociallink = element('footer.element');
$serviceElements = element('service.element');

@endphp

{{-- <footer class="footer-section has-bg-img">
    <div class="footer-logo-portion">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="{{ route('home') }}" class="footer-logo">
                        @if (@$general->logo)
                            <img class="img-fluid rounded sm-device-img text-align"
                                src="{{ getFile('logo', @$general->whitelogo) }}" width="100%" alt="pp">
                        @else
                            {{ __('No Logo Found') }}
                        @endif
                    </a>

                    <ul class="social-links justify-content-center mt-3">
                        @forelse ($footersociallink as $item)
                            <li>
                                <a href="{{ __(@$item->data->social_link) }}" target="_blank"
                                    class="twitter"><i class="{{ @$item->data->social_icon }}"></i></a>
                            </li>
                        @empty
                        @endforelse
                    </ul>

                    <ul class="footer-inline-list justify-content-center mt-4">
                        <li> <a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                        @forelse ($pages as $page)
                            <li><a href="{{ route('pages', $page->slug) }}">{{ __($page->name) }}</a></li>
                        @empty
                        @endforelse
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="footer-menu-portion">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="mb-0 footer-text-clr">
                        @if (@$general->copyright)
                            {{ __(@$general->copyright) }}
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer> --}}<footer class="footer-wrapper footer-layout1 position-relative">
        <div class="bg-gradient-1">
            <img src="{{ asset('asset/theme4/web_assets/assets/img/update/bg/bg-gradient1-1.jpg') }}" alt="img">
        </div>
        <div class="container">
            <div class="footer-menu-area">
                <div class="row gy-4 justify-content-between align-items-center">
                    <div class="col-xl-5 col-lg-4">
                        <div class="social-btn justify-content-center justify-content-lg-start">
                            <a href="https://www.facebook.com/">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path
                                        d="M10.0596 7.34522L15.8879 0.570312H14.5068L9.44607 6.45287L5.40411 0.570312H0.742188L6.85442 9.46578L0.742188 16.5703H2.12338L7.4676 10.3581L11.7362 16.5703H16.3981L10.0593 7.34522H10.0596ZM8.16787 9.54415L7.54857 8.65836L2.62104 1.61005H4.74248L8.71905 7.29827L9.33834 8.18405L14.5074 15.5779H12.386L8.16787 9.54449V9.54415Z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <a href="https://instagram.com/">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://linkedin.com/">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8 text-lg-end text-center">
                        <ul class="footer-menu-list">
                            <li>
                                <a href="#">
                                    HOME
                                </a>
                            </li>
                            <li>
                                <a href="#about">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="#roadMap">
                                    White papers
                                </a>
                            </li>
                            <li>
                                <a href="#News">
                                    NEWS
                                </a>
                            </li>
                            <li>
                                <a href="#Team">
                                    Our team
                                </a>
                            </li>
                            <li>
                                <a href="#faq">
                                    Faq
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap text-center text-lg-start">
            <div class="container">
                <div class="row gy-3 justify-content-between align-items-center">
                    <div class="col-lg-6 align-self-center">
                        <p class="copyright-text">Copyright © 2024 <a href="#">QTAI.</a> All rights reserved.</p>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <ul class="footer-links">
                            <li>
                                <a href="{{url('privacy/policy')}}">
                                    Privay Policy
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>
