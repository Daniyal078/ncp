<?php
    $contact = content('contact.content');
    $footersociallink = element('footer.element');
?>

<!-- header-section start  -->

<!-- header-section end  -->



<header id="header" class="header-layout1">
    <div id="sticky-header" class="menu-area transparent-header">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="logo">
                                <a href="/"><img
                                        src="<?php echo e(asset('asset/theme4/web_assets/assets/img/logo/logo.png')); ?>"
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
                                    <?php if(Auth::user()): ?>
                                        <li class="header-login"><a class="btn2"
                                                href="<?php echo e(route('user.dashboard')); ?>">Dashboard</a></li>
                                    <?php else: ?>
                                        <li class="header-login"><a class="btn2"
                                                href="<?php echo e(route('user.login')); ?>">Login</a></li>
                                    <?php endif; ?>
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
                <a href="index.html"><img src="<?php echo e(asset('asset/theme4/web_assets/assets/img/logo/logo.png')); ?>"
                        style="height: 35px;" alt="Logo"></a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <ul class="list-wrap">
                <?php if(Auth::user()): ?>
                    <li class="text-center mt-2"><a class="btn" href="<?php echo e(route('user.dashboard')); ?>">Dashboard</a>
                    </li>
                <?php else: ?>
                    <li class="text-center mt-2"><a class="btn" href="<?php echo e(route('user.login')); ?>">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
    <div class="menu-backdrop"></div>
    <!-- End Mobile Menu -->
</header>
<?php /**PATH C:\xampp\htdocs\ncp\resources\views/theme4/layout/header.blade.php ENDPATH**/ ?>