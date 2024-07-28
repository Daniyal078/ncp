@php
    $contact = content('contact.content');
    $footersociallink = element('footer.element');
@endphp

<!-- header-section start  -->
{{-- <header class="header">
    <div class="header-bottom">
      <div class="container">
        <nav class="navbar navbar-expand-xl p-0 align-items-center">

            <a class="site-logo site-title" href="{{ route('home') }}">
                @if (@$general->logo)
                    <img class="img-fluid rounded sm-device-img text-align" src="{{ getFile('logo', @$general->logo) }}" width="100%" alt="pp">
                @else
                    {{ __('No Logo Found') }}
                @endif
            </a>
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu-toggle"></span>
            </button>
            <div class="collapse navbar-collapse mt-lg-0 mt-3" id="mainNavbar">
                <ul class="nav navbar-nav sp_main_menu me-auto">
                    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}"><a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('investmentplan') }}">{{ __('Investment Plans') }}</a>
                    </li>

                    @forelse ($pages as $page)
                    <li class="nav-item"><a class="nav-link" href="{{ route('pages', $page->slug) }}">{{ __($page->name) }}</a>
                    </li>
                    @empty
                    @endforelse

                    <li class="nav-item"><a class="nav-link" href="{{ route('allblog') }}">{{ __('Blog') }}</a></li>

                </ul>
                <div class="navbar-action">
                  <select class="changeLang me-3" aria-label="Default select example">
                    @foreach ($language_top as $top)
                      <option value="{{ $top->short_code }}"
                        {{ session('locale') == $top->short_code ? 'selected' : '' }}>
                        {{ __(ucwords($top->name)) }}
                      </option>
                    @endforeach
                  </select>
                  @if (Auth::user())
                      <a class="btn main-btn btn-sm" href="{{ route('user.dashboard') }}">{{ __('Dashboard') }}</a>
                  @else
                      <a class="text-white me-3" href="{{ route('user.login') }}">{{ __('Login') }}</a>
                      <a href="{{route('user.register')}}" class="btn main-btn btn-sm">Sign up <i class="las la-long-arrow-alt-right ms-2"></i></a>
                  @endif
                </div>
            </div>
        </nav>
      </div>
    </div><!-- header-bottom end -->
  </header> --}}
<!-- header-section end  -->


{{-- <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">
        <div class="logo me-auto me-lg-0">
        </div>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li class=" d-sm-block d-md-block d-lg-none">
                    <select class="custom-select-form selectric ms-3 rounded changeLang nav-link scrollto"
                        aria-label="Default select example">
                        @foreach ($language_top as $top)
                            <option value="{{ $top->short_code }}"
                                {{ session('locale') == $top->short_code ? 'selected' : '' }}>
                                {{ __(ucwords($top->name)) }}
                            </option>
                        @endforeach
                    </select>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <div class="header-right d-flex d-none  d-md-none d-lg-block">
            @if (Auth::user())
                <a href="{{ route('user.dashboard') }}" class="btn-border btn-sm me-3">{{ __('Dashboard') }}</a>
            @else
                <a href="{{ route('user.login') }}" class="btn-border btn-sm me-3">{{ __('Login') }}</a>
            @endif
            <select class="changeLang" aria-label="Default select example">
                @foreach ($language_top as $top)
                    <option value="{{ $top->short_code }}"
                        {{ session('locale') == $top->short_code ? 'selected' : '' }}>
                        {{ __(ucwords($top->name)) }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</header> --}}
<header id="header" class="header-layout1">
    <div id="sticky-header" class="menu-area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="logo">
                                <a href="/"><img
                                        src="{{ asset('asset/theme4/web_assets/assets/img/logo/logo.png') }}"
                                        style="height: 35px;" alt="Logo"></a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="active menu-item-has-children"><a class="section-link"
                                            href="#header">Home</a>
                                    </li>
                                    <li><a href="#about" class="section-link">About</a></li>
                                    <li><a href="#roadMap" class="section-link">White Papers</a></li>
                                    <li><a href="#News" class="section-link">News</a></li>
                                    <li><a href="#Team" class="section-link">Our Team</a></li>
                                    <li><a href="#faq" class="section-link">Faq</a></li>
                                </ul>
                            </div>
                            <div class="header-action">
                                <ul class="list-wrap">
                                    <li>
                                        <div class="dropdown-link">
                                            <a class="dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink1" data-bs-toggle="dropdown"
                                                aria-expanded="false">ENG</a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                <li>
                                                    <a href="#">GER</a>
                                                    <a href="#">FREN</a>
                                                    <a href="#">ARAB</a>
                                                    <a href="#">LAT</a>
                                                    <a href="#">SPA</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    @if (Auth::user())
                                        <li class="header-login"><a class="btn2"
                                                href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                    @else
                                        <li class="header-login"><a class="btn2"
                                                href="{{ route('user.login') }}">Login</a></li>
                                    @endif
                                </ul>
                            </div>
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <nav class="menu-box">
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <div class="nav-logo">
                <a href="index.html"><img src="{{ asset('asset/theme4/web_assets/assets/img/logo/logo.png') }}"
                        style="height: 35px;" alt="Logo"></a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <ul class="list-wrap">
                @if (Auth::user())
                    <li class="text-center mt-2"><a class="btn" href="{{ route('user.dashboard') }}">Dashboard</a>
                    </li>
                @else
                    <li class="text-center mt-2"><a class="btn" href="{{ route('user.login') }}">Login</a></li>
                @endif
            </ul>
        </nav>
    </div>
    <div class="menu-backdrop"></div>
    <!-- End Mobile Menu -->
</header>
