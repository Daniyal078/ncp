<?php $__env->startSection('content2'); ?>
    


    <form action="<?php echo e(route('user.update.password')); ?>" class="row h-100 justify-content-center" autocomplete="off" method="POST">
        <?php echo csrf_field(); ?>
        
        <div class="col-12 align-self-center">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 text-center text-white">
                    <h3 class="mb-3 mb-lg-4 text-dark"><?php echo e(__('Old Password')); ?></h3>
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
                                    placeholder="<?php echo e(__('Enter Old Password')); ?>">
                                    <label><?php echo e(__('Old Password')); ?></label>
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
                                    placeholder="<?php echo e(__('Enter New Password')); ?>">
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
                                    placeholder="<?php echo e(__('Confirm Password')); ?>">
                                    <label for="password"><?php echo e(__('Confirm Password')); ?></label>
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
            <button class="btn btn-lg btn-theme z-index-5 mb-4" type="submit"><?php echo e(__('Update')); ?><i
                    class="bi bi-arrow-right"></i></button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views/theme4/user/auth/changepassword.blade.php ENDPATH**/ ?>