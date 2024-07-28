<?php $__env->startSection('content'); ?>
    <?php $__env->startPush('seo'); ?>
        <meta name='description' content="<?php echo e(@$general->seo_description); ?>">
    <?php $__env->stopPush(); ?>

    
    <div class="nk-wrap nk-wrap-nosidebar">
        <div class="nk-content ">
            <div class="nk-split nk-split-page nk-split-lg">
                <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                    
                    <div class="nk-block nk-block-middle nk-auth-body">
                        
                        <div class="nk-block-head">
                            <h5 class="text-center mb-4"><?php echo e(__('Request For Reset Password')); ?></h5>
                        </div>
                        <form action="<?php echo e(route('user.forgot.password')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="email" value="">
                            <div class="form-group">
                                <div class="form-label-group"><label class="form-label"
                                        for="default-01"><?php echo e(__('Email Address')); ?></label></div>
                                <div class="form-control-wrap"><input type="email" class="form-control form-control-lg"
                                        name="email" id="email" placeholder="<?php echo e(__('Enter Email')); ?>"></div>
                            </div>
                            <?php if(@$general->allow_recaptcha == 1): ?>
                                <div class="mb-3">
                                    <script src="https://www.google.com/recaptcha/api.js"></script>
                                    <div class="g-recaptcha" data-sitekey="<?php echo e(@$general->recaptcha_key); ?>"
                                        data-callback="verifyCaptcha"></div>
                                    <div id="g-recaptcha-error"></div>
                                </div>
                            <?php endif; ?>
                            <div class="form-group"><button id="recaptcha" class="btn btn-lg btn-primary btn-block"
                                    type="submit"><?php echo e(__('Send Verification Code')); ?></button></div>
                        </form>
                        <div class="form-note-s2 pt-5"><a href="<?php echo e(route('user.login')); ?>"><strong>Return to
                                    login</strong></a></div>
                    </div>
                </div>
                <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right"
                    data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                    <div class="w-100 w-max-550px p-3 p-sm-5 m-auto">
                        <div class="nk-feature nk-feature-center">
                            <div class="nk-feature-img"><img class="round" src="../../images/slides/promo-a.png"
                                    srcset="/demo6/images/slides/promo-a2x.png 2x" alt=""></div>
                            <div class="nk-feature-content py-4 p-sm-5">
                                <h4>Quantum</h4>
                                <p>You can start to create your products easily with its user-friendly design &
                                    most completed responsive layout.</p>
                            </div>
                        </div>
                    </div>
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

<?php echo $__env->make(template() . 'layout.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views/theme4/user/auth/forgot_password.blade.php ENDPATH**/ ?>