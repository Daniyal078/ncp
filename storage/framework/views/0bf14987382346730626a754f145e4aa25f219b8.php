<link rel="stylesheet" href="<?php echo e(asset('asset/theme4/dashboard_assets/assets/css/dashlitee5ca.css')); ?>">
<!doctype html>
<html lang="en" class="dark-mode">


<!-- Mirrored from maxartkiller.com/website/adminuxmobile2/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2024 05:27:50 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>AdminUX - Admin, Dashboard, Web Application HTML template, UI kit, UI templates</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?php echo e(asset('asset/theme4/dashboard_assets/assets/img/favicon180.png')); ?>"
        sizes="180x180">
    <link rel="icon" href="<?php echo e(asset('asset/theme4/dashboard_assets/assets/img/favicon32.png')); ?>" sizes="32x32"
        type="image/png">
    <link rel="icon" href="<?php echo e(asset('asset/theme4/dashboard_assets/assets/img/favicon16.png')); ?>" sizes="16x16"
        type="image/png">

    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <!-- bootstrap icons -->
    <link rel="stylesheet"
        href="<?php echo e(asset('asset/theme4/dashboard_assets/cdns/npm/bootstrap-icons%401.8.1/font/bootstrap-icons.css')); ?>">

    <!-- swiper carousel css -->
    <link rel="stylesheet"
        href="<?php echo e(asset('asset/theme4/dashboard_assets/assets/vendor/swiper-7.3.1/swiper-bundle.min.css')); ?>">

    <!-- style css for this template -->
    <link href="<?php echo e(asset('asset/theme4/dashboard_assets/assets/scss/style.css')); ?>" rel="stylesheet" id="style">
</head>

<body class="d-flex flex-column h-100 sidebar-pushcontent sidebar-filled" data-sidebarstyle="sidebar-pushcontent">

    <?php if(@$general->preloader_status): ?>
        <div id="preloader"></div>
    <?php endif; ?>

    <?php if(@$general->allow_modal): ?>
        <?php echo $__env->make('cookieConsent::index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>


    <?php if(@$general->analytics_status): ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e(@$general->analytics_key); ?>"></script>
        <script>
            'use strict'
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());
            gtag("config", "<?php echo e(@$general->analytics_key); ?>");
        </script>
    <?php endif; ?>
    <!-- page loader -->
    <div class="container-fluid h-100 position-fixed loader-wrap bg-blur">
        <div class="row justify-content-center h-100">
            <div class="col-auto align-self-center text-center px-5 leaf">
                <h2 class="mb-1">Admin<b class="fw-bold">UX</b></h2>
                <h6 class="mb-4 text-secondary">Mobile Dashboard UI UX</h6>
                <div class="logo-square animated mb-4">
                    <div class="icon-logo">
                        <img src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/img/logo-icon.png')); ?>"
                            alt="" />
                    </div>
                </div>
                <p class="text-secondary small">Petal of flower being ready to <span
                        class="text-gradient">blossom</span></p>

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

    <!-- background -->
    <div class="coverimg w-100 top-0 start-0 position-absolute" id="image-daytime">
        <div class="overlay"></div>
        <img src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/img/bg-1.jpg')); ?>" alt="" class="w-100" />
    </div>
    <main style="background: #9aa1bb !important;" class="main mainheight container-fluid">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <!-- background ends  -->

    <!-- header -->
    <!-- header ends -->

    <!-- Begin page content -->

    <!-- Required jquery and libraries -->
    <script src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/vendor/bootstrap-5/dist/js/bootstrap.bundle.js')); ?>">
    </script>

    <!-- Customized jquery file  -->
    <script src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/js/color-scheme.js')); ?>"></script>

    <!-- PWA app service registration and works -->
    <script src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/js/pwa-services.js')); ?>"></script>

    <!-- Chart js script -->
    <script src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/vendor/chart-js-3.3.1/chart.min.js')); ?>"></script>

    <!-- Progress circle js script -->
    <script src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/vendor/progressbar-js/progressbar.min.js')); ?>"></script>

    <!-- swiper js script -->
    <script src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/vendor/swiper-7.3.1/swiper-bundle.min.js')); ?>"></script>

    <!-- page level script -->
    <script src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/js/login.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('script'); ?>
    <?php if(@$general->twak_allow): ?>
        <script type="text/javascript">
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
            // iziToast.error({
            //     message: "<?php echo e(session('error')); ?>",
            //     position: 'topRight'
            // });
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
                    title: '<?php echo e($msg[0]); ?>',
                    text: '<?php echo e(trans($msg[1])); ?>',
                    icon: '<?php echo e($msg[0]); ?>',
                    confirmButtonText: 'Ok'
                })
            </script>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <?php if(@$errors->any()): ?>
        <script>
            // "use strict";
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                // iziToast.error({
                //     message: "<?php echo e(__($error)); ?>",
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
        'use strict';

        $(document).ready(function() {
            $('#trial_subscribe').on('click', function(e) {

                e.preventDefault();
                var email = $('#trial_email').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    method: 'POST',
                    url: "<?php echo e(route('subscribe')); ?>",
                    data: {
                        email: email
                    },
                    success: function(response) {

                        if (response.fails) {
                            notify('error', response.errorMsg.email)
                        }

                        if (response.success) {
                            $('#email').val('');
                            notify('success', response.successMsg)

                        }
                    }
                });
            })


        });
    </script>


    <script>
        'use strict'
        var url = "<?php echo e(route('user.changeLang')); ?>";

        $(".changeLang").change(function() {
            if ($(this).val() == '') {
                return false;
            }
            window.location.href = url + "?lang=" + $(this).val();
        });
        //Get the button
        let mybutton = document.getElementById("btn-back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

<script>
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            document.getElementById("city").innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    getLocation();

    function showPosition(position) {
        var lat = position.coords.latitude;
        var lon = position.coords.longitude;
        fetch(`https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${lat}&longitude=${lon}&localityLanguage=en`)
            .then(response => response.json())
            .then(data => {
                document.getElementById("citymy").innerHTML = "City: " + data.city;
                console.log(data.city)
            })
            .catch(error => {
                document.getElementById("citymy").innerHTML = "Couldn't Find";
            });
    }
</script>
</body>


</html>
<?php /**PATH C:\xampp\htdocs\ncp\resources\views/theme4/layout/auth.blade.php ENDPATH**/ ?>