<link rel="stylesheet" href="{{ asset('asset/theme4/dashboard_assets/assets/css/dashlitee5ca.css') }}">
<!doctype html>
<html lang="en" class="dark-mode">


<!-- Mirrored from maxartkiller.com/website/adminuxmobile2/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2024 05:27:50 GMT -->

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
    <link rel="icon" href="{{ asset('asset/theme4/dashboard_assets/assets/img/logo.png') }}" sizes="32x32"
        type="image/png">
    <link rel="icon" href="{{ asset('asset/theme4/dashboard_assets/assets/img/logo.png') }}" sizes="16x16"
        type="image/png">

    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <!-- bootstrap icons -->
    <link rel="stylesheet"
        href="{{ asset('asset/theme4/dashboard_assets/cdns/npm/bootstrap-icons%401.8.1/font/bootstrap-icons.css') }}">

    <!-- swiper carousel css -->
    <link rel="stylesheet"
        href="{{ asset('asset/theme4/dashboard_assets/assets/vendor/swiper-7.3.1/swiper-bundle.min.css') }}">

    <!-- style css for this template -->
    <link href="{{ asset('asset/theme4/dashboard_assets/assets/scss/style.css') }}" rel="stylesheet" id="style">
</head>

<body style="background: #9aa1bb !important;" class="d-flex flex-column h-100 sidebar-pushcontent sidebar-filled" data-sidebarstyle="sidebar-pushcontent">

    @if (@$general->preloader_status)
        <div id="preloader"></div>
    @endif

    @if (@$general->allow_modal)
        @include('cookieConsent::index')
    @endif


    @if (@$general->analytics_status)
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ @$general->analytics_key }}"></script>
        <script>
            'use strict'
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());
            gtag("config", "{{ @$general->analytics_key }}");
        </script>
    @endif
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

    <!-- background -->
    <div style="background: #9aa1bb !important;" class="coverimg w-100 top-0 start-0 position-absolute" id="image-daytime">
        <div class="overlay"></div>
        <img src="{{ asset('asset/theme4/dashboard_assets/assets/img/bg-1.jpg') }}" alt="" class="w-100" />
    </div>
    <main style="background: #9aa1bb !important;" class="main mainheight container-fluid">
        @yield('content')
    </main>
    <!-- background ends  -->

    <!-- header -->
    <!-- header ends -->

    <!-- Begin page content -->

    <!-- Required jquery and libraries -->
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/vendor/bootstrap-5/dist/js/bootstrap.bundle.js') }}">
    </script>

    <!-- Customized jquery file  -->
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/js/main.js') }}"></script>
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/js/color-scheme.js') }}"></script>

    <!-- PWA app service registration and works -->
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/js/pwa-services.js') }}"></script>

    <!-- Chart js script -->
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/vendor/chart-js-3.3.1/chart.min.js') }}"></script>

    <!-- Progress circle js script -->
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/vendor/progressbar-js/progressbar.min.js') }}"></script>

    <!-- swiper js script -->
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/vendor/swiper-7.3.1/swiper-bundle.min.js') }}"></script>

    <!-- page level script -->
    <script src="{{ asset('asset/theme4/dashboard_assets/assets/js/login.js') }}"></script>

    @stack('script')
    @if (@$general->twak_allow)
        <script type="text/javascript">
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
        <script>
            // "use strict";
            // iziToast.error({
            //     message: "{{ session('error') }}",
            //     position: 'topRight'
            // });
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
                    title: '{{ $msg[0] }}',
                    text: '{{ trans($msg[1]) }}',
                    icon: '{{ $msg[0] }}',
                    confirmButtonText: 'Ok'
                })
            </script>
        @endforeach
    @endif

    @if (@$errors->any())
        <script>
            // "use strict";
            @foreach ($errors->all() as $error)
                // iziToast.error({
                //     message: "{{ __($error) }}",
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
                    url: "{{ route('subscribe') }}",
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
        var url = "{{ route('user.changeLang') }}";

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
