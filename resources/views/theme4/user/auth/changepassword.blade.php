@extends(template() . 'layout.master2')


@section('content2')


    <form action="{{ route('user.update.password') }}" class="row h-100 justify-content-center" autocomplete="off" method="POST">
        @csrf
        <div class="col-12 align-self-center">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 text-center text-white">
                    <h3 class="mb-3 mb-lg-4 text-dark">{{ __('Old Password') }}</h3>
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
                                    <input type="password"
                                    class="form-control border-start-0" name="oldpassword"
                                    placeholder="{{ __('Enter Old Password') }}">
                                    <label>{{ __('Old Password') }}</label>
                                </div>
                            </div>
                        </div>
                        <!-- Form elements -->
                        <div class="form-group mb-2 position-relative check-valid text-dark">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text text-theme border-end-0"><i class="bi bi-key"></i></span>
                                <div class="form-floating">
                                    <input type="password"
                                    class="form-control border-start-0" name="password"
                                    placeholder="{{ __('Enter New Password') }}">
                                    <label for="password">New Password</label>
                                </div>
                                <span class="input-group-text text-secondary  border-end-0" id="viewpassword"><i
                                        class="bi bi-eye"></i></span>
                            </div>
                        </div>
                        <div class="form-group mb-2 position-relative check-valid text-dark">
                            <div class="input-group input-group-lg">
                                <span class="input-group-text text-theme border-end-0"><i class="bi bi-key"></i></span>
                                <div class="form-floating">
                                    <input type="password"
                                    class="form-control border-start-0" name="password_confirmation"
                                    placeholder="{{ __('Confirm Password') }}">
                                    <label for="password">{{ __('Confirm Password') }}</label>
                                </div>
                                <span class="input-group-text text-secondary  border-end-0" id="viewpassword"><i
                                        class="bi bi-eye"></i></span>
                            </div>
                        </div>
                    </div>

                    <!-- or continue with options -->
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 mt-auto mb-4 text-center d-grid">
            <!-- submit button -->
            <button class="btn btn-lg btn-theme z-index-5 mb-4" type="submit">{{ __('Update') }}<i
                    class="bi bi-arrow-right"></i></button>
        </div>
    </form>
@endsection
