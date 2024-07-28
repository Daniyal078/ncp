<style>
    input{
        border: 1px solid #15215a!important;
        margin: 5px 10px 5px 10px!important;
    }
</style>
<?php $__env->startSection('content2'); ?>
    

      <div class="container">
        <div class="row">
            <!-- Top Funds-->
            <div class="col-12 col-md-12 col-lg-6 col-xxl-3 mb-4 mt-3">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col">
                                <h6 class="fw-medium"><?php echo e(__('Bank Payment Information')); ?></h6>
                            </div>
                            <div class="col-auto">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 px-0">
                                <ul class="list-group list-group-flush bg-none">
                                    <li class=" list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <p class="mb-0"><?php echo e(__('Method Currency')); ?></p>
                                            </div>
                                            <div class="col ps-0 text-end">
                                                <p class=" mb-0"><?php echo e($gateway->gateway_parameters->gateway_currency); ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <p class="mb-0"><?= clean($gateway->gateway_parameters->instruction) ?></p>
                                            </div>
                                            <div class="col ps-0 text-end">
                                                <p class="mb-0"> <img src="<?php echo e(getFile('gateways', @$gateway->gateway_parameters->qr_code)); ?>"
                                                    alt=""></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xxl-3 mb-4 ">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col">
                                <h6 class="fw-medium"><?php echo e(__('Payment Information')); ?></h6>
                            </div>
                            <div class="col-auto">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 px-0">
                                <ul class="list-group list-group-flush bg-none">
                                    <li class=" list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <p class="mb-0"><?php echo e(__('Gateway Name')); ?> :</p>
                                            </div>
                                            <div class="col ps-0 text-end">
                                                <p class=" mb-0"><?php echo e(str_replace('_', ' ', $deposit->gateway->gateway_name)); ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <p class="mb-0"><?php echo e(__('Amount')); ?> :</p>
                                            </div>
                                            <div class="col ps-0 text-end">
                                                <p class="mb-0"><?php echo e(number_format($deposit->amount, 2) . ' ' . @$general->site_currency); ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <p class="mb-0"><?php echo e(__('Charge')); ?> :</p>
                                            </div>
                                            <div class="col ps-0 text-end">
                                                <p class="mb-0"><?php echo e(number_format($deposit->charge, 2) . ' ' . @$general->site_currency); ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <p class="mb-0"><?php echo e(__('Conversion Rate')); ?> :</p>
                                            </div>
                                            <div class="col ps-0 text-end">
                                                <p class="mb-0"><?php echo e('1 ' . @$general->site_currency . ' = ' . $deposit->rate); ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <p class="mb-0"><?php echo e(__('Total Payable Amount')); ?> :</p>
                                            </div>
                                            <div class="col ps-0 text-end">
                                                <p class="mb-0"><?php echo e($deposit->final_amount .' ' . @$deposit->gateway->gateway_parameters->gateway_currency); ?></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xxl-3 mb-4 ">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col">
                                <h6 class="fw-medium"><?php echo e(__('Requirments')); ?></h6>
                            </div>
                            <div class="col-auto">

                            </div>
                        </div>
                        <div class="row">
                            <form action="" method="post" enctype="multipart/form-data" class="mb-4 text-start">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <?php if($gateway->user_proof_param != null): ?>
                                        <?php $__currentLoopData = $gateway->user_proof_param; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proof): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($proof['type'] == 'text'): ?>
                                                <div class="form-group p-0 col-md-12">
                                                    <label for=""
                                                        class="mb-2 mt-2"><?php echo e(__($proof['field_name'])); ?></label>
                                                    <input type="text"
                                                        name="<?php echo e(strtolower(str_replace(' ', '_', $proof['field_name']))); ?>"
                                                        class="form-control border-start-0 px-5"
                                                        <?php echo e($proof['validation'] == 'required' ? 'required' : ''); ?>>
                                                </div>
                                            <?php endif; ?>
                                            <?php if($proof['type'] == 'textarea'): ?>
                                                <div class="form-group p-0 col-md-12">
                                                    <label for=""
                                                        class="mb-2 mt-2"><?php echo e(__($proof['field_name'])); ?></label>
                                                    <textarea name="<?php echo e(strtolower(str_replace(' ', '_', $proof['field_name']))); ?>" class="form-control border-start-0"
                                                        <?php echo e($proof['validation'] == 'required' ? 'required' : ''); ?>></textarea>
                                                </div>
                                            <?php endif; ?>

                                            <?php if($proof['type'] == 'file'): ?>
                                                <div class="form-group p-0 col-md-12">
                                                    <label for=""
                                                        class="mb-2 mt-2"><?php echo e(__($proof['field_name'])); ?></label>
                                                    <input type="file"
                                                        name="<?php echo e(strtolower(str_replace(' ', '_', $proof['field_name']))); ?>"
                                                        class="form-control border-start-0"
                                                        <?php echo e($proof['validation'] == 'required' ? 'required' : ''); ?>>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                    <div class="form-group p-0">
                                        <button class="btn btn-theme w-100 mt-2" type="submit"><?php echo e(__('Deposit Now')); ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views/theme4/user/gateway/gateway_manual.blade.php ENDPATH**/ ?>