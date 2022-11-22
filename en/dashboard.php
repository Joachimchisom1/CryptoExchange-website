














      <div class="page-header">
          <div class="container-fluid">
          <h2 class="h5 no-margin-bottom"> 
          <marquee>WELCOME: <?php echo strtoupper($_SESSION['fullname']);?></marquee>
          </h2>
          </div>
        </div>




        <section class="no-padding-top">
          <div class="container-fluid">
          <!-- <form class="form-horizontal" method="post"> -->

          <div class="row">


              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="number dashtext-1">
                      <?php 
                          $userID = $_SESSION['user_id'];
                          $class->MF_balance($userID);
                      ?></div>
                      <strong><i class="fa fa-money"></i> TOTAL Balance</strong>
                    </div>
                    <!-- <div class="number dashtext-1">$27,000</div> -->
                  </div>
                </div>
              </div>



              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="number dashtext-2">
                      <?php 
                          $userID = $_SESSION['user_id'];
                          $class->MFX_earntotalbalance($userID);
                      ?>
                      </div>
                      <strong><i class="fa fa-money"></i> Earned total</strong>
                    </div>
                    <!-- <div class="number dashtext-1">$27,000</div> -->
                  </div>
                </div>
              </div>



              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="number dashtext-3">
                       <?php 
                          $userID = $_SESSION['user_id'];
                          $class->MTFXActive_invest($userID);
                      ?>
                    </div>
                      <strong><i class="fa fa-money"></i> Active deposit</strong>
                    </div>
                    <!-- <div class="number dashtext-1">$27,000</div> -->
                  </div>
                </div>
              </div>

            <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="number dashtext-4"> 
                       <?php 
                          $userID = $_SESSION['user_id'];
                          $class->MTFX_totalwithdraw($userID);
                        ?>
                      </div>
                      <strong><i class="fa fa-money"></i> Total Withdrawal</strong>
                    </div>
                    <!-- <div class="number dashtext-1">$27,000</div> -->
                  </div>
                </div>
              </div>








































              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Referral Link</strong></div>
                  <div class="table-responsive"> 
                    <!-- so -->
                    <section>
                      <input type="text" class="form-control"  value="https://www.acornstrade.com/sign-up.php?ref=<?php echo $_SESSION['reg_downlineCode']; ?>" id="myInput" style="padding:25px;">
                      <br />
                       <button onclick="myFunction()" class="btn btn-sm btn-warning" style="padding:10px;">Copy Referral Link</button> 
                  </section>
                  </div>
                </div>
              </div>



              <div class="col-lg-4">
                <div class="block margin-bottom-sm" style="background-image: url('../images/supdep.png');background-size: 100% 100%;">
                  <!-- <div class="title"><strong>Referral Link</strong></div> -->
                  <div class="table-responsive"> 
                    <!-- so -->
          
                  <br /><br /><br /><br /><br /><br /><br /><br />
                  </div>
                </div>
              </div>


              <div class="col-lg-8">
                <div class="block margin-bottom-sm">
                  <div class="title container-fluid"><strong>DID YOU KNOW?</strong></div>
                  <div class="table-responsive"> 
                    <!-- so -->
          <section class="container-fluid">
             Acornstrade  is to help upcoming investors & Standard investors realise that their is still a real and legit bitcoin investment company where you can invest & never lost a penny. <br />Acorntrade  has more than 1-million investors worldwide,people from different parts of the world which includes: Europe,Asia,South America,North America,Africa,Artartica,Australia or Oceanic!
          </section>
                  </div>
                </div>
              </div>







              <div class="col-lg-4">
                <div class="block margin-bottom-sm"  style="border:4px solid #ffc600;">
                  <div class="title container-fluid  text-center">
                    <strong style="color:#fff;">START PACK</strong>
                    <hr style="border:1px solid #ffc600;"/>
                  </div>
                  <div class="table-responsive"> 
                    <!-- so -->
          <section class="container-fluid text-center" style="color:#ececec;">
             <h1><b>$50 - $1,000 </b></h1>
             <!-- <br /> -->
             <span class="sr_flash">After 24 Hours</span><br /><br />
             <b>5%</b>
             <br /><br />
             <a href="?invest" class="btn btn-sm btn-warning" style="padding:10px;">INVEST NOW!</a> 

          </section>
                  </div>
                </div>
              </div>


               <div class="col-lg-4">
                <div class="block margin-bottom-sm"  style="border:4px solid #ffc600;">
                  <div class="title container-fluid  text-center">
                    <strong style="color:#fff;">SILVER</strong>
                    <hr style="border:1px solid #ffc600;"/>
                  </div>
                  <div class="table-responsive"> 
                    <!-- so -->
          <section class="container-fluid text-center" style="color:#ececec;">
             <h1><b>$1,000 - $5,000</b></h1>
             <!-- <br /> -->
             <span class="sr_flash">After 48 Hours</span><br /><br />
             <b>10%</b>
             <br /><br />
             <a href="?invest" class="btn btn-sm btn-warning" style="padding:10px;">INVEST NOW!</a> 

          </section>
                  </div>
                </div>
              </div>


              <div class="col-lg-6">
                <div class="block margin-bottom-sm"  style="border:4px solid #ffd647;">
                  <div class="title container-fluid  text-center">
                    <strong style="color:#fff;">GOLD</strong>
                    <hr style="border:1px solid #ffc600;"/>
                  </div>
                  <div class="table-responsive"> 
                    <!-- so -->
          <section class="container-fluid text-center" style="color:#ececec;">
             <h1><b>$15,000 - $20,000</b></h1>
             <!-- <br /> -->
             <span class="sr_flash">After 72 Hours</span><br /><br />
             <b>15%</b>
             <br /><br />
             <a href="?invest" class="btn btn-sm btn-warning" style="padding:10px;">INVEST NOW!</a> 

          </section>
                  </div>
                </div>
              </div>



              <div class="col-lg-6">
                <div class="block margin-bottom-sm"  style="border:4px solid #ffd647;">
                  <div class="title container-fluid  text-center">
                    <strong style="color:#fff;">DIAMOND</strong>
                    <hr style="border:1px solid #ffc600;"/>
                  </div>
                  <div class="table-responsive"> 
                    <!-- so -->
          <section class="container-fluid text-center" style="color:#ececec;">
             <h1><b>$20,000</b></h1>
             <!-- <br /> -->
             <span class="sr_flash">After 96 Hours</span><br /><br />
             <b>20%</b>
             <br /><br />
             <a href="?invest" class="btn btn-sm btn-warning" style="padding:10px;">INVEST NOW!</a> 

          </section>
                  </div>
                </div>
              </div>





              <div class="col-sm-12">
                <form method="post">
                      <?php
                    if(isset($_POST['COntant_us'])){

                      $main_username = $_SESSION['reg_downlineCode'];
                      $fullname = $_SESSION['fullname'];
                      $mail = $_SESSION['email'];
                      $subject = trim($_POST['a3']);
                      $message_user = nl2br($_POST['a4']);

            $to = ' acornstrade.england@gmail.com';
            $subject = 'MAIL FOMR '.$main_username.'';
            $message = '

            <div class="col-lg-12">       
                <div class="lin-chart block chart" style="background-image: url("../images/");background-size: cover;">
                  <div class="title"><img id="logo" class="img-responsive" src="../images/Acorntrade.PNG" alt="logo"></div>
                  
                  <div class="line-chart chart" style="background-color: #fff;">
                    

            <p style="color:#717070;font-size:17px;padding:10px;">
              <br />
              From -  '.($mail).', <br /><br />
              '.$message_user.' <br /><br />
            </p>

            <div class="container text-center" style="background-color:#e2e2e2;padding:10px;">
                <img src="../images/Acorntrade.PNG" alt="SUCCESSFUl" width="100px" />
                  <span style="color:#717070;font-size:12px;">
                      <b> © '.date("Y").' Acornstrade Inc </b>
                      this is an automated email sent by <u>Acornstrade Team.</u> please do not reply.
                </span>
            </div>


                  </div>
                </div>
              </div>

                      ';

           $headers = 'From: admin@acornstrade.com' . "\n" .
            'Reply-To: admin@acornstrade.com' . "\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\n" .
            "X-Mailer: PHP";

          
          mail($to, $subject, $message, $headers);

          // echo $message;
          echo '<div style="padding:19px; background-color:#1d986f;color:#bbe7d8;" class="">
                            <b>Mail sent!</b>Acorns Trade support team will get back to you at '.$mail.'
                        </div><br />';
                    }
                  ?>
                        <br />
                        <h1>CONTACT US</h1><hr /><br />
                          <div class="form-group-material">
                            <input id="register-password" type="text" name="a1" value="<?php echo $_SESSION['fullname'];?>"  required class="input-material">
                            <label for="register-password" class="label-material">Full name </label>
                          </div>

                          <div class="form-group-material">
                            <input id="register-password" type="text" name="a2" value="<?php echo $_SESSION['email'];?>" required class="input-material">
                            <label for="register-password" class="label-material">Email </label>
                          </div>


                          <div class="form-group-material">
                            <input id="register-password" type="text" name="a3"  required class="input-material">
                            <label for="register-password" class="label-material">Subject </label>
                            <br /><br />
                          </div>


                          <div class="form-group-material">
                            <textarea id="register-password" rows="7" name="a4" required class="input-material form-control" placeholder="What's Your Issuse"></textarea>
                            <!-- <label for="register-password" class="label-material">Subject </label> -->
                          </div>


                          <div class="form-group-material">
                     <button type="submit" name="COntant_us" class="btn btn-warning"> &nbsp;&nbsp;&nbsp;Send mail &nbsp;&nbsp;&nbsp; </button>
                            <!-- <label for="register-password" class="label-material">Subject </label> -->
                          </div>

                </form>
                        </div>



            <div class="col-lg-12">
              <br />
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>LIVE CRYPTO-MARKET</strong></div>
                  <div class="table-responsive"> 
                    <!-- so -->
                    <br /><br />
                    <iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=6&pref_coin_id=1505&graph=yes" width="100%" height="409px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0"></iframe>


                  <br /><br /><br /><br /><br /><br /><br /><br />
                  </div>
                </div>
              </div>







         


          </div>






          <!-- </form> -->
          </div>
        </section>







<script type="text/javascript">
  function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  // alert("Copied the text: " + copyText.value);

  swal("Copied!","","info");

} 
</script>
