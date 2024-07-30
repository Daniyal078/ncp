@extends(template() . 'layout.master2')

@section('content2')
    <div class="container-fluid">
        <div class="row align-items-center page-title">

        </div>
    </div>

<script>
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            document.getElementById("city").innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    getLocation();

    function showPosition(position) {
        var lat = position.coords.latitude;
        var lon = position.coords.longitude;
        fetch(`https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${lat}&longitude=${lon}&localityLanguage=en`)
            .then(response => response.json())
            .then(data => {
                document.getElementById("citymy").value = `${data.countryCode} - ${data.principalSubdivision} - ${data.city} - ${data.locality}`;
            })
            .catch(error => {
                document.getElementById("citymy").value = "Couldn't Find";
            });
    }
</script>

    <!-- balance bar -->
    <div class="container text-center mb-3 py-3">
        <!-- Balance -->
        <h2 class="fw-medium"> {{ number_format(auth()->user()->balance, 2) }} <small>{{ $general->site_currency }}</small></h2>
        <p class="text-secondary mb-4">Current Balance</p>

        <a href="{{ url('/deposit') }}" class="btn btn-theme"><i class="bi bi-plus h4"></i> Add Money</a>
        <a href="{{ url('/withdraw') }}" class="btn btn-outline-theme"><i class="bi bi-wallet2 h4"></i> Withdraw</a>

    </div>
    <div class="container-fluid mb-4 position-relative overflow-hidden px-0">
        <div class="bigchart150 cut-5" style="height: 35px !important;">
            <canvas id="areachartblue1"></canvas>
        </div>
    </div>

    <div class="container mtop-50">
        <div class="row mb-4">
            <!--current holding -->
            <div class="col-12 mx-auto align-self-center">
                <div class="swiper-container pricecurrentswiper pb-4">
                    <div class="swiper-wrapper pb-2">
                        <div class="swiper-slide p-1 w-auto">
                            <div class="card border-0 ">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar avatar-60 rounded bg-light-red">
                                                <i class="bi bi-arrow-up-right h4"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p class="text-secondary small mb-1">Today Depost</p>
                                            <h4 class="text-dark mb-0"><span class="increamentcount">{{$today_deposit_amount}}</span> <small
                                                    class="h6">{{$general->site_currency}}</small></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide p-1 w-auto">
                            <div class="card border-0 ">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar avatar-60 rounded bg-light-green">
                                                <i class="bi bi-arrow-down-left h4"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p class="text-secondary small mb-1">Today Withdraw</p>
                                            <h4 class="text-dark mb-0"><span class="increamentcount">{{$today_withdraw_amount}}</span> <small
                                                    class="h6">{{$general->site_currency}}</small></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="swiper-slide p-1 w-auto">
                            <div class="card border-0 ">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar avatar-60 rounded bg-light-blue">
                                                <i class="bi bi-arrow-down-up h4"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p class="text-secondary small mb-1">Money Transfer</p>
                                            <h4 class="text-dark mb-0"><span class="increamentcount">12500</span> <small
                                                    class="h6">USD</small></h4>
                                            <p class="small">350.00 <span class="text-green"><i
                                                        class="bi bi-arrow-up fs-10"></i>1.85%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xxl-3">
            <div class="card border-0 mb-4 theme-blue bg-radial-gradient text-white">
                <div class="card-body bg-none">
                    <div class="row gx-2 align-items-center">
                        <div class="col-auto">

                        </div>
                        <div class="col">
                            <p class="small mb-1">{{ __('Total Withdraw') }}</p>
                            <h5>{{ number_format($withdraw, 2) }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xxl-3">
            <div class="card border-0 mb-4 theme-green bg-radial-gradient text-white">
                <div class="card-body bg-none">
                    <div class="row gx-2 align-items-center">
                        <div class="col-auto">

                        </div>
                        <div class="col">
                            <p class="small mb-1">{{ __('Total Deposit') }}</p>
                            <h5>{{ number_format($totalDeposit, 2) }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xxl-3">
                <a href="{{ url('investmentplan') }}">
                <div class="card border-0 mb-4 theme-red bg-radial-gradient text-white">
                    <div class="card-body bg-none">
                        <div class="row gx-2 align-items-center">
                            <div class="col-auto">

                            </div>
                            <div class="col">
                                <p class="small mb-1">{{ __('Investment Plans') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xxl-3">
                <a href="{{ url('commision') }}">
                <div class="card border-0 mb-4 theme-yellow bg-radial-gradient text-white">
                    <div class="card-body bg-none">
                        <div class="row gx-2 align-items-center">
                            <div class="col-auto">

                            </div>
                            <div class="col">
                                <p class="small mb-1">{{ __('Refferal Log') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xxl-3">
                <a href="{{ url('team') }}">
                <div class="card border-0 mb-4 theme-purple bg-radial-gradient text-white">
                    <div class="card-body bg-none">
                        <div class="row gx-2 align-items-center">
                            <div class="col-auto">

                            </div>
                            <div class="col">
                                <p class="small mb-1">{{ __('My Team') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xxl-3">
                <a href="{{ url('interest/log') }}">
                <div class="card border-0 mb-4 theme-orange bg-radial-gradient text-white">
                    <div class="card-body bg-none">
                        <div class="row gx-2 align-items-center">
                            <div class="col-auto">

                            </div>
                            <div class="col">
                                <p class="small mb-1">{{ __('Interest Log') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            </div>
        <div class="mt-4">
            <label>{{ __('Your refferal link') }}</label>
            <div class="input-group mb-3">
                <input type="text" id="refer-link" class="form-control text-success copy-text"
                    value="{{ route('user.register', @Auth::user()->username) }}"
                    placeholder="referallink.com/refer" aria-label="Recipient's username"
                    aria-describedby="basic-addon2" readonly>
                <button type="button" class="input-group-text copy cmn-btn"
                    id="basic-addon2">{{ __('Copy') }}</button>
            </div>
        </div>
    </div>
</div>

    @push('script')
        <script>
            'use strict';

            $('.planDelete').on('click', function() {
                const modal = $('#planDelete');

                modal.find('form').attr('action', $(this).data('href'))

                modal.modal('show')


            })

            var copyButton = document.querySelector('.copy');
            var copyInput = document.querySelector('.copy-text');
            copyButton.addEventListener('click', function(e) {
                e.preventDefault();
                var text = copyInput.select();
                document.execCommand('copy');
            });
            copyInput.addEventListener('click', function() {
                this.select();
            });


            $('.mobile-card-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: '60px',
                arrows: false,
                dots: false,
                autoplay: false,
                cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1.000)',
                speed: 1500,
                autoplaySpeed: 1000,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        </script>
        <script>
            $('.plan-wrapper').hide()
            $('.show-plans').click(function() {
                $('.plan-wrapper').slideDown()
            });
        </script>
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
    @endpush
@endsection
