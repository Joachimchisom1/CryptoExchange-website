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
                        <h2 class="breadcrumb__title">Sign-Up</h2>
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
                    <ul>
                        <li>

                            <h4>WELCOME</h4>
                            <p>Acorntrade serves large scale investors from Northern Europe
                                and North America.
                                Acorntrade, offers the opportunity to small scale investors to take part in the trading on the world financial markets and earn significant profits.
                            </p>
                        </li>
                        <li>
                            <h4>REGISTER ACCOUNT</h4>
                            <p>
                                Fill in the quick registration form or use the normal page.
                                Please do not forget to include your payment data
                            </p>
                        </li>
                    </ul>
                </div><!-- end form-shared-content-->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="contact-form-action">
                    <div class="form-heading text-center">
                        <h3 class="form__title">Create an account!</h3>
                    </div>
                    <!--Contact Form-->
                    <form method="post">

                        <?php
                          
                        // if (isset($_GET['ref'])) {
                        //     $refID =  $_GET['ref'];
                        //     echo $refID;
                        // }

                        if (isset($_POST['send_user'])) {
                            // reg_id
                            $reg_id = rand(1111, 99999999);
                            $reg_date = date("d/m/Y");
                            $reg_time = date("h:i:sa");
                            $reg_downlineID = rand();


                            // user info
                            $f1 = trim($_POST['f1']);
                            $f2 = trim($_POST['f2']);

                            $f4 = trim($_POST['f4']);
                            // $f5 = '-';

                            $f6 = '';
                            $f7 = '';
                            $f8 = '';
                            $f9 = trim($_POST['f9']);

                            // main downline
                            $main_down = trim($f1 . '' . $reg_downlineID);
                            $ip_address = 'main ip address';

                            // for admin
                            $status = 'active';

                            // last seen
                            $last_seen = $reg_date . ' by ' . $reg_time;

                            $downline_fullname = '';

                            // if(isset($_GET['ref'])){
                            //     $refID =  $_GET['ref'];
                            //      $f8 = $refID;
                            //      // $f9 = trim($_POST['f9']);
                            //                 // echo $refID;
                            //             }&refID='.$refID.'





                            if (empty($f4)) {
                                echo "empty";
                            } else if ($class->Mastertraderfx_member($reg_id, $reg_date, $reg_time, $main_down, $f1, $f2, $f4, $f6, $f7, $f8, $f9, $ip_address, $status, $last_seen, $downline_fullname)) {
                                echo '<script>window.location="register-successful.php?user=' . $f1 . '&downline=' . $main_down . '"</script>';
                            } else {
                                echo '<div style="padding:19px; background-color:#ff7d7d;color:#870303;" class="sr_flash">
<b>INFORMATION NOT SAVED!</b> try again</a>
</div><br />';
                            }
                        }


                        ?>
                        <div class="row align-items-center justify-content-center">
                            <div class="row">

                                <div class="col-lg-12 col-sm-12 form-group">
                                    <input class="form-control" type="text" name="f1" placeholder="Enter your username" required="">
                                </div><!-- end col-lg-12 -->

                                <div class="col-lg-12 col-sm-12 form-group">
                                    <input class="form-control" type="email" name="f2" placeholder="Email Address" required="">
                                </div><!-- end col-lg-12 -->

                                <div class="col-lg-12 col-sm-12 form-group">
                                    <input class="form-control" type="password" name="f4" placeholder="Password" required="">
                                </div><!-- end col-lg-12 -->

                                <div class="col-lg-12 col-sm-12 form-group">
                                    <input class="form-control" type="text" name="f9" placeholder="BITCOIN WALLET ADDRESS (optional)">
                                </div><!-- end col-lg-12 -->

                               

                                <div class="col-lg-12 col-sm-12 col-xs-12 form-group">
                                    <button class="theme-btn register-btn" name="send_user" type="submit">Register Account</button>
                                </div><!-- end col-lg-12 -->

                                <div class="col-lg-12 col-sm-12 col-xs-12 account-assist">
                                    <p class="account__desc">Already have an account?<a href="login.php"> Login</a></p>
                                </div><!-- end col-lg-12 -->
                            </div><!-- end row -->
                    </form>
                </div><!-- end contact-form -->
            </div><!-- end col-lg-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end form-shared -->

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
       End FORM AREA
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