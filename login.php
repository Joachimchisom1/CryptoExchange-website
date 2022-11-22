<?php
session_start();
require 'en/int.php';
$class = new mastertradersfx_engine;
?>
<!-- ================================
            START HEADER AREA
================================= -->
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

    <style>
.button {
  background-color: #4CAF50; /* Green */
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

.button1 {border-radius: 2px;}
.button2 {border-radius: 4px;}
.button3 {border-radius: 8px;}
.button4 {border-radius: 12px;}
.button5 {border-radius: 50%;}
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
                                <!-- <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:acorntrade@gmail.com" class="mail">acorntrade@gmail.com</a>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:+1(709)910-5679">+1(709)910-5679</a>
                                </li> -->
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

<?php include('./layouts/nav.php') ?>
<!-- ================================
         END HEADER AREA
================================= -->

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="breadcrumb-inner">
                        <h2 class="breadcrumb__title">login.</h2>
                    </div><!-- end breadcrumb-inner -->
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end hero-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
       START FORM AREA
================================= -->
<section class="form-shared">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-shared-content">
                    <div class="login-box">
                        <h3>If You Are New to ACORNTRADE.</h3>
                        <p>
                        Fill in the quick registration form or use the normal page.
                         Please do not forget to include your payment data
                        </p>
                        <a href="sign-up.php" class="theme-btn">register now</a>
                    </div>
                </div><!-- end form-shared-content -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form__title">Login to your account!</h3>
                        <!-- <p class="form__desc">with your social network.</p> -->
                    </div>
                    <!--Contact Form-->
                    <form method="post">
                        <?php

                        if (isset($_POST['login_user'])) {

                            $reg_date = date("d/m/Y");
                            $reg_time = date("h:i:sa");
                            $last_seen = $reg_date . ' by ' . $reg_time;


                            $email = trim($_POST['f1']);
                            $password = trim($_POST['f2']);

                            if (empty($email) || empty($password)) {
                                echo '  <div style="padding:19px; background-color:#ffdfaa;color:#c68317;" class="sr_flash">
        <b>username or password is empty!</b> fill in the space and try again</a>
    </div><br />';
                            } else if ($class->MFXlogin_user($email, $password, $last_seen)) {
                            }
                        }

                        ?>

                        <div class="row">
                            <div class="col-lg-12 col-sm-12 form-group">
                                <input class="form-control" type="text" name="f1" placeholder="Username, or email" required="">
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12 col-sm-12 form-group">
                                <input class="form-control" type="password" name="f2" placeholder="Password" required="">
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12 col-sm-12 col-xs-12 form-condition">
                                <div class="custom-checkbox">
                                    <!-- <input type="checkbox" id="chb1" />
                                    <label for="chb1">Remember Me</label> -->
                                    <a href="forget-password.php" class="pass__desc float-right"> Forgot your password?</a>
                                </div>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12 col-sm-12 col-xs-12 form-group">
                                <button class="theme-btn login-btn" type="submit" name="login_user">Login now</button>
                            </div><!-- end col-lg-12 -->

                            <div class="col-lg-12 col-sm-12 col-xs-12 account-assist">
                                <p class="account__desc">Not a member?<a href="sign-up.php"> Register</a></p>
                            </div><!-- end col-lg-12 -->
                        </div><!-- end row -->
                    </form>
                </div><!-- end contact-form -->
            </div><!-- end col-lg-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end form-shared -->
<!-- ================================
       START FORM AREA
================================= -->

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


<script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });



        //var currenttime = '<!--#config timefmt="%B %d, %Y %H:%M:%S"--><!--#echo var="DATE_LOCAL" -->' //SSI method of getting server date
        var currenttime = Date(currenttime) //PHP method of getting server date

        ///////////Stop editting here/////////////////////////////////

        var montharray = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December")
        var serverdate = new Date(currenttime)

        function padlength(what) {
            var output = (what.toString().length == 1) ? "0" + what : what
            return output
        }

        function displaytime() {
            serverdate.setSeconds(serverdate.getSeconds() + 1)
            var datestring = montharray[serverdate.getMonth()] + " " + padlength(serverdate.getDate()) + ", " + serverdate.getFullYear()
            var timestring = padlength(serverdate.getHours()) + ":" + padlength(serverdate.getMinutes()) + ":" + padlength(serverdate.getSeconds())
            document.getElementById("servertime").innerHTML = datestring + " " + timestring
        }

        window.onload = function() {
            setInterval("displaytime()", 1000)
        }
    </script>
<!-- ================================
         END FOOTER AREA
================================= -->
<?php
include('./layouts/footer.php');
?>