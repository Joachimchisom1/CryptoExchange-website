        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom"><i class="icon-cloud text-warning"></i>&nbsp;&nbsp; DEPOSIT</h2>
          </div>
        </div>




        <section class="no-padding-top">
          <div class="container-fluid">
          <form class="form-horizontal" method="post">






            <?php
            // $user_id = $_SESSION['user_id'];
            // echo $user_id;
          if(isset($_POST['payup_invest'])){ 



            // my info
              $user_id = $_SESSION['user_id'];
              $fullname = $_SESSION['fullname'];
              $email = $_SESSION['email'];
              $status = 'pending';
            
            // investment entery
              $invest_plan = trim($_POST['radio_plan']);
              $payment_time = trim($_POST['time']);
              $invest_Amount = trim($_POST['invest_amount']);
              $payment_mode = trim($_POST['payment_mode']);


            // others
              $payment_id = rand(0000201,999999).'HYU';
              $active = 'pending';
              $date_invest = date('D, d-m-Y');
              $time_invest = date('h:i:sa');

            // calc for the 5%
              $percentage = 400;
              $number_to_add = ($invest_Amount/100)*$percentage;
              $user_pecentage  = $number_to_add+$invest_Amount;

            // expire date
            if($payment_time=='24'){
              $date_expire = '+1 day';
             }else if($payment_time=='48'){
              $date_expire = '+2 day';
             } 
              // if($payment_time=7){
              //   $date_expire = date('D, d-m-Y', strtotime('+7 day'));
              //  }else if($payment_time=48){
              //   $date_expire = date('D, d-m-Y', strtotime('+2 day'));
              //  }
               


             // echo '<script>window.alert("'.$echo_date.'")</script>';

            if($class->mastertrader_investores($user_id,$payment_id,$status,$fullname,$email,$invest_plan,$payment_time,$date_expire,$invest_Amount,$payment_mode,$date_invest,$time_invest,$user_pecentage)){
               // echo '<script>window.alert("'.$date_expire.'")</script>';
                echo '<script>window.location="?check-out='.$payment_id.'&payment='.$payment_mode.'&id='.$invest_Amount.'"</script>';
               }

            }
 
            ?>

            <div class="row">
            <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Select Investment Plan</strong></div>
                  <div class="block-body">
                      <!-- <div class="row"> -->
                        <!-- <div class="col-sm-12"> -->



            <section>
                <div class="table-responsive">
                   <!-- <input type="radio" required name="radio_plan" style="padding:20px;" value="START PACK"> -->
                   <!-- &nbsp; -->
                 <!-- 400% After 5 days -->
                  <table class="table" style="border:1px solid #03291a;">
                    <thead class="text-primary" style="background-color:#454545;">
                      <th width="460" style="font-weight:bold;font-size:17px;color:#fff;padding:10px;">
                        <input type="radio" required name="radio_plan" style="padding:20px;" value=" START PACK">&nbsp; PLAN
                      </th>
                      <th style="font-weight:bold;font-size:17px;color:#fff;padding:10px;">Amount</th>
                      <th style="font-weight:bold;font-size:17px;color:#fff;padding:10px;">Profit</th>
                      <th style="font-weight:bold;font-size:17px;color:#fff;padding:10px;">Duration</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="color:#dcab16;font-size:13px;border:1px solid #03291a;"> START PACK</td>
                        <td style="color:#dcab16;font-size:13px;border:1px solid #03291a;"> $50 - $1,000</td>
                        <td style="color:#dcab16;font-size:13px;border:1px solid #03291a;"> 5%</td>
                        <td style="color:#dcab16;font-size:13px;border:1px solid #03291a;">
                        After 24 Hours 
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
          </section>
          <br />




     


           <section>
                <div class="table-responsive">
                  <!--  <input type="radio" required name="radio_plan" style="padding:20px;" value="SILVER">
                   &nbsp;
                 400% After 5 days -->
                  <table class="table" style="border:1px solid #03291a;">
                    <thead class="text-primary" style="background-color:#454545;">
                      <th width="460" style="font-weight:bold;font-size:17px;color:#fff;padding:10px;">
                        <input type="radio" required name="radio_plan" style="padding:20px;" value="SILVER">&nbsp; PLAN
                      </th>
                      <th style="font-weight:bold;font-size:17px;color:#fff;padding:10px;">Amount</th>
                      <th style="font-weight:bold;font-size:17px;color:#fff;padding:10px;">Profit</th>
                      <th style="font-weight:bold;font-size:17px;color:#fff;padding:10px;">Duration</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="color:#dcab16;font-size:13px;border:1px solid #03291a;"> SILVER</td>
                        <td style="color:#dcab16;font-size:13px;border:1px solid #03291a;"> $1,000 - 5,000</td>
                        <td style="color:#dcab16;font-size:13px;border:1px solid #03291a;"> 10%</td>
                        <td style="color:#dcab16;font-size:13px;border:1px solid #03291a;">
                        After 48 Hours
                          <!-- <input type="text" name="time" value="7" style="width:20px;border:1px solid #2d3035;background-color:#2d3035;color:#dcab16;">days -->
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
          </section>
          <br />



           <section>
                <div class="table-responsive">
                  <!--  <input type="radio" required name="radio_plan" style="padding:20px;" value="GOLD">
                   &nbsp;
                 400% After 5 days -->
                  <table class="table" style="border:1px solid #03291a;">
                    <thead class="text-primary" style="background-color:#454545;">
                      <th width="460" style="font-weight:bold;font-size:17px;color:#fff;padding:10px;">
                        <input type="radio" required name="radio_plan" style="padding:20px;" value="GOLD">&nbsp; PLAN
                      </th>
                      <th style="font-weight:bold;font-size:17px;color:#fff;padding:10px;">Amount</th>
                      <th style="font-weight:bold;font-size:17px;color:#fff;padding:10px;">Profit</th>
                      <th style="font-weight:bold;font-size:17px;color:#fff;padding:10px;">Duration</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="color:#dcab16;font-size:13px;border:1px solid #03291a;"> GOLD</td>
                        <td style="color:#dcab16;font-size:13px;border:1px solid #03291a;"> $15,000 - $20,000</td>
                        <td style="color:#dcab16;font-size:13px;border:1px solid #03291a;"> 15%</td>
                        <td style="color:#dcab16;font-size:13px;border:1px solid #03291a;">
                        After 72 Hours
                          <!-- <input type="text" name="time" value="7" style="width:20px;border:1px solid #2d3035;background-color:#2d3035;color:#dcab16;">days -->
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
          </section>
          <br />



          <section>
                <div class="table-responsive">
                   <!-- <input type="radio" required name="radio_plan" style="padding:20px;" value="GOLD">
                   &nbsp;
                 400% After 5 days -->
                  <table class="table" style="border:1px solid #03291a;">
                    <thead class="text-primary" style="background-color:#454545;">
                      <th width="460" style="font-weight:bold;font-size:17px;color:#fff;padding:10px;">
                        <input type="radio" required name="radio_plan" style="padding:20px;" value="DIAMOND">&nbsp; PLAN
                      </th>
                      <th style="font-weight:bold;font-size:17px;color:#fff;padding:10px;">Amount</th>
                      <th style="font-weight:bold;font-size:17px;color:#fff;padding:10px;">Profit</th>
                      <th style="font-weight:bold;font-size:17px;color:#fff;padding:10px;">Duration</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td style="color:#dcab16;font-size:13px;border:1px solid #03291a;"> DIAMOND</td>
                        <td style="color:#dcab16;font-size:13px;border:1px solid #03291a;"> $20,000</td>
                        <td style="color:#dcab16;font-size:13px;border:1px solid #03291a;"> 20%</td>
                        <td style="color:#dcab16;font-size:13px;border:1px solid #03291a;">
                        After 96 Hours
                          <!-- <input type="text" name="time" value="7" style="width:20px;border:1px solid #2d3035;background-color:#2d3035;color:#dcab16;">days -->
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
          </section>











                        <!-- </div> -->
                      <!-- </div> -->
                  </div>
                </div>
              </div>



              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Enter Amount</strong></div>
                  <div class="block-body">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group-material">
                            <input id="register-password" type="number" name="invest_amount" required class="input-material">
                            <label for="register-password" class="label-material">Enter Amount </label>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>




              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Select Mode Of Payment</strong></div>
                  <div class="block-body">
                      <div class="row">
                        <div class="col-sm-12">
                <br />
    <label><input type="radio" name="payment_mode" required style="padding:20px;" value="Bitcoin">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Spend Funds from Bitcoin Deposit</label>
                <br />
    <label><input type="radio" name="payment_mode" required style="padding:20px;" value="Bitcoin cash">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Spend Funds from Bitcoin cash</label>
                <br />
    <label><input type="radio" name="payment_mode" required style="padding:20px;" value="Ethereum">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Spend Funds from Ethereum Deposit</label>
    <br />
    <label><input type="radio" name="payment_mode" required style="padding:20px;" value="Riple">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Spend Funds from Riple</label>
    <br />
    <label><input type="radio" name="payment_mode" required style="padding:20px;" value="Lite Coin">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Spend Funds from Lite Coin</label>
                <br /><br />

    <button type="submit" name="payup_invest" class="btn btn-warning"><i class="now-ui-icons shopping_delivery-fast"></i> Next</button>
                      </div>
                  </div>
                </div>
              </div>











          
            </div>



          </form>
          </div>
        </section>