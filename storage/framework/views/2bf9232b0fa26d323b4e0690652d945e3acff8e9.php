<?php $__env->startSection('content2'); ?>
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview px-2">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head">
                                <h5 class="text-start text-light mb-4"><?php echo e(__('Request For Reset Password')); ?></h5>
                            </div>
                            <form action="<?php echo e(route('user.update.password')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <div class="form-label-group"><label class="form-label"
                                            for="default-01"><?php echo e(__('Old Password')); ?></label></div>
                                    <div class="form-control-wrap"><input type="password"
                                            class="form-control form-control-lg" name="oldpassword"
                                            placeholder="<?php echo e(__('Enter Old Password')); ?>"></div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label-group"><label class="form-label"
                                            for="default-01"><?php echo e(__('New Password')); ?></label></div>
                                    <div class="form-control-wrap"><input type="password"
                                            class="form-control form-control-lg" name="password"
                                            placeholder="<?php echo e(__('Enter New Password')); ?>"></div>
                                </div>
                                <div class="form-group">
                                    <div class="form-label-group"><label class="form-label"
                                            for="default-01"><?php echo e(__('Confirm Password')); ?></label>
                                    </div>
                                    <div class="form-control-wrap"><input type="password"
                                            class="form-control form-control-lg" name="password_confirmation"
                                            placeholder="<?php echo e(__('Confirm Password')); ?>"></div>
                                </div>
                                <div class="form-group"><button class="btn bg-warning text-dark mt-3"
                                        type="submit"><?php echo e(__('Update')); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quantum-trade\resources\views/theme4/user/auth/changepassword.blade.php ENDPATH**/ ?>