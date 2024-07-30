<?php $__env->startSection('content2'); ?>
    <div class="container">
        <!-- Descriptive pricing  plans-->
        <h5 class="title">Descriptive Plans</h5>
        <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php
                    $plan_exist = App\Models\Payment::where('plan_id', $plan->id)
                        ->where('user_id', Auth::id())
                        ->where('next_payment_date', '!=', null)
                        ->where('payment_status', 1)
                        ->count();
                ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card mb-4 border-0 bg-theme">
                        <div class="card-body px-lg-4 px-xl-5 bg-none">
                            <div class="text-center mb-4">
                                <span class="tag bg-light-white text-white">Best</span>
                            </div>
                            <div class="row mb-4">
                                <div class="col-auto">
                                    
                                </div>
                                <div class="col">
                                    <h4 class="mb-1"><?php echo e($plan->plan_name); ?></h4>
                                    <p class="text-muted">Required Vip <?php echo e($plan->vip_status); ?></p>
                                </div>
                            </div>
                            <div class="row align-items-center mb-4">
                                <div class="col-auto">
                                    <?php if($plan->amount_type == 0): ?>
                                        <li>
                                            <span class="caption"><?php echo e(__('Minimum')); ?> </span>
                                            <span class="details">
                                                <?php echo e(number_format($plan->minimum_amount, 2) . ' ' . @$general->site_currency); ?></span>
                                        </li>
                                        <li>
                                            <span class="caption"><?php echo e(__('Maximum')); ?> </span>
                                            <span class="details">
                                                <?php echo e(number_format($plan->maximum_amount, 2) . ' ' . @$general->site_currency); ?></span>
                                        </li>
                                    <?php else: ?>
                                        <li>
                                            <span class="caption"><?php echo e(__('Amount')); ?> </span>
                                            <span class="details">
                                                <?php echo e(number_format($plan->amount, 2) . ' ' . @$general->site_currency); ?></span>
                                        </li>
                                    <?php endif; ?>
                                    
                                </div>
                            </div>
                            <h6>Basic includes:</h6>
                            <ul class="list-group list-group-flush bg-none no-border">
                                <?php if($plan->return_for == 1): ?>
                                    <li class="list-group-item text-white"><i class="bi bi-check-circle vm me-1"></i>
                                        <?php echo e(__('For')); ?> <?php echo e($plan->how_many_time); ?> <?php echo e(__('Times')); ?></li>
                                <?php else: ?>
                                    <li class="list-group-item text-white"><i class="bi bi-check-circle vm me-1"></i>
                                        <?php echo e(__('For Life time')); ?></li>
                                <?php endif; ?>
                                <li class="list-group-item text-white"><i class="bi bi-check-circle vm me-1"></i>
                                    <?php echo e(__('EVERY')); ?> <?php echo e($plan->time->name); ?></li>
                                <?php if($plan->capital_back == 1): ?>
                                    <li class="list-group-item text-white"><i class="bi bi-check-circle vm me-1"></i>
                                        <?php echo e(__('Capital Back Yes')); ?></li>
                                <?php else: ?>
                                    <li class="list-group-item text-white"><i class="bi bi-check-circle vm me-1"></i>
                                        <?php echo e(__('Capital Back No')); ?></li>
                                <?php endif; ?>
                                <li class="list-group-item text-white"><i class="bi bi-check-circle vm me-1"></i>
                                    <?php echo e(__('ROI')); ?> <?php echo e(number_format($plan->return_interest, 2)); ?> <?php if($plan->interest_status == 'percentage'): ?>
                                        <?php echo e('%'); ?>

                                    <?php else: ?>
                                        <?php echo e(@$general->site_currency); ?>

                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer bg-none text-center border-0">
                            <?php if($plan_exist >= $plan->invest_limit): ?>
                                <a class="main-btn plan-btn btn btn-theme disabled" href="#">
                                    <span><?php echo e(__('Max Limit exceeded')); ?></span>
                                </a>
                            <?php else: ?>
                                
                                <?php if(auth()->guard()->check()): ?>
                                    <?php if(number_format(auth()->user()->balance, 2) > 0): ?>
                                        <button class="balance btn btn-theme" data-plan="<?php echo e($plan); ?>"
                                            data-plan_percentage="<?php echo e(number_format($plan->return_interest, 2)); ?>"
                                            data-url=""><span><?php echo e(__('Invest')); ?></span></button>
                                    <?php else: ?>
                                        <button disabled
                                            class="balance btn btn-theme"><span><?php echo e(__('Insufficient balance 😔')); ?></span></button>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                            
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php endif; ?>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<div class="modal mt-5
                                                                                                                            fade
                                                                                                                            bg-transparent"
    id="invest" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="invest-form" style="width: 100%;" action="<?php echo e(route('user.investmentplan.submit')); ?>"
            method="post">
            <?php echo csrf_field(); ?>
            <div class="modal-content p-3">
                <div class="d-flex align-items-baseline justify-content-between">
                    <p class="p-0 m-0">
                        Invest Now
                    </p>
                    <button type="button" class="close btn btn-danger mb-1" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="form-group mb-1">
                        <input type="number" placeholder="Enter the amount you want to invest:" name="amount"
                            class="form-control modal_amount">
                        <p class="modal-table-p text-danger modal-error-message"></p>
                        <input type="hidden" name="plan_id" class="form-control">
                        <input type="hidden" name="plan_percentage" class="form-control">
                        <input type="hidden" name="timestamp">
                        <input type="hidden" name="min_pay">
                        <input type="hidden" name="max_pay">
                        <input type="hidden" name="fix_amount">
                    </div>
                </div>
                <button class="btn btn-theme submit-payment w-auto"><span><?php echo e(__('Invest Now')); ?></span></button>
            </div>
        </form>
    </div>
</div>
<script>
    $(function() {
        'use strict'
        $('.balance').on('click', function() {
            const modal = $('#invest');
            modal.find('input[name=plan_id]').val($(this).data('plan').id);
            modal.find('input[name=plan_percentage]').val($(this).data('plan_percentage'));
            modal.find('input[name=min_pay]').val($(this).data('min_amount'));
            modal.find('input[name=max_pay]').val($(this).data('max_amount'));
            modal.find('input[name=fix_amount]').val($(this).data('fix_amount'));
            modal.modal('show')
        })
    })
</script>
<script>
    var invest_form = $('.invest-form')
    $('.modal_amount').keyup(function(e) {

        function parseValue(value) {
            return parseFloat(value.replace(/,/g, ''));
        }

        var currentValue = parseValue($(this).val());
        var minPay = parseValue(invest_form.find('input[name=min_pay]').val());
        var maxPay = parseValue(invest_form.find('input[name=max_pay]').val());
        var fixAmount = parseValue(invest_form.find('input[name=fix_amount]').val());
        var modalMessage = $('.modal-error-message');
    });
</script>
<script>
    var invest_form = $('.invest-form')
    $('.success-img-wrapper').hide()
    $('.payment-loading').hide()

    $('.submit-payment').click(function(e) {
        e.preventDefault();
        invest_form.submit()
    })
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ncp\resources\views/theme4/pages/invest.blade.php ENDPATH**/ ?>