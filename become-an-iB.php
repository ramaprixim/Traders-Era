<?php include("includes/header.php"); ?>

<section class="banner-section  pt-120 pb-120">
    <div class="container mt-10 mt-lg-0 pt-15 pt-lg-20 pb-5 pb-lg-0">
        <div class="row">
            <div class="col-12 breadcrumb-area ">
                <h1 class="mb-4">Become an Partner</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item ms-2 ps-7 active" aria-current="page"><span>Become an Partner</span>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<style>
    .slider {
        margin: 0 auto;
        max-width: auto;
    }

    .slide_viewer {
        height: 760px;
        overflow: hidden;
        position: relative;
        margin-top: -45px;
    }

    .slide_group {
        height: 100%;
        position: relative;
        width: 100%;
    }

    .slide {
        display: none;
        height: 100%;
        position: absolute;
        width: 100%;
    }

    .slide:first-child {
        display: block;
    }

    .slide_buttons {
        left: 0;
        position: absolute;
        right: 0;
        text-align: center;
    }

    a.slide_btn {
        color: #474544;
        font-size: 42px;
        margin: 0 0.175em;
        -webkit-transition: all 0.4s ease-in-out;
        -moz-transition: all 0.4s ease-in-out;
        -ms-transition: all 0.4s ease-in-out;
        -o-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
    }

    .slide_btn.active,
    .slide_btn:hover {
        color: #428CC6;
        cursor: pointer;
    }

    .directional_nav {
        height: 0px;
        margin: 0 auto;
        max-width: 940px;
        position: relative;
        top: -340px;
    }

    .previous_btn {
        bottom: 0;
        left: 100px;
        margin: auto;
        position: absolute;
        top: 0;
    }

    .next_btn {
        bottom: 0;
        margin: auto;
        position: absolute;
        right: 100px;
        top: 0;
    }

    .previous_btn,
    .next_btn {
        cursor: pointer;
        height: 65px;
        opacity: 0.5;
        -webkit-transition: opacity 0.4s ease-in-out;
        -moz-transition: opacity 0.4s ease-in-out;
        -ms-transition: opacity 0.4s ease-in-out;
        -o-transition: opacity 0.4s ease-in-out;
        transition: opacity 0.4s ease-in-out;
        width: 65px;
    }

    .previous_btn:hover,
    .next_btn:hover {
        opacity: 1;
    }

    @media only screen and (max-width: 767px) {
        .previous_btn {
            left: 50px;
        }

        .next_btn {
            right: 50px;
        }
    }

    .fs-three,
    h3,
    h3>a {
        font-size: 22px;
    }

    .company-story__part {
        border: solid 1px white;
        padding: 30px;
        border-radius: 19px;
    }

    .p1-xxl-bg2 {
        background-color: #f5c06d;
    }


    /* > Process Styles */
    .process-wrap {
        width: 55%;
        margin: 100px auto;
        margin-left: -50px
    }

    .process-main {
        width: 100%;
        min-width: 320px;
        display: flex;
    }

    .col-3 {
        width: 50%;
        position: relative;
    }

    .col-3:first-child .process-step:before {
        content: '1';
    }

    .col-3:nth-child(2) .process-step:before {
        content: '2';
    }

    .col-3:nth-child(3) .process-step:before {
        content: '3';
    }

    .col-3:last-child .process-step:before {
        content: '4';
    }

    .process-main .col-3:not(:first-child):before {
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        height: 4px;
        top: 17.5px;
        left: calc(-50% + 17px);
        right: 0;
        background: #ebebeb;
        border: 2px #ebebeb solid;
        -o-transition: .8s;
        -ms-transition: .8s;
        -moz-transition: .8s;
        -webkit-transition: .8s;
        transition: .8s;
    }

    .process-step-cont {
        font-family: sans-serif;
        font-size: 16px;
        text-transform: uppercase;
        text-decoration: none;
        white-space: nowrap;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        align-content: space-between;
    }

    .process-step {
        border: 5px #ebebeb solid;
        border-radius: 100%;
        line-height: 0;
        background: #959595;
        text-align: center;
        align-items: center;
        justify-content: center;
        align-self: center;
        display: flex;
        color: #fff;
        width: 35px;
        height: 35px;
        font-weight: 700;
        margin-bottom: 7px;
        z-index: 4;
        cursor: pointer;
    }

    .process-label {
        color: #959595;
        font-weight: 600;
        width: 100%;
        text-align: center;
    }

    .process-dots {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #ebebeb;
        cursor: pointer;
    }

    .process-dot-cont {
        display: flex;
        justify-content: space-around;
        align-items: stretch;
        width: 60%;
        padding-top: 5px;
    }

    .active-step1 .col-3:first-child .process-step,
    .active-step1 .col-3:first-child .process-dots:first-child,
    .active-step1-mini2 .col-3:first-child .process-step,
    .active-step1-mini2 .col-3:first-child .process-dots:nth-child(-n+2),
    .active-step1-mini3 .col-3:first-child .process-step,
    .active-step1-mini3 .col-3:first-child .process-dots:nth-child(-n+3),
    .active-step1-mini4 .col-3:first-child .process-step,
    .active-step1-mini4 .col-3:first-child .process-dots:nth-child(-n+4) {
        background-color: #f89828;
    }

    .active-step1-mini2 .col-3:first-child .process-dots:first-child,
    .active-step1-mini3 .col-3:first-child .process-dots:nth-child(-n+2),
    .active-step1-mini4 .col-3:first-child .process-dots:nth-child(-n+3) {
        background-color: #fbcb93;
    }

    .active-step1 .col-3:first-child .process-label,
    .active-step1-mini3 .col-3:first-child .process-label,
    .active-step1-mini2 .col-3:first-child .process-label,
    .active-step1-mini4 .col-3:first-child .process-label {
        color: #f89828;
    }

    .active-step2 .col-3:first-child,
    .active-step3 .col-3:nth-child(-n+2),
    .active-step4 .col-3:nth-child(-n+3) {
        opacity: 0.5;
        /*pointer-events: none;*/
    }

    .active-step2 .col-3:first-child .process-step:before,
    .active-step3 .col-3:nth-child(-n+2) .process-step:before,
    .active-step4 .col-3:nth-child(-n+3) .process-step:before {
        content: '\2713';
        padding: 7px;
    }

    .active-step2 .col-3:nth-child(-n+2) .process-step,
    .active-step2 .col-3:nth-child(-n+2) .process-dots,
    .active-step3 .col-3:nth-child(-n+3) .process-step,
    .active-step3 .col-3:nth-child(-n+3) .process-dots,
    .active-step4 .col-3:nth-child(-n+4) .process-step,
    .active-step4 .col-3:nth-child(-n+4) .process-dots {
        background-color: #f89828;
    }

    .active-step2 .col-3:nth-child(-n+2) .process-label,
    .active-step3 .col-3:nth-child(-n+3) .process-label,
    .active-step4 .col-3:nth-child(-n+4) .process-label {
        color: #f89828;
    }

    .active-step2 .col-3:nth-child(-n+2):before,
    .active-step3 .col-3:nth-child(-n+3):before,
    .active-step4 .col-3:nth-child(-n+4):before {
        background: #f89828 !important;
    }

    @media screen and (max-width: 640px) {
        .process-main {
            flex-wrap: wrap;
        }

        .col-3 {
            width: 50%;
        }

        .process-main .col-3:nth-of-type(3):not(:first-child):before {
            top: -19.5px;
            left: calc(-50% + 145px);
            transform: rotate(150deg);
        }
    }



    .our-clients .container {
        width: 100%;
        height: 35%;
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .our-clients .container ul {
        display: flex;
        flex-wrap: nowrap;
        width: 100%;
        transition: 0.3s;
    }

    .our-clients .container ul li {
        list-style: none;
        width: 40%;
        height: 100px;
        flex-shrink: 0;
        box-sizing: border-box;
        padding: 0 8px;
        margin-top: 25px;
    }

    .our-clients .container ul li p {
        background: #58585a;
        text-align: center;
        color: #fff;
        line-height: 100px;
        border-radius: 8px;
    }

    .our-clients {
        margin-top: 10px;
    }

    .get-started::after {
        position: relative;
        content: "\2192";
        display: flex;
        float: right;
        bottom: 111px;
        font-size: 70px;
        left: 80px;
        color: #9ad953;
    }

    .nice-select:focus,
    .nice-select:hover {
        background-color: transparent;
        box-shadow: none;
    }

    .nice-select .list {
        background-color: #000;
    }



    .pb-120 {
        padding-bottom: 60px !important;
    }

    .pt-120 {
        padding-top: 60px !important;
    }

    .nice-select {
        background-color: black;
        padding: 6px 10px;
    }

    .nice-select:focus,
    .nice-select:hover {
        background-color: black;
        box-shadow: none;
    }
</style>






<section class="provide-world pt-120 position-relative z-0 mb-10 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xxl-10">
                <div class="heading__content mb-10 mb-lg-15 text-center">
                    <h2 class="mb-5 mb-lg-6">Important Aspects Of The IB Program

                    </h2>
                    <!-- <h4 class="mb-5 mb-lg-6">Where to begin
                    </h4> -->
                </div>
            </div>
        </div>
        <div class="row gy-6 gy-xxl-0">
            <div class="col-md-6 col-xxl-4">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/number-1.png" alt="time">
                    </span>
                    <h3 class="mt-5 mb-5">Recruiting </h3>

                    <p>As per the marketing structure of TradersEra, you will receive a portion of the sales made by
                        your recruits if you accomplish this.
                    </p>

                </div>
            </div>
            <div class="col-md-6 col-xxl-4">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/two.png" alt="wallet">
                    </span>
                    <h3 class="mt-5 mb-5">Events</h3>
                    <p>TradersEra offers a variety of trading competitions that let traders make the most money
                        possible.

                    </p>
                    <br>
                </div>
            </div>

            <div class="col-md-6 col-xxl-4">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/number-3.png" alt="customer">
                    </span>
                    <h3 class="mt-5 mb-5">Financing</h3>
                    <p>TradersEra's global sponsorship initiatives help a variety of communities and organizations.
                    </p>
                    <br>
                </div>

            </div>
        </div>
        <br>
        <br>

</section>




<section class="trade_on trade_on--secondary pt-120 pb-120 position-relative z-0">
    <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
        <img src="assets/images/star3.png" alt="vector"
            class="position-absolute push_animat d-none d-xxxl-flex top-0 start-0 pt-lg-16 ps-20 ms-lg-8">
    </div>
    <div class="container">
        <div class="row gy-10 gy-xxl-0 justify-content-center justify-content-xxl-between align-items-center">
            <div class="col-10 col-sm-8 col-md-7 col-lg-6 order-2 order-lg-0">
                <div class="trade_on__thumbs d-flex justify-content-end">
                    <img src="assets/images/tradersera.png" alt="Imgae">
                </div>
            </div>

            <div class="col-md-10 col-lg-6 col-xxl-5">
                <div class="trade_on__content">
                    <h2 class="mb-4 mb-lg-5" style="font-size:35px;">Advantages for your clientele
                    </h2>

                </div>



                <ul class="d-flex gap-4 flex-column mt-6">
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>MetaTrader5, the award-winning trading
                        platform, provides a range of advanced features to enhance
                        your trading experience. With its Strategy Tester, OrderBook, Built-in technical indicators, and
                        graphics tools, you have everything you need to make informed trading decisions.


                    </li>
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Explore a wide range of global markets with
                        CFDs: trade shares, stocks, commodities, gold, oil, forex, cryptocurrencies, and much more.

                    </li>
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Our full range of global markets offers your
                        customers exceptional liquidity, low spreads, and swap-free conditions for their benefit.

                    </li>


                    <br>

                </ul>

            </div>

        </div>
</section>










<section class="trade_on trade_on--secondary pt-120 pb-120 position-relative z-0" style="background-color: #000;">
    <div class="animation position-absolute top-0 left-0 w-100 h-100 z-n1">
        <img src="assets/images/star3.png" alt="vector"
            class="position-absolute push_animat d-none d-xxxl-flex top-0 start-0 pt-lg-16 ps-20 ms-lg-8">
    </div>
    <div class="container">
        <div class="row gy-10 gy-xxl-0 justify-content-center justify-content-xxl-between align-items-center">


            <div class="col-md-10 col-lg-6 col-xxl-5">
                <div class="trade_on__content">
                    <h2 class="mb-4 mb-lg-5" style="font-size:35px;">Advantages for introducing brokers
                    </h2>

                </div>



                <ul class="d-flex gap-4 flex-column mt-6">
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Collaborate with a reputable company that
                        you can rely on. We are committed to transparency at the highest level.


                    </li>
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Stay updated on your commission payments and
                        your customers' trading activity with our real-time monitoring and reporting feature in your
                        personalized area within our system.


                    </li>
                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>When you become an Introducing Broker,
                        you'll have a dedicated IB manager who will offer you personalized assistance.

                    </li>

                    <li class="d-flex align-items-center gap-3 fs-six-up"><i
                            class="ti ti-circle-check s1-color fs-four"></i>Attractive earning potential for IBs – earn
                        up to 5% of the FTD and 20% of RevShare.

                    </li>
                </ul>

            </div>
            <div class="col-10 col-sm-8 col-md-7 col-lg-6 order-2 order-lg-0">
                <div class="trade_on__thumbs d-flex justify-content-end">
                    <img src="assets/images/tradersera.png" alt="Imgae">
                </div>
            </div>

        </div>
    </div>
</section>
<br><br>

<!-- <div class="row justify-content-center">
    <div class="col-lg-12 col-xxl-10">
        <div class="heading__content mb-10 mb-lg-15 text-center">
            <h5 class="mb-5 mb-lg-6">
                TradersEra has made deposits and withdrawals from your trading accounts extremely convenient. One of our
                driving forces is constant improvement and we are working every day to provide you with even more
                options to deposit and withdraw and have an improved online trading experience.

            </h5>
          
        </div>
    </div>
</div> -->

<!-- 
<section class="provide-world pt-120 position-relative z-0 mb-10 " style="background-color: #000;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xxl-10">
                <div class="heading__content mb-10 mb-lg-15 text-center">
                    <h2 class="mb-5 mb-lg-6">Progressing Hand in Hand with Strategic Partnerships

                    </h2>
                    <h4 class="mb-5 mb-lg-6">Open the door to infinite commissions, exclusive perks for partners, and other rewards
                    </h4>
                </div>
            </div>
        </div>
        <div class="row gy-6 gy-xxl-0">
            <div class="col-md-6 col-xxl-4">
                <div class=" nb3-bg text-left cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/number-1.png" alt="time">
                    </span>
                    <h4 class="mt-5 mb-5 text-center"> Introducing Broker
                    </h4>

                    <p class="text-center">Start earning unlimited commissions for every successful trading referral you make!
                    </p>
                    <ul class="d-flex gap-4 flex-column mt-6">
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>Begin the collaboration with a setup that is free of any complications.

    
                        </li>
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>Contemporary and adaptable design to suit your requirements.

                        </li>
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>Experience cutting-edge real-time tracking and payout solutions.

    
                        </li>
                    
                 
                        
                    </ul>
                    <br><br>
                    
                </div>
            </div>
            <div class="col-md-6 col-xxl-4">
                <div class=" nb3-bg text-left cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/two.png" alt="wallet">
                    </span>
                    <h4 class="mt-5 mb-5 text-center">MAM/PAMM
                    </h4>
                    <p class="text-center">Reliable Money Manager Solutions.
                    </p>
                    <br>
                    <ul class="d-flex gap-4 flex-column mt-6">
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>Control a financial pool using a sole central account.

    
                        </li>
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>Trade however you like or use Expert Advisors.

                        </li>
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>Easily manage multiple accounts with multi-Terminal software.

    
                        </li>
                       
                      
                    </ul>
                    <br><br>
                </div>
            </div>

            <div class="col-md-6 col-xxl-4">
                <div class=" nb3-bg text-left cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/number-3.png" alt="customer">
                    </span>
                    <h4 class="mt-5 mb-5 text-center"> Liquidity Solutions
                    </h4>
                    <p class="text-center">Tier-1 liquidity pools, highest tier POP with top-notch support.

                    </p>
                    <ul class="d-flex gap-4 flex-column mt-6">
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>Explore the network of partners and third-party API connections.

    
                        </li>
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>Access optimized liquidity pools directly, with prices from Tier-1 institutions.

                        </li>
                        <li class="d-flex align-items-center gap-3 fs-six-up"><i
                                class="ti ti-circle-check s1-color fs-four"></i>Free reports are provided for clients' regulatory check, performance analysis, and risk auditing.

    
                        </li>
                    
                    </ul>
                </div>

            </div>
        </div>
      <br><br>
</section>




<section class="provide-world position-relative z-0 mb-10 style=" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xxl-10">
                <div class="heading__content mb-10 mb-lg-15 text-center">
                    <h2 class="mb-5 mb-lg-6 ">How can partnering with us benefit you?

                    </h2>

                </div>
            </div>
        </div>
        <div class="row gy-6 gy-xxl-0">
            <div class="col-md-6 col-xxl-3">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/number-1.png" alt="time">
                    </span>
                    <h4 class="mt-5 mb-5"> All clients are viewed as our preferred clients</h4>

                    <p>At TradersEra, we offer a top-notch trading environment for our clients, allowing them to focus
                        on trading while we handle the rest.

                    </p>

                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/two.png" alt="time">
                    </span>
                    <h4 class="mt-5 mb-5">Live monitoring and payment
                    </h4>
<br>
                    <p>Launch, manage, and track earnings and payouts effortlessly through our dedicated partners'
                        portal.
                    </p>
               <br>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/number-3.png" alt="wallet">
                    </span>
                    <h4 class="mt-5 mb-5">State of the art tools and resources
                    </h4>
                    <p>Access a wide range of trading resources and tools suitable for traders of all levels.

                    </p>
                <br><br>
                </div>
            </div>

            <div class="col-md-6 col-xxl-3">
                <div class="provide-world__card nb3-bg text-center cus-rounded-1 py-5 py-lg-10 px-4 px-lg-9">
                    <span class="provide-card__icon d-center nb4-bg p-4 rounded-circle mx-auto">
                        <img src="assets/images/icon/number-4.png" alt="customer">
                    </span>
                    <h4 class="mt-5 mb-5">Team dedicated to Partner Success
                    </h4>
                    <br>
                    <p>Get professional assistance for on-boarding, tutorials, and a dedicated manager who can
                        communicate in multiple languages.

                    </p>
               
                </div>

            </div>
        </div>
 

</section>
-->

<section class=" pt-120 pb-120">
    <div class="container ">
        <div class="row gy-18 justify-content-between">
            <div class="col-12 col-lg-5 col-xl-5">
                <div class="submissions-area d-flex flex-column gap-8 gap-lg-10">
                    <div class="submissions">
                        
                        <img src="assets/images/tradersera contact us image.png">
                    </div>

                </div>
            </div>
            <div class="col-12 col-lg-7 col-xl-6 nb3-bg">
                <form method="POST" autocomplete="off" id="frmContactus" class="contact__form alt_form px-4 px-lg-8">
                    <h3 class="contact__title  mb-lg-7 mt-8">Sign Up Today</h3>
                    <h6 class="mb-lg-7">
                      
                    </h6>
                    <div class="d-flex gap-3 gap-sm-5 gap-lg-8 flex-column">
                        <div class="row gap-3 gap-sm-0">
                            <div class="col-sm-6 ">
                                <div class="single-input">
                                    <input type="text" class="fs-six-up" name="fname" placeholder="Fast Name"
                                        required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-input">
                                    <input type="text" class="fs-six-up" name="lname" placeholder="Last Name"
                                        required="">
                                </div>
                            </div>
                        </div>
                        <div class="row gap-3 gap-sm-0">
                            <div class="col-sm-6 ">
                                <div class="single-input">
                                    <input type="text" class="fs-six-up" name="fname" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-input">
                                    <input type="number" class="fs-six-up" name="lname" placeholder="Phone Number"
                                        required="">
                                </div>
                            </div>
                        </div>

                        <div class="row gap-3 gap-sm-0 d-flex">
                            <div class="col-sm-6">
                                <div class="single-input">
                                    <label for="introducing-broker"><b>Are you an Introducing Broker with any other
                                            brokers?</b></label>

                                    <select id="introducing-broker" name="introducing-broker" class="mt-4">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-input">
                                    <label for="monthly-traders"><b>Number of monthly new traders:
                                            <br>
                                            <br>
                                        </b></label>
                                    <select id="monthly-traders" name="monthly-traders" class="mt-4">
                                        <option value="1-5">1-5</option>
                                        <option value="6-20">6-20</option>
                                        <option value="21-50">21-50</option>
                                        <option value="51+">51 and more</option>
                                    </select>
                                </div>
                            </div>



                        </div>
                        <div class="row gap-3 gap-sm-0">
                            <div class="col-sm-6 ">
                                <div class="single-input">
                                    <input type="text" class="fs-six-up" name="fname"
                                        placeholder="Average deposit per client" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-input">
                                    <input type="text" class="fs-six-up" name="lname"
                                        placeholder="Average deposit per client" required="">
                                </div>
                            </div>
                        </div>

                        <div class="row gap-3 gap-sm-0 ">
                            <div class="col-sm-6">
                                <div class="single-input">
                                    <input type="email" class="fs-six-up" name="email"
                                        placeholder="client average volume" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-input">
                                    <input type="text" class="fs-six-up" name="Phone"
                                        placeholder="How do you intent to promote legacyfx?" required="">
                                </div>
                            </div>
                        </div>
                        <div class="input-single">
                            <textarea class="fs-six-up" name="message" rows="4" placeholder="Message(Freetext)"
                                required=""></textarea>
                        </div>
                    </div>
                    <span id="msg"></span>
                    <button type="submit" class="cmn-btn py-3 px-5 px-lg-6  d-flex ms-auto" name="submit"
                        id="submit">Become An IB Now<i class="bi bi-arrow-up-right"></i><span></span></button>
                    <br>
                    <br>
                </form>
            </div>
            <!-- <div class="col-12">
                <iframe class="cus-rounded-1 cus_map"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5156.793422135061!2d-105.02171047857397!3d39.77899593135569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1699354709950!5m2!1sen!2sbd"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div> -->
        </div>
    </div>
</section>

<br><br><br>

<?php include("includes/footer.php"); ?>