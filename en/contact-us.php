        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom"><i class="fa fa-gg text-warning"></i>&nbsp;&nbsp; CONTACT ADMIN</h2>
          </div>
        </div>




        <section class="no-padding-top">
          <div class="container-fluid">
          <!-- <form class="form-horizontal" method="post"> -->



            <div class="row">



              









            
           <div class="col-lg-12">
            <form method="post">
                 <?php
                    if(isset($_POST['COntant_us'])){

                      $main_username = $_SESSION['reg_downlineCode'];
                      $fullname = $_SESSION['fullname'];
                      $mail = $_SESSION['email'];
                      $subject = trim($_POST['a3']);
                      $message_user = nl2br($_POST['a4']);

            $to = 'acorntrade@gmail.com';
            $subject = 'MAIL FOM '.$main_username.'';
            $message = '

            <div class="col-lg-12">       
                <div class="lin-chart block chart" style="background-image: url("../images/tittle.jpg");background-size: cover;">
                  <div class="title"><img id="logo" class="img-responsive" src="../images/Acorntrade.png" alt="logo"></div>
                  
                  <div class="line-chart chart" style="background-color: #fff;">
                    

            <p style="color:#717070;font-size:17px;padding:10px;">
              <br />
              From -  '.($mail).', <br /><br />
              '.$message_user.' <br /><br />
            </p>

            <div class="container text-center" style="background-color:#e2e2e2;padding:10px;">
                <img src="../images/Acorntrade.png" alt="SUCCESSFUl" width="100px" />
                  <span style="color:#717070;font-size:12px;">
                      <b> © '.date("Y").' Acornstrade  Inc </b>
                      this is an automated email sent by <u>Acornstrade Team.</u> please do not reply.
                </span>
            </div>


                  </div>
                </div>
              </div>

                      ';

           $headers = 'From: admin@acornstrade.com' . "\n" .
            'Reply-To:acornstrade.england@gmail.com' . "\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\n" .
            "X-Mailer: PHP";

          
          mail($to, $subject, $message, $headers);

          // echo $message;
          echo '<div style="padding:19px; background-color:#1d986f;color:#bbe7d8;" class="">
                            <b>Mail sent!</b> Acornstrade  support team will get back to you at '.$mail.'
                        </div><br />';
                    }
                  ?>





              <!-- <div class="col-lg-12">       
                <div class="lin-chart block chart" style="background-image: url('../images/tittle.jpg');background-size: cover;">
                  <div class="title"><img id="logo" class="img-responsive" src="../images/logo-dark2.png" alt="logo"></div>
                  
                  <div class="line-chart chart" style="background-color: #fff;">
                    

            <p style="color:#717070;font-size:17px;padding:10px;">
              <br />
              Hello '.ucwords($fullname).', <br /><br />
              '.$message_user.' <br /><br />
            </p>

            <div class="container text-center" style="background-color:#e2e2e2;padding:10px;">
                <img src="../images/masterdark.png" alt="SUCCESSFUl" width="100px" />
                  <span style="color:#717070;font-size:12px;">
                      <b> © '.date("Y").' Mastertraderfx Inc </b>
                      this is an automated email sent by <u>Mastertraderfx Team.</u> please do not reply.
                </span>
            </div>


                  </div>
                </div>
              </div> -->


    <!-- <div class="modal-content">
      <div class="modal-header" style="background-image: url('../images/tittle.jpg');background-size: cover;">
        <button type="button" class="close" data-dismiss="modal" style="color:#fff;">&times;</button>
        <h4 class="modal-title">
        <img id="logo" class="img-responsive" src="../images/logo-dark2.png" alt="logo"></h4>
      </div>
      <div class="modal-body">
         <h4>Welcome to <a href="#">mastertraderfx.com</a></h4>
        
            <p>
                Mastertraderfx.com is a World leading Online Forex Trader market.Giving you access to investment opportunities across Several Master forex traders. <br />


            <h4>What we do?</h4>
                Want to invest on financial markets? You’ve come to the right place. We enable thousands of investors to seize their opportunity on indices, forex, shares and more using CFDs.
            </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
 -->




              <?php?>
                <div class="block">
                  <!-- <div class="title"><strong>Enter Amount</strong></div> -->
                  <div class="block-body">
                      <div class="row">
                        <div class="col-sm-12">

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


                        </div>
                      </div>
                  </div>
                </div>
              </form>
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
