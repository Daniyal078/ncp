<?php

    $content = content('breadcrumb.content');

?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startPush('seo'); ?>
        <meta name='description' content="<?php echo e(@$general->seo_description); ?>">
    <?php $__env->stopPush(); ?>


    


    <?php if($general->is_email_verification_on && !auth()->user()->ev): ?>
        <div class="nk-block-head">
            <h5 class="text-center mb-4"><?php echo e(__('Verify Email')); ?></h5>
        </div>
        <form class="reg-form" action="<?php echo e(route('user.authentication.verify.email')); ?>"
            class="row h-100 justify-content-center" method="POST">
            <?php echo csrf_field(); ?>
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
                        <h3 class="mb-3 mb-lg-4">Verify now</h3>
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
                                        <input type="text" class="form-control border-start-0" name="code"
                                            placeholder="<?php echo e(__('Enter Verification Code')); ?>">
                                        <label><?php echo e(__('Verification Code')); ?></label>
                                    </div>
                                </div>
                            </div>
                            <?php if(@$general->allow_recaptcha): ?>
                                <div class="mb-3">
                                    <script src="https://www.google.com/recaptcha/api.js"></script>
                                    <div class="g-recaptcha" data-sitekey="<?php echo e(@$general->recaptcha_key); ?>"
                                        data-callback="verifyCaptcha"></div>
                                    <div id="g-recaptcha-error"></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 mt-auto mb-4 text-center d-grid">
                    <!-- submit button -->
                    <button class="btn btn-lg btn-theme z-index-5 mb-4" type="submit" id="submitbtn">Verify now<i
                            class="bi bi-arrow-right"></i></button>
                </div>
        </form>
    <?php elseif($general->is_sms_verification_on && !auth()->user()->sv): ?>
        <form class="reg-form" class="row h-100 justify-content-center" method="POST"
            action="<?php echo e(route('user.authentication.verify.sms')); ?>">
            <?php echo csrf_field(); ?>
            <div class="col-12 align-self-center">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 text-center text-white">
                        <h3 class="mb-3 mb-lg-4">Verify now</h3>
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
                                        <input type="text" class="form-control border-start-0" name="code"
                                            id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <label><?php echo e(__('Sms Verify Code')); ?></label>
                                    </div>
                                </div>
                            </div>
                            <?php if(@$general->allow_recaptcha): ?>
                                    <div class="mb-3">
                                        <script src="https://www.google.com/recaptcha/api.js"></script>
                                        <div class="g-recaptcha" data-sitekey="<?php echo e(@$general->recaptcha_key); ?>"
                                            data-callback="verifyCaptcha"></div>
                                        <div id="g-recaptcha-error"></div>
                                    </div>
                                <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 mt-auto mb-4 text-center d-grid">
                    <!-- submit button -->
                    <button class="btn btn-lg btn-theme z-index-5 mb-4" type="submit" id="submitbtn">Verify now<i
                            class="bi bi-arrow-right"></i></button>
                </div>
        </form>
        <?php endif; ?>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make(template() . 'layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views/theme4/user/auth/email_sms_verify.blade.php ENDPATH**/ ?>