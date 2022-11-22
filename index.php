<?php
// session_start();
require 'en/int.php';
$class = new mastertradersfx_engine;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="TechyDevs" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>ACORNTRADE</title>

    <!-- Favicon -->
    <link rel="icon" href="images/Acorntrade.PNG" />

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,600,700,800&amp;display=swap" rel="stylesheet" />

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/select2.min.css" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">

    <style>
        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button1 {
            border-radius: 2px;
        }

        .button2 {
            border-radius: 4px;
        }

        .button3 {
            border-radius: 8px;
        }

        .button4 {
            border-radius: 12px;
        }

        .button5 {
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <!-- start per-loader -->
    <div class="loader-container">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- end per-loader -->
    <!-- ================================
            START HEADER AREA
================================= -->
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="header-top-info">
                            <ul class="info-list">
                                
                            </ul>
                        </div><!-- end header-top-info -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div>
        <!-- start per-loader -->
        <div class="loader-container">
            <div class="loader-ripple">
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- end per-loader -->



        <!-- ================================
            START HEADER AREA
================================= -->
        <?php include('./layouts/nav.php') ?>
        <!-- ================================
         END HEADER AREA
================================= -->

        <!-- ================================
    START HERO AREA
================================= -->
        <section class="hero-area hero-area2 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="hero-content">
                            <!-- <h3 class="hero__title" style="color: hex;"><span>ACORNS</span> is World's Popular Cryptocurrencies Company.</h3> -->
                            <h2 class="hero__title" style="color: white;"><span>Start Trading The World's Most </span> Popular Cryptocurrencies!</h2>
                            <div class="hero-btn2">
                                <a href="sign-up.php" class="theme-btn started__btn">get started</a>
                                <!-- <a href="#" class="theme-btn">learn more</a> -->
                            </div>
                        </div><!-- end hero-content -->
                    </div><!-- end col-lg-7 -->
                </div><!-- end row -->
            </div><!-- end container -->
            <!-- <svg class="hero-svg" viewBox="0 0 500 150" preserveAspectRatio="none">
        <path d="M-8.17,-2.45 C237.87,221.53 274.54,-178.13 512.69,123.84 L500.00,150.00 L0.00,150.00 Z"></path>
    </svg> -->
        </section><!-- end hero-area -->
        <!-- ================================
    END HERO AREA
================================= -->

        <!-- ================================
       START ABOUT AREA
================================= -->
        <section class="about-area about-area2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="sec-heading text-center">
                            <div class="heading-circle m-x-auto"></div>
                            <p class="sec__meta">SEE WHAT OUR NUMBERS SAY</p>
                        </div><!-- end sec-heading -->
                    </div><!-- end col-lg-8 -->
                </div><!-- end row -->
                <div class="row funfact-wrapper">
                    <div class="col-lg-3 col-sm-6">
                        <div class="funfact-item">
                            <div class="funfact-circle"></div>
                            <div class="funfact-icon">
                                <i class="flaticon-032-bitcoin-3 funfact__icon"></i>
                            </div>
                            <span class="funfact__number counter"><?php $class->MFXtotal_users_online() ?></span>
                            <p class="funfact__meta">DAYS ONLINE</p>
                        </div><!-- end funfact-item-->
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="funfact-item">
                            <div class="funfact-circle"></div>
                            <div class="funfact-icon">
                                <i class="flaticon-001-bitcoin-20 funfact__icon"></i>
                            </div>
                            <span class="funfact__number counter"><?php $class->paytotalMemberInvested() ?></span>
                            <p class="funfact__meta">TOTAL WITHDRAWN</p>
                        </div><!-- end funfact-item-->
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="funfact-item">
                            <div class="funfact-circle"></div>
                            <div class="funfact-icon">
                                <i class="flaticon-034-consulting funfact__icon"></i>
                            </div>
                            <span class="funfact__number counter"><?php $class->MFX_total_users() ?></span>
                            <p class="funfact__meta">TOTAL INVESTORS</p>
                        </div><!-- end funfact-item-->
                    </div><!-- end col-lg-3 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="funfact-item">
                            <div class="funfact-circle"></div>
                            <div class="funfact-icon">
                                <i class="flaticon-006-bitcoin-18 funfact__icon"></i>
                            </div>
                            <span class="funfact__number counter"><?php $class->MFX_index_depost() ?></span>
                            <p class="funfact__meta">TOTAL INVESTMENTS</p>
                        </div><!-- end funfact-item-->
                    </div><!-- end col-lg-3 -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="divider">
                            <span class="divider__circle"></span>
                        </div><!-- end divider -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end about-area -->
        <!-- ================================
       START ABOUT AREA
================================= -->




        <!-- ================================
     START CALCULATOR AREA
================================= -->
        <section class="calculator-area text-center">
            <span class="howitworks-shape"></span>
            <span class="howitworks-shape"></span>
            <span class="howitworks-shape"></span>
            <span class="howitworks-shape"></span>
            <span class="howitworks-shape"></span>
            <div class="container">

            </div>
            <!-- end container -->
        </section>
        <!-- end calculator-area -->
        <!-- ================================
     END CALCULATOR AREA
================================= -->

        <!-- ================================
       START CTA AREA
================================= -->
        <section class="cta-area">
            <div class="circle-icons">
                <div class="circle-one"></div>
                <div class="circle-two"></div>
                <div class="circle-three"></div>
            </div>
            <!-- end box-icons -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="sec-heading">
                            <div class="heading-circle"></div>
                            <h2 class="sec__title">Are You Ready to Join With Us.</h2>
                            <p class="sec__desc">
                                REGISTER ACCOUNT, Fill in the quick registration form or use the normal page.
                                Please do not forget to include your payment data.
                            </p>
                        </div>
                        <!-- end sec-heading -->
                    </div>
                    <!-- end col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="cta-btn-box">
                            <div class="circle-icons2">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                                <div class="circle-three"></div>
                            </div>
                            <a href="sign-up.php" class="theme-btn">get started</a>
                        </div>
                        <!-- end cta-btn-box -->
                    </div>
                    <!-- end col-lg-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end cta-area -->


        <section class="package-area package-area2 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="package-tab-content">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs justify-content-center" role="tablist">
                                <li role="presentation">
                                    <a href="#tab4" role="tab" data-toggle="tab" class="active" aria-selected="true">INVESTMENTS PLANS</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="tab4">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="package-content">
                                                <h1 class="package__title">
                                                    STATER PLAN
                                                </h1>
                                                <h1>5%</h1>
                                                <div class="price__box">
                                                    <!-- <span class="currency"><i class="fa fa-dollar-sign"></i></span> -->
                                                    <h4 class="price__price">From $50 - $1,000
                                                    </h4>
                                                    <p>After 24 Hours</p>
                                                </div>
                                                <a href="#" class="order__btn">invest now</a>
                                            </div><!-- end package-content -->
                                        </div><!-- end col-lg-3 -->

                                        <div class="col-lg-3 col-sm-6">
                                            <div class="package-content">
                                                <h1 class="package__title">
                                                    SILVER PLAN
                                                </h1>
                                                <h1>10%</h1>
                                                <div class="price__box">
                                                    <!-- <span class="currency"><i class="fa fa-dollar-sign"></i></span> -->
                                                    <h4 class="price__price">From $1,000 - $5,000
                                                    </h4>
                                                    <p>After 48 Hours</p>
                                                </div>
                                                <a href="#" class="order__btn">invest now</a>
                                            </div><!-- end package-content -->
                                        </div><!-- end col-lg-3 -->

                                        

                                        <div class="col-lg-3 col-sm-6">
                                            <div class="package-content">
                                                <h1 class="package__title">
                                                    GOLD PLAN
                                                </h1>
                                                <h1>10%</h1>
                                                <div class="price__box">
                                                    <!-- <span class="currency"><i class="fa fa-dollar-sign"></i></span> -->
                                                    <h4 class="price__price">From $15,000 - $20,000
                                                    </h4>
                                                    <p>After 72 Hours</p>
                                                </div>
                                                <a href="#" class="order__btn">invest now</a>
                                            </div><!-- end package-content -->
                                        </div><!-- end col-lg-3 -->


                                        <div class="col-lg-3 col-sm-6">
                                            <div class="package-content">
                                                <h1 class="package__title">
                                                    DIAMOND PLAN
                                                </h1>
                                                <h1>20%</h1>
                                                <div class="price__box">
                                                    <!-- <span class="currency"><i class="fa fa-dollar-sign"></i></span> -->
                                                    <h4 class="price__price">From $20,000 - infinity
                                                    </h4>
                                                    <p>After 96 Hours</p>
                                                </div>
                                                <a href="#" class="order__btn">invest now</a>
                                            </div><!-- end package-content -->
                                        </div><!-- end col-lg-3 -->

                                    </div>
                                </div><!-- end tab-pane -->


                            </div><!-- end tab-content -->
                        </div><!-- end package-tab-content -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="divider">
                            <span class="divider__circle"></span>
                        </div><!-- end divider -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end package-area -->
        <!-- ================================
       START PACKAGE AREA
================================= -->

        <!-- Blog Grid
======================================= -->
        <section id="blog" class="blog blog-grid pb-60">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="heading heading-3 mb-50 text--center">
                            <h2 class="heading--title" style="text-align: center; color: white;">LIVE STOCK MARKET</h2>
                        </div>
                    </div><!-- .col-md-6 end -->
                </div>
                <div class="row">
                    <!-- Blog Entry #1 -->
                    <div class="col-xs-12 col-sm-12 col-md-12 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-entry">
                            <iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=6&pref_coin_id=1505&graph=yes" width="100%" height="409px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0"></iframe>
                        </div>
                        <!-- .blog-entry end -->
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #blog end -->




        <section id="consultation" class="consultation consultation-1 pb-0">
            <div class="bg-section">
                <!-- <img src="./images/1.jpg" alt="Background" /> -->
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2 mb-50">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 wow center" data-wow-delay="">
                                    <!-- <h2 class="heading--title text-white" style="text-align: center; background-color: #ff7e00;">LATEST WITHDRAWAL</h2> -->
                                </div>
                            </div><!-- .row end -->
                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInRight" data-wow-delay="200ms">
                                    <div class="body table-responsive">
                                        <table class="table table-hover table-bordered" style="width:70%; border: 1px solid black;  margin-left: auto; margin-right: auto; ">
                                            <!-- <caption style="background-color: #ff7e00;">LATEST WITHDRAWAL</caption> -->
                                            <thead>
                                                <h2 class="heading--title " style="text-align: center; color: #ff7e00;">LATEST WITHDRAWAL</h2>
                                                <tr class="text-white">
                                                    <th>#</th>
                                                    <th>Username</th>
                                                    <!-- <th>Reg. Date</th> -->
                                                    <th>Deposit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $class->MFX_showWITHDRAWINDEX();

                                                ?>
                                                <tr class="text-white">
                                                    <th scope="row"></th>
                                                    <td></td>
                                                    <!-- <td></td> -->
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div><!-- .row end -->
                        </div><!-- .heading end -->
                    </div>

                </div>
                <!-- .row end -->

            </div>
            <!-- .container end -->
        </section>


        <section id="consultation" class="consultation consultation-1 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2 mb-50">
                            <div class="row">
                            </div><!-- .row end -->
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                                    <div class="body table-responsive">
                                        <table class="table table-hover table-bordered" style="width:70%; border: 1px solid black;  margin-left: auto; margin-right: auto;">
                                            <!-- <caption style="background-color: #ff7e00;">LATEST WITHDRAWAL</caption> -->
                                            <thead>
                                                <h2 class="heading--title " style="text-align: center; color: #ff7e00;">LATEST DEPOSIT</h2>
                                                <tr class="text-white">
                                                    <th>#</th>
                                                    <th>Username</th>
                                                    <!-- <th>Reg. Date</th> -->
                                                    <th>Deposit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $class->MX_showDepositINDEX();

                                                ?>
                                                <tr class="text-white">
                                                    <th scope="row" class="text-white"></th>
                                                    <td></td>
                                                    <!-- <td></td> -->
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>



                            </div><!-- .row end -->
                        </div><!-- .heading end -->
                    </div>

                </div>
                <!-- .row end -->

            </div>
            <!-- .container end -->
        </section>





        <!-- ================================
       START HOWITWORKS AREA
================================= -->
        <section class="howitworks-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-heading">
                            <div class="heading-circle m-x-auto"></div>
                            <h4 class="sec__meta">QUICK QUESTION</h4>
                            <p class="sec__title">
                                COMMON QUESTIONS
                            </p>
                        </div>
                        <!-- end sec-heading -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>

                <!-- end row -->
                <div class="row hiw-content">
                    <div class="col-lg-4">
                        <div class="hiw-item">
                            <div class="flaticon__icon">
                                <span class="flaticon-014-bitcoin-13"></span>
                            </div>
                            <h3 class="hiw__title">
                                How fast are payments processed?
                            </h3>
                            <p class="hiw__desc">
                                All withdrawals to BitCoin are processed instantly.
                            </p>
                        </div>
                        <!-- end hiw-item -->
                    </div>
                    <!-- end col-lg-4 -->

                    <div class="col-lg-4">
                        <div class="hiw-item">
                            <div class="flaticon__icon">
                                <span class="flaticon-031-bitcoin-4"></span>
                            </div>
                            <h3 class="hiw__title">
                                How do I open an account?
                            </h3>
                            <p class="hiw__desc">
                                Please click here: <a href="sign-up.php">Sign Up</a>, fill out the form and click Create Account.
                            </p>
                        </div>
                        <!-- end hiw-item -->
                    </div>
                    <!-- end col-lg-4 -->

                    <div class="col-lg-4">
                        <div class="hiw-item">
                            <div class="flaticon__icon">
                                <span class="flaticon-001-bitcoin-20"></span>
                            </div>
                            <h3 class="hiw__title">
                                Which e-currencies do you accept?
                            </h3>
                            <p class="hiw__desc">
                                We accept Bitcoin, Lite Coin, Etherum, Riple, Bitcoin Cash <a href=".www.blockchain.info">www.blockchain.info</a>
                            </p>
                        </div>
                        <!-- end hiw-item -->
                    </div>
                    <!-- end col-lg-4 -->




                </div>
                <!-- end row -->

            </div>
            <!-- end container -->
        </section>
        <!-- end howitworks-area -->








        <?php
        include('./layouts/footer.php');
        ?>
        <!-- ================================
         END FOOTER AREA
================================= -->