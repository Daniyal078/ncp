<?php $__env->startPush('style'); ?>
    <style>
        .activebtn {
            background-color: #ffc451;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content2'); ?>
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview px-2">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
                                <h5 class="mb-sm-0 mb-2"><?php echo e(__('Withdraw Log')); ?></h5>
                                
                            </div>
                        </div>

                        <div class="tab-btn-group tab-btn-group w-100 text-end">
                            <a class="tab-btn m-3 text-warning <?php echo e(Request::routeIs('user.withdraw.all') ? 'active' : ''); ?>"
                                href="<?php echo e(route('user.withdraw.all')); ?>"><?php echo e(__('All')); ?> <span
                                    class="d-sm-inline-block d-none"><?php echo e(__('Withdraw')); ?></span></a>

                            <a class="tab-btn m-3 text-warning <?php echo e(Request::routeIs('user.withdraw.pending') ? 'active' : ''); ?>"
                                href="<?php echo e(route('user.withdraw.pending')); ?>"><?php echo e(__('Pending')); ?> <span
                                    class="d-sm-inline-block d-none"><?php echo e(__('Withdraw')); ?></span></a>

                            <a class="tab-btn m-3 text-warning <?php echo e(Request::routeIs('user.withdraw.complete') ? 'active' : ''); ?>"
                                href="<?php echo e(route('user.withdraw.complete')); ?>"><?php echo e(__('Complete')); ?> <span
                                    class="d-sm-inline-block d-none"><?php echo e(__('Withdraw')); ?></span></a>
                        </div>

                        <div class="nk-block nk-block-lg">
                            <?php $__empty_1 = true; $__currentLoopData = $withdrawlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $withdrawlog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="w-100 card p-2 rounded" style="background: #a4f32436 !important;">
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text">
                                            <?php echo e(__('TRX')); ?>

                                        </p>
                                        <p class="p-0 m-0 small-text">
                                            <?php echo e($key + $withdrawlogs->firstItem()); ?>

                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text">
                                            <?php echo e(__('Date')); ?>

                                        </p>
                                        <p class="p-0 m-0 small-text">
                                            <?php echo e(__($withdrawlog->created_at->format('d F Y'))); ?>

                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text">
                                            <?php echo e(__('Method Name')); ?>

                                        </p>
                                        <p class="p-0 m-0 small-text">
                                            <?php echo e(__($withdrawlog->withdrawMethod->name)); ?>

                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text">
                                            <?php echo e(__('Getable Amount')); ?>

                                        </p>
                                        <p class="p-0 m-0 small-text">
                                            <?php echo e($withdrawlog->withdraw_amount); ?>

                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text">
                                            <?php echo e(__('Charge Type')); ?>

                                        </p>
                                        <p class="p-0 m-0 small-text">
                                            <?php echo e(ucwords($withdrawlog->withdrawMethod->charge_type)); ?>

                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text">
                                            <?php echo e(__('Charge')); ?>

                                        </p>
                                        <p class="p-0 m-0 small-text">
                                            <?php if($withdrawlog->withdrawMethod->charge_type == 'percent'): ?>
                                                <?php echo e(($withdrawlog->withdraw_amount * $withdrawlog->withdraw_charge) / 100 . ' ' . $general->site_currency); ?>

                                            <?php else: ?>
                                                <?php echo e(number_format($withdrawlog->withdraw_charge, 2) . ' ' . @$general->site_currency); ?>

                                            <?php endif; ?>
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text">
                                            <?php echo e(__('status')); ?>

                                        </p>
                                        <p class="p-0 m-0 small-text">
                                            <?php if($withdrawlog->status == 1): ?>
                                                <span class="sp_badge sp_badge_success"><?php echo e(__('Success')); ?></span>
                                            <?php elseif($withdrawlog->status == 2): ?>
                                                <span class="sp_badge sp_badge_danger"><?php echo e(__('Rejected')); ?></span>
                                            <?php else: ?>
                                                <span class="sp_badge sp_badge_warning"><?php echo e(__('Pending')); ?></span>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex w-100 align-items-center justify-content-between bg-success mb-1 rounded p-2 shadow">
                                        <p class="p-0 m-0 small-text">
                                            <?php echo e(__('Action')); ?>

                                        </p>
                                        <p class="p-0 m-0 small-text">
                                            <button class="btn mt-0 details" style="font-size: 9px;"
                                                data-user_data="<?php echo e(json_encode($withdrawlog->user_withdraw_prof)); ?>"
                                                data-withdraw="<?php echo e($withdrawlog); ?>">View</button>
                                        </p>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php echo e(__('No Data Found')); ?>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal w-100 bg-transparent shadow-none fade" id="details" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content p-0">
                    <div class="modal-header bg-dark p-2">
                        <h5 class="modal-title"><?php echo e(__('Withdraw Details')); ?></h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="text-white">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body bg-dark p-2">
                        <div class="withdraw-details">
                        </div>
                    </div>
                    <div class="modal-footer bg-dark p-2">
                        <button type="button" class="btn m-0 bg-dark text-success"
                            data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>


    <?php $__env->startPush('script'); ?>
        <script>
            $(function() {
                'use strict'

                $('.details').on('click', function() {
                    const modal = $('#details');

                    let html = `

                    <ul class="list-group ">
                            <li class="text-success bg-dark list-group-item d-flex justify-content-between align-items-center">
                               <?php echo e(__('Withdraw Email')); ?>

                                <span>${$(this).data('user_data').email}</span>
                            </li>
                            <li class="text-success bg-dark list-group-item d-flex justify-content-between align-items-center">
                                <?php echo e(__('Withdraw Account Information')); ?>

                                <span>${$(this).data('user_data').account_information}</span>
                            </li>


                            <li class="text-success bg-dark list-group-item d-flex justify-content-between align-items-center">
                                <?php echo e(__('Note For Withdraw')); ?>

                                <span>${$(this).data('user_data').note}</span>
                            </li>

                            <li class="text-success bg-dark list-group-item d-flex justify-content-between align-items-center">
                                <?php echo e(__('Withdraw Transaction')); ?>

                                <span>${$(this).data('withdraw').transaction_id}</span>
                            </li>
                        </ul>
                `;

                    modal.find('.withdraw-details').html(html);

                    modal.modal('show');
                })

            })
        </script>
    <?php $__env->stopPush(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quantum-trade\resources\views/theme4/user/withdraw/withdraw_log.blade.php ENDPATH**/ ?>