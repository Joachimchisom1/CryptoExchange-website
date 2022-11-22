<?php
session_start();
require 'int.php';
$class = new mastertradersfx_engine;

if (!isset($_SESSION['email']) and !isset($_SESSION['password'])) {
  echo '<script>window.location="../login.php"</script>';
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>WELCOME <?php echo strtoupper($_SESSION['fullname']); ?> </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <!-- Custom Font Icons CSS-->
  <link rel="stylesheet" href="css/font.css">
  <!-- Google fonts - Muli-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="../images/Acorntrade.PNG">
  <script src="js/sweetalert.min.js"></script>
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  <style media="screen">
    body {
      background: rgb(6, 205, 255);
      color: #fff;
    }

    .sr_flash {
      animation: flash linear 3s infinite;
    }

    @keyframes flash {
      0% {
        opacity: 1;
      }

      50% {
        opacity: -1;
      }

      100% {
        opacity: 1;
      }
    }
  </style>
</head>

<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="search-panel">
        <div class="search-inner d-flex align-items-center justify-content-center">
          <div class="close-btn">Close <i class="fa fa-close"></i></div>
          <form id="searchForm" action="#">
            <div class="form-group">
              <input type="search" name="search" placeholder="What are you searching for...">
              <button type="submit" class="submit">Search</button>
            </div>
          </form>
        </div>
      </div>
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header-->
          <a href="?Dashboard" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase">

              <!-- <strong class="text-primary">Dark</strong><strong>Admin</strong> -->
              <!-- small_logo -->
              <img id="logo" class="img-responsive" height="60" width="90" src="../images/Acorntrade.PNG" alt="">
            </div>
            <div class="brand-text brand-sm">
              <img id="logo" class="img-responsive" src="../images/Acorntrade.PNG" alt="">
            </div>

          </a>
          <!-- Sidebar Toggle Btn-->
          <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          <div class="list-inline-item">&nbsp;&nbsp; <a href="" style="color:#ffc000;" class="sr_flash">Hit the live chat below</a> For help.</div>

          <!-- <div class="list-inline-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Language </div> -->
          <!-- <div class="list-inline-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span id="servertime"></span> </div> -->
        </div>
        <div class="right-menu list-inline no-margin-bottom">


          <div class="list-inline-item">
            <marquee></marquee>
          </div>

          <!-- Log out               -->
          <!-- <div class="list-inline-item logout"><a id="logout" href="?logout" class="nav-link">Logout <i class="icon-logout"></i></a></div> -->
        </div>
      </div>
    </nav>
  </header>





































  <div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <!-- <div class="avatar">
            <img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle">
          </div> -->
        <div class="title">
          <h1 class="h5"> <?php echo strtoupper($_SESSION['fullname']); ?></h1>
          <p style="color:#ffd34c;font-size:11px;">last seen: <?php echo date('d, D/M/Y'); ?></p>
          <p style="color:#ffd34c;font-size:11px;">Language</p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
      <ul class="list-unstyled">
        <li class="active"><a href="?Dashboard"> <i class="icon-home"></i>DASHBOARD </a></li>
        <li><a href="?my_profile"> <i class="icon-user"></i>MY PROFILE </a></li>

        <li><a href="#ropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-cloud"></i><b>INVEST AREA</b></a>
          <ul id="ropdownDropdown" class="collapse list-unstyled ">
            <li><a href="?invest">INVEST</a></li>
            <li><a href="?my_investment">MY INVESTMENTS</a></li>
          </ul>
        </li>


        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-bars"></i><b>WITHDRAWAL AREA</b></a>
          <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
            <li><a href="?withdraw_fund">WITHDRAW FUNDS</a></li>
            <li><a href="?my_withdrawals">MY WITHDRAWALS</a></li>
          </ul>
        </li>

        <!-- <li><a href="#" data-toggle="modal" data-target="#myModal"> <i class="icon-settings"></i>AFFILIATE PROGRAM</a></li> -->
        <li><a href="?contact-us"> <i class="fa fa-phone"></i>CONTACT US </a></li>
        <!-- <li><a href="login.html"> <i class="fa fa-users"></i>SEND TESTIMONY</a></li> -->

      </ul><span class="heading">Exit</span>
      <ul class="list-unstyled">
        <li> <a href="?logout"> <i class="icon-logout"></i>LOG OUT </a></li>
        <!-- <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li> -->
        <!-- <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li> -->
      </ul>
    </nav>
    <!-- Sidebar Navigation end-->



    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog" style="margin-top:100px;">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header" style="background-image: url('../images/tittle.jpg');background-size: cover;">
            <!-- <button type="button" class="close" data-dismiss="modal" style="color:#fff;">&times;</button> -->
            <h4 class="modal-title">
              <img id="logo" class="img-responsive" src="../images/logo-dark2.png" alt="logo"></h4>
          </div>
          <div class="modal-body">
            <h4>Welcome to <a href="#">www.acornstrade.com</h4>

            <p>
              Acornstrade.com is a World leading Online Forex Trader market.Giving you access to investment opportunities across Several Acornstrade traders. <br />


              <h4>What we do?</h4>
              Want to invest on financial markets? You’ve come to the right place. We enable thousands of investors to seize their opportunity on indices, forex, shares and more using CFDs.
            </p>
          </div>
          <div style="padding:10px;">
            <hr />
            <!-- <div class="container text-center" style="background-color:#e2e2e2;padding:10px;"> -->
            <img src="../images/masterdark.png" alt="SUCCESSFUl" width="100px" />
            <span style="color:#e4e4e4;font-size:12px;">
              <b> <?php echo date("Y"); ?> </b>
              © Acornstrade All Rights Reserved
            </span>
            <!-- </div> -->
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
          </div>
        </div>

      </div>
    </div>
    <!-- ends here -->



































    <div class="page-content">
      <?php if (isset($_GET['invest'])) { ?>
        <?php require 'user_deposit.php'; ?>
      <?php } else if (isset($_GET['check-out'])) { ?>
        <?php require 'check-out.php'; ?>
      <?php } else if (isset($_GET['success_deposit'])) { ?>
        <?php require 'success_deposit.php'; ?>
      <?php } else if (isset($_GET['my_investment'])) { ?>
        <?php require 'my_investment.php'; ?>
      <?php } else if (isset($_GET['contact-us'])) { ?>
        <?php require 'contact-us.php'; ?>
      <?php } else if (isset($_GET['my_profile'])) { ?>
        <?php require 'my_profile.php'; ?>
      <?php } else if (isset($_GET['logout'])) { ?>
        <?php

        session_destroy();
        // echo '<script>window.</script>';
        echo '<script>window.location="../login.php"</script>';

        ?>

      <?php } else if (isset($_GET['withdraw_fund'])) { ?>
        <?php require 'withdraw_fund.php'; ?>
      <?php } else if (isset($_GET['request-withdrawal'])) { ?>
        <?php require 'request-withdrawal.php'; ?>
      <?php } else if (isset($_GET['withdraw-successful'])) { ?>
        <?php require 'withdraw-successful.php'; ?>
      <?php } else if (isset($_GET['my_withdrawals'])) { ?>
        <?php require 'my_withdrawals.php'; ?>
      <?php } else if (isset($_GET['Dashboard'])) { ?>
        <?php require 'dashboard.php'; ?>
      <?php } else { ?>
        <?php require 'dashboard.php'; ?>
      <?php } ?>
      <!-- </div> -->













      <footer class="footer">
        <div class="footer__block block no-margin-bottom" style="background-color:#dedede;color:#545453;font-weight:bold;font-size:14px;">
          <div class="container-fluid">
            <p class="no-margin-bottom text-left">
              <?php echo date('Y'); ?> &copy; Acornstrade &nbsp; - &nbsp; All rights reserved &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
              <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
              <!-- payment_nnt -->
              <span class="text-right">
                <!-- <img id="logo" class="img-responsive" src="../images/payment_nnt.png" alt="masterTradersfx" style="width:390px;"> -->
              </span>
            </p>


          </div>
        </div>
      </footer>
    </div>














  </div>
  <!-- JavaScript files-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper.js/umd/popper.min.js"> </script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
  <script src="js/charts-home.js"></script>
  <script src="js/front.js"></script>
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
</body>

</html>