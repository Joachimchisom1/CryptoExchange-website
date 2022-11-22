<?php
session_start();
require 'en/int.php';
 $class = new mastertradersfx_engine;
?>
<html lang="zxx" class="js">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Plugbox">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="Acorstrade is a modern and elegant landing page, created for Acorstrade forex Agencies and digital crypto currency investment website.">
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="images/Acortrade.PNG">
<!-- Site Title  -->
   <title> CREATE ACCOUNT | Acorstrade</title><!-- Vendor Bundle CSS -->
    <link rel="stylesheet" href="assets/css/vendor.bundlee222.css?ver=142"><!-- Custom styles for this template -->
    <link rel="stylesheet" href="assets/css/stylee222.css?ver=142">
    <link rel="stylesheet" href="assets/css/theme-orangee222.css?ver=142" id="layoutstyle">
    <script>(function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
        // <!DOCTYPE html>

    })(window, document, 'script', 'analytics.js', 'ga');
    ga('create', 'UA-91615293-2', 'auto');
    ga('send', 'pageview');</script>


    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/35bc66e732d9c243dfdb9a177/43eb5b13f5933f7b9eb0ba298.js");</script>
    <style>
        .bn {
            background-color: rgba(0, 0, 0, 0.7);
            height: 90vh;
        }
    </style>
</head>
<body class="theme-dark io-zinnia" data-spy="scroll" data-target="#mainnav" data-offset="80"><!-- Header -->
<header class="site-header is-sticky"><!-- Place Particle Js -->
    <div id="particles-js" class="particles-container particles-js"></div>


    <!-- Banner/Slider -->
    <div class="bn">
    <div id="header" class="banner banner-zinnia">
         <img id="logo" class="img-responsive animated" data-animate="fadeInleft" data-delay="1.45" src="images/Acorntrade.PNG" alt="logo" style="width: 200px;">
        <div class="ui-shape ui-shape-light ui-shape-header"></div>
        <div class="container">
            <div class="banner-content">
             <form method="POST">
                <div class="row align-items-center justify-content-center">
                    <div class="col-sm-12 col-md-12 col-lg-12 text-center animated" data-animate="fadeInUp" data-delay="1.45">
                        <div class="header-txt tab-center mobile-center">
                            <br /><br />
                           <h3>REGISTRATION SUCCESS</h3>

                            <!-- <div class="gaps size-1x d-none d-md-block"></div> -->
                            
                            <div class="gaps size-1x d-none d-md-block"></div>
        
<div class="big-404"><i class="fa fa-check" style="color:#fff;font-size: 100px;"></i><br /> 
                    </div>
                     <?php
                        $name = $_GET['user'];
                        $downline = $_GET['downline'];

                     ?>
                    <!-- <h3> SUCCESS</h3> -->
                    <h3> Hello <?php echo ucwords($name);?>,</h3>
                    <p>Congratulation, your account has been successfully created.<br /> Click the <b>LOGIN NOW!</b><br /> button to log in to your dashboard<br /><br />
                     <a href="login.php" class="btn btn-icon-s3 animated" data-animate="fadeInUp" data-delay="1.45">Login <i
                                        class="fas fa-angle-double-right"></i></a><br /><br /><br />
                      </p>
                      
                                



                        </div>
                    </div>


                </div>



                   



                     
 


















                    <!-- .col  --></div>  </form><!-- .row  --></div><!-- .banner-content  --></div><!-- .container  -->
        
    </div><!-- End Banner/Slider -->
    <!-- .presale-box  --></header>
<div class="gaps size-6x d-md-none"></div>
<div class="gaps size-3x"></div><!-- End Header -->










    <!-- End Section --><!-- Preloader !remove please if you do not want -->

<script src="assets/js/jquery.bundlee222.js?ver=142"></script>
<script src="assets/js/scripte222.js?ver=142"></script>



  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });



    //var currenttime = '<!--#config timefmt="%B %d, %Y %H:%M:%S"--><!--#echo var="DATE_LOCAL" -->' //SSI method of getting server date
var currenttime =Date(currenttime) //PHP method of getting server date

///////////Stop editting here/////////////////////////////////

var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
var serverdate=new Date(currenttime)

function padlength(what){
var output=(what.toString().length==1)? "0"+what : what
return output
}

function displaytime(){
serverdate.setSeconds(serverdate.getSeconds()+1)
var datestring=montharray[serverdate.getMonth()]+" "+padlength(serverdate.getDate())+", "+serverdate.getFullYear()
var timestring=padlength(serverdate.getHours())+":"+padlength(serverdate.getMinutes())+":"+padlength(serverdate.getSeconds())
document.getElementById("servertime").innerHTML=datestring+" "+timestring
}

window.onload=function(){
setInterval("displaytime()", 1000)
}
</script>
</body>
</html>