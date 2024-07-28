<!DOCTYPE html>
<html lang="zxx" class="js">
<!-- Mirrored from quantumtradeai.com/demo6/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Apr 2024 12:20:24 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta name="cryptomus" content="e8265895"  />
    <meta charset="utf-8" />
    <meta name="author" content="Softnio" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <link rel="shortcut icon" href="images/favicon.png" />
    <title>QTAI - Dashboard</title>
    <link rel="stylesheet" href="<?php echo e(asset('asset/theme4/dashboard_assets/assets/css/dashlitee5ca.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('asset/theme4/dashboard_assets/assets/css/iziToast.min.css')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <link id="skin-default" rel="stylesheet"
        href="<?php echo e(asset('asset/theme4/dashboard_assets/assets/css/themee5ca.css')); ?>" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "UA-91615293-4");
    </script>
    <style>
        .nk-content-fluid {
            padding: 0px 0 50px 0;
        }

        @media  screen and (min-width: 991px) {
            .nk-content-fluid {
                padding-top: 170px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        main {
            padding: 2rem;
        }

        .container {
            max-width: 600px;
        }

        .card {
            margin-bottom: 1rem;
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .card-subtitle {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 1rem;
        }

        .small-text {
            font-size: 9px;
        }

        .nk-block-head-lg {
            padding-bottom: 10px !important;
        }

        .card-content {
            font-size: 0.9rem;
        }

        .nk-app-root {
            background: #282828;
        }

        .components-preview h4,
        .card-header h5,
        h5,
        input {
            color: #9eff00 !important;
        }

        label,
        span {
            color: white !important;
        }

        .btn {
            margin-top: 1rem;
        }

        .nk-header.is-theme:not([class*=bg-]) {
            background: #232323;
            border-color: #83c31c;
        }

        .nk-header-mobile {
            padding: 0 10px;
        }

        nav {
            background-color: #aef32d !important;
        }

        .btn:hover {
            background-color: #282828d3;
        }

        .btn,
        .btn-large,
        .btn-small {
            text-decoration: none;
            color: #fff;
            border-radius: 17px;
            background-color: #282828;
            text-align: center;
            letter-spacing: .5px;
            -webkit-transition: background-color .2s ease-out;
            transition: background-color .2s ease-out;
            cursor: pointer;
        }

        .btn-ligh {
            text-decoration: none;
            color: #282828;
            border-radius: 17px;
            background-color: #a4f324;
            text-align: center;
            letter-spacing: .5px;
            -webkit-transition: background-color .2s ease-out;
            transition: background-color .2s ease-out;
            cursor: pointer;
        }

        .text-success {
            color: #a4f324 !important;
        }

        .bg-success {
            background: #a4f324 !important;
        }

        .nk-header-menu.mobile-menu {
            background: linear-gradient(#1b1f23, #9eff00) !important;
        }

        .nk-menu .nk-menu-link {
            color: #c9c9c9 !important;
        }

        .nk-header-brand img {
            width: 140px;
        }
    </style>
    <style>
        .active>.page-link,
        .page-link.active {
            background-color: #232721 !important;
        }

        .pagination li.active {
            background-color: #aef32d !important;
        }

        .pagination li a {
            font-size: 9px !important;
            padding: 0 5px !important;
            line-height: 21px !important;
        }

        .bottom-nav {
            width: 50%;
            position: fixed;
            bottom: 0px;
            left: 25%;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            background-color: #aef32d;
            margin: 0px;
            border-radius: 20px 20px 0px 0px;
            padding: 0px 0;
            z-index: 9999;
            box-shadow: 0px 8px 10px rgba(130, 43, 97, .19);
            list-style: none;
        }

        .bottom-nav li a {
            transition: 1s;
            position: relative;
        }

        .bottom-nav li a.active-icon img {
            background: #ffff04;
            border-radius: 9px;
            width: 45px;
            transition: all .5s ease !important;
            padding: 5px;
        }

        .bottom-nav img {
            background: transparent;
            border-radius: 9px;
            width: 45px;
            transition: all .5s ease !important;
            padding: 5px;
        }

        .bottom-nav .slider {
            width: 50px;
            height: 50px;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: -35px;
            background-color: #fff;
            border: 2px solid #822b61;
            box-shadow: 0px 0px 0px 5px #822b61;
            transition: 1s;
            border-radius: 50%;
        }

        @media (max-width: 900px) {
            .bottom-nav {
                width: 100%;
                left: 0;
            }
        }
    </style>
</head>

<body class="nk-body npc-invest bg-lighter">
    <div class="nk-app-root">
        <div class="nk-wrap">
            <div class="nk-header nk-header-fluid is-theme is-regular">
                <div class="container-xl wide-xl">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger me-sm-2 d-lg-none">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em
                                    class="icon ni ni-menu"></em></a>
                        </div>
                        <div class="nk-header-brand">
                            <a href="<?php echo e(url('/dashboard')); ?>" class="logo-link"><img
                                    src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/images/logo.png')); ?>"
                                    alt="logo" />
                            </a>
                        </div>
                        <div class="nk-header-menu" data-content="headerNav">
                            <div class="nk-header-mobile">
                                <div class="nk-header-brand">
                                    <a href="<?php echo e(url('/dashboard')); ?>" class="logo-link"><img
                                            src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/images/logo.png')); ?>"
                                            alt="logo" />
                                    </a>
                                </div>
                                <div class="nk-menu-trigger me-n2">
                                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon"
                                        data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                                </div>
                            </div>
                            <ul class="nk-menu nk-menu-main ui-s2">
                                <li class="nk-menu-item has-sub">
                                    <a href="<?php echo e(url('/dashboard')); ?>" class="nk-menu-link"><span
                                            class="nk-menu-text">Dashboard</span></a>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle"><span
                                            class="nk-menu-text">Investment</span></a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="<?php echo e(url('investmentplan')); ?>" class="nk-menu-link"><span
                                                    class="nk-menu-text">Investment plans</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?php echo e(url('invest/log')); ?>" class="nk-menu-link"><span
                                                    class="nk-menu-text">Trade log</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle"><span
                                            class="nk-menu-text">Deposit</span></a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="<?php echo e(url('deposit')); ?>" class="nk-menu-link"><span
                                                    class="nk-menu-text">Deposit</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?php echo e(url('deposit/log')); ?>" class="nk-menu-link"><span
                                                    class="nk-menu-text">Deposit log</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle"><span
                                            class="nk-menu-text">Withdraw</span></a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="<?php echo e(url('withdraw')); ?>" class="nk-menu-link"><span
                                                    class="nk-menu-text">Withdraw</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="<?php echo e(url('withdraw/all')); ?>" class="nk-menu-link"><span
                                                    class="nk-menu-text">Withdraw log</span></a>
                                        </li>
                                    </ul>
                                </li>
                                
                                
                                <li class="nk-menu-item has-sub">
                                    <a href="<?php echo e(url('interest/log')); ?>" class="nk-menu-link"><span
                                            class="nk-menu-text">Trade history</span></a>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="<?php echo e(url('transaction/log')); ?>" class="nk-menu-link"><span
                                            class="nk-menu-text">Transaction log</span></a>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="<?php echo e(url('commision')); ?>" class="nk-menu-link"><span
                                            class="nk-menu-text">Refferal log</span></a>
                                </li>
                                
                                <li class="nk-menu-item has-sub">
                                    <a href="<?php echo e(url('ticket')); ?>" class="nk-menu-link"><span
                                            class="nk-menu-text">Support</span></a>
                                </li>
                                <li class="nk-menu-item has-sub px-3">
                                    <a href="<?php echo e(url('logout')); ?>" class="bg-danger text-white nk-menu-link btn m-0"><span
                                            class="nk-menu-text">Logout</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                <li class="dropdown notification-dropdown">
                                    <a href="#" class="dropdown-toggle nk-quick-nav-icon"
                                        data-bs-toggle="dropdown">
                                        <div class="icon-status icon-status-info">
                                            <em class="icon ni ni-bell"></em>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end dropdown-menu-s1">
                                        <div class="dropdown-head">
                                            <span class="sub-title nk-dropdown-title">Notifications</span><a
                                                href="#">Mark All as Read</a>
                                        </div>
                                        <div class="dropdown-body">
                                            <div class="nk-notification">
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em
                                                            class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">
                                                            You have requested to <span>Widthdrawl</span>
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em
                                                            class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">
                                                            Your <span>Deposit Order</span> is placed
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em
                                                            class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">
                                                            You have requested to <span>Widthdrawl</span>
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em
                                                            class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">
                                                            Your <span>Deposit Order</span> is placed
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em
                                                            class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">
                                                            You have requested to <span>Widthdrawl</span>
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em
                                                            class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">
                                                            Your <span>Deposit Order</span> is placed
                                                        </div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-foot center">
                                            <a href="#">View All</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown user-dropdown order-sm-first">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                <em class="icon ni ni-user-alt"></em>
                                            </div>
                                            <div class="user-info d-none d-xl-block">
                                                <div class="user-status"></div>
                                                <div class="user-name dropdown-indicator">
                                                    <?php echo e(auth()->user()->full_name); ?>

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div
                                        class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1 is-light">
                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                            <div class="user-card">
                                                <div class="user-avatar"><span>
                                                        <?php if(@Auth::user()->image): ?>
                                                            <img src="<?php echo e(getFile('user', @Auth::user()->image)); ?>">
                                                        <?php else: ?>
                                                            <img src="https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg"
                                                                alt="pp">
                                                        <?php endif; ?>
                                                    </span></div>
                                                <div class="user-info">
                                                    <span
                                                        class="lead-text"><?php echo e(auth()->user()->full_name); ?></span><span
                                                        class="sub-text"><?php echo e(auth()->user()->email); ?></span>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                
                                                <li>
                                                    <a href="<?php echo e(url('profile/setting')); ?>"><em
                                                            class="icon ni ni-setting-alt"></em><span>Setting</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li>
                                                    <a href="<?php echo e(url('logout')); ?>"><em
                                                            class="icon ni ni-signout"></em><span>Sign
                                                            out</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown language-dropdown d-none d-sm-flex me-n1">
                                    <a href="#" class="dropdown-toggle nk-quick-nav-icon"
                                        data-bs-toggle="dropdown">
                                        <div class="quick-icon">
                                            <img class="icon" src="images/flags/english-sq.png" alt="" />
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                                        <ul class="language-list">
                                            <li>
                                                <a href="#" class="language-item"><img
                                                        src="images/flags/english.png" alt=""
                                                        class="language-flag" /><span
                                                        class="language-name">English</span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item"><img
                                                        src="images/flags/spanish.png" alt=""
                                                        class="language-flag" /><span
                                                        class="language-name">Español</span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item"><img
                                                        src="images/flags/french.png" alt=""
                                                        class="language-flag" /><span
                                                        class="language-name">Français</span></a>
                                            </li>
                                            <li>
                                                <a href="#" class="language-item"><img
                                                        src="images/flags/turkey.png" alt=""
                                                        class="language-flag" /><span
                                                        class="language-name">Türkçe</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $__env->yieldContent('content2'); ?>
            
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/arg.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Argentina</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/aus.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Australia</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/bangladesh.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Bangladesh</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/canada.png"
                                        alt="" class="country-flag" /><span class="country-name">Canada
                                        <small>(English)</small></span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/china.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Centrafricaine</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/china.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">China</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/french.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">France</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/germany.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Germany</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/iran.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Iran</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/italy.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Italy</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/mexico.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">México</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/philipine.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Philippines</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/portugal.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Portugal</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/s-africa.png"
                                        alt="" class="country-flag" /><span class="country-name">South
                                        Africa</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/spanish.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Spain</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/switzerland.png"
                                        alt="" class="country-flag" /><span
                                        class="country-name">Switzerland</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/uk.png" alt=""
                                        class="country-flag" /><span class="country-name">United Kingdom</span></a>
                            </li>
                            <li>
                                <a href="#" class="country-item"><img src="images/flags/english.png"
                                        alt="" class="country-flag" /><span class="country-name">United
                                        State</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="nk-demo-panel nk-demo-panel-2x toggle-slide toggle-slide-right" data-content="demoML"
        data-toggle-overlay="true" data-toggle-body="true" data-toggle-screen="any">
        <div class="nk-demo-head">
            <h6 class="mb-0">Switch Demo Layout</h6>
            <a class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2" data-target="demoML"
                href="#"><em class="icon ni ni-cross"></em></a>
        </div>
        <div class="nk-demo-list" data-simplebar>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo1/index.html">
                    <div class="nk-demo-image bg-blue">
                        <img class="bg-purple" src="../images/landing/layout-1d.jpg"
                            srcset="https://quantumtradeai.com/images/landing/layout-1d2x.jpg 2x"
                            alt="Demo Layout 1" />
                    </div>
                    <span class="nk-demo-title"><strong>Demo Layout 1</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo2/index.html">
                    <div class="nk-demo-image bg-purple">
                        <img src="../images/landing/layout-2d.jpg"
                            srcset="https://quantumtradeai.com/images/landing/layout-2d2x.jpg 2x"
                            alt="Demo Layout 2" />
                    </div>
                    <span class="nk-demo-title"><strong>Demo Layout 2</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo3/index.html">
                    <div class="nk-demo-image bg-success">
                        <img src="../images/landing/layout-3d.jpg"
                            srcset="https://quantumtradeai.com/images/landing/layout-3d2x.jpg 2x"
                            alt="Demo Layout 3" />
                    </div>
                    <span class="nk-demo-title"><strong>Demo Layout 3</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo4/index.html">
                    <div class="nk-demo-image bg-indigo">
                        <img src="../images/landing/layout-4d.jpg"
                            srcset="https://quantumtradeai.com/images/landing/layout-4d2x.jpg 2x"
                            alt="Demo Layout 4" />
                    </div>
                    <span class="nk-demo-title"><strong>Demo Layout 4</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo5/index.html">
                    <div class="nk-demo-image bg-orange">
                        <img src="../images/landing/layout-5d.jpg"
                            srcset="https://quantumtradeai.com/images/landing/layout-5d2x.jpg 2x"
                            alt="Demo Layout 5" />
                    </div>
                    <span class="nk-demo-title"><strong>Demo Layout 5</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="index-2.html">
                    <div class="nk-demo-image bg-purple">
                        <img src="../images/landing/layout-6d.jpg"
                            srcset="https://quantumtradeai.com/images/landing/layout-6d2x.jpg 2x"
                            alt="Demo Layout 6" />
                    </div>
                    <span class="nk-demo-title"><strong>Demo Layout 6</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo7/index.html">
                    <div class="nk-demo-image bg-teal">
                        <img src="../images/landing/layout-7d.jpg"
                            srcset="https://quantumtradeai.com/images/landing/layout-7d2x.jpg 2x"
                            alt="Demo Layout 7" />
                    </div>
                    <span class="nk-demo-title"><strong>Demo Layout 7</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo8/index.html">
                    <div class="nk-demo-image bg-azure">
                        <img src="../images/landing/layout-8d.jpg"
                            srcset="https://quantumtradeai.com/images/landing/layout-8d2x.jpg 2x"
                            alt="Demo Layout 8" />
                    </div>
                    <span class="nk-demo-title"><strong>Demo Layout 8</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo9/index.html">
                    <div class="nk-demo-image bg-pink">
                        <img src="../images/landing/layout-9d.jpg"
                            srcset="https://quantumtradeai.com/images/landing/layout-9d2x.jpg 2x"
                            alt="Demo Layout 9" />
                    </div>
                    <span class="nk-demo-title"><strong>Demo Layout 9</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/landing/index.html">
                    <div class="nk-demo-image bg-red">
                        <img src="../images/landing/main-landing.jpg"
                            srcset="
                        https://quantumtradeai.com/images/landing/main-landing2x.jpg 2x
                      "
                            alt="Landing Page" />
                    </div>
                    <span class="nk-demo-title"><strong>Landing Page</strong>
                        <span class="badge badge-danger ml-1">Free</span></span>
                </a>
            </div>
        </div>
    </div>
    <div class="nk-demo-panel nk-demo-panel-2x toggle-slide toggle-slide-right" data-content="demoUC"
        data-toggle-overlay="true" data-toggle-body="true" data-toggle-screen="any">
        <div class="nk-demo-head">
            <h6 class="mb-0">Use Case Concept</h6>
            <a class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2" data-target="demoUC"
                href="#"><em class="icon ni ni-cross"></em></a>
        </div>
        <div class="nk-demo-list" data-simplebar>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo9/copywriter/index.html">
                    <div class="nk-demo-image bg-indigo">
                        <img src="../images/landing/demo-ai-copywriter.jpg"
                            srcset="
                        https://quantumtradeai.com/images/landing/demo-ai-copywriter2x.jpg 2x
                      "
                            alt="ai-copywriter" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo9</em><br /><strong>Ai Copywriter
                            Panel</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo7/pharmacy/index.html">
                    <div class="nk-demo-image bg-warning">
                        <img src="../images/landing/demo-pharmacy.jpg"
                            srcset="
                        https://quantumtradeai.com/images/landing/demo-pharmacy2x.jpg 2x
                      "
                            alt="pharmacy" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo7</em><br /><strong>Pharmacy Management
                            Panel</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo5/loan/index.html">
                    <div class="nk-demo-image bg-purple">
                        <img src="../images/landing/demo-loan.jpg"
                            srcset="https://quantumtradeai.com/images/landing/demo-loan2x.jpg 2x" alt="loan" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo5</em><br /><strong>Loan Management
                            Panel</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo2/ecommerce/index.html">
                    <div class="nk-demo-image bg-dark">
                        <img src="../images/landing/demo-ecommerce.jpg"
                            srcset="
                        https://quantumtradeai.com/images/landing/demo-ecommerce2x.jpg 2x
                      "
                            alt="Ecommerce" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo2</em><br /><strong>E-Commerce
                            Panel</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo2/lms/index.html">
                    <div class="nk-demo-image bg-danger">
                        <img src="../images/landing/demo-lms.jpg"
                            srcset="https://quantumtradeai.com/images/landing/demo-lms2x.jpg 2x" alt="LMS" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo2</em><br /><strong>LMS / Learning
                            Management System</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo1/crm/index.html">
                    <div class="nk-demo-image bg-info">
                        <img src="../images/landing/demo-crm.jpg"
                            srcset="https://quantumtradeai.com/images/landing/demo-crm2x.jpg 2x"
                            alt="CRM / Customer Relationship" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo1</em><br /><strong>CRM / Customer
                            Relationship Management</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo7/hospital/index.html">
                    <div class="nk-demo-image bg-indigo">
                        <img src="../images/landing/demo-hospital.jpg"
                            srcset="
                        https://quantumtradeai.com/images/landing/demo-hospital2x.jpg 2x
                      "
                            alt="Hospital Managemen" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo7</em><br /><strong>Hospital
                            Management</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo1/hotel/index.html">
                    <div class="nk-demo-image bg-pink">
                        <img src="../images/landing/demo-hotel.jpg"
                            srcset="https://quantumtradeai.com/images/landing/demo-hotel2x.jpg 2x"
                            alt="Hotel Managemen" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo1</em><br /><strong>Hotel
                            Management</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo3/cms/index.html">
                    <div class="nk-demo-image bg-dark">
                        <img src="../images/landing/demo-cms.jpg"
                            srcset="https://quantumtradeai.com/images/landing/demo-cms2x.jpg 2x" alt="cms" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo3</em><br /><strong>CMS
                            Panel</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo5/crypto/index.html">
                    <div class="nk-demo-image bg-warning">
                        <img src="../images/landing/demo-buysell.jpg"
                            srcset="
                        https://quantumtradeai.com/images/landing/demo-buysell2x.jpg 2x
                      "
                            alt="Crypto BuySell / Wallet" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo5</em><br /><strong>Crypto BuySell
                            Panel</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="invest/index.html">
                    <div class="nk-demo-image bg-indigo">
                        <img src="../images/landing/demo-invest.jpg"
                            srcset="
                        https://quantumtradeai.com/images/landing/demo-invest2x.jpg 2x
                      "
                            alt="HYIP / Investment" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo6</em><br /><strong>HYIP / Investment
                            Panel</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo3/apps/file-manager.html">
                    <div class="nk-demo-image bg-purple">
                        <img src="../images/landing/demo-file-manager.jpg"
                            srcset="
                        https://quantumtradeai.com/images/landing/demo-file-manager2x.jpg 2x
                      "
                            alt="File Manager" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo3</em><br /><strong>Apps - File
                            Manager</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo4/subscription/index.html">
                    <div class="nk-demo-image bg-primary">
                        <img src="../images/landing/demo-subscription.jpg"
                            srcset="
                        https://quantumtradeai.com/images/landing/demo-subscription2x.jpg 2x
                      "
                            alt="SAAS / Subscription" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo4</em><br /><strong>SAAS / Subscription
                            Panel</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/covid/index.html">
                    <div class="nk-demo-image bg-danger">
                        <img src="../images/landing/demo-covid19.jpg"
                            srcset="
                        https://quantumtradeai.com/images/landing/demo-covid192x.jpg 2x
                      "
                            alt="Covid Situation" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Covid</em><br /><strong>Coronavirus
                            Situation</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo3/apps/messages.html">
                    <div class="nk-demo-image bg-success">
                        <img src="../images/landing/demo-messages.jpg"
                            srcset="
                        https://quantumtradeai.com/images/landing/demo-messages2x.jpg 2x
                      "
                            alt="Messages" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo3</em><br /><strong>Apps -
                            Messages</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo3/apps/mailbox.html">
                    <div class="nk-demo-image bg-purple">
                        <img src="../images/landing/demo-inbox.jpg"
                            srcset="https://quantumtradeai.com/images/landing/demo-inbox2x.jpg 2x" alt="Inbox" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo3</em><br /><strong>Apps -
                            Mailbox</strong></span>
                </a>
            </div>
            <div class="nk-demo-item">
                <a href="https://quantumtradeai.com/demo3/apps/chats.html">
                    <div class="nk-demo-image bg-purple">
                        <img src="../images/landing/demo-chats.jpg"
                            srcset="https://quantumtradeai.com/images/landing/demo-chats2x.jpg 2x"
                            alt="Chats / Messenger" />
                    </div>
                    <span class="nk-demo-title"><em class="text-primary">Demo3</em><br /><strong>Apps -
                            Chats</strong></span>
                </a>
            </div>
        </div>
    </div>
    <div class="nk-demo-panel toggle-slide toggle-slide-right" data-content="settingPanel" data-toggle-overlay="true"
        data-toggle-body="true" data-toggle-screen="any">
        <div class="nk-demo-head">
            <h6 class="mb-0">Preview Settings</h6>
            <a class="nk-demo-close toggle btn btn-icon btn-trigger revarse mr-n2" data-target="settingPanel"
                href="#"><em class="icon ni ni-cross"></em></a>
        </div>
        <div class="nk-opt-panel" data-simplebar>
            <div class="nk-opt-set">
                <div class="nk-opt-set-title">Direction Change</div>
                <div class="nk-opt-list col-2x">
                    <div class="nk-opt-item only-text active" data-key="dir" data-update="ltr">
                        <span class="nk-opt-item-bg"><span class="nk-opt-item-name">LTR Mode</span></span>
                    </div>
                    <div class="nk-opt-item only-text" data-key="dir" data-update="rtl">
                        <span class="nk-opt-item-bg"><span class="nk-opt-item-name">RTL Mode</span></span>
                    </div>
                </div>
            </div>
            <div class="nk-opt-set">
                <div class="nk-opt-set-title">Main UI Style</div>
                <div class="nk-opt-list col-2x">
                    <div class="nk-opt-item only-text active" data-key="style" data-update="ui-default">
                        <span class="nk-opt-item-bg"><span class="nk-opt-item-name">Default</span></span>
                    </div>
                    <div class="nk-opt-item only-text" data-key="style" data-update="ui-clean">
                        <span class="nk-opt-item-bg"><span class="nk-opt-item-name">Clean</span></span>
                    </div>
                    <div class="nk-opt-item only-text" data-key="style" data-update="ui-shady">
                        <span class="nk-opt-item-bg"><span class="nk-opt-item-name">Shady</span></span>
                    </div>
                    <div class="nk-opt-item only-text" data-key="style" data-update="ui-softy">
                        <span class="nk-opt-item-bg"><span class="nk-opt-item-name">Softy</span></span>
                    </div>
                </div>
            </div>
            <div class="nk-opt-set nk-opt-set-header">
                <div class="nk-opt-set-title">Header Style</div>
                <div class="nk-opt-list col-4x">
                    <div class="nk-opt-item active" data-key="header" data-update="is-light">
                        <span class="nk-opt-item-bg is-light"><span class="bg-lighter"></span></span><span
                            class="nk-opt-item-name">White</span>
                    </div>
                    <div class="nk-opt-item" data-key="header" data-update="is-default">
                        <span class="nk-opt-item-bg is-light"><span class="bg-light"></span></span><span
                            class="nk-opt-item-name">Light</span>
                    </div>
                    <div class="nk-opt-item" data-key="header" data-update="is-dark">
                        <span class="nk-opt-item-bg"><span class="bg-dark"></span></span><span
                            class="nk-opt-item-name">Dark</span>
                    </div>
                    <div class="nk-opt-item" data-key="header" data-update="is-theme">
                        <span class="nk-opt-item-bg"><span class="bg-theme"></span></span><span
                            class="nk-opt-item-name">Theme</span>
                    </div>
                </div>
                <div class="nk-opt-set-title">Header Option</div>
                <div class="nk-opt-list col-2x">
                    <div class="nk-opt-item only-text active" data-key="header_opt" data-update="is-regular">
                        <span class="nk-opt-item-bg"><span class="nk-opt-item-name">Regular</span></span>
                    </div>
                    <div class="nk-opt-item only-text" data-key="header_opt" data-update="nk-header-fixed">
                        <span class="nk-opt-item-bg"><span class="nk-opt-item-name">Fixed</span></span>
                    </div>
                </div>
            </div>
            <div class="nk-opt-set nk-opt-set-skin">
                <div class="nk-opt-set-title">Primary Skin</div>
                <div class="nk-opt-list">
                    <div class="nk-opt-item active" data-key="skin" data-update="default">
                        <span class="nk-opt-item-bg"><span class="skin-default"></span></span><span
                            class="nk-opt-item-name">Default</span>
                    </div>
                    <div class="nk-opt-item" data-key="skin" data-update="blue">
                        <span class="nk-opt-item-bg"><span class="skin-blue"></span></span><span
                            class="nk-opt-item-name">Blue</span>
                    </div>
                    <div class="nk-opt-item" data-key="skin" data-update="egyptian">
                        <span class="nk-opt-item-bg"><span class="skin-egyptian"></span></span><span
                            class="nk-opt-item-name">Egyptian</span>
                    </div>
                    <div class="nk-opt-item" data-key="skin" data-update="purple">
                        <span class="nk-opt-item-bg"><span class="skin-purple"></span></span><span
                            class="nk-opt-item-name">Purple</span>
                    </div>
                    <div class="nk-opt-item" data-key="skin" data-update="green">
                        <span class="nk-opt-item-bg"><span class="skin-green"></span></span><span
                            class="nk-opt-item-name">Green</span>
                    </div>
                    <div class="nk-opt-item" data-key="skin" data-update="red">
                        <span class="nk-opt-item-bg"><span class="skin-red"></span></span><span
                            class="nk-opt-item-name">Red</span>
                    </div>
                </div>
            </div>
            <div class="nk-opt-set">
                <div class="nk-opt-set-title">Skin Mode</div>
                <div class="nk-opt-list col-2x">
                    <div class="nk-opt-item active" data-key="mode" data-update="light-mode">
                        <span class="nk-opt-item-bg is-light"><span class="theme-light"></span></span><span
                            class="nk-opt-item-name">Light Skin</span>
                    </div>
                    <div class="nk-opt-item" data-key="mode" data-update="dark-mode">
                        <span class="nk-opt-item-bg"><span class="theme-dark"></span></span><span
                            class="nk-opt-item-name">Dark Skin</span>
                    </div>
                </div>
            </div>
            <div class="nk-opt-reset">
                <a href="#" class="reset-opt-setting">Reset Setting</a>
            </div>
        </div>
    </div>

    <ul class="bottom-nav">
        
        <li>
            <a class="home" href="<?php echo e(url('/dashboard')); ?>">
                <img src="<?php echo e(asset('asset/home-icon.png')); ?>" class="img-fluid" alt="">
            </a>
        </li>
        <li>
            <a href="<?php echo e(url('/team')); ?>">
                <img src="<?php echo e(asset('asset/team-icon.png')); ?>" class="img-fluid" alt="">
            </a>
        </li>
        <li>
            <a href="<?php echo e(url('/investmentplan')); ?>">
                <img src="<?php echo e(asset('asset/trade-icon.png')); ?>" class="img-fluid" alt="">
            </a>
        </li>
        <li>
            <a href="https://quantummtradeai.com/#about">
                <img src="<?php echo e(asset('asset/info-icon.png')); ?>" class="img-fluid" alt="">
            </a>
        </li>
        <li>
            <a href="<?php echo e(url('profile/setting')); ?>">
                <i class="fas fa-shopping-cart"></i>
                <img src="<?php echo e(asset('asset/user-icon.png')); ?>" class="img-fluid" alt="">
            </a>
        </li>

    </ul>

    <script src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/js/bundlee5ca.js?ver=3.2.3')); ?>"></script>
    <script src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/js/scriptse5ca.js?ver=3.2.3')); ?>"></script>
    <script src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/js/demo-settingse5ca.js?ver=3.2.3')); ?>"></script>
    <script src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/js/charts/gd-investe5ca.js?ver=3.2.3')); ?>"></script>
    <script src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/js/iziToast.min.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    <?php
        $content = content('contact.content');
        $contentlink = content('footer.content');
        $footersociallink = element('footer.element');
        $serviceElements = element('service.element');
    ?>

    <script src="<?php echo e(asset('asset/theme4/frontend/js/user_dashboard.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('script'); ?>
    <?php if(@$general->twak_allow): ?>
        <script type="text/javascript">
            'use strict'
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = "https://embed.tawk.to/<?php echo e(@$general->twak_key); ?>";
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
    <?php endif; ?>
    <?php if(Session::has('error')): ?>
        
        <script>
            // "use strict";
            Swal.fire({
                title: 'Error!',
                text: '<?php echo e(session('error')); ?>',
                icon: 'error',
                confirmButtonText: 'Ok'
            })
        </script>
    <?php endif; ?>
    <?php if(Session::has('success')): ?>
        <script>
            // "use strict";
            // iziToast.success({
            //     message: "<?php echo e(session('success')); ?>",
            //     position: 'topRight'
            // });
            Swal.fire({
                title: 'Success!',
                text: '<?php echo e(session('success')); ?>',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
        </script>
    <?php endif; ?>
    <?php if(session()->has('notify')): ?>
        <?php $__currentLoopData = session('notify'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <script>
                // "use strict";
                // iziToast.<?php echo e($msg[0]); ?>({
                //     message: "<?php echo e(trans($msg[1])); ?>",
                //     position: "topRight"
                // });
                Swal.fire({
                    title: '<?php echo e($msg[0]); ?>!',
                    text: '<?php echo e(trans($msg[1])); ?>',
                    icon: '<?php echo e($msg[0]); ?>',
                    confirmButtonText: 'Ok'
                })
            </script>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <?php if(@$errors->any()): ?>
        <script>
            "use strict";
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                // iziToast.error({
                //     message: '<?php echo e(__($error)); ?>',
                //     position: "topRight"
                // });
                Swal.fire({
                    title: 'Error!',
                    text: '<?php echo e(__($error)); ?>',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                })
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </script>
    <?php endif; ?>
    <script>
        'use strict'
        var url = "<?php echo e(route('user.changeLang')); ?>";

        $(".changeLang").change(function() {
            if ($(this).val() == '') {
                return false;
            }
            window.location.href = url + "?lang=" + $(this).val();
        });

        feather.replace();

        // responsive menu slideing
        $(".d-sidebar-menu>li>a").on("click", function() {
            var element = $(this).parent("li");
            if (element.hasClass("open")) {
                element.removeClass("open");
                element.find("li").removeClass("open");
                element.find("ul").slideUp(500, "linear");
            } else {
                element.addClass("open");
                element.children("ul").slideDown();
                element.siblings("li").children("ul").slideUp();
                element.siblings("li").removeClass("open");
                element.siblings("li").find("li").removeClass("open");
                element.siblings("li").find("ul").slideUp();
            }
        });

        $('.sidebar-open-btn').on('click', function() {
            $(this).toggleClass('active');
            $('.d-sidebar').toggleClass('active');
        });
    </script>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    // Add your JavaScript code here
    class TradingBot {
        constructor(config) {
            this.config = config;
            this.balance = 0;
            this.prices = [];

            // Initialize other necessary properties
        }

        async initialize() {
            // Connect to the exchange's API
            // Fetch the initial balance
            // Set up websockets or interval-based price updates
        }

        shouldBuy(currentPrice) {
            // Implement your buying logic here
            // Return true if the bot should buy, false otherwise
        }

        shouldSell(currentPrice) {
            // Implement your selling logic here
            // Return true if the bot should sell, false otherwise
        }

        async buy() {
            // Place a buy order through the exchange's API
            // Update the balance and prices
        }

        async sell() {
            // Place a sell order through the exchange's API
            // Update the balance and prices
        }

        async updatePrices() {
            // Fetch the latest prices from the exchange's API
            // Update the prices property
        }

        async run() {
            await this.initialize();

            setInterval(async () => {
                await this.updatePrices();

                const currentPrice = this.prices[this.prices.length - 1];

                if (this.shouldBuy(currentPrice)) {
                    await this.buy();
                }

                if (this.shouldSell(currentPrice)) {
                    await this.sell();
                }
            }, this.config.updateInterval);
        }
    }

    const config = {
        updateInterval: 60000, // Check for updates every 60 seconds
        // Add other configuration properties here
    };

    const bot = new TradingBot(config);
    bot.run();
</script>

<script>
    $(document).ready(function() {
        // Get the current URL
        var currentUrl = window.location.href;

        // Loop through each anchor tag in the bottom navigation bar
        $('.bottom-nav li a').each(function() {
            // Check if the href attribute matches the current URL
            $(this).removeClass('active-icon');
            if ($(this).attr('href') === currentUrl) {
                $(this).addClass('active-icon');
            }
        });

        // Click event handler for anchor tags
        $('.bottom-nav li a').click(function() {
            // Get the position of the clicked anchor tag
            var position = $(this).position();
            var margin = 37;

            // Move the slider to the clicked position
            $('.slider').css({
                "left": +position.left + margin,
                "transform": "translateX(-50%)"
            });

            // Remove 'active-icon' class from all anchor tags
            $('.bottom-nav li a').removeClass('active-icon');

            // Add 'active-icon' class to the clicked anchor tag
            $(this).addClass('active-icon');
        });
    });
</script>

</html>
<?php /**PATH C:\xampp\htdocs\quantum-trade\resources\views/theme4/layout/master2.blade.php ENDPATH**/ ?>