        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom"><i class="icon-user text-warning"></i>&nbsp;&nbsp; MY PROFILE</h2>
          </div>
        </div>




        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">



              









            
           <div class="col-lg-8">
            <form method="post">
               <?php 
                    if(isset($_POST['update_profile'])){
                      $user_id = $_SESSION['user_id'];
                      $u_fullname = trim($_POST['a1']);
                      $u_btc_wallet = trim($_POST['a2']);

                      if($class->MFXupdate_profile($user_id,$u_fullname,$u_btc_wallet)){
                        echo '<script>window.alert("Update successful")</script>';
                        echo ' <div style="padding:19px; background-color:#abe3a9;color:#071410;" class="sr_flash">
                            <b>Update successful! </b></a>
                        </div><br />';
                        // echo $user_id;
                      }
                    }

                  ?>
                <div class="block">
                  <div class="title"><strong>EDIT PROFILE</strong></div>
                  <div class="block-body">
                      <div class="row">

                        <div class="col-sm-12">
                          <div class="form-group-material">
                           

                    <label>DATE JOINED <b style="color:#d61717">*</b></label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['reg_date'];?>" disabled>
                        <br />

                    <label>TIME JOINED <b style="color:#d61717">*</b></label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['reg_time'];?>" disabled>
                        <br />
                       

                        <label>FULLNAME <b style="color:#d61717">*</b></label>
                        <input type="text" name="a1" class="form-control" value="<?php echo $_SESSION['fullname'];?>"  required>
                        <br />

                        <label>EMAIL <b style="color:#d61717">*</b></label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['email'];?>" required disabled>
                        <br />

                        <label>CRYPTO WALLET ADDRESS <b style="color:#d61717">*</b></label>
                        <input type="text" name="a2" class="form-control" value="<?php echo $_SESSION['btc_walletAddress'];?>" required>
                        <br />

                        <label>Registered IP address <b style="color:#d61717">*</b></label>
                        <input type="text" class="form-control" value="<?php echo $_SESSION['user_ipaddress'];?>" required disabled>
                        
                     <br /><button type="submit" name="update_profile" class="btn btn-info"><i class="now-ui-icons emoticons_satisfied"></i>Update profile</button>


                          </div>
                        </div>

                      </div>
                  </div>
                </div>
              </form>
              </div>
              


              <div class="col-lg-4">
            <form method="post">
                <div class="block">
                  <div class="title"><strong>MY PROFILE</strong></div>
                  <div class="block-body">
                      <div class="row">

                        <div class="col-sm-12">
                          <p class="description text-center">
                    <?php echo ($_SESSION['reg_downlineCode']);?><br />
                  </p>
                  <p class="description text-center" style="font-size:14px;color:red;">
                    Joined  =stucture invest on <?php echo ($_SESSION['reg_date']);?> <hr />
                  </p>


                    <p class="description text-center">
                 <b>Password</b> -  <?php echo '**********';?><br /><br />
                 <b>Downline Code</b> -  <?php echo ($_SESSION['reg_downlineCode']);?><br /><br /><hr />

              
                  </p>


                <p class="description text-center">
                 <b>Full name</b> - <?php echo strtoupper($_SESSION['fullname']);?><br /><br />
                 <b>Email</b> - <?php echo ($_SESSION['email']);?> <br /><br />
                 <b>Sign in Ip Address</b> - <?php echo ($_SESSION['user_ipaddress']);?><br /><br /><hr />


                </p>


                 

                        </div>

                      </div>
                  </div>
                </div>
              </form>
              </div>



             
              </div>
          </div>
        </section>






