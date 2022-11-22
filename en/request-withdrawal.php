        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom"><i class="icon-bars text-warning"></i>&nbsp;&nbsp; WITHDRWAL AREA</h2>
          </div>
        </div> 




        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">

            


            <div class="col-lg-12">

              
            <form method="post">


                 <?php

                if(isset($_POST['Continue'])){

                  // 
                  $payment_id = $_GET['request-withdrawal'];
                  $date_invest = date('D, d-m-Y').' by ' .date('h:i a');
                  $withdrawl_id = rand(0001,9999).'O-4';
                  $user_id = $_SESSION['user_id'];
                  $fullname = $_SESSION['fullname'];
                  $email = $_SESSION['email'];
                  $status = 'pending';

                   // post dits
                  $wallet_address = trim($_POST['wallet_address']);
                  $invest_amount = trim($_POST['invest_amount']);

                  // ava amount
                  $avalable_amount = $_SESSION['earn_amount'];

                  if($invest_amount<=10){
                    echo'<script>swal("Opps!","Amount must be more than $10.00","info");</script>';
                  }else if($invest_amount>$avalable_amount){
                    echo'<script>swal("Opps!","Insufficient fund","info")</script>';
                  }else if($class->Mfxwithdrawal($date_invest,$withdrawl_id,$user_id,$fullname,$email,$wallet_address,$invest_amount,$status)){
                    $class->MFXreduce_funds($avalable_amount,$invest_amount,$payment_id);
                    
                    echo '<script>window.location="?withdraw-successful"</script>';
                    // echo "string";
                  }

                  // $date_invest,$withdrawl_id,$user_id,$fullname,$email,$wallet_address,$invest_amount,$status

                }
                ?>
                
              
                <div class="block">
                  <div class="title"><strong>Withdraw your earning to your crypto Wallet</strong></div>
                 <div class="card-body">
          <strong style="color:#f2f2f2;"> ENTER WALLET TO SEND YOUR WITHDRAWAL</strong><br />
          <input type="text" class="form-control" placeholder="enter your crypto wallet address" name="wallet_address" style="padding:20px;">
                <br /><br />

          <strong style="color:#f2f2f2;">ENTER WITHDRAW AMOUNT</strong><br />
           <input type="number" class="form-control" placeholder="enter amount" name="invest_amount" style="padding:20px;">
                <br />
            <?php

                  $payment_id = $_GET['request-withdrawal'];
                  $user_id = $_SESSION['user_id'];
                  $class->MFXavailable_funds($user_id,$payment_id); 


                ?>
              <br /><br />
                <button type="submit" name="Continue" class="btn btn-warning" style="padding:10px;font-size:14px;color:#fff;"><i class="ni ni-spaceship"></i> withdraw fund</button>


                  </div>
              </div>
              </form>
                
              </div>




              


            



             
              </div>
          </div>
        </section>






