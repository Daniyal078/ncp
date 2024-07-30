<!doctype html>
<html lang="en" class="dark-mode">


<!-- Mirrored from maxartkiller.com/website/Spark-Xmobile2/html/finance-wallet.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2024 05:27:58 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Spark-X</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('asset/theme4/dashboard_assets/assets/img/logo.png') }}"
        sizes="180x180">
    <link rel="icon" href="{{ asset('asset/theme4/dashboard_assets/assets/img/logo.png" sizes="32x32') }}"
        type="image/png">
    <link rel="icon" href="{{ asset('asset/theme4/dashboard_assets/assets/img/logo.png" sizes="16x16') }}"
        type="image/png">

    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <!-- bootstrap icons -->
    <link rel="stylesheet"
        href="{{ asset('asset/theme4/dashboard_assets/cdns/npm/bootstrap-icons%401.8.1/font/bootstrap-icons.css') }}">

    <!-- chosen css -->
    <link rel="stylesheet"
        href="{{ asset('asset/theme4/dashboard_assets/assets/vendor/chosen_v1.8.7/chosen.min.css') }}">

    <!-- date range picker -->
    <link rel="stylesheet"
        href="{{ asset('asset/theme4/dashboard_assets/assets/vendor/daterangepicker/daterangepicker.css') }}">

    <!-- swiper carousel css -->
    <link rel="stylesheet"
        href="{{ asset('asset/theme4/dashboard_assets/assets/vendor/swiper-7.3.1/swiper-bundle.min.css') }}">

    <!-- simple lightbox css -->
    <link rel="stylesheet"
        href="{{ asset('asset/theme4/dashboard_assets/assets/vendor/simplelightbox/simple-lightbox.min.css') }}">

    <!-- app tour css -->
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

    <link rel="stylesheet"
        href="{{ asset('asset/theme4/dashboard_assets/assets/vendor/Product-Tour-Plugin-jQuery/lib.css') }}">

    <!-- Footable table master css -->
    <link rel="stylesheet"
        href="{{ asset('asset/theme4/dashboard_assets/assets/vendor/fooTable/css/footable.bootstrap.min.css') }}">

    <!-- style css for this template -->
    <link href="{{ asset('asset/theme4/dashboard_assets/assets/scss/style.css') }}" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "UA-91615293-4");
    </script>

</head>

<body class="d-flex flex-column h-100 sidebar-pushcontent sidebar-filled" data-sidebarstyle="sidebar-pushcontent">
    <!-- page loader -->
    <div class="container-fluid h-100 position-fixed loader-wrap bg-blur">
        <div class="row justify-content-center h-100">
            <div class="col-auto align-self-center text-center px-5 leaf">
                <div class="dotslaoder">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <!-- page loader ends -->

    <!-- Header -->
    <header class="header">
        <!-- Fixed navbar -->
        <nav class="navbar fixed-top">
            <div class="container-fluid">
                <button class="btn btn-link btn-square menu-btn me-2" type="button">
                    <i class="bi bi-list fs-4"></i>
                </button>
                <div class="header-title align-self-center">
                    <h5 class="fw-normal text-dark mb-0">Wallet</h5>
                    <p class="small text-secondary">Dashboard</p>
                </div>
                {{-- <div class="search-header d-none d-xl-block ms-0 ms-xl-3">
                    <div class="input-group input-group-md w-300">
                        <span class="input-group-text text-theme"><i class="bi bi-search"></i></span>
                        <input class="form-control pe-0" type="search" placeholder="Type something here..."
                            id="searchglobal">
                        <div class="dropdown input-group-text">
                            <button class="btn btn-link dd-arrow-none dropdown-toggle" type="button" id="searchfilter"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-sliders"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end dropdown-dontclose mt-2 w-300"
                                aria-labelledby="searchfilter">
                                <ul class="nav nav-Spark-X" id="searchtab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="searchall-tab" data-bs-toggle="tab"
                                            data-bs-target="#searchall" type="button" role="tab"
                                            aria-controls="searchall" aria-selected="true">All</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="searchorders-tab" data-bs-toggle="tab"
                                            data-bs-target="#searchorders" type="button" role="tab"
                                            aria-controls="searchorders" aria-selected="false">Orders</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="searchcontacts-tab" data-bs-toggle="tab"
                                            data-bs-target="#searchcontacts" type="button" role="tab"
                                            aria-controls="searchcontacts" aria-selected="false">Contacts</button>
                                    </li>
                                </ul>
                                <div class="tab-content py-3" id="searchtabContent">
                                    <div class="tab-pane fade show active" id="searchall" role="tabpanel"
                                        aria-labelledby="searchall-tab">
                                        <div class="dropdown-item mb-3">
                                            <div class="input-group input-group-md rounded">
                                                <span class="input-group-text text-theme"><i
                                                        class="bi bi-code-square"></i></span>
                                                <select class="form-control simplechosen">
                                                    <option>Successful Order</option>
                                                    <option>Full-filled Order</option>
                                                    <option>Rejected Order</option>
                                                    <option>Delivery Staff</option>
                                                    <option>PM Employees</option>
                                                </select>
                                            </div>
                                        </div>
                                        <ul class="list-group list-group-flush bg-none">
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Search apps</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="searchswitch1">
                                                            <label class="form-check-label"
                                                                for="searchswitch1"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Include Pages</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="searchswitch2" checked>
                                                            <label class="form-check-label"
                                                                for="searchswitch2"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Internet resource</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="searchswitch3" checked>
                                                            <label class="form-check-label"
                                                                for="searchswitch3"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">News and Blogs</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="searchswitch4">
                                                            <label class="form-check-label"
                                                                for="searchswitch4"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="searchorders" role="tabpanel"
                                        aria-labelledby="searchorders-tab">
                                        <div class="dropdown-item mb-3">
                                            <div class="input-group input-group-md rounded">
                                                <span class="input-group-text text-theme"><i
                                                        class="bi bi-box"></i></span>
                                                <select class="form-control" id="searchfilterlist" multiple>
                                                    <option value="San Francisco">San Francisco</option>
                                                    <option value="New York">New York</option>
                                                    <option value="chairtle" selected>chairtle</option>
                                                    <option value="Los Angeles">Los Angeles</option>
                                                    <option value="Chicago">Chicago</option>
                                                    <option value="India">India</option>
                                                    <option value="Sydney">Sydney</option>
                                                    <option value="London">London</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Los Angeles">Los Angeles</option>
                                                    <option value="Chicago">Chicago</option>
                                                    <option value="India">India</option>
                                                </select>
                                            </div>
                                            <div class="invalid-feedback">You have already selected maximum option
                                                allowed.(This is Configurable)</div>
                                        </div>
                                        <ul class="list-group list-group-flush bg-none">
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Show order ID</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="searchswitch5">
                                                            <label class="form-check-label"
                                                                for="searchswitch5"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">International Order</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="searchswitch6" checked>
                                                            <label class="form-check-label"
                                                                for="searchswitch6"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Taxable Product</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="searchswitch7" checked>
                                                            <label class="form-check-label"
                                                                for="searchswitch7"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Published Product</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="searchswitch8">
                                                            <label class="form-check-label"
                                                                for="searchswitch8"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="searchcontacts" role="tabpanel"
                                        aria-labelledby="searchcontacts-tab">
                                        <div class="dropdown-item mb-3">
                                            <div class="input-group input-group-md rounded">
                                                <span class="input-group-text text-theme"><i
                                                        class="bi bi-person-lines-fill"></i></span>
                                                <input class="form-control" type="search"
                                                    placeholder="Contact Include">
                                            </div>
                                        </div>
                                        <ul class="list-group list-group-flush bg-none">
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Have email ID</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="searchswitch9">
                                                            <label class="form-check-label"
                                                                for="searchswitch9"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Have phone number</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="searchswitch10" checked>
                                                            <label class="form-check-label"
                                                                for="searchswitch10"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Photo available</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="searchswitch11" checked>
                                                            <label class="form-check-label"
                                                                for="searchswitch11"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col">Referral</div>
                                                    <div class="col-auto">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="searchswitch12">
                                                            <label class="form-check-label"
                                                                for="searchswitch12"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="row">
                                        <div class="col"><button
                                                class="btn btn-outline-secondary border">Reset</button></div>
                                        <div class="col-auto">
                                            <button class="btn btn-theme">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="input-group-text d-flex d-xl-none" id="searchclose"><i
                                class="bi bi-x-lg vm"></i></span>
                    </div>
                    <div class="dropdown-menu dropdown-dontclose mt-2 mw-600 w-auto" id="searchresultglobal">
                        <ul class="nav nav-Spark-X" id="searchtab1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="searchall1-tab" data-bs-toggle="tab"
                                    data-bs-target="#searchall1" type="button" role="tab"
                                    aria-controls="searchall1" aria-selected="true">All <span
                                        class="badge rounded-pill bg-success ml-2 vm">12</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="searchorders1-tab" data-bs-toggle="tab"
                                    data-bs-target="#searchorders1" type="button" role="tab"
                                    aria-controls="searchorders1" aria-selected="false">Orders <span
                                        class="badge rounded-pill bg-primary ml-2 vm">8</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="searchcontacts1-tab" data-bs-toggle="tab"
                                    data-bs-target="#searchcontacts1" type="button" role="tab"
                                    aria-controls="searchcontacts1" aria-selected="false">Contacts <span
                                        class="badge rounded-pill bg-warning ml-2 vm">4</span></button>
                            </li>
                        </ul>
                        <div class="tab-content py-3" id="searchtabContent1">
                            <div class="tab-pane fade show active mh-500 overflow-y-auto" id="searchall1"
                                role="tabpanel" aria-labelledby="searchall1-tab">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <div class="col align-self-center">
                                            <h6>Application</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="btn btn-sm btn-outline-secondary border">View
                                                all</a>
                                        </div>
                                    </div>
                                    <div class="row g-0 text-center mb-3">
                                        <div class="col-4 col-sm-2 col-md-2">
                                            <a class="dropdown-item square-item" href="app-finance.html">
                                                <div class="avatar avatar-40 rounded mb-2">
                                                    <i class="bi bi-bank fs-4"></i>
                                                </div>
                                                <p class="mb-0">Finance</p>
                                                <p class="fs-12 text-muted">Accounting</p>
                                            </a>
                                        </div>
                                        <div class="col-4 col-sm-2 col-md-2">
                                            <a class="dropdown-item square-item" href="app-network.html">
                                                <div class="avatar avatar-40 rounded mb-2">
                                                    <i class="bi bi-globe fs-4"></i>
                                                </div>
                                                <p class="mb-0">Network</p>
                                                <p class="fs-12 text-muted">Stabilize</p>
                                            </a>
                                        </div>
                                        <div class="col-4 col-sm-2 col-md-2">
                                            <a class="dropdown-item square-item" href="app-ecommerce.html">
                                                <div class="avatar avatar-40 rounded mb-2">
                                                    <i class="bi bi-box fs-4"></i>
                                                </div>
                                                <p class="mb-0">Inventory</p>
                                                <p class="fs-12 text-muted">Assuring</p>
                                            </a>
                                        </div>
                                        <div class="col-4 col-sm-2 col-md-2">
                                            <a class="dropdown-item square-item" href="app-project.html">
                                                <div class="avatar avatar-40 rounded mb-2">
                                                    <i class="bi bi-folder fs-4"></i>
                                                </div>
                                                <p class="mb-0">Project</p>
                                                <p class="fs-12 text-muted">Management</p>
                                            </a>
                                        </div>
                                        <div class="col-4 col-sm-2 col-md-2">
                                            <a class="dropdown-item square-item" href="app-social.html">
                                                <div class="avatar avatar-40 rounded mb-2">
                                                    <i class="bi bi-people fs-4"></i>
                                                </div>
                                                <p class="mb-0">Social</p>
                                                <p class="fs-12 text-muted">Tracking</p>
                                            </a>
                                        </div>
                                        <div class="col-4 col-sm-2 col-md-2">
                                            <a class="dropdown-item square-item" href="app-learning.html">
                                                <div class="avatar avatar-40 rounded mb-2">
                                                    <i class="bi bi-journal-bookmark fs-4"></i>
                                                </div>
                                                <p class="mb-0">Learning</p>
                                                <p class="fs-12 text-muted">Make-easy</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col align-self-center">
                                            <h6>Orders Placed</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="btn btn-sm btn-outline-secondary border">View
                                                all</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="row mb-3">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme">
                                                        <i class="bi bi-bag fs-5"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">#EDR0021 by John
                                                        Merchant</a>
                                                    <p class="text-truncate text-secondary small">2 items, $250.00, 09
                                                        December 2021</p>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme">
                                                        <i class="bi bi-basket fs-5"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">#EDR0026 by Will Smith</a>
                                                    <p class="text-truncate text-secondary small">4 items, $530.00, 18
                                                        December 2021</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="row mb-3">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme">
                                                        <i class="bi bi-cart fs-5"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">#EDR0030 by Switty
                                                        David</a>
                                                    <p class="text-truncate text-secondary small">1 items, $50.00, 20
                                                        December 2021</p>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme">
                                                        <i class="bi bi-cart4 fs-5"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">#EDR0041 by Mr.Walk
                                                        Wolf</a>
                                                    <p class="text-truncate text-secondary small">3 items, $130.00, 16
                                                        December 2021</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col align-self-center">
                                            <h6>Contacts</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="btn btn-sm btn-outline-secondary border">View
                                                all</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="row mb-3">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme coverimg">
                                                        <img src="./assets/img/user-2.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">Ms. Switty David</a>
                                                    <p class="text-truncate text-secondary small">US, UK Recruiter</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme coverimg">
                                                        <img src="./assets/img/user-3.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">Dyna Roosevelt</a>
                                                    <p class="text-truncate text-secondary small">Marketing Head at
                                                        Linmongas</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="row mb-3">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme coverimg">
                                                        <img src="./assets/img/user-4.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">Mr. Freddy Johnson</a>
                                                    <p class="text-truncate text-secondary small">Project Manager</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme coverimg">
                                                        <img src="./assets/img/user-1.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">The Maxartkiller</a>
                                                    <p class="text-truncate text-secondary small">CEO Maxartkiller</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="searchorders1" role="tabpanel"
                                aria-labelledby="searchorders1-tab">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="row mb-3">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme">
                                                        <i class="bi bi-bag fs-5"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">#EDR0021 by John
                                                        Merchant</a>
                                                    <p class="text-truncate text-secondary small">2 items, $250.00, 09
                                                        December 2021</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme">
                                                        <i class="bi bi-basket fs-5"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">#EDR0026 by Will Smith</a>
                                                    <p class="text-truncate text-secondary small">4 items, $530.00, 18
                                                        December 2021</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="row mb-3">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme">
                                                        <i class="bi bi-cart fs-5"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">#EDR0030 by Switty
                                                        David</a>
                                                    <p class="text-truncate text-secondary small">1 items, $50.00, 20
                                                        December 2021</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme">
                                                        <i class="bi bi-cart4 fs-5"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">#EDR0041 by Mr.Walk
                                                        Wolf</a>
                                                    <p class="text-truncate text-secondary small">3 items, $130.00, 16
                                                        December 2021</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="searchcontacts1" role="tabpanel"
                                aria-labelledby="searchcontacts1-tab">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="row mb-3">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme coverimg">
                                                        <img src="./assets/img/user-2.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">Ms. Switty David</a>
                                                    <p class="text-truncate text-secondary small">US, UK Recruiter</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme coverimg">
                                                        <img src="./assets/img/user-3.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">Dyna Roosevelt</a>
                                                    <p class="text-truncate text-secondary small">Marketing Head at
                                                        Linmongas</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="row mb-3">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme coverimg">
                                                        <img src="./assets/img/user-4.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">Mr. Freddy Johnson</a>
                                                    <p class="text-truncate text-secondary small">Project Manager</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded bg-light-theme coverimg">
                                                        <img src="./assets/img/user-1.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="col-8 ps-0 align-self-center">
                                                    <a href="#" class="text-truncate">The Maxartkiller</a>
                                                    <p class="text-truncate text-secondary small">CEO Maxartkiller</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="ms-auto">
                    <div class="row">
                        <div class="col-auto">
                            <a href="https://wa.me/{{$general->whatsapp_number}}" type="button" class="btn btn-square btn-link text-center"
                                data-bs-toggle="tooltip" data-bs-placement="bottom">
                                <span class="bi bi-whatsapp position-relative">
                                </span>
                            </a>
                        </div>
                        <div class="col-auto align-self-center">
                            <div class="dropdown">
                                <a class="dd-arrow-none dropdown-toggle" id="userprofiledd" data-bs-toggle="dropdown"
                                    aria-expanded="false" role="button">
                                    <div class="row">
                                        <div class="col-auto align-self-center">
                                            <figure class="avatar avatar-30 rounded-circle coverimg vm">
                                                <img id="file-id-preview"
                                                    src="{{ getFile('user', @Auth::user()->image) }}"
                                                    alt="pp" />
                                            </figure>
                                        </div>
                                        <div class="col ps-0 align-self-center d-none d-lg-block">
                                            <p class="mb-0">
                                                <span
                                                    class="text-dark username">{{ @Auth::user()->fname . ' ' . @Auth::user()->fname }}</span><br>
                                            </p>
                                        </div>
                                        <div class="col ps-0 align-self-center d-none d-lg-block">
                                            <i class="bi bi-chevron-down small vm"></i>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end w-300" aria-labelledby="userprofiledd">
                                    <div class="dropdown-info bg-radial-gradient-theme">
                                        <div class="row">
                                            <div class="col-auto">
                                                <figure class="avatar avatar-50 rounded-circle coverimg vm">
                                                    <img id="file-id-preview"
                                                    src="{{ getFile('user', @Auth::user()->image) }}"
                                                    alt="pp" />
                                                </figure>
                                            </div>
                                            <div class="col align-self-center ps-0">
                                                <h6 class="mb-0"><span
                                                        class="username">{{ @Auth::user()->fname . ' ' . @Auth::user()->fname }}</span>
                                                </h6>
                                                <p class="text-muted small">Balance:  {{ number_format(auth()->user()->balance, 2) }} </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div><a class="dropdown-item" href="{{ url('profile/setting') }}">My Profile</a>
                                    </div>
                                    <div>
                                        <div><a class="dropdown-item" href="{{ url('2fa') }}">2FA</a>
                                        </div>
                                        <div><a class="dropdown-item" href="{{ url('/logout') }}">Logout</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </nav>
    </header>
    <!-- Header ends -->

    <!-- Sidebar -->
    <div class="sidebar-wrap">
        <div class="sidebar">
            <div class="container">
                <!-- user information -->
                <div class="row text-center collapse " id="usersidebarprofile">
                    <div class="col-12">
                        <div class="avatar avatar-100 rounded-circle shadow-sm mb-3 bg-white">
                            <figure class="avatar avatar-90 rounded-circle coverimg">
                                <img id="file-id-preview"
                                src="{{ getFile('user', @Auth::user()->image) }}"
                                alt="pp" />
                            </figure>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <h6 class="mb-1" id="usernamedisplay">{{ @Auth::user()->fname . ' ' . @Auth::user()->fname }}</h6>
                    </div>
                </div>

                <!-- user menu navigation -->
                <div class="row mb-4">
                    <div class="col-12 px-0">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/dashboard') }}">
                                    <div class="avatar avatar-40 icon"><i class="bi bi-house-door"></i></div>
                                    <div class="col">Dashboard</div>
                                    <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    data-bs-auto-close="false" data-bs-display="static" href="#"
                                    role="button" aria-expanded="false">
                                    <div class="avatar avatar-40 icon"><i class="bi bi-coin"></i></div>
                                    <div class="col">Investment</div>
                                    <div class="arrow"><i class="bi bi-chevron-down plus"></i> <i
                                            class="bi bi-chevron-up minus"></i>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item nav-link" href="{{ url('investmentplan') }}">
                                            <div class="avatar avatar-40 icon"><i class="bi bi-speedometer2"></i>
                                            </div>
                                            <div class="col align-self-center">Investment Plans</div>
                                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item nav-link" href="{{ url('invest/log') }}">
                                            <div class="avatar avatar-40 icon"><i class="bi bi-currency-bitcoin"></i>
                                            </div>
                                            <div class="col align-self-center">Invest log</div>
                                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    data-bs-auto-close="false" data-bs-display="static" href="#"
                                    role="button" aria-expanded="false">
                                    <div class="avatar avatar-40 icon"><i class="bi bi-hdd-network"></i></div>
                                    <div class="col">Deposit</div>
                                    <div class="arrow"><i class="bi bi-chevron-down plus"></i> <i
                                            class="bi bi-chevron-up minus"></i>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item nav-link" href="{{ url('deposit') }}">
                                            <div class="avatar avatar-40 icon"><i class="bi bi-grid"></i>
                                            </div>
                                            <div class="col align-self-center">Deposit</div>
                                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item nav-link" href="{{ url('deposit/log') }}">
                                            <div class="avatar avatar-40 icon"><i class="bi bi-speedometer"></i>
                                            </div>
                                            <div class="col align-self-center">Deposit log</div>
                                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    data-bs-auto-close="false" data-bs-display="static" href="#"
                                    role="button" aria-expanded="false">
                                    <div class="avatar avatar-40 icon"><i class="bi bi-boxes"></i></div>
                                    <div class="col">Withdraw</div>
                                    <div class="arrow"><i class="bi bi-chevron-down plus"></i> <i
                                            class="bi bi-chevron-up minus"></i>
                                    </div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item nav-link" href="{{ url('withdraw') }}">
                                            <div class="avatar avatar-40 icon"><i class="bi bi-box"></i>
                                            </div>
                                            <div class="col align-self-center">Withdraw</div>
                                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item nav-link" href="{{ url('withdraw/all') }}">
                                            <div class="avatar avatar-40 icon"><i class="bi bi-clipboard-check"></i>
                                            </div>
                                            <div class="col align-self-center">Withdraw log</div>
                                            <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('interest/log') }}">
                                    <div class="avatar avatar-40 icon"><i class="bi bi-house-door"></i></div>
                                    <div class="col">Profit log</div>
                                    <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('transaction/log') }}">
                                    <div class="avatar avatar-40 icon"><i class="bi bi-house-door"></i></div>
                                    <div class="col">Transaction log</div>
                                    <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('commision') }}">
                                    <div class="avatar avatar-40 icon"><i class="bi bi-house-door"></i></div>
                                    <div class="col">Refferal log</div>
                                    <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                </a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('ticket') }}">
                                    <div class="avatar avatar-40 icon"><i class="bi bi-house-door"></i></div>
                                    <div class="col">Support</div>
                                    <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                </a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('logout') }}">
                                    <div class="avatar avatar-40 icon"><i class="bi bi-house-door"></i></div>
                                    <div class="col">logout</div>
                                    <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Sidebar ends -->

    <!-- Begin page content -->
    <main class="main mainheight">
        @yield('content2')
    </main>
    <footer class="footer text-white">
        <div class="container-fluid text-center">
            <p class="text-secondary small">Copyright @2024, Spark-X</p>
            <ul class="nav justify-content-center small">
                <li class="nav-item"><a class="nav-link" href="404">Help</a></li>
                <li class="nav-item">|</li>
                <li class="nav-item"><a class="nav-link" href="404">Terms of Use</a></li>
                <li class="nav-item">|</li>
                <li class="nav-item"><a class="nav-link" href="https://spark-x.online/privacy/policy">Privacy Policy</a></li>
            </ul>
        </div>
    </footer>
    <!-- Rightbar -->
    <div class="rightbar-wrap">
        <div class="rightbar">

            <!-- chat window -->
            <div class="chatwindow d-none" id="chatwindow">
                <div class="card border-0 h-100">
                    <div class="input-group input-group-md">
                        <span class="input-group-text text-theme"><i class="bi bi-person-plus"></i></span>
                        <input type="text" class="form-control" placeholder="Start searching... "
                            value="" />
                        <div class="dropdown input-group-text rounded px-0">
                            <button class="btn btn-sm btn-link dd-arrow-none" type="button" id="statuschat"
                                data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="statuschat">
                                <li><a class="dropdown-item" href="javascript:void(0)"><span
                                            class="vm me-1 bg-success rounded-circle d-inline-block p-1"></span>
                                        Online</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)"><span
                                            class="vm me-1 bg-warning rounded-circle d-inline-block p-1"></span>
                                        Away</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)"><span
                                            class="vm me-1 bg-danger rounded-circle d-inline-block p-1"></span>
                                        Offline</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)"><span
                                            class="vm me-1 bg-secondary rounded-circle d-inline-block p-1"></span>
                                        Disabled</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-header">
                        <div class="row">
                            <div class="col d-grid">
                                <button class="btn btn-outline-secondary border" type="button"><i
                                        class="bi bi-camera-video me-2"></i> Meet</button>
                            </div>
                            <div class="col d-grid">
                                <button class="btn btn-outline-secondary border" type="button"><i
                                        class="bi bi-chat-right-text me-2"></i> Chat</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body h-100 overflow-y-auto p-0">
                        <ul class="list-group list-group-flush bg-none rounded-0 ">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-44 coverimg rounded-circle">
                                            <img src="./assets/img/user-2.jpg" alt="" />
                                        </figure>
                                    </div>
                                    <div class="col-9 align-self-center ps-0">
                                        <div class="row g-0">
                                            <div class="col-8">
                                                <p class="text-truncate mb-0">Angelina Devid</p>
                                            </div>
                                            <div class="col-4 text-end"><small class="text-muted fs-10 mb-1"><i
                                                        class="bi bi-check"></i> 2:00 am</small></div>
                                        </div>
                                        <p class="text-secondary small text-truncate">Spread love and spread this
                                            template</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-44 rounded-circle bg-theme">
                                            <span class="h6 vm">JM</span>
                                        </figure>
                                    </div>
                                    <div class="col-9 align-self-center ps-0">
                                        <div class="row g-0">
                                            <div class="col-8">
                                                <p class="text-truncate mb-0">Mr. Jack Mario</p>
                                            </div>
                                            <div class="col-4 text-end"><small class="text-muted fs-10 mb-1"><i
                                                        class="bi bi-check-all"></i> 2:00 am</small></div>
                                        </div>
                                        <p class="text-secondary small text-truncate">Spread love and spread this
                                            template</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-44 coverimg rounded-circle">
                                            <img src="./assets/img/user-4.jpg" alt="" />
                                        </figure>
                                    </div>
                                    <div class="col-9 align-self-center ps-0">
                                        <div class="row g-0">
                                            <div class="col-8">
                                                <p class="text-truncate mb-0">Roberto Carlos</p>
                                            </div>
                                            <div class="col-4 text-end"><small class="text-muted fs-10 mb-1"><i
                                                        class="bi bi-check-all text-info"></i> 2:00 am</small></div>
                                        </div>
                                        <p class="text-secondary small text-truncate">Spread love and spread this
                                            template</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-44 coverimg rounded-circle">
                                            <img src="./assets/img/user-1.jpg" alt="" />
                                        </figure>
                                    </div>
                                    <div class="col-9 align-self-center ps-0">
                                        <div class="row g-0">
                                            <div class="col-8">
                                                <p class="text-truncate mb-0">The Maxartkiller</p>
                                            </div>
                                            <div class="col-4 text-end"><small class="text-muted fs-10 mb-1"><i
                                                        class="bi bi-check-all text-success"></i> 2 days ago</small>
                                            </div>
                                        </div>
                                        <p class="text-secondary small text-truncate">Spread love and spread this
                                            template</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-44 rounded-circle bg-warning text-white">
                                            <span class="h6 vm">JC</span>
                                        </figure>
                                    </div>
                                    <div class="col-9 align-self-center ps-0">
                                        <div class="row g-0">
                                            <div class="col-8">
                                                <p class="text-truncate mb-0">Ms. Jully CTO</p>
                                            </div>
                                            <div class="col-4 text-end"><small class="text-muted fs-10 mb-1"><i
                                                        class="bi bi-check-all"></i> 4 days ago</small></div>
                                        </div>
                                        <p class="text-secondary small text-truncate">Spread love and spread this
                                            template</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item disabled" data-bs-toggle="modal"
                                data-bs-target="#chatmodalwindow">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-44 rounded-circle bg-success text-white">
                                            <span class="h6 vm">JC</span>
                                        </figure>
                                    </div>
                                    <div class="col-9 align-self-center ps-0">
                                        <div class="row g-0">
                                            <div class="col-8">
                                                <p class="text-truncate mb-0">Aswatthma D-Plan</p>
                                            </div>
                                            <div class="col-4 text-end"><small class="text-muted fs-10 mb-1"><i
                                                        class="bi bi-check"></i> 1 mo ago</small></div>
                                        </div>
                                        <p class="text-secondary small text-truncate">Spread love and spread this
                                            template</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-44 coverimg rounded-circle bg-theme">
                                            <img src="./assets/img/favicon72.png" alt="" />
                                        </figure>
                                    </div>
                                    <div class="col-9 align-self-center ps-0">
                                        <div class="row g-0">
                                            <div class="col-8">
                                                <p class="text-truncate mb-0">Spark-X Support</p>
                                            </div>
                                            <div class="col-4 text-end"><small class="text-muted fs-10 mb-1"><i
                                                        class="bi bi-check"></i> 2:00 am</small></div>
                                        </div>
                                        <p class="text-secondary small text-truncate">Thank you for connecting</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-44 rounded-circle bg-theme">
                                            <span class="h6 vm">JM</span>
                                        </figure>
                                    </div>
                                    <div class="col-9 align-self-center ps-0">
                                        <div class="row g-0">
                                            <div class="col-8">
                                                <p class="text-truncate mb-0">Mr. Jack Mario</p>
                                            </div>
                                            <div class="col-4 text-end"><small class="text-muted fs-10 mb-1"><i
                                                        class="bi bi-check-all"></i> 2:00 am</small></div>
                                        </div>
                                        <p class="text-secondary small text-truncate">Spread love and spread this
                                            template</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-44 coverimg rounded-circle">
                                            <img src="./assets/img/user-4.jpg" alt="" />
                                        </figure>
                                    </div>
                                    <div class="col-9 align-self-center ps-0">
                                        <div class="row g-0">
                                            <div class="col-8">
                                                <p class="text-truncate mb-0">Roberto Carlos</p>
                                            </div>
                                            <div class="col-4 text-end"><small class="text-muted fs-10 mb-1"><i
                                                        class="bi bi-check-all text-info"></i> 2:00 am</small></div>
                                        </div>
                                        <p class="text-secondary small text-truncate">Spread love and spread this
                                            template</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-44 coverimg rounded-circle">
                                            <img src="./assets/img/user-1.jpg" alt="" />
                                        </figure>
                                    </div>
                                    <div class="col-9 align-self-center ps-0">
                                        <div class="row g-0">
                                            <div class="col-8">
                                                <p class="text-truncate mb-0">The Maxartkiller</p>
                                            </div>
                                            <div class="col-4 text-end"><small class="text-muted fs-10 mb-1"><i
                                                        class="bi bi-check-all text-success"></i> 2 days ago</small>
                                            </div>
                                        </div>
                                        <p class="text-secondary small text-truncate">Spread love and spread this
                                            template</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-44 rounded-circle bg-warning text-white">
                                            <span class="h6 vm">JC</span>
                                        </figure>
                                    </div>
                                    <div class="col-9 align-self-center ps-0">
                                        <div class="row g-0">
                                            <div class="col-8">
                                                <p class="text-truncate mb-0">Ms. Jully CTO</p>
                                            </div>
                                            <div class="col-4 text-end"><small class="text-muted fs-10 mb-1"><i
                                                        class="bi bi-check-all"></i> 4 days ago</small></div>
                                        </div>
                                        <p class="text-secondary small text-truncate">Spread love and spread this
                                            template</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- chat window ends -->

            <!-- notifications window -->
            <div class="notificationwindow d-none h-100 overflow-y-auto" id="notificationwindow">
                <div class="card border-0 mb-2">
                    <div class="input-group input-group-md">
                        <span class="input-group-text text-theme"><i class="bi bi-calendar-event"></i></span>
                        <input type="text" class="form-control" value="" id="notificationdaterange" />
                    </div>
                    <div class="card-body p-0 calendarwindow" id="calendardisplay">
                    </div>
                </div>
                <div class="card border-0 mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <figure class="avatar avatar-40 coverimg rounded-circle">
                                    <img src="./assets/img/user-2.jpg" alt="" />
                                </figure>
                            </div>
                            <div class="col ps-0">
                                <p><a href="profile.html">Angelina David</a>, <a href="profile.html">John
                                        McMillan</a> and <span class="fw-medium">36 others</span> are also order from
                                    same website</p>
                                <p class="text-secondary small">2:14 pm <a href="javascript:void(0)"
                                        class="float-end text-secondary text-muted"><i class="bi bi-trash"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <figure class="avatar avatar-40 rounded-circle bg-theme">
                                    <span class="h6 vm">JM</span>
                                </figure>
                            </div>
                            <div class="col ps-0">
                                <p><a href="profile.html">Jack Mario</a> commented: "This one is most usable design
                                    with great user experience. w..."</p>
                                <p class="text-secondary small">2 days ago <a href="javascript:void(0)"
                                        class="float-end text-secondary text-muted"><i class="bi bi-trash"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alert alert-warning mb-2">
                    <div class="row">
                        <div class="col-auto">
                            <figure class="avatar avatar-40 rounded-circle bg-warning text-white">
                                <i class="bi bi-bell"></i>
                            </figure>
                        </div>
                        <div class="col ps-0">
                            <p>Your subscription going to expire soon. Please <a
                                    href="profile-subscription.html">upgrade</a> to get service interrupt free.</p>
                            <p class="text-secondary small">4 days ago <a href="javascript:void(0)"
                                    class="float-end text-secondary text-muted"><i class="bi bi-trash"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="card border-0 mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <figure class="avatar avatar-40 coverimg rounded-circle">
                                    <img src="./assets/img/user-4.jpg" alt="" />
                                </figure>
                            </div>
                            <div class="col ps-0">
                                <p><a href="finance-sendmoney.html">Roberto Carlos</a> has requested to send $120.00
                                    money.</p>
                                <p class="text-secondary small">4 days ago <a href="javascript:void(0)"
                                        class="float-end text-secondary text-muted"><i class="bi bi-trash"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <figure class="avatar avatar-40 rounded-circle bg-light-theme">
                                    <i class="bi bi-calendar-event"></i>
                                </figure>
                            </div>
                            <div class="col ps-0">
                                <p class="h6 fw-medium">WINUX: getSpark-X</p>
                                <p>Learning for better user experience on Universal app. development</p>
                                <div class="mb-3">
                                    <figure class="avatar avatar-24 coverimg rounded-circle"
                                        data-bs-toggle="tooltip" title="Angelina David">
                                        <img src="./assets/img/user-2.jpg" alt="" />
                                    </figure>
                                    <figure class="avatar avatar-24 coverimg rounded-circle"
                                        data-bs-toggle="tooltip" title="Switty Johnson">
                                        <img src="./assets/img/user-3.jpg" alt="" />
                                    </figure>
                                    <div class="avatar avatar-24 bg-light-theme rounded-circle">
                                        <small class="fs-10 vm">9+</small>
                                    </div>
                                    <span class="text-secondary small"> are attending</span>
                                </div>
                                <p class="text-secondary small">4 days ago <a href="javascript:void(0)"
                                        class="float-end text-secondary text-muted"><i class="bi bi-trash"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <figure class="avatar avatar-40 coverimg rounded-circle bg-theme">
                                    <img src="./assets/img/favicon72.png" alt="" />
                                </figure>
                            </div>
                            <div class="col ps-0">
                                <p><a href="profile.html">The Maxartkiller</a> commented: "Thank you so much for this
                                    deep view at getSpark-X..."</p>
                                <p class="text-secondary small">6 days ago <a href="javascript:void(0)"
                                        class="float-end text-secondary text-muted"><i class="bi bi-trash"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- notifications window ends -->

        </div>
    </div>
    <!-- Rightbar ends -->

    <!-- chat window -->
    <div class="chatboxes w-auto align-right mb-2">
        <!-- dropdown for each user  -->
        <div class="dropstart">
            <div class="dd-arrow-none dropdown-toggle" id="thefirstchat" data-bs-display="static"
                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="button">
                <span class="position-absolute top-0 start-100 p-1 bg-danger border border-light rounded-circle">
                    <span class="visually-hidden">New alerts</span>
                </span>
                <figure class="avatar avatar-40 coverimg rounded-circle shadow">
                    <img src="./assets/img/user-2.jpg" alt="">
                </figure>
            </div>
            <div class="dropdown-menu dropdown-menu-middle w-300 mb-2 p-0">
                <!-- chat box here  -->
                <div class="card shadow-none border-0">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col align-self-center">
                                <p class="mb-0">Angelina Devid</p>
                                <p class="text-secondary small">1 hr ago</p>
                            </div>
                            <div class="col-auto">
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                    <button type="button"
                                        class="btn btn-sm btn-square btn-outline-secondary border"><i
                                            class="bi bi-camera-video"></i></button>
                                    <button type="button"
                                        class="btn btn-sm btn-square btn-outline-secondary border"><i
                                            class="bi bi-person-plus"></i></button>
                                </div>
                            </div>
                            <div class="col-auto ps-0 align-self-center">
                                <div class="dropdown d-inline-block">
                                    <a class="dd-arrow-none" data-bs-toggle="dropdown" data-bs-auto-close="true"
                                        aria-expanded="false" role="button">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Add Contact</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Search</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Clear Chat</a></li>
                                        <li><a class="dropdown-item text-danger"
                                                href="javascript:void(0)">Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body overflow-y-auto h-250 chat-list">
                        <div class="row no-margin left-chat">
                            <div class="col-12">
                                <div class="chat-block">
                                    <div class="row">
                                        <div class="col">
                                            Hi!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="text-secondary small time"><i class="bi bi-check"></i> 9:00 pm</p>
                            </div>
                        </div>
                        <div class="row no-margin right-chat">
                            <div class="col-12">
                                <div class="chat-block">
                                    <div class="row">
                                        <div class="col">
                                            Hi!<br>Yes please tell us your query.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-end">
                                <p class="text-secondary small time"><i class="bi bi-check"></i> 9:10 pm</p>
                            </div>
                        </div>
                        <div class="row no-margin">
                            <div class="col-12 text-center">
                                <span class="alert-warning text-secondary mx-auto btn btn-sm py-1 mb-3">26 November
                                    2021</span>
                            </div>
                        </div>
                        <div class="row no-margin left-chat">
                            <div class="col-12">
                                <div class="chat-block">
                                    <div class="row">
                                        <div class="col">
                                            Spark-X is amazing and we thank you. How can we buy?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="text-secondary small time"><i class="bi bi-check-all text-primary"></i>
                                    8:00 pm
                                </p>
                            </div>
                        </div>
                        <div class="row no-margin right-chat">
                            <div class="col-12">
                                <div class="chat-block">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mw-100 position-relative mb-2 figure">
                                                <div class="position-absolute end-0 top-0">
                                                    <button
                                                        class="avatar avatar-36 rounded-circle p-0 btn btn-info text-white shadow-sm m-2">
                                                        <i class="bi bi-download"></i>
                                                    </button>
                                                </div>
                                                <img src="./assets/img/news-4.jpg" alt="" class="mw-100">
                                            </div>
                                            Thank you too. You can buy it from preview page and click on buy now.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-end">
                                <p class="text-secondary small time"><i class="bi bi-check-all text-primary"></i>
                                    8:00 pm
                                </p>
                            </div>
                        </div>
                        <div class="row no-margin">
                            <div class="col-12  text-center">
                                <span class="alert-warning text-secondary mx-auto btn btn-sm py-1 mb-3">25 November
                                    2019</span>
                            </div>
                        </div>
                        <div class="row no-margin left-chat">
                            <div class="col-12">
                                <div class="chat-block">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mw-100 position-relative mb-2 figure">
                                                <video src="https://maxartkiller.com/website/maxartkiller.mp4"
                                                    controls="" preload="none"></video>
                                            </div>
                                            We also love this small presentation.
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <p class="text-secondary small time"><i
                                            class="bi bi-check-all text-primary"></i> 8:00
                                        pm
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row no-margin right-chat">
                            <div class="col-12">
                                <div class="chat-block">
                                    <div class="row">
                                        <div class="col">
                                            <p>Ohh... Thats great. Spark-X is HTML template can be used in various
                                                business domains like
                                                Manufacturing, inventory, IT, administration etc.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-end">
                                <p class="text-secondary small time"><i class="bi bi-check-all text-primary"></i>
                                    8:00 pm
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-0">
                        <div class="input-group input-group-md">
                            <button class="btn btn-sm btn-link px-2"><i class="bi bi-emoji-smile"></i></button>
                            <button class="btn btn-sm btn-link px-2"><i class="bi bi-paperclip"></i></button>
                            <input type="text" class="form-control" placeholder="Type your message... "
                                value="">
                            <button class="btn btn-sm btn-link px-2" type="button">
                                <i class="bi bi-send"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="chat-close btn btn-danger text-white"><i class="bi bi-x"></i></button>
        </div>
        <!-- dropdown for each user  -->
        <div class="dropstart">
            <div class="dd-arrow-none dropdown-toggle" data-bs-display="static" data-bs-toggle="dropdown"
                data-bs-auto-close="outside" aria-expanded="false" role="button">
                <span
                    class="position-absolute top-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle">
                    <span class="visually-hidden">New alerts</span>
                </span>
                <figure class="avatar avatar-40 coverimg rounded-circle shadow">
                    <img src="./assets/img/user-4.jpg" alt="">
                </figure>
            </div>
            <div class="dropdown-menu dropdown-menu-middle w-300 mb-2 p-0">
                <!-- chat box here  -->
                <div class="card shadow-none border-0">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col align-self-center">
                                <p class="mb-0">Roberto Carlos</p>
                                <p class="text-secondary small">10 min ago</p>
                            </div>
                            <div class="col-auto">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-sm btn-outline-secondary border"><i
                                            class="bi bi-camera-video"></i></button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary border"><i
                                            class="bi bi-person-plus"></i></button>
                                </div>
                            </div>
                            <div class="col-auto ps-0 align-self-center">
                                <div class="dropdown d-inline-block">
                                    <a class="dd-arrow-none" data-bs-toggle="dropdown" data-bs-auto-close="true"
                                        aria-expanded="false" role="button">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Add Contact</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Search</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Clear Chat</a></li>
                                        <li><a class="dropdown-item text-danger"
                                                href="javascript:void(0)">Report</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body overflow-y-auto h-250 chat-list">
                        <div class="row no-margin left-chat">
                            <div class="col-12">
                                <div class="chat-block">
                                    <div class="row">
                                        <div class="col">
                                            Hi!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="text-secondary small time"><i class="bi bi-check"></i> 9:00 pm</p>
                            </div>
                        </div>
                        <div class="row no-margin right-chat">
                            <div class="col-12">
                                <div class="chat-block">
                                    <div class="row">
                                        <div class="col">
                                            Hi!<br>Yes please tell us your query.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-end">
                                <p class="text-secondary small time"><i class="bi bi-check"></i> 9:10 pm</p>
                            </div>
                        </div>
                        <div class="row no-margin">
                            <div class="col-12 text-center">
                                <span class="alert-warning text-secondary mx-auto btn btn-sm py-1 mb-3">26 November
                                    2021</span>
                            </div>
                        </div>
                        <div class="row no-margin left-chat">
                            <div class="col-12">
                                <div class="chat-block">
                                    <div class="row">
                                        <div class="col">
                                            Spark-X is amazing and we thank you. How can we buy?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="text-secondary small time"><i class="bi bi-check-all text-primary"></i>
                                    8:00 pm
                                </p>
                            </div>
                        </div>
                        <div class="row no-margin right-chat">
                            <div class="col-12">
                                <div class="chat-block">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mw-100 position-relative mb-2 figure">
                                                <div class="position-absolute end-0 top-0">
                                                    <button
                                                        class="avatar avatar-36 rounded-circle p-0 btn btn-info text-white shadow-sm m-2">
                                                        <i class="bi bi-download"></i>
                                                    </button>
                                                </div>
                                                <img src="./assets/img/news-4.jpg" alt="" class="mw-100">
                                            </div>
                                            Thank you too. You can buy it from preview page and click on buy now.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-end">
                                <p class="text-secondary small time"><i class="bi bi-check-all text-primary"></i>
                                    8:00 pm
                                </p>
                            </div>
                        </div>
                        <div class="row no-margin">
                            <div class="col-12  text-center">
                                <span class="alert-warning text-secondary mx-auto btn btn-sm py-1 mb-3">25 November
                                    2019</span>
                            </div>
                        </div>
                        <div class="row no-margin left-chat">
                            <div class="col-12">
                                <div class="chat-block">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mw-100 position-relative mb-2 figure">
                                                <video src="https://maxartkiller.com/website/maxartkiller.mp4"
                                                    controls="" preload="none"></video>
                                            </div>
                                            We also love this small presentation.
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <p class="text-secondary small time"><i
                                            class="bi bi-check-all text-primary"></i> 8:00
                                        pm
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row no-margin right-chat">
                            <div class="col-12">
                                <div class="chat-block">
                                    <div class="row">
                                        <div class="col">
                                            <p>Ohh... Thats great. Spark-X is HTML template can be used in various
                                                business domains like
                                                Manufacturing, inventory, IT, administration etc.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-end">
                                <p class="text-secondary small time"><i class="bi bi-check-all text-primary"></i>
                                    8:00 pm
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-0">
                        <div class="input-group input-group-md">
                            <button class="btn btn-sm btn-link px-2"><i class="bi bi-emoji-smile"></i></button>
                            <button class="btn btn-sm btn-link px-2"><i class="bi bi-paperclip"></i></button>
                            <input type="text" class="form-control" placeholder="Type your message... "
                                value="">
                            <button class="btn btn-sm btn-link px-2" type="button">
                                <i class="bi bi-send"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="chat-close btn btn-danger text-white"><i class="bi bi-x"></i></button>
        </div>
    </div>

    <!-- Modal sent money -->
    <div class="modal fade" id="sentmoney" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header d-block">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <i class="bi bi-arrow-up-right h5 avatar avatar-40 bg-light-theme rounded"></i>
                        </div>
                        <div class="col">
                            <h6 class="fw-medium mb-0">Sent Money</h6>
                            <p class="small text-secondary">Keep the required fields only</p>
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <input class="form-control amount-input text-center mb-3" type="text" placeholder="0.00">

                    <h6 class="fw-medium mb-2">Sent Money From:</h6>
                    <div class="row mb-2">
                        <div class="col-12 col-md-6 mb-2">
                            <div class="input-group input-group-md rounded">
                                <span class="input-group-text text-theme"><i class="bi bi-cash"></i></span>
                                <select class=" form-control simplechosen">
                                    <option>Wallet</option>
                                    <option selected>Bank</option>
                                    <option>Crypto</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="input-group input-group-md rounded">
                                <span class="input-group-text text-theme"><i class="bi bi-bank"></i></span>
                                <select class="form-control simplechosen">
                                    <option>CA Bank</option>
                                    <option>Larson Bank</option>
                                    <option>Truelance Bank</option>
                                    <option selected>Cabilian Bank</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p class="text-secondary small mb-4">Balance: 966800.00 USD</p>

                    <h6 class="fw-medium mb-2">Sent Money to:</h6>
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 mb-2">
                            <div class="input-group input-group-md rounded">
                                <span class="input-group-text text-theme"><i class="bi bi-phone"></i></span>
                                <input class="form-control" type="text" placeholder="Enter Phone">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-2">
                            <div class="input-group input-group-md rounded">
                                <span class="input-group-text text-theme"><i class="bi bi-bank"></i></span>
                                <input class="form-control" type="text" placeholder="Bank Account number">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-2">
                            <div class="input-group input-group-md rounded">
                                <span class="input-group-text text-theme"><i class="bi bi-person"></i></span>
                                <input class="form-control" type="text" placeholder="Account holder name">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-2">
                            <div class="input-group input-group-md rounded">
                                <span class="input-group-text text-theme"><i class="bi bi-code-square"></i></span>
                                <input class="form-control" type="text" placeholder="Bank Code">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-theme w-100">Transfer now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Bill pay -->
    <div class="modal fade" id="billpay" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header d-block">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <i class="bi bi-receipt-cutoff h5 avatar avatar-40 bg-light-green text-green rounded"></i>
                        </div>
                        <div class="col">
                            <h6 class="fw-medium mb-0">Pay Bills</h6>
                            <p class="small text-secondary">Keep the required fields only</p>
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <h6 class="fw-medium mb-2">Pay Bill From:</h6>
                    <div class="row mb-2">
                        <div class="col-12 col-md-6 mb-2">
                            <div class="input-group input-group-md rounded">
                                <span class="input-group-text text-theme"><i class="bi bi-cash"></i></span>
                                <select class=" form-control simplechosen">
                                    <option selected>Wallet</option>
                                    <option>Bank</option>
                                    <option>Crypto</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="input-group input-group-md rounded">
                                <span class="input-group-text text-theme"><i class="bi bi-bank"></i></span>
                                <select class="form-control simplechosen">
                                    <option>CA Bank</option>
                                    <option>Larson Bank</option>
                                    <option>Truelance Bank</option>
                                    <option selected>Cabilian Bank</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p class="text-secondary small mb-4">Balance: 966800.00 USD</p>

                    <h6 class="fw-medium mb-2">Bill Information Money to:</h6>
                    <div class="row align-items-center mb-2">
                        <div class="col-12 col-md-6 mb-2">
                            <div class="input-group input-group-md rounded">
                                <span class="input-group-text text-theme"><i class="bi bi-map"></i></span>
                                <select class="form-control simplechosen">
                                    <option selected>United States</option>
                                    <option>United Kingdom</option>
                                    <option>Russia</option>
                                    <option>Australia</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-2">
                            <div class="input-group input-group-md rounded">
                                <span class="input-group-text text-theme"><i class="bi bi-signpost"></i></span>
                                <select class=" form-control simplechosen">
                                    <option selected>New York</option>
                                    <option>New Jersey</option>
                                    <option>Los Angeles</option>
                                    <option>Chicago</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 mb-2">
                            <div class="input-group input-group-md rounded">
                                <span class="input-group-text text-theme"><i class="bi bi-bank"></i></span>
                                <input class="form-control" type="text" placeholder="Consumer ID">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-2">
                            <div class="input-group input-group-md rounded">
                                <span class="input-group-text text-theme"><i class="bi bi-phone"></i></span>
                                <input class="form-control" type="text" placeholder="Consumer name">
                            </div>
                        </div>
                    </div>
                    <p class="text-center text-secondary mb-2">Bill Amount</p>
                    <input class="form-control amount-input text-center" type="text" placeholder="0.00"
                        value="1500.00">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-theme w-100">Pay now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Ticket Book -->
    <div class="modal fade" id="ticketbookmovie" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header d-block">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <i class="bi bi-ticket-perforated h5 avatar avatar-40 bg-light-red text-red rounded"></i>
                        </div>
                        <div class="col">
                            <h6 class="fw-medium mb-0">Book ticket</h6>
                            <p class="small text-secondary">Keep the required fields only</p>
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3 mb-md-0">
                            <div class="bg-gradient-theme-light rounded overflow-hidden mb-3 border">
                                <!-- Swiper -->
                                <div class="swiper movieposter">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="./assets/img/movie1.jpg" alt="" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="./assets/img/movie2.jpg" alt="" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="./assets/img/movie3.jpg" alt="" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="./assets/img/movie1.jpg" alt="" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="./assets/img/movie2.jpg" alt="" />
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="./assets/img/movie3.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                            <p class="text-opac text-center text-secondary small">Posters are demo purpose only</p>
                            <div class="row">
                                <div class="col-12 col-md-12 mb-2">
                                    <div class="input-group input-group-md rounded">
                                        <span class="input-group-text text-theme"><i class="bi bi-film"></i></span>
                                        <select class=" form-control">
                                            <option selected>Brahmastra</option>
                                            <option>Shang-Chi</option>
                                            <option>Minari</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8 mb-2">
                                    <div class="input-group input-group-md rounded">
                                        <span class="input-group-text text-theme"><i
                                                class="bi bi-calendar-event"></i></span>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-2 ps-0">
                                    <div class="input-group input-group-md rounded">
                                        <span class="input-group-text text-theme"><i class="bi bi-clock"></i></span>
                                        <select class="form-control">
                                            <option>9:00 am</option>
                                            <option>12:30 pm</option>
                                            <option>3:00 pm</option>
                                            <option selected>9:00 pm</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="input-group input-group-md rounded">
                                        <span class="input-group-text text-theme"><i class="bi bi-at h5"></i></span>
                                        <input type="email" class=" form-control" placeholder="Email address">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-3 mb-md-0 align-self-center">
                            <div class="row gx-2 mb-3 small text-secondary text-center">
                                <div class="col">
                                    <p class="">This is Screen Side</p>
                                </div>
                            </div>
                            <div class="seatwrap mb-3">
                                <div class="linerow">
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                </div>
                                <div class="linerow">
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair occupied"></div>
                                    <div class="chair occupied"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                </div>
                                <div class="linerow">
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair occupied"></div>
                                    <div class="chair occupied"></div>
                                </div>
                                <div class="linerow">
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                </div>
                                <div class="linerow">
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair occupied"></div>
                                    <div class="chair occupied"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                </div>
                                <div class="linerow">
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair occupied"></div>
                                    <div class="chair occupied"></div>
                                    <div class="chair occupied"></div>
                                    <div class="chair"></div>
                                </div>
                                <div class="linerow">
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair"></div>
                                    <div class="chair occupied"></div>
                                    <div class="chair occupied"></div>
                                    <div class="chair occupied"></div>
                                    <div class="chair"></div>
                                </div>
                            </div>
                            <div class="row gx-2 justify-content-center mb-4 small text-secondary">
                                <div class="col-auto">
                                    <div class="chair"></div> Available
                                </div>
                                <div class="col-auto">
                                    <div class="chair selected"></div> Selected
                                </div>
                                <div class="col-auto">
                                    <div class="chair occupied"></div> Occupied
                                </div>
                            </div>
                            <p class="text-center text-secondary">Bill Amount for <span class="fw-medium text-theme"
                                    id="count">0</span> seat(s)</p>
                            <input class="form-control amount-input text-center " type="text"
                                placeholder="0.00" id="total">

                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-theme">Book now</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/vendor/bootstrap-5/dist/js/bootstrap.bundle.js') }}">
    </script>

    <!-- Customized jquery file  -->
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/js/main.js') }}"></script>
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/js/color-scheme.js') }}"></script>

    <!-- PWA app service registration and works -->
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/js/pwa-services.js') }}"></script>

    <!-- date range picker -->
    <script src="{{ asset('asset/theme4/dashboard_assets/cdns/momentjs/latest/moment.min.js') }}"></script>
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/vendor/daterangepicker/daterangepicker.js') }}"></script>

    <!-- chosen script -->
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/vendor/chosen_v1.8.7/chosen.jquery.min.js') }}"></script>

    <!-- Chart js script -->
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/vendor/chart-js-3.3.1/chart.min.js') }}"></script>

    <!-- Progress circle js script -->
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/vendor/progressbar-js/progressbar.min.js') }}"></script>

    <!-- swiper js script -->
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/vendor/swiper-7.3.1/swiper-bundle.min.js') }}"></script>

    <!-- Simple lightbox script -->
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/vendor/simplelightbox/simple-lightbox.jquery.min.js') }}">
    </script>

    <!-- app tour script-->
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/vendor/Product-Tour-Plugin-jQuery/lib.js') }}"></script>

    <!-- Footable table master script-->
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/vendor/fooTable/js/footable.min.js') }}"></script>

    <!-- page level script here -->
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/js/header-title.js') }}"></script>
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/js/finance-wallet.js') }}"></script>
    @stack('script')
    @if (@$general->twak_allow)
        <script type="text/javascript">
            'use strict'
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = "https://embed.tawk.to/{{ @$general->twak_key }}";
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
    @endif
    @if (Session::has('error'))
        {{-- <script>
            "use strict";
            iziToast.error({
                message: "{{ session('error') }}",
                position: 'topRight'
            });
        </script> --}}
        <script>
            // "use strict";
            Swal.fire({
                title: 'Error!',
                text: '{{ session('error') }}',
                icon: 'error',
                confirmButtonText: 'Ok'
            })
        </script>
    @endif
    @if (Session::has('success'))
        <script>
            // "use strict";
            // iziToast.success({
            //     message: "{{ session('success') }}",
            //     position: 'topRight'
            // });
            Swal.fire({
                title: 'Success!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
        </script>
    @endif
    @if (session()->has('notify'))
        @foreach (session('notify') as $msg)
            <script>
                // "use strict";
                // iziToast.{{ $msg[0] }}({
                //     message: "{{ trans($msg[1]) }}",
                //     position: "topRight"
                // });
                Swal.fire({
                    title: '{{ $msg[0] }}!',
                    text: '{{ trans($msg[1]) }}',
                    icon: '{{ $msg[0] }}',
                    confirmButtonText: 'Ok'
                })
            </script>
        @endforeach
    @endif
    @if (@$errors->any())
        <script>
            "use strict";
            @foreach ($errors->all() as $error)
                // iziToast.error({
                //     message: '{{ __($error) }}',
                //     position: "topRight"
                // });
                Swal.fire({
                    title: 'Error!',
                    text: '{{ __($error) }}',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                })
            @endforeach
        </script>
    @endif
    <script>
        'use strict'
        var url = "{{ route('user.changeLang') }}";

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
    <!-- Required jquery and libraries -->

</body>

</html>
