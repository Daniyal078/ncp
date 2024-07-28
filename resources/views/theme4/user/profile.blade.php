@extends(template() . 'layout.master2')


@section('content2')
<div class="container-fluid">
    <div class="row align-items-center page-title">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview px-2">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="card-header my-3 d-flex flex-wrap justify-content-between align-items-center">
                                <h5 class="title p-0 m-0">{{ __('Authentication') }}</h5>
                                {{-- <a href="{{ route('user.dashboard') }}" class="back-btn"><i class="bi bi-arrow-left"></i>
                                    {{ __('Back') }}</a> --}}
                                <a href="{{ route('user.change.password') }}" class="cmn-btn p-0 m-0 sp_text_dark"><i
                                        class="bi bi-shield-lock"></i> {{ __('Change Password') }}</a>
                            </div>
                            <hr class="border-warning">
                            <div class="site-card">
                                <div class="card-body">
                                    <form action="{{ route('user.profileupdate') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row gy-4 justify-content-center">
                                            {{-- <div class="col-md-4 pe-lg-5 pe-md-4 justify-content-center">
                                                <div class="img-choose-div">
                                                    <p>{{ __('Profile Picture') }}</p>

                                                    <img class=" rounded file-id-preview w-100" id="file-id-preview"
                                                        src="{{ getFile('user', @Auth::user()->image) }}" alt="pp">

                                                    <input type="file" name="image" id="imageUpload" class="upload"
                                                        accept=".png, .jpg, .jpeg" hidden>

                                                    <label for="imageUpload"
                                                        class="editImg btn main-btn w-100"><span>{{ __('Choose file') }}</span></label>
                                                </div>
                                            </div> --}}
                                            <div class="col-md-8 p-0">
                                                <div class="update">
                                                    <div class="mb-3">
                                                        <label>{{ __('First Name') }}</label>
                                                        <input type="text" class="form-control" name="fname"
                                                            value="{{ @Auth::user()->fname }}"
                                                            placeholder="{{ __('Enter First Name') }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>{{ __('Last Name') }}</label>
                                                        <input type="text" class="form-control" name="lname"
                                                            value="{{ @Auth::user()->lname }}"
                                                            placeholder="{{ __('Enter Last Name') }}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>{{ __('Username') }}</label>
                                                        <input type="text" class="form-control text-white"
                                                            name="username" value="{{ @Auth::user()->username }}"
                                                            placeholder="{{ __('Enter User Name') }}">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>{{ __('Email address') }}</label>
                                                    <input type="email" class="form-control" name="email"
                                                        value="{{ @Auth::user()->email }}"
                                                        placeholder="{{ __('Enter Email') }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label>{{ __('Phone') }}</label>
                                                    <input type="text" class="form-control" name="phone"
                                                        value="{{ @Auth::user()->phone }}"
                                                        placeholder="{{ __('Enter Phone') }}">
                                                </div>



                                                    <div class="form-group px-0 col-md-6 mb-3">
                                                        <label>{{ __('Country') }}</label>
                                                        <input type="text" name="country" class="form-control"
                                                            value="{{ @Auth::user()->address->country }}">
                                                    </div>

                                                    <div class="col-md-6 p-0 mb-3">

                                                        <label>{{ __('city') }}</label>
                                                        <input type="text" name="city"
                                                            class="form-control form_control"
                                                            value="{{ @Auth::user()->address->city }}">

                                                    </div>

                                                    <div class="col-md-6 p-0 mb-3">

                                                        <label>{{ __('zip') }}</label>
                                                        <input type="text" name="zip"
                                                            class="form-control form_control"
                                                            value="{{ @Auth::user()->address->zip }}">

                                                    </div>

                                                    <div class="col-md-6 p-0 mb-3">

                                                        <label>{{ __('state') }}</label>
                                                        <input type="text" name="state"
                                                            class="form-control form_control"
                                                            value="{{ @Auth::user()->address->state }}">

                                                    </div>


                                                <button class=" btn btn-theme w-100"><span
                                                        class="">{{ __('Update') }}</span></button>
                                            </div>
                                    </form>
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
        'use strict'
        document.getElementById("imageUpload").onchange = function() {
            show();
        };

        function show() {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-id-preview");
                preview.src = src;
                preview.style.display = "block";
                document.getElementById("file-id-preview").style.visibility = "visible";
            }
        }
    </script>
@endpush
