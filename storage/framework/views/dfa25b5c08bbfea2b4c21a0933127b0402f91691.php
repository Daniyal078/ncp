<?php $__env->startSection('content2'); ?>
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview px-2">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="card-header px-0 d-flex flex-wrap justify-content-between align-items-center">
                                <h5 class="mb-sm-0 mb-2"><?php echo e(__('Deposit Logs')); ?></h5>
                            </div>
                        </div>
                        <div class="nk-block nk-block-lg">
                            <?php $__empty_1 = true; $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="w-100 card p-2 rounded" style="background: #a4f32436 !important;">
                                    <div class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e(__('Trx')); ?>

                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e($transaction->transaction_id); ?>

                                        </p>
                                    </div>
                                    <div class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e(__('User')); ?>

                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e(@$transaction->user->fname . ' ' . @$transaction->user->lname); ?>

                                        </p>
                                    </div>
                                    <div class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e(__('Gateway')); ?>

                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e(@$transaction->gateway->gateway_name ?? 'Account Transfer'); ?>

                                        </p>
                                    </div>
                                    <div class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e(__('Amount')); ?>

                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e($transaction->amount); ?>

                                        </p>
                                    </div>
                                    <div class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e(__('Currency')); ?>

                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e($general->site_currency); ?>

                                        </p>
                                    </div>
                                    <div class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e(__('Charge')); ?>

                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e($transaction->charge . ' ' . $transaction->currency); ?>

                                        </p>
                                    </div>
                                    <div class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e(__('Payment Date')); ?>

                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e($transaction->created_at->format('Y-m-d')); ?>

                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php echo e(__('No users Found')); ?>

                            <?php endif; ?>
                            <?php if($transactions->hasPages()): ?>
                                <?php echo e($transactions->links()); ?>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quantum-trade\resources\views/theme4/user/deposit_log.blade.php ENDPATH**/ ?>