<style>
    .payment-box {
        background: #aef32d;
        padding-bottom: 20px;
        border-radius: 16px;
    }

    .nk-content {
        background: #232721 !important;
        height: 100vh;
        overflow: auto;
    }

    .modal_amount {
        padding: 0 10px !important;
        border: 1px solid #549653 !important;
        width: -webkit-fill-available !important;
        height: auto !important;
        background: #f0f8ff00 !important;
        border-radius: 10px !important;
        margin: 15px 0 0 0 !important;
        font-size: 10px !important;
    }

    .modal-backdrop.fade.show {
        display: none;
    }
</style>
<?php $__env->startSection('content2'); ?>
    
    <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-12 col-md-12 col-lg-6 col-xxl-4 mt-2">
                <div class="card border-0 mb-4">
                    <div class="card-header">
                        <div class="row align-items-center ">
                            <div class="col">
                                <img src="<?php echo e(getFile('gateways', $gateway->gateway_image)); ?>" alt="Lights" class="trans-img">
                                <p class="fw-medium fw-0"><?php echo e(ucwords(str_replace('_', ' ', $gateway->gateway_name))); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto">
                                <button data-href="<?php echo e(route('user.paynow', $gateway->id)); ?>"
                                    data-id="<?php echo e($gateway->id); ?>" class="btn btn-theme btn-md paynow">Pay Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php echo e(__('Not Found')); ?>

        <?php endif; ?>
    </div>
    <?php if(isset($type) && $type == 'deposit'): ?>
                                <div class="modal
                            fade
                            bg-transparent mt-5"
                                    tabindex="-1" role="dialog" id="paynow">
                                    <div class="modal-dialog" role="document">
                                        <form style="width: 100%;" action="" method="post">
                                            <?php echo csrf_field(); ?>
                                            <div class="modal-content p-3">
                                                <div class="d-flex align-items-center justify-content-between p-0">
                                                    <h5 class="modal-title mt-0 mb-3"><?php echo e(__('Deposit Amount')); ?></h5>
                                                    <button type="button" class="close btn btn-danger" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true" class="text-light">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body p-0">
                                                    <div class="row">
                                                        <input type="hidden" name="id" value="">
                                                        <div class="form-group p-0">
                                                            <label for=""><?php echo e(__('Amount')); ?></label>
                                                            <input type="text" name="amount"
                                                                class="form-control"
                                                                placeholder="<?php echo e(__('Enter Amount')); ?>">

                                                            <input type="hidden" name="user_id" class="form-control"
                                                                value="<?php echo e(auth()->id()); ?>">
                                                            <input type="hidden" name="type" class="form-control"
                                                                value="deposit">
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-theme mt-2"><span><?php echo e(__('Deposit Now')); ?></span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="modal
                            fade
                            bg-transparent"
                                    tabindex="-1" role="dialog" id="paynow">
                                    <div class="modal-dialog" role="document">
                                        <form style="width: 100%;" action="" method="post">
                                            <?php echo csrf_field(); ?>
                                            <div class="modal-content p-3">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"><?php echo e(__('Invest Amount')); ?></h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true" class="text-light">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body p-0">
                                                    <div class="row">
                                                        <input type="hidden" name="id" value="">
                                                        <div class="form-group p-0">
                                                            <label for=""><?php echo e(__('Amount')); ?></label>
                                                            <input type="text" name="amount" class="form-control"
                                                                placeholder="<?php echo e(__('Enter Amount')); ?>">

                                                            <input type="text" name="plan_id" class="form-control"
                                                                value="<?php echo e($plan->id); ?>" hidden>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn sp_btn_danger btn-danger"
                                                        data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                                                    <button type="submit"
                                                        class="w-auto"><span><?php echo e(__('Invest Now')); ?></span></button>
                                                </div>
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
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        $(function() {
            'use strict'

            $('.paynow').on('click', function() {
                const modal = $('#paynow')

                modal.find('form').attr('action', $(this).data('href'))
                modal.find('input[name=id]').val($(this).data('id'))

                modal.modal('show')
            })
        })
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views/theme4/user/gateway/gateways.blade.php ENDPATH**/ ?>