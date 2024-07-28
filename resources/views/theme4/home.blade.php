@extends(template() . 'layout.master')

@section('content')
    <style>
        @media (max-width: 767px) {
            .hero-1 .hero-thumb img {
                transform: scale(0.8);
                height: 200px;
            }
        }

        .hero-1 .hero-bg-gradient {
            position: absolute;
            left: 50%;
            z-index: -1;
            background: linear-gradient(0.41deg, #83c31c 19.48%, rgba(10, 10, 10, 0.27) -13.62%, #83c31c 267.11%);
            filter: blur(225px);
            top: -1292px;
            width: 1873px;
            height: 2191px;
            transform: translate(-50%, 0);
            border-radius: 0 0 50% 50%;
        }

        .home-purple-gradient {
            --tg-primary-color: #83c31c !important;
            --tg-theme-color2: #2c4700 !important;
            --tg-black2: #0f0f0f !important;
            --tg-secondary-color: #000000 !important;
            --tg-secondary-color2: #020202 !important;
        }

        @media (max-width: 767px) {
            .partner-card {
                background: linear-gradient(180deg, var(--tg-primary-color) -20.97%, rgb(32 53 0) 65%, rgba(1, 3, 20, 0) 100%);
                border-radius: 16px;
            }
        }
    </style>
    <div class="hero-wrapper hero-1">
        <div class="hero-bg-gradient">
        </div>
        <div class="ripple-shape">
            <span class="ripple-1"></span>
            <span class="ripple-2"></span>
            <span class="ripple-3"></span>
            <span class="ripple-4"></span>
            <span class="ripple-5"></span>
        </div>

        <div class="container">
            <div class="hero-style1">
                <div class="row flex-row-reverse">
                    <div class="col-lg-3">
                        <div class="hero-thumb alltuchtopdown">
                            <img src="{{ asset('asset/theme4/web_assets/assets/img/bigbot.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <h1 class="hero-title">Putting Your Money in Product Backed Projects</h1>
                        <div class="btn-wrap">
                            <a href="{{ url('/dashboard') }}" class="btn btn2">
                                Start Bot Trade
                            </a>
                            <a href="{{ route('user.register') }}" class="btn btn-two">
                                Register With US
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        {{-- TRAE VIEW --}}
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                    "symbols": [{
                            "proName": "FOREXCOM:SPXUSD",
                            "title": "S&P 500 Index"
                        },
                        {
                            "proName": "FOREXCOM:NSXUSD",
                            "title": "US 100 Cash CFD"
                        },
                        {
                            "proName": "FX_IDC:EURUSD",
                            "title": "EUR to USD"
                        },
                        {
                            "proName": "BITSTAMP:BTCUSD",
                            "title": "Bitcoin"
                        },
                        {
                            "proName": "BITSTAMP:ETHUSD",
                            "title": "Ethereum"
                        },
                        {
                            "description": "Solana",
                            "proName": "BINANCE:SOLUSDT"
                        },
                        {
                            "description": "Shiba Inu",
                            "proName": "COINBASE:SHIBUSD"
                        },
                        {
                            "description": "XRP",
                            "proName": "BITSTAMP:XRPUSD"
                        }
                    ],
                    "showSymbolLogo": true,
                    "isTransparent": false,
                    "displayMode": "adaptive",
                    "colorTheme": "dark",
                    "locale": "en"
                }
            </script>
        </div>
        {{-- TRAE VIEW --}}
    </div>
    <!--======== / Hero Section ========-->

    <!--==============================
                                                        Brand Area 2
                                                        ==============================-->
    <div class="brand-area2">
        <div class="container">

            <div class="row g-0">
                <div class="col-lg-12">
                    <div class="brand-title text-center">
                        <h6 class="title mt-4">Our top Partner</h6>
                    </div>
                </div>
            </div>
            <div class="brand-item-wrap style2">
                <div class="row g-0 brand-active2">
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('asset/theme4/web_assets/assets/img/vanguard.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('asset/theme4/web_assets/assets/img/berkshire.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('asset/theme4/web_assets/assets/img/JPMorganChase.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brand-item">
                            <img src="{{ asset('asset/theme4/web_assets/assets/img/Wealthfront.png') }}" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--==============================
                                                        Why Choose Us Area
                                                        ==============================-->
    <div class="wcu-area-1 pt-130 pb-140 position-relative" id="about">
        <div class="bg-gradient-1">
            <img src="{{ asset('asset/theme4/web_assets/assets/img/update/bg/bg-gradient1-1.jpg') }}" alt="img">
        </div>
        <div class="container">
            <div class="">
                <div class="row gy-5">
                    <div class="col-lg-7">
                        <div class="section-title mb-0">
                            @php
                                $content = content('about.content');
                            @endphp
                            <h2 class="title style2">About Us</h2>
                            <p class="sec-text">Introducing Efficiency, Precision And Profits.</p>
                            <p style="color:rgb(255, 255, 255);font-size:1.125rem;"> a new investment strategy that
                                leverages Spark-X computing and artificial intelligence to maximize returns and minimize
                                risk.
                                Solution
                                - Advanced Spark-X computing for rapid market analysis
                                - AI-powered decision-making for optimal trades
                                - Emotion-free, data-driven approach
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="wcu-thumb text-center alltuchtopdown">
                            <img src="{{ asset('asset/theme4/web_assets/assets/img/About us.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
                                                        Intro Area
                                                        ==============================-->
    <div class="pt-130 overflow-hidden bg-black2" id="howitwork">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section-title mb-45">
                        @php
                            $content = content('howitwork.content');
                            $elements = element('howitwork.element')->take(8);
                        @endphp
                        <h2 class="title style2">Started Investing With Spark-X Trade Ai</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-xl-4">
                    {{-- @foreach ($elements as $element)
                    <div class="intro-wrap mt-xl-4">
                        <h6 class="intro-wrap-title">{{ __(@$element->data->title) }}</h6>
                        <p class="intro-wrap-text"></p>
                    </div>
                    @endforeach --}}
                    <div class="intro-wrap mt-xl-4">
                        <h6 class="intro-wrap-title">Create An Account</h6>
                        <p class="intro-wrap-text"> Register With Your Authentic Email, Registered Number, And Contact your
                            regional Manager </p>
                    </div>
                    <div class="intro-wrap mt-xl-4">
                        <h6 class="intro-wrap-title">Choose Strategy</h6>
                        <p class="intro-wrap-text"> Select Suitable Plan, Worlds Best Strategies Algorithm Trading Bot, New
                            Tech Spark-X Ai Trading Bot and Wide Range Of investment</p>
                    </div>
                    <div class="intro-wrap mt-x1-6">
                        <h6 class="intro-wrap-title">Get Profit</h6>
                        <p class="intro-wrap-text">More investment And More Returns, You Can Take Benefits and rewards From
                            it </p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="intro-thumb1 alltuchtopdown">
                        <img src="{{ asset('asset/theme4/web_assets/assets/img/whitelogo.png') }}" alt="img">
                    </div>
                    {{-- <div class="intro-wrap mt-50">
                        <h6 class="intro-wrap-title">Our Mission & Vission</h6>
                        <p class="intro-wrap-text">Iko is a 100% pre-scratched cryptome
                            There are 1 Million Minutes, and 60% of them can be yours (60% - ICO)
                            Utility & security token
                            (applies to all transactions and gives a monthly dividend)</p>
                        <p class="intro-wrap-text mt-40">Iko is a 100% pre-scratched cryptome
                            There are 1 Million Minutes, and 60% of them can be yours (60% - ICO)
                            Utility & security token
                            (applies to all transactions and gives a monthly dividend)</p>
                        <p class="intro-wrap-text mt-40">Iko is a 100% pre-scratched cryptome
                            There are 1 Million Minutes, and 60% of them can be yours (60% - ICO)</p>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!--==============================
                                                            RoadMap Area 2
                                                        ==============================-->
    <div class="pt-130 pb-140 overflow-hidden bg-black2 position-relative z-index-common" id="roadMap">
        <div class="bg-gradient-2">
            <img src="{{ asset('asset/theme4/web_assets/assets/img/update/bg/bg-gradient1-1.jpg') }}" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-sm-8">
                    <div class="section-title mb-50">
                        <h2 class="title style2">White Papers</h2>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="icon-box">
                        <button class="slider-arrow prev-btn default"><i class="fas fa-arrow-left"></i></button>
                        <button class="slider-arrow next-btn default"><i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="slider-area position-relative">
                <div class="row roadMap-active2 roadmap-slider1">
                    <div class="col-lg-4">
                        <div class="roadmap-item">
                            <span class="roadmap-title">Spark-X AI</span>
                            <div class="roadmap-content">
                                <h4 class="title"><span class="dot"></span>Research</h4>
                                <p>To investigate the trade-offs between human
                                    and digital advice delivery, we designed a two part research study using both qualitative and
                                    quantitative methods. In April 2021, we conducted
                                    qualitative interviews with 25 investors and 15
                                    advisers to understand how and why investors
                                    choose human versus digital advice services and
                                    the tasks that define each service model. We
                                    analysed the transcripts to arrive at 42 micro interactions that define advice as a service
                                    through the lens of investors and advisers.</p>
                                <a class="btn mt-2"
                                    href="{{ asset('asset/theme4/web_assets/assets/img/Spark-XAi.pdf') }}"> Check Document
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="roadmap-item">
                            <span class="roadmap-title">Beyond The Expenses - June 2021</span>
                            <div class="roadmap-content">
                                <h4 class="title"><span class="dot"></span>White Paper</h4>
                                <p>This paper provides a framework for evaluating index funds and
                                    asset managers by assessing fund expenses as only one component
                                    of a broader set of qualitative and quantitative factors
                                    including organisational incentives, portfolio management
                                    capabilities, securities lending practices, pricing policies and
                                    scale.</p>
                                <a class="btn mt-2"
                                    href="{{ asset('asset/theme4/web_assets/assets/img/beyond-expense-ratios-eu-en-Spark-X Trade.pdf') }}">
                                    Check Document </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="roadmap-item">
                            <span class="roadmap-title">Going Global With Bonds-ISGGLBD_052024</span>
                            <div class="roadmap-content">
                                <h4 class="title"><span class="dot"></span>White Paper</h4>
                                <p>An allocation to global bond markets gives investors exposure to
                                    a greater number of securities, markets and economic and
                                    inflation environments than they would have with a portfolio
                                    composed purely of local market fixed income. In theory, this
                                    diversification can help reduce a portfolio’s volatility without
                                    necessarily decreasing its total return.</p>
                                <a class="btn mt-2"
                                    href="{{ asset('asset/theme4/web_assets/assets/img/GoingGlobal.pdf') }}"> Check
                                    Document </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="roadmap-item">
                            <span class="roadmap-title">Value OF Human And Robo-Advice Feb-2022</span>
                            <div class="roadmap-content">
                                <h4 class="title"><span class="dot"></span>Survey</h4>
                                <p>In this paper, we quantify how much investors value financial advice and where they
                                    believe advisers add value. Using a survey of more than 1,500 US investors who reported
                                    having a human adviser, a digital service, or both </p>
                                <a class="btn mt-2"
                                    href="{{ asset('asset/theme4/web_assets/assets/img/valueofhuman.pdf') }}"> Check
                                    Document </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
                                                        Invest Area
                                                        ==============================-->
    <div class="pt-130 overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="section-title text-center mb-50">
                        <h2 class="title style2">Invest in Our Most Profitable Trading Bots</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30">
                <div class="col-lg-3 col-md-6">
                    <div class="invest-card">
                        <div class="invest-card-icon">
                            <img src="{{ asset('asset/theme4/web_assets/assets/img/bot.png') }}" alt="icon">
                        </div>
                        <a href="{{ url('investmentplan') }}" class="btn btn3" href="#">Invest In V1 Bot</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="invest-card">
                        <div class="invest-card-icon">
                            <img src="{{ asset('asset/theme4/web_assets/assets/img/bot.png') }}" alt="icon">
                        </div>
                        <a href="{{ url('investmentplan') }}" class="btn btn3" href="#">Invest In V2 Bot</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="invest-card">
                        <div class="invest-card-icon">
                            <img src="{{ asset('asset/theme4/web_assets/assets/img/bot.png') }}" alt="icon">
                        </div>
                        <a href="{{ url('investmentplan') }}" class="btn btn3" href="#">Invest In V3 Bot</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="invest-card">
                        <div class="invest-card-icon">
                            <img src="{{ asset('asset/theme4/web_assets/assets/img/bot.png') }}" alt="icon">
                        </div>
                        <a href="{{ url('investmentplan') }}" class="btn btn3" href="#">Invest In V4 Bot</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="invest-card">
                        <div class="invest-card-icon">
                            <img src="{{ asset('asset/theme4/web_assets/assets/img/bot.png') }}" alt="icon">
                        </div>
                        <a href="{{ url('investmentplan') }}" class="btn btn3" href="#">Invest In V5 Bot</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="tradingview-widget-container" id="News">
        <div class="tradingview-widget-container__widget"></div>
        <div class="col-lg-12">
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                {
                    "feedMode": "all_symbols",
                    "isTransparent": false,
                    "displayMode": "regular",
                    "height": 600,
                    "colorTheme": "dark",
                    "locale": "en"
                }
            </script>
        </div>
    </div>

    <!--==============================
                                                        Team Area
                                                        ==============================-->
    <div class="pt-130 pb-140 overflow-hidden position-relative z-index-common">
        <div class="bg-gradient-3">
            <img src="{{ asset('asset/theme4/web_assets/assets/img/update/bg/bg-gradient1-1.jpg') }}" alt="img">
        </div>

        <!--==============================
                                                            Founder Area
                                                            ==============================-->
        <div id="Team" class="pb-110">
            <div class="container">
                <div class="section-title text-center mb-50">
                    <h2 class="title style2">Active founders</h2>
                </div>
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                        <div class="founder-card">
                            <div class="founder-card-img">
                                <img src="{{ asset('asset/theme4/web_assets/assets/img/Anna.jpg') }}" alt="img">
                            </div>
                            <div class="founder-card-details">
                                <h3 class="founder-card-title">Anna coulling</h3>
                                <p class="founder-card-desig">Founder & CEO</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="founder-card">
                            <div class="founder-card-img">
                                <img src="{{ asset('asset/theme4/web_assets/assets/img/jimmy.png') }}" alt="img">
                            </div>
                            <div class="founder-card-details">
                                <h3 class="founder-card-title">David Coulling</h3>
                                <p class="founder-card-desig">Founder & CEO</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
    </div>

    <!--==============================
                                                        Partner Area
                                                        ==============================-->
    {{-- <div class="pt-130 bg-black2" id="testimonials">
        <div class="container">
            <div class="section-title text-center mb-50">
                @php
                    $content = content('testimonial.content');
                    $elements = element('testimonial.element');

                @endphp
                <h2 class="title style2">{{ __(@$content->data->title) }}</h2>
            </div>
            <div class="slider-area">
                <div class="row partner-slider1">
                    @forelse ($elements as $element)
                        <div class="col-lg-4">
                            <div class="partner-card">
                                <h5 class="name">{{ @$element->data->client_name }}</h5>
                                <p>{{ @$element->data->designation }}</p>
                                <p class="mt-4">{{ @$element->data->answer }}</p>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div> --}}

    <!--==============================
                                                        Faq Area
                                                        ==============================-->
    <div class="pt-140 pb-140 overflow-hidden" id="faq">
        <div class="container">
            <div class="row gy-40 justify-content-between">
                <div class="col-xl-4 text-xl-start">
                    <div class="section-title mb-50">
                        @php
                            $content = content('faq.content');
                            $elements = element('faq.element');
                        @endphp

                        <h2 class="title style2">{{ @$content->data->title }}</h2>
                        <p class="sec-text">DO have any kind Of questions?
                            We're here to help.</p>
                    </div>
                    <div class="faq-thumb mt-60">
                        <img src="{{ asset('asset/theme4/web_assets/assets/img/FAQ.png') }}" alt="img">
                    </div>
                </div>
                {{-- <div class="col-xxl-6 col-xl-8">
                    <div class="accordion-area accordion" id="faqAccordion">
                        @foreach ($elements as $item)
                            <div class="accordion-card active">
                                <div class="accordion-header" id="collapse-item-{{ $loop->iteration }}">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-{{ $loop->iteration }}" aria-expanded="true"
                                        aria-controls="collapse-1"><span
                                            class="number">{{ $loop->iteration }}</span>{{ @$item->data->question }}</button>
                                </div>
                                <div id="collapse-{{ $loop->iteration }}" class="accordion-collapse collapse show"
                                    aria-labelledby="collapse-item-{{ $loop->iteration }}"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">{{ @$item->data->answer }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div> --}}
                <div class="col-xxl-6 col-xl-8">
                    <div class="accordion-area accordion" id="faqAccordion">
                        <div class="accordion-card active">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1"><span
                                        class="number">1</span>Does this software is generating online money</button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">Yes With the help of Spark-X trading bot and you can invest your
                                        money with risk free trading bot that makes your wealth passive and boost your
                                        financial growth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-area accordion" id="faqAccordion">
                        <div class="accordion-card active">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2"><span
                                        class="number">2</span>Is there any Team rewards system ?</button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">Yes you can made upto 20% of your team upto 3 levels and if you
                                        grow your team you can take monthly salary from company and also you upgraded as an
                                        agent plus daily commission from team members profit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-area accordion" id="faqAccordion">
                        <div class="accordion-card active">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3"><span
                                        class="number">3</span>How Do i check my account Balance</button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">It is easy to check your account balance our platform provides you
                                        userfriendly interface easy to use and understand everything </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-area accordion" id="faqAccordion">
                        <div class="accordion-card active">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="true" aria-controls="collapse-4"><span
                                        class="number">4</span>How many payments gateway are use in this site</button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">In the initial stage at this time we are using only USDT/CRYPTO
                                        Gateway.</p>
                                </div>
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
        'use strict';
        $(document).ready(function() {
            $(document).on('click', '#calculate-btn', function() {

                let modal = $('#calculationModal');

                $('.selectplan').text('');
                $('.amount').text('');
                let id = $('#plan').val();
                let amount = $('#amount').val();
                var url = "{{ route('user.investmentcalculate', ':id') }}";
                url = url.replace(':id', id);
                $.ajax({
                    type: 'GET',
                    url: url,
                    data: {
                        amount: amount,
                        selectplan: id
                    },
                    success: (data) => {
                        if (data.message) {
                            iziToast.error({
                                message: data.message + ' ' + Number(data.amount)
                                    .toFixed(2),
                                position: 'topRight',
                            });

                        } else {
                            $('#profit').html(data);
                            modal.modal('show');
                        }


                    },
                    error: (error) => {
                        if (typeof(error.responseJSON.errors.amount) !== "undefined") {
                            iziToast.error({
                                message: error.responseJSON.errors.amount,
                                position: 'topRight',
                            });
                        }
                        if (typeof(error.responseJSON.errors.selectplan) !== "undefined") {
                            iziToast.error({
                                message: error.responseJSON.errors.selectplan,
                                position: 'topRight',
                            });
                        }
                    }
                })
            });



        });
    </script>
@endpush
