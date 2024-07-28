@extends(template() . 'layout.auth')

@push('seo')
    <meta name='description' content="{{ @$general->seo_description }}">
@endpush
@section('content')

    <form action="" class="row h-100 justify-content-center" autocomplete="off" method="POST">
        @csrf
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
                                    <input autocomplete="off" type="email" name="email" value="{{ old('email') }}"
                                        class="form-control border-start-0" autofocus id="email"
                                        placeholder="Enter your email address">
                                    <label>Email Address</label>
                                </div>
                            </div>
                        </div>
                        <div class="invalid-feedback">Add .com at last to insert valid data </div>

                        <!-- Form elements -->
                        <div class="form-group mb-2 position-relative check-valid text-dark">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text text-theme border-end-0"><i class="bi bi-key"></i></span>
                                <div class="form-floating">
                                    <input autocomplete="new-password" type="password"
                                        class="form-control border-start-0" autofocus id="password" name="password"
                                        placeholder="Enter your password">
                                    <label for="password">Password</label>
                                </div>
                                <span class="input-group-text text-secondary  border-end-0" id="viewpassword"><i
                                        class="bi bi-eye"></i></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">Enter valid password and just click again to continue </div>
                    </div>

                    <!-- or continue with options -->
                     <p class="text-white"><a href="{{ route('user.register') }}" class="text-white">Create an account</a></p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 mt-auto mb-4 text-center d-grid">
            <!-- submit button -->
            <button class="btn btn-lg btn-theme z-index-5 mb-4" type="submit">Sign in <i
                    class="bi bi-arrow-right"></i></button>
            <p class="text-white"><a href="{{ route('user.forgot.password') }}" class="text-white">Forgot your password? clicking
                    here</a></p>
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
                    "<span class='sp_text_danger'>@changeLang('Captcha field is required.')</span>";
                return false;
            }
            return true;
        }

        function verifyCaptcha() {
            document.getElementById('g-recaptcha-error').innerHTML = '';
        }
    </script>
 
@endpush
