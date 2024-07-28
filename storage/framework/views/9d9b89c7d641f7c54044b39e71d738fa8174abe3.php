<?php $__env->startSection('content2'); ?>
    <style>
        .col-md-4.plan-wrapper {
            padding: 20px 10px 50px 10px;
            background: linear-gradient(#1a1a1a00, #aef72b1c), url("https://img.freepik.com/premium-photo/modern-brick-wall_118019-548.jpg?w=360") !important;
            background-size: cover !important;
            background-position: center center;
            background-repeat: no-repeat !important;
            background-attachment: fixed !important;
        }

        .nk-content.nk-content-fluid {
            padding-top: 0;
        }

        .nk-content.nk-content-fluid {
            /* background: #282828 !important; */
            background: linear-gradient(#1a1a1a00, #aef72b1c), url("https://img.freepik.com/premium-photo/modern-brick-wall_118019-548.jpg?w=360") !important;
            background-size: cover !important;
            background-position: center center;
            background-repeat: no-repeat !important;
            background-attachment: fixed !important;
        }

        .main-card {
            width: 100%;
            height: 100%;
            padding: 20px 20px 1px 20px;
            border-radius: 20px;
            background: rgb(58, 140, 36);
            /* background: linear-gradient(49deg, rgba(58, 140, 36, 1) 50%, rgba(148, 208, 26, 1) 100%); */
            background:
                linear-gradient(90deg, rgb(59 140 36 / 58%) 50%, rgb(147 208 26 / 0%) 100%), url(https://img.freepik.com/free-vector/gradient-wavy-background_23-2149123391.jpg?uid=R75560207&ga=GA1.1.168232131.1695012003&semt=ais);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            position: relative;
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

        .main-card h5 {
            margin-top: 0;
            color: white;
            font-size: 23px;
            font-family: system-ui;
            font-weight: 500;
            width: max-content;
        }

        .main-card h6 {
            margin: 0;
            color: #fff6f6;
            font-size: 12px;
            margin-bottom: 5px;
        }

        .main-card h4 {
            margin: 0;
            color: #aefd23;
            font-size: 22px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .main-card .bell {
            padding: 0px 0px 5px 5px;
            background: #282828;
            position: absolute;
            top: 0;
            right: 0;
            border-top-left-radius: 0px;
            border-bottom-left-radius: 10px;
        }

        .main-card .bell .inner {
            padding: 10px;
            background: #83c31c;
            border-radius: 10px;
        }

        .card {
            background-color: #232323 !important;
            border-radius: 12px !important;
            border: 1px solid #83c31c75 !important;
        }

        .card-amount .amount {
            color: #aefd23 !important;
        }

        .card-amount .amount span {
            color: #ffffff !important;
        }

        .plan-card {
            background: #232323;
            border-radius: 16px;
            padding: 14px;
            margin: 20px 0 30px 0;
            border: 1px solid #7cf94545;
            position: relative;
            background: linear-gradient(#23232300, #23232375), url('https://img.freepik.com/free-vector/abstract-black-shapes-background-design_1017-31904.jpg?t=st=1714650201~exp=1714653801~hmac=0ee725b2266ddda8e091f01c15333da69082853a6a60209cd197b857deb57035&w=740');
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .plan-card h4 {
            margin: 0px 0 6px 0;
            color: #7cf945;
            font-weight: 600;
            font-size: 14px;
        }

        .plan-card p {
            color: hsl(0, 0%, 94%);
            font-size: 9px;
            margin-bottom: 6px;
        }

        .plan-card .plan-status {
            background: #fab913;
            color: hsl(128.89deg 55.09% 19.9%) !important;
            position: absolute;
            top: -11px;
            padding: 3px 6px;
            right: 0;
            border-radius: 7px;
            font-size: 9px;
            font-weight: 700;
        }

        button.balance {
            padding: 7px 40px;
            border-radius: 6px;
            margin-top: 3px;
            border: 0;
            width: 100%;
            font-size: 12px;
            font-weight: 500;
            background: #77ec43;
            color: black;
        }

        .plan-rio {
            display: flex;
            align-items: center;
            font-size: 10px;
            padding: 3px;
            background: #fffdda;
            margin: 5px 0px;
            border-radius: 7px;
            width: max-content;
            color: black;
        }

        .plan-rio .plan-amount,
        .plan-rio h6 {
            font-size: 12px;
            font-weight: 600;
            margin: 0;
            padding: 0;
        }

        .plan-rio .plan-amount {
            color: #23742f;
            margin-left: 8px;
        }

        .plan-card h4 span {
            color: #fffdfd;
            text-transform: capitalize;
        }

        .plan-list {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            flex-wrap: wrap;
        }

        .plan-list li {
            list-style-type: none;
            background: #23742f;
            margin: 0 5px 5px 0;
            color: white;
            padding: 4px;
            font-size: 9px;
            border-radius: 7px;
        }

        .vip-badge {
            font-size: 10px;
            color: yellow;
            font-weight: 600;
            padding: 1px 6px;
            background: #282828;
            white-space: nowrap;
            border-radius: 8px;
            position: relative;
            top: -2px;
        }

        .nolock {
            display: none;
        }

        .locked {
            display: flex;
            align-items: center;
            justify-content: center;
            height: -webkit-fill-available;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            backdrop-filter: blur(3px);
        }

        .locked img {
            width: 50%;
        }

        .modal-table th,
        .modal-table td {
            font-size: 10px;
        }

        .modal-table-p {
            font-size: 7px;
            color: #919191;
            margin: 11px 4px 0px 4px;
        }

        .payment-loading {
            width: 100%;
            height: 100vh;
            overflow: auto;
            flex-direction: column;
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            background: black;
            top: 0;
            left: 0;
            z-index: 9999;
        }

        .payment-loading img {
            color: black;
            margin-top: -125px;
        }

        .payment-loading h4 {
            color: #aefd23;
            margin-top: -90px;
            font-weight: 600;
            font-size: 12px;
        }

        .success-img-wrapper {
            width: 100%;
            height: 100vh;
            overflow: hidden;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
            background: #f8f9ff;
            display: flex;
            align-items: center;
            justify-content: center;
            display: none;
        }

        .invest-ov .amount {
            color: #b1b1b1 !important;
        }

        .invest-ov .amount span {
            color: #00ff90 !important;
        }
    </style>
    <div class="col-md-4 plan-wrapper">
        <span class="text-white fw-bold d-flex align-items-center">CHOOSE WORLD'S BEST QUANTUM
            TRADING BOTS
            
        </span>
        <?php $__empty_1 = true; $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php
                $plan_exist = App\Models\Payment::where('plan_id', $plan->id)
                    ->where('user_id', Auth::id())
                    ->where('next_payment_date', '!=', null)
                    ->where('payment_status', 1)
                    ->count();
            ?>
            <div class="col-xl-4 col-md-6">
                <div class="plan-card">
                    <div class="<?php if($plan->vip_status <= auth()->user()->vip_status): ?> nolock <?php else: ?> locked <?php endif; ?>">
                        <img class="img-fluid" style="filter: hue-rotate(45deg);" src="<?php echo e(asset('asset/theme4/dashboard_assets/assets/images/lock.png')); ?>"
                            alt="">
                    </div>
                    <h4>Welcome To <span><?php echo e($plan->plan_name); ?></span> Quantum Trading Bot
                    </h4>
                    <p class="">Trade With World's Best Quantum Trading Bots</p>
                    <span class="plan-status"><?php echo e(__('Required VIP')); ?>

                        <?php echo e($plan->vip_status); ?>

                    </span>
                    <ul class="plan-list">
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

                        <?php if($plan->return_for == 1): ?>
                            <li>
                                <span class="caption"><?php echo e(__('For')); ?> </span>
                                <span class="details"> <?php echo e($plan->how_many_time); ?>

                                    <?php echo e(__('Times')); ?></span>
                            </li>
                        <?php else: ?>
                            <li>
                                <span class="caption"><?php echo e(__('For')); ?> </span>
                                <span class="details"> <?php echo e(__('Lifetime')); ?></span>
                            </li>
                        <?php endif; ?>
                        <li>
                            <span class="caption"><?php echo e(__('EVERY')); ?> </span>
                            <span class="details"><?php echo e($plan->time->name); ?></span>
                        </li>

                        <?php if($plan->capital_back == 1): ?>
                            <li>
                                <span class="caption"><?php echo e(__('Capital Back')); ?> </span>
                                <span class="details"> <?php echo e(__('YES')); ?></span>
                            </li>
                        <?php else: ?>
                            <li>
                                <span class="caption"><?php echo e(__('Capital Back')); ?> </span>
                                <span class="details"> <?php echo e(__('NO')); ?></span>
                            </li>
                        <?php endif; ?>
                    </ul>

                    <div class="plan-rio">
                        <h6><?php echo e(__('ROI')); ?></h6>
                        <h6 class="plan-amount">
                            <?php echo e(number_format($plan->return_interest, 2)); ?> <?php if($plan->interest_status == 'percentage'): ?>
                                <?php echo e('%'); ?>

                            <?php else: ?>
                                <?php echo e(@$general->site_currency); ?>

                            <?php endif; ?>
                        </h6>
                    </div>

                    <?php if($plan_exist >= $plan->invest_limit): ?>
                        <a class="main-btn plan-btn w-100 disabled" href="#">
                            <span><?php echo e(__('Max Limit exceeded')); ?></span>
                        </a>
                    <?php else: ?>
                        
                        <?php if(auth()->guard()->check()): ?>
                            <?php if($plan->vip_status <= auth()->user()->vip_status): ?>
                                <button class="balance btn-light" data-plan="<?php echo e($plan); ?>"
                                    data-plan_percentage="<?php echo e(number_format($plan->return_interest, 2)); ?>"
                                    data-url=""><span><?php echo e(__('Invest')); ?></span></button>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php endif; ?>
    </div>
    <?php $__env->startPush('style'); ?>
        <style>
            .modal-backdrop.fade.show {
                display: none;
            }

            @media (max-width: 991px) {
                #header.header-inner-pages {
                    display: block;
                    background: transparent !important;
                    position: absolute;
                }

                .dashboard-body-part {
                    padding-top: 80px;
                }
            }

            .sp-referral .single-child {
                padding: 6px 10px;
                border-radius: 5px;
            }

            .sp-referral .single-child+.single-child {
                margin-top: 15px;
            }

            .sp-referral .single-child p {
                display: flex;
                align-items: center;
                margin-bottom: 0;
            }

            .sp-referral .single-child p img {
                width: 35px;
                height: 35px;
                border-radius: 50%;
                object-fit: cover;
                -o-object-fit: cover;
            }

            .sp-referral .single-child p span {
                width: calc(100% - 35px);
                font-size: 14px;
                padding-left: 10px;
            }

            .sp-referral>.single-child.root-child>p img {
                border: 2px solid #c3c3c3;
            }

            .sub-child-list {
                position: relative;
                padding-left: 35px;
            }

            .sub-child-list::before {
                position: absolute;
                content: '';
                top: 0;
                left: 17px;
                width: 1px;
                height: 100%;
                background-color: #a1a1a1;
            }

            .sub-child-list>.single-child {
                position: relative;
            }

            .sub-child-list>.single-child::before {
                position: absolute;
                content: '';
                left: -18px;
                top: 21px;
                width: 30px;
                height: 5px;
                border-left: 1px solid #a1a1a1;
                border-bottom: 1px solid #a1a1a1;
                border-radius: 0 0 0 5px;
            }

            .sub-child-list>.single-child>p img {
                border: 2px solid #c3c3c3;
            }
        </style>
    <?php $__env->stopPush(); ?>
    <div class="modal
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
                            Purchase
                            quantum
                            Bot
                        </p>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
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
                            <input type="hidden" name="pair_price">
                            <input type="hidden" name="pair_name">
                            <input type="hidden" name="timestamp">
                            <input type="hidden" name="min_pay">
                            <input type="hidden" name="max_pay">
                            <input type="hidden" name="fix_amount">
                        </div>
                        <table class="table mt-3 table-sm table-striped modal-table">
                            <thead>
                                <th>Bot
                                    Fee
                                </th>
                                <th>Expected
                                    Profit
                                </th>
                            </thead>
                            <tbody>
                                <td class="bot-fee">
                                    0.00
                                    to
                                    0.00
                                </td>
                                <td class="exp-profit">
                                    0.00
                                    to
                                    0.00
                                </td>
                            </tbody>
                            <p class="modal-table-p">
                                In
                                initiating
                                investment,
                                AI
                                bot
                                trading
                                shall
                                commence
                                for
                                a
                                day's
                                duration,
                                entailing
                                profit
                                accrual
                                contingent
                                upon
                                the
                                current
                                valuation
                                of
                                the
                                selected
                                pair,
                                with
                                the
                                invested
                                capital
                                remaining
                                non-refundable
                                and
                                non-withdrawable
                                thereafter.
                            </p>
                        </table>
                    </div>
                    <button class="btn btn-light submit-payment w-auto"><span><?php echo e(__('Invest Now')); ?></span></button>
                </div>
            </form>
        </div>
    </div>
    <div class="payment-loading">
        <img src="https://cdn.dribbble.com/userupload/10543014/file/original-4703d0ba72b72f87fa49a618a24a1f6d.gif"
            class="img-fluid" alt="">
        <h4>Loading...
        </h4>
    </div>
    <div class="success-img-wrapper">
        <img src="https://cdn.dribbble.com/users/5338201/screenshots/13804672/media/ce7ee9f720a36ac1a2782c79dc8f5728.gif"
            class="img-fluid success-img" alt="">
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
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
    $('.modal-table').hide()
    $('.submit-payment').attr('disabled', true)
    $('.submit-payment').text('Enter Amount')
    var invest_form = $('.invest-form')
    $('.modal_amount').keyup(function(e) {

        // $(this).val()
        // invest_form.find('input[name=min_pay]').val()
        // invest_form.find('input[name=max_pay]').val()
        // $('.submit-payment').attr('disabled', true);
        // $('.submit-payment').text('Please Follow Limit');

        // Function to parse value while ignoring commas
        function parseValue(value) {
            return parseFloat(value.replace(/,/g, ''));
        }

        var currentValue = parseValue($(this).val());
        var minPay = parseValue(invest_form.find('input[name=min_pay]').val());
        var maxPay = parseValue(invest_form.find('input[name=max_pay]').val());
        var fixAmount = parseValue(invest_form.find('input[name=fix_amount]').val());
        var modalMessage = $('.modal-error-message');

        if (fixAmount > 0) {
            if (currentValue != fixAmount) {
                $('.submit-payment').prop('disabled', true);
                $('.submit-payment').text('Please Follow Limit');
                modalMessage.text(`Amount should have been equal to ${fixAmount}.`)
                $('.modal-table').slideUp()
            } else {
                $('.submit-payment').prop('disabled', false);
                $('.submit-payment').text('Submit');
                modalMessage.text(``)
                $('.modal-table').slideDown()
            }
        } else {
            if (currentValue > maxPay || currentValue < minPay || currentValue < 1) {
                $('.submit-payment').prop('disabled', true);
                $('.submit-payment').text('Please Follow Limit');
                modalMessage.text(`Amount must be between ${minPay} and ${maxPay}.`)
                $('.modal-table').slideUp()
            } else {
                $('.submit-payment').prop('disabled', false);
                $('.submit-payment').text('Submit');
                modalMessage.text(``)
                $('.modal-table').slideDown()
            }
        }

        let expected = $(this).val() * $('#invest').find('input[name=plan_percentage]').val() / 100 +
            parseFloat($(this).val());
        $('.exp-profit').text(`$${expected} to $${(expected * 1 / 100) + expected}`)
        $('.bot-fee').text(`$${(expected * 1 / 100).toFixed(2) / 2}`)
    });
</script>
<script>
    var invest_form = $('.invest-form')
    $('.success-img-wrapper').hide()
    $('.payment-loading').hide()

    $('.submit-payment').click(function(e) {
        e.preventDefault();
        $('.payment-loading').fadeIn()
        $('.payment-loading h4').text('Loading ...')
        setTimeout(function() {
            $('.payment-loading h4').text('Bot Is Finding Accurate Pair For You');
        }, 3000);
        setTimeout(function() {
            // FETCHING SYMBOL
            fetch('https://quantummtradeai.com/api/cryptoSymbols')
                .then(response => response.json())
                .then(data => {
                    // FETCHING PRICE
                    $.ajax({
                        method: 'GET',
                        url: 'https://api.api-ninjas.com/v1/cryptoprice?symbol=' + data,
                        headers: {
                            'X-Api-Key': 'j/maOGmZgHTpjSrL7e+paA==GZJHhvIFnZGIa8zR'
                        },
                        contentType: 'application/json',
                        success: function(result) {
                            invest_form.find('input[name=pair_name]').val(result.symbol)
                            invest_form.find('input[name=pair_price]').val(result.price)
                            invest_form.find('input[name=timestamp]').val(result
                                .timestamp)
                            $('.payment-loading h4').text(
                                `Bot Selected ${result.symbol} For You, The Initial Pair Price Is ${result.price}`
                            );
                            setTimeout(function() {
                                $('.payment-loading h4').text(
                                    `Processing With ${result.symbol}, Please Wait ...`
                                );
                            }, 5000);
                            setTimeout(function() {
                                $('.success-img-wrapper').hide()
                                $('.payment-loading').hide()
                                const modal = $('#invest');
                                modal.modal('hide')
                                invest_form.submit()
                            }, 10000);
                        },
                        error: function ajaxError(jqXHR) {
                            console.error('Error: ', jqXHR.responseText);
                        }
                    });
                    // FETCHING PRICE
                })
                .catch(error => console.error('Error fetching data:', error));
            // FETCH SYMBOL
        }, 9000);
        // FINAL
    })
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(template() . 'layout.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quantum-trade\resources\views/theme4/pages/invest.blade.php ENDPATH**/ ?>