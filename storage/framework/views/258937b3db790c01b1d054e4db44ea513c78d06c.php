<?php $__env->startSection('content2'); ?>
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview px-2">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                                <h5 class="mb-sm-0 mb-2"><?php echo e(__('Referral Log')); ?></h5>
                                
                            </div>
                        </div>
                        <div class="nk-block nk-block-lg">
                            <?php $__empty_1 = true; $__currentLoopData = $commison; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="w-100 card p-2 rounded" style="background: #a4f32436 !important;">
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e(__('Commison From')); ?>

                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e(@$item->commissionFrom->username); ?>

                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e(__('Amount')); ?>

                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e(number_format($item->amount, 2)); ?>

                                            <?php echo e(@$general->site_currency); ?>

                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e(__('Return Details')); ?>

                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e($item->purpouse); ?>

                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e(__('Commision Date')); ?>

                                        </p>
                                        <p class="p-0 m-0 small-text text-black">
                                            <?php echo e($item->created_at->format('y-m-d')); ?>

                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php echo e(__('No Data Found')); ?></td>
                            <?php endif; ?>
                            <?php echo e($commison->links('backend.partial.paginate')); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quantum-trade\resources\views/theme4/user/commision_log.blade.php ENDPATH**/ ?>