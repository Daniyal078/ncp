<style>
    table {
        background: #232721 !important;
        border-radius: 13px !important;
    }

    td,
    th {
        padding: 0 !important;
    }

    .itemtext {
        color: #aef32d !important;
        font-size: 10px !important;
        padding: 10px !important;
    }

    .tableitem {
        padding: 0 !important;
    }

    .nk-content.nk-content-fluid {
        background: #293f00 !important;
        height: 100vh;
        overflow: auto;
    }

    .loader7 {
        width: auto;
        height: 16px;
        border: 1px solid #a6ff0052;
        border-radius: 5px;
        position: relative;
        overflow: hidden;
        background: #c8c8c800;
        margin: 0;
    }

    .loader7::after,
    .loader7::before {
        content: " ";
        position: absolute;
        height: 100%;
        left: 0;
        width: 10px;
        z-index: 1;
        background: linear-gradient(to right, rgba(170, 170, 170, 0) 0%, rgba(170, 170, 170, 0) 100%);
    }

    .loader7::after {
        left: auto;
        right: 0;
        background: linear-gradient(to right, rgba(170, 170, 170, 0) 0%, rgba(170, 170, 170, 0) 100%);
    }

    .loader7>span {
        content: " ";
        top: 0;
        z-index: 3;
        width: 100%;
        height: 100%;
        box-shadow: 0 0 1px #ffffff00 inset;
        position: absolute;
    }

    .loader7>span:before {
        content: " ";
        top: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        background: transparent;
    }

    .greenlight {
        width: 120px;
        top: -50%;
        height: 250%;
        position: absolute;
        animation: greenglow 3s linear infinite;
        -webkit-animation: greenglow 3s linear infinite;
        z-index: 2;
        mask-image: radial-gradient(ellipse at center, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0) 70%, rgba(0, 0, 0, 0) 100%);
        background: rgba(0, 219, 49, 1);
    }

    @keyframes  greenglow {
        from {
            left: -120px;
        }

        to {
            left: 100%;
        }
    }

    nav {
        background-color: #3c3e3800 !important;
        padding: 0 !important;
        height: auto !important;
        padding-top: 30px !important;
        box-shadow: none !important;
    }
</style>

<?php $__env->startSection('content2'); ?>
    
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl pb-5">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview px-2">
                        <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                            <h5 class="mb-sm-0 mb-2 text-light"><?php echo e(__('Trade Profit Log')); ?></h5>
                        </div>
                        <div class="nk-block nk-block-lg">
                            <div class="row">
                                <?php $__empty_1 = true; $__currentLoopData = $interestLogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <table class="my-1">
                                        <tr class="service">
                                            <td class="tableitem">
                                                <p class="itemtext">
                                                    <?php echo e(__('BOT NAME')); ?>

                                                </p>
                                            </td>
                                            <td>
                                                <p class="itemtext">
                                                    <?php echo e($log->payment->plan->plan_name); ?>

                                            </td>
                                            </p>
                                            </td>
                                        </tr>
                                        <tr class="service">
                                            <td class="tableitem">
                                                <p class="itemtext">
                                                    <?php echo e(__('Profit')); ?>

                                                </p>
                                            </td>
                                            <td>
                                                <?php if($log->payment->next_payment_date): ?>
                                                    <div class="loader7">
                                                        <span></span>
                                                        <div class="greenlight"></div>
                                                    </div>
                                                <?php else: ?>
                                                    <p class="itemtext">
                                                        <?php echo e(number_format($log->interest_amount, 2)); ?>

                                                        <?php echo e(@$general->site_currency); ?>

                                                    </p>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr class="service">
                                            <td class="tableitem">
                                                <p class="itemtext">
                                                    <?php echo e(__('Initial Trade Amount')); ?>

                                                </p>
                                            </td>
                                            <td>
                                                <p class="itemtext">
                                                    <?php echo e(number_format($log->payment->amount, 2)); ?>

                                                    <?php echo e(@$general->site_currency); ?>

                                                </p>
                                            </td>
                                        </tr>
                                        <tr class="service">
                                            <td class="tableitem">
                                                <p class="itemtext">
                                                    <?php echo e(__('Trade Start Date')); ?>

                                                </p>
                                            </td>
                                            <td>
                                                <p class="itemtext">
                                                    <?php echo e($log->created_at); ?>


                                                </p>
                                            </td>
                                        </tr>
                                        <tr class="service">
                                            <td class="tableitem">
                                                <p class="itemtext">
                                                    <?php echo e(__('Trade Status')); ?>

                                                </p>
                                            </td>
                                            <td>
                                                <p class="itemtext">
                                                    <?php echo e(isset($log->payment->next_payment_date) ? $log->payment->next_payment_date : 'Plan Expired'); ?>


                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <?php echo e(__('No Data Found')); ?></td>
                                <?php endif; ?>
                                <table class="mt-3">
                                    <?php if($interestLogs->hasPages()): ?>
                                        <?php echo e($interestLogs->links()); ?>

                                    <?php endif; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quantum-trade\resources\views/theme4/user/interest_log.blade.php ENDPATH**/ ?>