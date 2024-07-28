<?php $__env->startSection('content'); ?>
    <?php $__env->startPush('seo'); ?>
        <meta name='description' content="<?php echo e(@$general->seo_description); ?>">
    <?php $__env->stopPush(); ?>
    <div class="row h-100 justify-content-center">
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
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 text-center text-white py-3">
                    <h3 class="mb-3 mb-lg-4">Create Account</h3>

                    <form action="" class="mb-4 text-start" method="post">
                        <?php echo csrf_field(); ?>
                        <?php if(isset(request()->reffer)): ?>
                            <label for="formGroupExampleInput"><?php echo e(__('Reffered By')); ?></label>
                            <input type="text" class="form-control form-control-lg" value="<?php echo e(request()->reffer); ?>"
                                name="reffered_by" placeholder="<?php echo e(__('Reffered By')); ?>" readonly>
                        <?php endif; ?>
                        <!-- alert messages -->
                        <div class="alert alert-danger fade show d-none mb-2 global-alert text-start" role="alert">
                            <div class="row">
                                <div class="col"><strong>Requierd!</strong> Please enter valid data.</div>
                            </div>
                        </div>
                        <div class="alert alert-success fade show d-none mb-2 global-success text-start" role="alert">
                            <div class="row">
                                <div class="col-auto align-self-center">
                                    <div class="spinner-border spinner-border-sm text-success me-2" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                                <div class="col ps-0 align-self-center">
                                    <strong>Awesome!</strong> Taking you to the next page.
                                </div>
                            </div>
                        </div>
                        <!-- Form elements -->
                        <div class="mb-2 text-dark">
                            <div class="form-group mb-2 position-relative check-valid is-valid">
                                <div class="input-group input-group-lg">
                                    <div class="form-floating">
                                        <input type="text" name="fname" value="<?php echo e(old('fname')); ?>" id="name"
                                            placeholder="Enter first name" class="form-control border-start-0">
                                        <label>First Name</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2 text-dark">
                            <div class="form-group mb-2 position-relative check-valid is-valid">
                                <div class="input-group input-group-lg">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-start-0" id="lname"
                                            placeholder="Enter last name" name="lname" value="<?php echo e(old('lname')); ?>">
                                        <label>Last Name</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2 text-dark">
                            <div class="form-group mb-2 position-relative check-valid is-valid">
                                <div class="input-group input-group-lg">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-start-0"
                                            placeholder="Enter Username" name="username" value="<?php echo e(old('username')); ?>">
                                        <label>Username</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2 text-dark">
                            <div class="form-group mb-2 position-relative check-valid is-valid">
                                <div class="input-group input-group-lg">
                                    <div class="form-floating">
                                        <input type="number" class="form-control border-start-0"
                                            placeholder="Enter Phone" name="phone" value="<?php echo e(old('phone')); ?>">
                                        <label>Phone</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2 text-dark">
                            <div class="form-group mb-2 position-relative check-valid is-valid">
                                <div class="input-group input-group-lg">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-start-0"
                                            placeholder="Enter Phone" name="email" value="<?php echo e(old('email')); ?>"
                                            >
                                        <label>Email Address</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-dark">
                            <div class="form-group mb-2 position-relative check-valid">
                                <div class="input-group input-group-lg">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-start-0"
                                            placeholder="Enter Phone" name="password" id="password"
                                            placeholder="<?php echo e(__('Enter Password')); ?>">
                                        <label for="password1">Password</label>

                                    </div>
                                    <span class="input-group-text text-secondary  border-end-0" id="viewpassword"><i
                                            class="bi bi-eye"></i></span>
                                </div>
                            </div>
                            <div class="feedback mb-3">
                                <div class="row">
                                    <div class="col">
                                        <div class="check-strength" id="checksterngthdisplay">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <span class="small" id="textpassword"></span>
                                        <i class="bi bi-info-circle text-white ms-1" data-bs-trigger="hover"
                                            data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top"
                                            data-bs-content="Password should contain atleast 1 capital, 1 alphanumeric & min. 8 characters"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-dark">
                            <div class="form-group mb-2 position-relative check-valid">
                                <div class="input-group input-group-lg">
                                    <span class="input-group-text text-theme border-end-0"><i
                                            class="bi bi-key"></i></span>
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-start-0"
                                         placeholder="Enter Phone" name="password_confirmation"
                                        id="password_confirmation" placeholder="<?php echo e(__('Confirm Password')); ?>">
                                        <label for="confirm_password">Confirm Password</label>
                                        

                                    </div>
                                    <span class="input-group-text text-secondary  border-end-0" id="viewpassword2"><i
                                            class="bi bi-eye"></i></span>
                                </div>
                            </div>
                            
                            <div class="valid-feedback">Woooh! Entered password matched </div>
                        </div>
                        <?php if(@$general->allow_recaptcha == 1): ?>
                        <script src="https://www.google.com/recaptcha/api.js"></script>
                        <div class="g-recaptcha" data-sitekey="<?php echo e(@$general->recaptcha_key); ?>"
                            data-callback="verifyCaptcha"></div>
                        <div id="g-recaptcha-error"></div>
                    <?php endif; ?>
                    <input type="checkbox"
                                        class="custom-control-input" name="check" id="exampleCheck1"><label
                                        class="custom-control-label" for="checkbox">I agree to Spark-x <a tabindex="-1"
                                            href="#">Privacy
                                            Policy</a> &amp; <a tabindex="-1" href="#"> Terms.</a></label>
                    <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 mt-auto mb-4">
                        <!-- submit button -->
                        <button class="btn btn-lg btn-theme top-0 end-0 z-index-5 w-100 mt-4" type="submit" >Register
                            <i class="bi bi-arrow-right"></i></button>
                    </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        "use strict";


        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML =
                    "<span class='sp_text_danger'>{{__('Captcha field is required.')</span>";
                return false;
            }
            return true;
        }

        function verifyCaptcha() {
            document.getElementById('g-recaptcha-error').innerHTML = '';
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(template() . 'layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views/theme4/user/auth/register.blade.php ENDPATH**/ ?>