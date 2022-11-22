<?php
class mastertradersfx_engine
{

  public $host = 'localhost';
  public $user = 'root'; //acornstr_acorns
  public $pass = ''; //+m&a,hKW%iD[
  public $database = 'acorntrade'; //acornstr_acorntrade
  // earningpointdb



  // check date_esist
  public function exist_date($table, $row, $date)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM $table WHERE $row='$date'";
    $query = mysqli_query($db, $sql);
    $count_usersbyrow = mysqli_num_rows($query);
    if ($count_usersbyrow == true) {
      return true;
    } else {
      return false;
    }
  }

  //insert date
  public function mastertraderfx_countdays($date)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = 'INSERT INTO mastertraderfx_countdays(date_1) VALUES("' . $date . '")';
    $query = mysqli_query($db, $sql);
    if ($query == true) {
      return true;
    } else {
      return false;
    }
  }

  // date_count
  public function date_numbering()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_countdays";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    echo $count;
  }




  // check date_esist
  public function existedVistors($table, $row, $ip_address)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM $table WHERE $row='$ip_address'";
    $query = mysqli_query($db, $sql);
    $count_usersbyrow = mysqli_num_rows($query);
    if ($count_usersbyrow == true) {
      return true;
    } else {
      return false;
    }
  }

  //insert vistors
  public function see_visitors($ip_address, $date)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = 'INSERT INTO mastertraderfx_ipadress(ip_address,date1) VALUES("' . $ip_address . '","' . $date . '")';
    $query = mysqli_query($db, $sql);
    if ($query == true) {
      return true;
    } else {
      return false;
    }
  }





  //register member
  public function Mastertraderfx_member($reg_id, $reg_date, $reg_time, $main_down, $f1, $f2, $f4, $f6, $f7, $f8, $f9, $ip_address, $status, $last_seen, $downline_fullname)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = 'INSERT INTO mastertraderfx_member(user_id,reg_date,reg_time,reg_downlineCode,fullname,email,password,s_question,s_answer,user_downline,btc_walletAddress,user_ipaddress,status,last_seen,downline_username) VALUES("' . $reg_id . '","' . $reg_date . '","' . $reg_time . '","' . $main_down . '","' . $f1 . '","' . $f2 . '","' . $f4 . '","' . $f6 . '","' . $f7 . '","' . $f8 . '","' . $f9 . '","' . $ip_address . '","' . $status . '","' . $last_seen . '","' . $downline_fullname . '")';
    $query = mysqli_query($db, $sql);
    if ($query == true) {

      $to = $f2;
      $subject = 'REGISTRATION DETAILS';
      $message = '
			       <section>
              <!-- header -->
              <div class="container" style="background-color:#000000;padding:3px;">
                <br />
                <img id="logo" width="50" class="img-responsive" style="margin-left: auto; margin-right: auto; display: block;" src="../images/Acorntrade.PNG" alt="acorntrade">
                <br /><br />
              </div>
              <!-- header ends here -->
              <!-- body -->
              <div class="container" style="background-color:#efefef;padding-top:10px;padding-right:50px;padding-left:10px;border-bottom:5px solid #000;">
                         <p style="color:#717070;font-size:14px; text-align: center;">

                                 Hello ' . ucwords($f1) . ', <br /><br />
                                  Thank you for choosing Acornstrade!</br>
                                  </br></br><br />
                                  We are dedicated to bering a distinctive and trusted 
                                  provider of investment and asset managament solutions for all investors.
                                  Now you have created your account with us, log into your back office,
                                  process your first deposit and start earning1
                                </p>
                               

                              <p style="color:#717070;font-size:14px; text-align: center;">
                                  <b>FOR REFERENCE, BELOW IS YOUR LOG IN DETAILS</b>
                                  <br />
                                  EMAIL: ' . $f2 . ' <br />
                                  PASSWORD: ' . $f4 . ' <br /><br />
                              </p>
                           <p style="color:#717070;font-size:14px; text-align: center;">
                              Thanks <br />
                              The Acorns Trade team.<br /><br />
                          </p>

                          <p style="color:#717070;font-size:14px; text-align: center;">
                              pLEASE NOTE THAT WE DO NOT PROVIDE SUPPORT VIA PHONE AND 
                              WE WILL NEVER ASK FOR YOUR PASSWORD.
                          </p>
              </div>
              <!-- body ends here -->
              <br />
          </section>
                ';
      // Always set content-type when sending HTML email = f2L.u!FwCG#&
      $headers = 'From: support@acornstrade.com' . "\n" .
        'Reply-To:support@acornstrade.com' . "\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\n" .
        "X-Mailer: PHP";


      // mail($to,$subject,$message);
      mail($to, $subject, $message, $headers);
      // echo $message;
      return true;
    } else {
      return false;
    }
  }





  // login user
  public function MFXlogin_user($email, $password, $last_seen)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_member WHERE email='$email' AND password='$password'";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_array($query)) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];

        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['reg_date'] = $row['reg_date'];
        $_SESSION['reg_time'] = $row['reg_time'];
        $_SESSION['reg_downlineCode'] = $row['reg_downlineCode'];

        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['s_question'] = $row['s_question'];
        $_SESSION['s_answer'] = $row['s_answer'];

        $_SESSION['user_downline'] = $row['user_downline'];
        $_SESSION['btc_walletAddress'] = $row['btc_walletAddress'];
        $_SESSION['user_ipaddress'] = $row['user_ipaddress'];
        $_SESSION['status'] = $row['status'];

        $_SESSION['last_seen'] = $row['last_seen'];


        if ($row['status'] == 'plug') {
          echo '<script>window.location="en/plug.php"</script>';
        } else if ($row['status'] == 'admin') {
          echo '<script>window.location="en/ad01/welcome-admin.php"</script>';
        } else if ($row['status'] == 'active') {
          // update timestructureinvest_member
          mysqli_query($db, "UPDATE mastertraderfx_member SET last_seen='$last_seen' WHERE user_id='$_SESSION[user_id]'");
          echo '<script>window.location="en/welcome.php?engine=' . $row['user_id'] . '"</script>';
          // echo '<script>window.alert("yes")</script>';
        }
      }
    } else {
      echo '<div  class="btns animated" data-animate="fadeInUp" data-delay="1.45" style="padding:19px; background-color:#f1ee90;color:#a39d06;" class="sr_flash">
                            <b>username or password is incorrect!</b> try again</a>
                        </div><br />';
    }
  }



  // send mail for reset password
  public function Mailme_restpassworlink($mail)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_member WHERE email='$mail'";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_array($query)) {

        $to = $mail;
        $subject = 'FORGOTTING PASSWORD';
        $message = '
        <br />

           <section>
            <!-- header -->
            <div class="container text-center" style="background-color:#e0e0e0;padding:30px;">
                <img src="images/Acorntrade.PNG" alt="SUCCESSFUL" width="20%" /><br /><br />
                <h1 class="" style="font-weight:bold;color:#242424;">Reset Password</h1>
            </div>
            <!-- header ends here -->

            <!-- body -->
            <div class="container" style="background-color:#efefef;padding-top:50px;padding-right:50px;">
                        <p style="color:#717070;font-size:17px;">
                            Hello ' . $row[5] . ', <br /><br />

                            We received your request to change your password. if you didnot not ask to change your password, do not worry! Your password is safe and you can delete this email.
                        </p>
                        <p style="color:#2e2e2e;font-size:17px;"><br /><br />
                            <b>Username</b><br />
                            ' . $row[6] . '
                        </p>

                        <br />
                         <a href="reset-password.php?passwordID=' . $row[1] . '" class="btn btn-warning">Reset Password</a><br /><br />



                         <p style="color:#717070;font-size:17px;">
                            Thanks <br />
                            The Acorns Trade Team.<br /><br />
                        </p>
            </div>
            <!-- body ends here -->

           <!-- footer -->
            <div class="container text-center" style="background-color:#e0e0e0;padding:30px;">
              <img class="logo-light" src="images/Acorntrade.PNG" alt="Enrmous Logo" width="130px"><br />
                 <span style="color:#717070;font-size:15px;">
                           <b> © ' . date("Y") . ' Acorns Trade Invest Inc </b> <br /><br />
                           Opposite,Union Metro Station,Deira,Dubai,U.A.E<br />
                </span>
            <span style="color:#717070;font-size:10px;">
               This is an automated email sent by <u>Acorns Trade Team.</u> please do not reply.
            </span>
            </div>
            <!-- footer -->
        </section>

        <br />
        ';

        $headers = 'From: support@acornstrade.com' . "\n" .
          'Reply-To: support@acornstrade.com' . "\n" .
          'Content-type: text/html; charset=iso-8859-1' . "\n" .
          "X-Mailer: PHP";

        mail($to, $subject, $message, $headers);
        // echo $message;


        echo '<script>window.location="mail-password.php"</script>';
      }
    } else {
      echo '<script>window.alert("Invalid mail! try again")</script>';

      echo ' <div style="padding:19px; background-color:#d61515;color:#fff;" class="sr_flash">
                          <b>Email not found! </b> try again</a>
                      </div><br /><br />';

      // echo '<a class="btn btn-warning d-none d-sm-block" style="font-size:15px;color:#fff;"><b>Email not found! </b> try again</a><br />';
    }
  }




  // set new password 
  public function reset_password($set_pass1, $password_ID)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "UPDATE mastertraderfx_member SET password='$set_pass1' WHERE user_id='$password_ID'";
    $query = mysqli_query($db, $sql);
    // $count_usersbyrow = mysqli_num_rows($query);
    if ($query == true) {
      return true;
    } else {
      return false;
    }
  }




  //upload testimony
  public function upload_testimony($user_id, $reg_id, $u_fullname, $u_message, $status)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = 'INSERT INTO mastertraderfx_testimony(user_id,testimony_id,fullname,message,status) VALUES("' . $user_id . '","' . $reg_id . '","' . $u_fullname . '","' . $u_message . '","' . $status . '")';
    $query = mysqli_query($db, $sql);
    if ($query == true) {
      return true;
    } else {
      return false;
    }
  }

  // dashboad all testimony
  public function dashbord_allTestimony()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_testimony WHERE status='active' ORDER BY id DESC ";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      // $count = 1;
      while ($row = mysqli_fetch_array($query)) {

        echo '
   <blockquote>
                  <p class="blockquote blockquote-primary">
                    "' . $row[4] . '"
                    <br>
                    <br>
                    <small>
                      - ' . ucwords($row[3]) . '
                    </small>

                  </p>
      </blockquote>
                ';
      }

      // }
    } else {
      echo '
    <blockquote>
                  <p class="blockquote blockquote-success text-success">
                    "Highly recommended & a great experience. The process was simple and easy to understand. Trading was straight forward, supports all major cryptocurrencies and the entire process was super smooth!"
                    <br>
                    <br>
                    <small class="text-danger">
                      - Alex brake
                    </small>

                  </p>
      </blockquote>
      ';
    }
  }


  //register member
  public function mastertrader_investores($user_id, $payment_id, $status, $fullname, $email, $invest_plan, $payment_time, $date_expire, $invest_Amount, $payment_mode, $date_invest, $time_invest, $user_pecentage)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = 'INSERT INTO mastertraderfx_invest(user_id,invest_id,status,fullname,email,plan,duration,due_duration,amount,payment_mode,date1,time1,earn_amount) VALUES("' . $user_id . '","' . $payment_id . '","' . $status . '","' . $fullname . '","' . $email . '","' . $invest_plan . '","' . $payment_time . '","' . $date_expire . '","' . $invest_Amount . '","' . $payment_mode . '","' . $date_invest . '","' . $time_invest . '","' . $user_pecentage . '")';
    $query = mysqli_query($db, $sql);
    if ($query == true) {


      $to = $email;
      $subject = 'ACORNSTRADE  DEPOSIT';
      $message = '

             <section>
              <!-- header -->
              <div class="container" style="background-color:#000000;padding:3px;">
                <br />
                <img id="logo" class="img-responsive" src="../images/Acorntrade.PNG" alt="ACORNSTRADE">
                <br /><br />
              </div>
              <!-- header ends here -->
              <!-- body -->
              <div class="container" style="background-color:#efefef;padding-top:10px;padding-right:50px;border-bottom:5px solid #000;">
                          <p style="color:#717070;font-size:17px;">
                                Hello ' . ucwords($_SESSION['fullname']) . ', <br /><br />

                                Your first deposit was completed successful. send $' . number_format($invest_Amount, 2) . ' to this
                                <b>Wallet address</b>
                                18yjfkLoZxfcFhytmkxY5koMbrjxzEdxK1
                          </p>

                          <br /> 
                           <p style="color:#717070;font-size:17px;">
                              Thanks <br />
                              The Acorns Trade team.<br /><br />
                          </p>
              </div>
              <!-- body ends here -->
              <br />
          </section>


              ';

      // Always set content-type when sending HTML email = f2L.u!FwCG#&
      $headers = 'From: support@acornstrade.com' . "\n" .
        'Reply-To: support@acornstrade.com' . "\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\n" .
        "X-Mailer: PHP";


      // mail($to,$subject,$message);
      mail($to, $subject, $message, $headers);

      return true;
    } else {
      return false;
    }
  }

  // echo inveest plna
  public function MASTERTRADERFXinvestment_preview($investment_id)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_invest WHERE invest_id='$investment_id' ORDER BY id DESC ";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    $plan = 'plan';
    if ($count == true) {
      // $count = 1;
      while ($row = mysqli_fetch_array($query)) {
        // if ($row[6] == 5) {
        //   $plan = 'START PACK';
        // } elseif ($row[6] == 10) {
        //   $plan = 'SILVER ';
        // } elseif ($row[6] == 15) {
        //   $plan = 'GOLD ';
        // } elseif ($row[6] == 20) {
        //   $plan = 'DIAMOND ';
        // }
  
  
  
        if ($row[6] == 5) {
          $plan1 = '4% After 24 Hours';
      } elseif ($row[6] == 10) {
          $plan1 = '10% After 48 Hours';
      } elseif ($row[6] == 15) {
          $plan1 = '15% After 72 Hours';
      } elseif ($row[6] == 20) {
        $plan1 = '15% After 98 Hours';
    }


        echo '
        <section>
        <div class="table-responsive">
          <table class="table">
            <tbody class="text-primary" style="background-color:#22252a;">
              <td width="400" style="font-size:17px;color:#fff;padding:10px;">PLAN</td>
              <td width="300" class="text-left" style="font-size:17px;color:#fff;padding:10px;">'.$row[6].'</td>
            </tbody>

            <tbody class="text-primary">
              <td width="400" style="font-size:17px;color:#fff;padding:10px;">PROFIT</td>
              <td width="300" class="text-left" style="font-size:17px;color:#fff;padding:10px;"></td>
            </tbody>


            <tbody class="text-primary" style="background-color:#22252a;">
              <td width="400" style="font-size:17px;color:#fff;padding:10px;">Principle return</td>
              <td width="300" class="text-left" style="font-size:17px;color:#fff;padding:10px;">yes</td>
            </tbody>


            <tbody class="text-primary">
              <td width="400" style="font-size:17px;color:#fff;padding:10px;">Principle withdraw</td>
              <td width="300" class="text-left" style="font-size:17px;color:#fff;padding:10px;">Not available</td>
            </tbody>


            <tbody style="background-color:#22252a;">
              <td width="400" style="font-size:17px;color:#fff;padding:10px;">Amount</td>
              <td width="300" class="text-left" style="font-size:17px;color:#fff;padding:10px;">$'.number_format($row[9], 2).'</td>
            </tbody>



          </table>

<br />
<a href="?success_deposit" class="btn btn-sm btn-warning" style="padding:10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Save&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> 

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="?Dashboard" class="btn btn-danger" style="padding:10px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cancel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> 

        </div>
  </section>
          ';
    }

// }
}else{
echo '
No recode
';
}
}



  // echo inveest plna
  public function preview_bitcoin()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_bitwallet ORDER BY id DESC LIMIT 1 ";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      // $count = 1;
      while ($row = mysqli_fetch_array($query)) {
        echo $row[1];
      }
      // }
    } else {
      echo '36joTS7x9F1NkbsrwKk5gJMTGaXcTSNkPN';
    }
  }



  // echo current investment WHERE user_id='$investment_id'
  public function master_current_invest($investment_id)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_invest WHERE user_id='$investment_id' AND status='active' ORDER BY id DESC LIMIT 1 ";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_array($query)) {



        echo '
 				 	<tr>
 				 		<td>' . $row[2] . '</td>
                        <td>' . strtoupper($row[6]) . '</td>
                        <td>$' . number_format($row[9], 2) . '</td>
                        <td>' . $row[10] . '</td>
                        <td>' . $row[3] . '</td>
                        <td>' . $row[11] . '</td>
                     </tr>
                  ';
      }
    } else {
      echo '
					<tr>
 				 		<td> -- </td>
                        <td> -- </td>
                        <td>  no  </td>
                        <td> data </td>
                        <td> -- </td>
                        <td> -- </td>
                     </tr>
        ';
    }
  }



  // echo current investment WHERE user_id='$investment_id'
  public function MFXhisory_invest($investment_id)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_invest WHERE user_id='$investment_id' ORDER BY id DESC ";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      $count = 1;
      while ($row = mysqli_fetch_array($query)) {

        // <td>$'.number_format($row[9] ,2).'</td>
        echo '
 				 	<tr>
 				 		<td>' . $count++ . '</td>
 				 		<td>' . $row[2] . '</td>
                        <td>' . strtoupper($row[6]) . '</td>
                        <td>$' . $row[9] . '</td>
                        <td>' . $row[10] . '</td>
                        <td>' . $row[3] . '</td>
                        <td>' . $row[11] . '</td>
                     </tr>
                  ';
      }
    } else {
      echo '
					<tr>
 				 		<td> -- </td>
                        <td> -- </td>
                        <td>  no  </td>
                        <td> data </td>
                        <td> -- </td>
                        <td> -- </td>
                     </tr>
        ';
    }
  }

  // update profile
  public function MFXupdate_profile($user_id, $u_fullname, $u_btc_wallet)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "UPDATE mastertraderfx_member SET fullname='$u_fullname', btc_walletAddress='$u_btc_wallet' WHERE user_id='$user_id'";
    $query = mysqli_query($db, $sql);
    // $count_usersbyrow = mysqli_num_rows($query);
    if ($query == true) {
      return true;
    } else {
      return false;
    }
  }



  //  get ready withdrawl AND status='ready'  
  public function MXFreadywithdrawl($user_id)
  {
    $current = date('D, d-m-Y');
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_invest WHERE user_id='$user_id' AND due_duration<='$current' AND status='active' ORDER BY id DESC";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      $countt = 1;
      while ($row = mysqli_fetch_array($query)) {

        echo '

           <tr>
                    <th scope="row">' . $countt++ . '</th>
                    <td>' . $row[2] . '</td>
                    <td>' . $row[10] . '</td>
                    <td>' . strtoupper($row[6]) . '</td>
                    <td>$' . number_format($row[9], 2) . '</td>
                    <td>$' . number_format($row[13], 2) . '</td>
                    <td>' . $row[11] . '</td>
                    <td><a href="?request-withdrawal=' . $row[2] . '" class="btn btn-success" style="color:#fff;">Request</a></td>
             </tr>


        ';
      }
    } else {
      echo '


           <tr>
                    <th scope="row">--</th>
                    <td>No</td>
                    <td>investment</td>
                    <td>ready</td>
                    <td>for</td>
                    <td>Withdrawal</td>
                    <td>yet</td>
                    <td><a href="?Deposit" class="btn btn-sm btn-primary">Start Investment</a></td>
             </tr>


        ';
    }
  }

  // available funds for user $row[13];
  public function MFXavailable_funds($user_id, $payment_id)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_invest WHERE user_id='$user_id' AND invest_id='$payment_id'";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_array($query)) {

        $_SESSION['earn_amount'] = $row[13];
        echo '<small class="text-warning text-right" style="font-size:12px;">Available balance to withdraw: $' . number_format($row[13], 2) . '</small>';
      }
    } else {
      echo '$0.00';
    }
  }



  // reduce funds
  public function MFXreduce_funds($avalable_amount, $invest_amount, $payment_id)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "UPDATE mastertraderfx_invest SET earn_amount=earn_amount-$invest_amount WHERE invest_id='$payment_id'";
    $query = mysqli_query($db, $sql);
    if ($query == true) {
      return true;
    }
  }


  // insert withdraw fundz
  public function Mfxwithdrawal($date_invest, $withdrawl_id, $user_id, $fullname, $email, $wallet_address, $invest_amount, $status)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = 'INSERT INTO mastertraderfx_withdraw(date_withdraw,withdrawal_id,user_id,fullname,email,wallet_address,amout_withdrawn,status) VALUES("' . $date_invest . '","' . $withdrawl_id . '","' . $user_id . '","' . $fullname . '","' . $email . '","' . $wallet_address . '","' . $invest_amount . '","' . $status . '")';
    $query = mysqli_query($db, $sql);
    if ($query == true) {

      $to = $email;
      $subject = 'WITHDRAWAL REQUEST';
      $message = '
          <br />

          
             <section>
              <!-- header -->
              <div class="container" style="background-color:#000000;padding:3px;">
                <br />
                <img id="logo" class="img-responsive" src="../images/Acorntrade.PNG" alt="Acorntrade">
                <br /><br />
              </div>
              <!-- header ends here -->
              <!-- body -->
              <div class="container" style="background-color:#efefef;padding-top:10px;padding-right:50px;border-bottom:5px solid #000;">
                          <p style="color:#717070;font-size:17px;">
                              Hello ' . $_SESSION['fullname'] . ', <br /><br />

                              You Placed a request of $' . number_format($invest_amount, 2) . ' 
                              your withdrawal will reflect shortly.
                          </p>
                          <p style="color:#2e2e2e;font-size:17px;"><br />
                              <b>Date</b><br />
                              ' . $date_invest . '<br />
                          </p>
                          <p style="color:#2e2e2e;font-size:17px;">
                              <b>Wallet Address</b><br />
                              ' . $wallet_address . '<br />
                          </p>

                          <br /> 
                           <p style="color:#717070;font-size:17px;">
                              Thanks <br />
                              The Acornstrade team.<br /><br />
                          </p>
              </div>
              <!-- body ends here -->
              <br />
          </section>
          ';

      $headers = 'From: support@acornstrade.com' . "\n" .
        'Reply-To: support@acornstrade.com' . "\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\n" .
        "X-Mailer: PHP";

      mail($to, $subject, $message, $headers);
      // echo $message;


      return true;
    } else {
      return false;
    }
  }






  // echo current investment WHERE user_id='$investment_id'   AND status='active'
  public function MFXwithdraw1($investment_id)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_withdraw WHERE user_id='$investment_id' ORDER BY id DESC";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_array($query)) {

        echo '
          <tr>
            <td>' . $row[2] . '</td>
                        <td>$' . number_format($row[7], 2) . '</td>
                        <td>' . $row[6] . '</td>
                        <td>' . $row[8] . '</td>
                        <td>' . $row[1] . '</td>
                     </tr>
                  ';
      }
    } else {
      echo '
          <tr>
                        <td> -- </td>
                        <td>  no  </td>
                        <td> data </td>
                        <td> -- </td>
                        <td> -- </td>
                     </tr>
        ';
    }
  }



  // total balance 
  public function MF_balance($userID)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT sum(amount) as amount FROM mastertraderfx_invest WHERE user_id='$userID' AND status='active'";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_assoc($query)) {
        $all_ammount = $row['amount'];
        echo '<h3 class="mb-0 font-weight-semibold">$' . number_format($all_ammount, 2) . '</h3>';
      }
    } else {
      echo '<h3 class="mb-0 font-weight-semibold">$0.00</h3>';
    }
  }


  // total balance  
  public function MFX_earntotalbalance($userID)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT sum(earn_amount) as earn_amount FROM mastertraderfx_invest WHERE user_id='$userID' AND status='active'";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_assoc($query)) {

        $all_ammount = $row['earn_amount'];

        echo '<h3 class="mb-0 font-weight-semibold">$' . number_format($all_ammount, 2) . '</h3>';
      }
    } else {
      echo '<h3 class="mb-0 font-weight-semibold">$0.00</h3>';
    }
  }



  // Active investment WHERE user_id='$investment_id'
  public function MTFXActive_invest($userID)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_invest WHERE user_id='$userID' AND status='active' ORDER BY id DESC LIMIT 1";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      // $count = 1;
      while ($row = mysqli_fetch_array($query)) {


        $all_ammount = $row['amount'];

        echo '<h3 class="mb-0 font-weight-semibold">$' . number_format($all_ammount, 2) . '</h3>';
      }
    } else {
      echo '<h3 class="mb-0 font-weight-semibold">$0.00</h3>';
    }
  }



  // total balance 
  public function MTFX_totalwithdraw($userID)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT sum(amout_withdrawn) as amout_withdrawn FROM mastertraderfx_withdraw WHERE user_id='$userID' AND status='paid'";
    // $sql = "SELECT sum(amout_withdrawn) as amout_withdrawn FROM mastertraderfx_withdraw WHERE user_id='$userID' AND status='active'";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_assoc($query)) {
        $all_ammount = $row['amout_withdrawn'];
        echo '<h3 class="mb-0 font-weight-semibold">$' . number_format($all_ammount, 2) . '</h3>';
      }
    } else {
      echo '<h3 class="mb-0 font-weight-semibold">$$0.00</h3>';
    }
  }

  // echo current investment WHERE user_id='$investment_id'
  public function PAYExp_deposit()
  {
    $date_expire = date('D, d-m-Y');
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_invest WHERE date1>='$date_expire' ORDER BY id DESC ";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      $number = 1;
      while ($row = mysqli_fetch_array($query)) {
        echo '
         <tr style="font-size:13px;"> 
          <td align=left><b>' . $number++ . '</b></td> 
          <td align=left>' . ucfirst($row[4]) . '</a></td> 
          <td align=left>' . ($row[11]) . '</td>
          <td align=left><a href="mailto:">' . ($row[5]) . '</a></td>
          <td align=left>' . ($row[3]) . '</a></td> 
        </tr>                    
      ';
      }
    } else {
      echo '
          <tr>
            <td> -- </td>
                        <td> -- </td>
                        <td>  no  </td>
                        <td> data </td>
                        <td> -- </td>
                     </tr>
        ';
    }
  }


  // echo current investment WHERE user_id='$investment_id'
  public function PAYadmin_allMember()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_member WHERE status='active' ORDER BY id DESC ";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_array($query)) {
        echo '
         <tr style="font-size:13px;"> 
          <td align=left><b>' . $row[5] . '</b><br /><small>' . ($row[15]) . '</small></td> 
          <td align=left>' . $row[2] . '</a></td> 
          <td align=left><a href="mailto:">' . ($row[6]) . '</a></td> 
          <td align=left>
              <select>
                <option>active</option>
                <option>block</option>
              </select>
          </td>
        </tr> 
        <tr> 
          <td align=left><a href=""> <small></small> </a></td>
          <td align=left><a href=""> <small>[edit user]</small> </a></td> 
          <td align=left><a href="?delete_user=' . $row[1] . '"> <small>[delete]</small> </a></td>
          <td align=left><a href="?manage_fund=' . $row[1] . '"> <small>[manage funds]</small> </a></td>  
        </tr>                   
      ';
      }
    } else {
      echo '
          <tr>
            <td> -- </td>
                        <td> -- </td>
                        <td>  no  </td>
                        <td> data </td>
                        <td> -- </td>
                        <td> -- </td>
                     </tr>
        ';
    }
  }



  // echo current investment WHERE user_id='$investment_id'
  public function PAYgetinfo_to_fund_user_($user_id)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_member WHERE user_id='$user_id'";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_array($query)) {
        echo '
        <table cellspacing=0 cellpadding=2 border=0 width=100%> 
        
        <tr> 
          <td align=left style="background-color:#ff8d3a;border:1px solid #fff;"> Username:</td> 
          <td align=left style="background-color:#ffc9a5;border:1px solid #fff;"> ' . $row[7] . ' </td> 
        </tr> 
        <tr> 
          <td align=left style="background-color:#ff8d3a;border:1px solid #fff;"> Full Name </td> 
          <td align=left style="background-color:#ffc9a5;border:1px solid #fff;"> ' . ucwords($row[5]) . ' </td> 
        </tr> 
        <tr> 
          <td align=left style="background-color:#ff8d3a;border:1px solid #fff;"> E-mail</td> 
          <td align=left style="background-color:#ffc9a5;border:1px solid #fff;"> <a href="mailto:">' . $row[6] . '</a> </td> 
        </tr> 
      </table> 
      <br /><br />



      <table cellspacing=0 cellpadding=2 border=0 width=100%> 
        <tr> 
          <th style="background-color:#ff8d3a;border:1px solid #fff;" align=center>Process</th>
          <th style="background-color:#ff8d3a;border:1px solid #fff;" align=center>Balance</th> 
          <th style="background-color:#ff8d3a;border:1px solid #fff;" align=center>Account</th> 
        </tr>
        <tr> 
          <td align=center style="background-color:#ff8d3a;border:1px solid #fff;"> Bitcoin</td> 
          <td align=left style="background-color:#fff;border:1px solid #fff;"> $0.00 </td> 
          <td align=left style="background-color:#fff;border:1px solid #fff;"> wallet Address: ' . $row[12] . '</td>   
        </tr>
        <tr> 
          <td align=center style="background-color:#ff8d3a;border:1px solid #fff;"> Etherum</td> 
          <td align=left style="background-color:#fff;border:1px solid #fff;"> $0.00 </td> 
          <td align=left style="background-color:#fff;border:1px solid #fff;"> Etherum Address: n/a</td>   
        </tr>
      </table>

      <br /><br />
      <table cellspacing=0 cellpadding=2 border=0 width=100%> 
        
        <tr> 
          <td align=left style="background-color:#ff8d3a;border:1px solid #fff;"> Total Bonus:</td> 
          <td align=right style="background-color:#ffc9a5;border:1px solid #fff;"> 
             <a href="?add-funds=' . $row[1] . '">Add fund</a>  &nbsp; &nbsp;
              <a href="">History </a> 
          </td> 
        </tr> 
        <tr> 
          <td align=left style="background-color:#ff8d3a;border:1px solid #fff;"> Referral Commissions </td> 
          <td align=right style="background-color:#ffc9a5;border:1px solid #fff;"> block </td> 
        </tr> 
         
      </table>

      <br /><br />

      <table cellspacing=0 cellpadding=2 border=0 width=100%> 
        <tr> 
          <th style="background-color:#ff8d3a;border:1px solid #fff;" align=center>ip</th>
          <th style="background-color:#ff8d3a;border:1px solid #fff;" align=center>Last Access</th> 
        </tr>
        <tr> 
          <td align=center style="background-color:#ff8d3a;border:1px solid #fff;"> ' . $row[13] . '</td> 
          <td align=center style="background-color:#ffc9a5;border:1px solid #fff;"> ' . $row[15] . '</td>   
        </tr>
      </table>

      ';
      }
    } else {
      echo ' <div style="padding:19px; background-color:#ff761a;color:#fff;" class="sr_flash">
                            <b>No user fund!</b>
             </div><br /><br />';
    }
  }




  //add funds echo current investment WHERE user_id='$investment_id'
  public function PAYadd_funds($user_id)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_member WHERE user_id='$user_id'";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_array($query)) {
?>
        <form method="post">
          <?php

          if (isset($_POST['payup_invest'])) {
            //my info
            // $user_id = $_SESSION['user_id'];
            $fullname = $row[5];
            $email = $row[6];
            $status = 'active';
            // $payment_mode = trim($_POST['payment_mode']);

            // investment entery
            $invest_plan = $_POST['select_plan'];
            $payment_time = date('D, d-m-Y', strtotime('+7 day'));
            $invest_Amount = trim($_POST['invest_amount']);
            $payment_mode = $_POST['payment_mode'];

            // others
            $payment_id = rand(0000201, 999999) . 'HYU';
            $date_invest = date('D, d-m-Y');

            $time_invest = date('h:i:sa');
            $invest_plan1 = $invest_plan;

            // convert plan
            if ($invest_plan == 'STARTER PLAN') {
              $invest_plan1 = 5;
            } elseif ($invest_plan == 'SILVER PLAN') {
              $invest_plan1 = 10;
            } elseif ($invest_plan == 'DIAMOND PLAN') {
              $invest_plan1 = 15;
            } elseif ($invest_plan == 'GOLD PLAN') {
              $invest_plan1 = 20;
            }

            // percentage
            if ($invest_plan == 'STARTER PLAN') {
              $plan = 5;
            } elseif ($invest_plan == 'SILVER PLAN') {
              $plan = 10;
            } elseif ($invest_plan == 'DIAMOND PLAN') {
              $plan = 15;
            } elseif ($invest_plan == 'GOLD PLAN') {
              $plan = 20;
            }

            $percentage = $plan;
            $number_to_add = ($invest_Amount / 100) * $percentage;
            $user_pecentage  = $number_to_add + $invest_Amount;

            // expire date
            if ($payment_time = 24) {
              $date_expire = date('D, d-m-Y', strtotime('+1 day'));
            } elseif ($payment_time = 48) {
              $date_expire = date('D, d-m-Y', strtotime('+2 day'));
          }

            mysqli_query($db, 'INSERT INTO mastertraderfx_invest(user_id,invest_id,status,fullname,email,plan,duration,due_duration,amount,payment_mode,date1,time1,earn_amount) VALUES("'.$user_id.'","'.$payment_id.'","'.$status.'","'.$fullname.'","'.$email.'","'.$invest_plan1.'","'.$payment_time.'","'.$date_expire.'","'.$invest_Amount.'","'.$payment_mode.'","'.$date_invest.'","'.$time_invest.'","'.$user_pecentage.'")');

            echo '<div class="alert alert-success"><strong>Success!</strong> You just funded ' . $fullname . ' the sum of $' . number_format($invest_Amount) . '</div><br />';
          }


          ?>
          <table cellspacing=0 cellpadding=2 border=0 width=100%>
            <tr>
              <td align=left style="order:1px solid #fff;"> Account Name:</td>
              <td align=left style="order:1px solid #fff;"> <?php echo ucwords($row[5]); ?></td>
            </tr>
            <tr>
              <td align=left style="order:1px solid #fff;"> User Name:</td>
              <td align=left style="order:1px solid #fff;"> <?php echo ucwords($row[7]); ?></td>
            </tr>
            <tr>
              <td align=left style="order:1px solid #fff;">User e-mail:</td>
              <td align=left style="order:1px solid #fff;"> <?php echo ucwords($row[6]); ?></td>
            </tr>
            <tr>
              <td align=left style="order:1px solid #fff;">Select Plan:</td>
              <td align=left style="order:1px solid #fff;">
                <select style="width:100%;border:2px solid #ff8d3a;" name="select_plan">
                  <option>START PACK</option>
                  <option>SILVER</option>
                  <option>GOLD</option>
                  <option>DIAMOND </option>
                </select>
              </td>
            </tr>
            <tr>
              <td align=left style="order:1px solid #fff;">Ammount:</td>
              <td align=left style="order:1px solid #fff;"><input type="text" required name="invest_amount" value="50" style=" width:100%;border:2px solid #ff8d3a;"></td>
            </tr>
            <tr>
              <td align=left style="order:1px solid #fff;">Select e-currency:</td>
              <td align=left style="order:1px solid #fff;">
                <select style=" width:100%;border:2px solid #ff8d3a;" required name="payment_mode">
                  <option>Bitcoin</option>
                  <option>Ethereum</option>
                  <option>Lite Coin</option>
                  <option>Bitcoin Cash</option>
                  <option>Riple</option>
                </select>
              </td>
            </tr>

          </table>
          <br />
          <button type="submit" name="payup_invest" class="btn btn-danger"><i class="now-ui-icons shopping_delivery-fast"></i> proceed</button>
        </form>

      <?php
      }
    } else {
      echo ' <div style="padding:19px; background-color:#ff761a;color:#fff;" class="sr_flash">
                            <b>No user fund!</b>
             </div><br /><br />';
    }
  }




  public function delete_user($suer_id)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_member WHERE user_id='$suer_id'";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_array($query)) {
        echo '


          <table cellspacing=0 cellpadding=2 border=0 width=100%> 
        <tr> 
          <td align=left style="order:1px solid #fff;"> Account Name:</td> 
          <td align=left style="order:1px solid #fff;"> ' . ucwords($row[5]) . ' </td> 
        </tr>
        <tr> 
          <td align=left style="order:1px solid #fff;"> E-mail:</td> 
          <td align=left style="order:1px solid #fff;"> ' . strtolower($row[6]) . '</td> 
        </tr>
        <tr> 
          <td align=left style="order:1px solid #fff;">Downlne:</td> 
          <td align=left style="order:1px solid #fff;"> ' . $row[4] . '</td> 
        </tr>
        <tr> 
          <td align=left style="order:1px solid #fff;">Status:</td> 
          <td align=left style="order:1px solid #fff;"> ' . $row[14] . '</td> 
        </tr>
        <tr> 
          <td align=left style="order:1px solid #fff;">Action:</td> 
          <td align=left style="order:1px solid #fff;"> <a href="?delete_user=' . $suer_id . '&exit_group=' . $row[1] . '">Delete</a></td> 
        </tr>


      </table> 
      

      ';
      }
    } else {
      echo ' <div style="padding:19px; background-color:#ff761a;color:#fff;" class="sr_flash">
                            <b>No user fund!</b>
             </div><br /><br />';
    }
  }


  // active news
  public function paywase_deletemainnuser()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "UPDATE mastertraderfx_member SET status='delete' WHERE user_id='$_GET[exit_group]'";
    $query = mysqli_query($db, $sql);
    if ($query == true) {
      echo '<div class="alert alert-success"><strong>Success!</strong> You just deleted a user from the company</div><br />';
      return true;
    }
  }




  // black list
  public function PAYblack_listACCT()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_member WHERE status='block' ORDER BY id DESC";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_array($query)) {
        echo '

            <tr> 
          <td bgcolor=fff9b1 align=center>' . strtoupper($row[5]) . '</td>
          <td bgcolor=fff9b1 align=center><a href="mailto:">' . ($row[6]) . ' </a> </td>
          <td bgcolor=fff9b1 align=center> ' . ($row[15]) . ' </td> 
        </tr> 

            ';
      }
    } else {
      echo '<div class="alert alert-danger"><strong>Opps!</strong>File not found</div><br />';
    }
  }



  // add plan
  public function PAYDeposit_history_admin()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_invest ORDER BY id DESC";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_array($query)) {

        echo '

            <tr> 
          <td bgcolor=ffffff align=left>' . ucwords($row[4]) . '
            <br/>
            <small style="color:#7c7c7c;"><b>Deposit:</b> Deposit to ' . strtoupper($row[6]) . '<small>
            <br /><br />
          </td>
          <td bgcolor=ffffff align=left><a href="mailto:">' . ($row[5]) . ' </a> </td>
          <td bgcolor=ffffff align=left> $' . number_format($row[9]) . ' </td>
          <td bgcolor=ffffff align=left> ' . ($row[12]) . ' </td> 
        </tr> 

            ';
      }
    } else {
      echo '<div class="alert alert-danger"><strong>Opps!</strong>File not found</div><br />';
    }
  }



  //approve payment
  public function PAYFund_Balance_History()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_invest ORDER BY id DESC";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_array($query)) {
        echo '

            <tr> 
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;">' . ucwords($row[4]) . '
            <br/>
            <small style="color:#7c7c7c;"><b>Deposit:</b> Deposit to ' . strtoupper($row[6]) . '<small>
            <br /><br />
          </td>
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;"><a href="mailto:">' . ($row[5]) . ' </a> </td>
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;"> $' . number_format($row[9]) . ' </td>
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;"> ' . ($row[3]) . ' </td> 
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;"> ' . ($row[12]) . ' </td> 
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;"> 
            <a href="?Fund-Balance-History&approve=' . $row[2] . '">active</a>
          </td> 
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;"> 
            <a href="?Fund-Balance-History&pend=' . $row[2] . '">Pend</a>
          </td> 
        </tr> 

            ';
      }
    } else {
      echo '<div class="alert alert-danger"><strong>Opps!</strong>File not found</div><br />';
    }
  }


  //active news
  public function PAYpend_userinvestment()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "UPDATE mastertraderfx_invest SET status='pending' WHERE invest_id='$_GET[pend]'";
    $query = mysqli_query($db, $sql);
    if ($query == true) {
      return true;
    }
  }



  //active news
  public function PAYapprove_userinvestment()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "UPDATE mastertraderfx_invest SET status='active' WHERE invest_id='$_GET[approve]'";
    $query = mysqli_query($db, $sql);
    if ($query == true) {
      return true;
    }
  }

  //approve payment 
  public function PAYapprove_withdraw_request()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_withdraw WHERE status='pending' ORDER BY id DESC";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_array($query)) {
        echo '

            <tr> 
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;">' . ucwords($row[4]) . '</td>
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;"><a href="mailto:">' . ($row[5]) . ' </a> </td>
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;"> $' . number_format($row[7]) . ' </td>
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;"> ' . ($row[8]) . ' </td> 
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;"> ' . ($row[1]) . ' </td> 
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;"> 
            <a href="?pay=' . $row[2] . '">pay</a>
          </td>  
        </tr> 

            ';
      }
    } else {
      echo '<div class="alert alert-danger"><strong>Opps!</strong>No new record</div><br />';
    }
  }





  //pay users
  public function payWASEusers()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_withdraw WHERE withdrawal_id='$_GET[pay]'";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_array($query)) {


      ?>
        <form method="post">





          <?php
          if (isset($_POST['sent_fast_proof'])) {
            $fullname = ucwords($row[4]);
            $sendmail = $row[5];
            $amount = $row[7];
            $btc_wallet = $row[6];
            $hashid = trim($_POST['hash_id']);
            // $earningBounce = $row[13];

            // if($earningBounce==0){
            //    mysqli_query($db, "UPDATE paywase_invest SET status='paid' WHERE invest_id='$row[9]'");

            // }else 
            if (empty($fullname) || empty($amount) || empty($sendmail) || empty($btc_wallet)) {
              echo ' <div style="padding:19px; background-color:#d61515;color:#fff;" class="sr_flash">
                            <b>Empty! some box are empty!</b> try again
                        </div><br /><br />';
            } else {

              $to = $sendmail;
              $subject = 'withdrawals has been sent';
              $message = '

 								<section>
              <!-- header -->
              <div class="container" style="background-color:#000000;padding:3px;">
                <br />
                <img id="logo" width="190"  class="img-responsive" style="margin-left: auto; margin-right: auto; display: block;" src="../images/AC.png" alt="Acorns">
                <br /><br />
              </div>
              <!-- header ends here -->
              <!-- body -->
              <div class="container" style="background-color:#efefef;padding-top:10px;padding-right:50px;padding-left:10px;border-bottom:5px solid #000;">
                         <table style="width:110%;  border: 1px solid black; " >
						 <h4 style="text-align: center;"> SUCCESSFUL WITHDRAWAL</h4>
                              <tr>
                                <th style="border: 1px solid black; text-align: left;">Account Name</th>
                                <td style="border: 1px solid black; text-align: left;"> ' . ucwords($fullname) . '</td>
                              </tr>
                  
                              <tr>
                                    <th style="border: 1px solid black; text-align: left;">Transaction Method</th>
                                  <td style="border: 1px solid black; text-align: left;">Bitcoin</td>
                                </tr>
                  
                                <tr>
                                    <th style="border: 1px solid black; text-align: left;">Transaction Amount</th>
                                  <td style="border: 1px solid black; text-align: left;">$' . number_format($amount, 2) . '</td>
                                </tr>
                  
                                <tr>
                                    <th style="border: 1px solid black; text-align: left;">Transaction Status</th>
                                  <td style="border: 1px solid black; text-align: left;">Paid</td>
                                </tr>
                  
                                <tr>
                                  <th style="border: 1px solid black; text-align: left;">Transaction Type</th>
                                  <td style="border: 1px solid black; text-align: left;">Earnings</td>
                                </tr>
                  
                                <tr>
                                  <th style="border: 1px solid black;"></th>
                                <td style="border: 1px solid black;"><td>
                                </tr>
                            </table>
                            
                            <p style="text-align: center;">INVITE YOUR FRIENDS AND FAMILY TO JOIN US TODAD AND SHARE REFERAL BONUS.
                            FOR FURTHER ASSISTANCE CONTACT OUR LIVE SUPPORT THAT IS 24/7 0NLINE TO HELP.</p>
                            
                           <p style="text-align: center;">Email Us @<a href="mailto:acornstrade.england@gmail.com" class="mail">acornstrade.england@gmail.com</a></p>
                       
              </div>
              <!-- body ends here -->
              <br />
          </section>
            ';

              $headers = 'From: support@acornstrade.com' . "\n" .
                'Reply-To: support@acornstrade.com' . "\n" .
                'Content-type: text/html; charset=iso-8859-1' . "\n" .
                "X-Mailer: PHP";

              mail($to, $subject, $message, $headers);
              // echo $message;

              echo '<div class="alert alert-success"><strong>Sent!</strong> you just paid ' . ucwords($fullname) . ' the sum of $' . number_format($amount) . '</div><br />';


              // mysqli_query($db, "UPDATE paywase_invest SET status='paid' WHERE invest_id='$row[9]'");


            }
          }

          ?>
          <table cellspacing=0 cellpadding=2 border=0 width=100%>
            <tr>
              <td align=left style="order:1px solid #fff;"> Account Name:</td>
              <td align=left style="order:1px solid #fff;"> <?php echo ucwords($row[4]); ?></td>
            </tr>
            <tr>
              <td align=left style="order:1px solid #fff;"> e-wallet:</td>
              <td align=left style="order:1px solid #fff;"> <?php echo ($row[6]); ?></td>
            </tr>
            <tr>
              <td align=left style="order:1px solid #fff;">User e-mail:</td>
              <td align=left style="order:1px solid #fff;"> <a href="mailto:"><?php echo ($row[5]); ?></a> </td>
            </tr>
            <tr>
              <td align=left style="order:1px solid #fff;">Amount:</td>
              <td align=left style="order:1px solid #fff;"> $<?php echo number_format($row[7]); ?> </td>
            </tr>
            <tr>
              <td align=left style="order:1px solid #fff;">Transaction Batch:</td>
              <td align=left style="order:1px solid #fff;"><input type="text" required name="hash_id" placeholder="enter transaction batch" style=" width:100%;border:2px solid #ff8d3a;"></td>
            </tr>


          </table>
          <br />
          <button type="submit" name="sent_fast_proof" class="btn btn-info">Pay users</button>
        </form>

      <?php
      }
    } else {
      echo '<div class="alert alert-danger"><strong>Opps!</strong>No new record</div><br />';
    }
  }




  // active news
  public function PAYWASE_userinvestment()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    // mysqli_query($db, "UPDATE paywase_invest SET status='paid' WHERE invest_id='$row[9]'");
    $sql = "UPDATE mastertraderfx_withdraw SET status='paid' WHERE withdrawal_id='$_GET[pay]'";
    $query = mysqli_query($db, $sql);
    if ($query == true) {
      return true;
    }
  }

  // add plan
  public function PAYwithdrawal_history_admin()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_withdraw ORDER BY id DESC";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_array($query)) {
        echo '

            <tr> 
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;">' . ucwords($row[4]) . '
            <br/>
            <small style="color:#7c7c7c;"><b>Deposit:</b> to $' . number_format($row[7], 2) . '<small>
            <br /><br />
          </td>
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;"><a href="mailto:">' . ($row[5]) . ' </a> </td>
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;"> ' . ($row[8]) . ' </td>
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;"> ' . ($row[1]) . ' </td> 
        </tr> 

            ';
      }
    } else {
      echo '<div class="alert alert-danger"><strong>Opps!</strong>File not found</div><br />';
    }
  }



  // add plan
  public function PAY_penality()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_invest ORDER BY id DESC";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_array($query)) {
        echo '

            <tr> 
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;">' . ucwords($row[4]) . '
            <br/>
            <small style="color:#7c7c7c;"><b>Deposit:</b> to $' . number_format($row[9], 2) . '<small>
            <br /><br />
          </td>
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;"><a href="mailto:">' . ($row[5]) . ' </a> </td>
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;"> ' . ($row[3]) . ' </td>
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;"> ' . ($row[11]) . ' </td>
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;">
            <a href="?reduce_acct=' . $row[2] . '">reduce </a>
          </td> 
        </tr> 

            ';
      }
    } else {
      echo '<div class="alert alert-danger"><strong>Opps!</strong>File not found</div><br />';
    }
  }



  //pay users
  public function PAYReducFUND_users()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_invest WHERE invest_id='$_GET[reduce_acct]'";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_array($query)) {
      ?>
        <form method="post">
          <?php
          if (isset($_POST['sent_fast_proof'])) {
            $current_amount = $row[9];
            $enter_amont = $_POST['enter_amont'];

            if ($current_amount <= $enter_amont) {
              echo '<div class="alert alert-danger"><strong>Opps!</strong> Insufficient fund</div><br />';
            } else {
              mysqli_query($db, "UPDATE mastertraderfx_invest SET amount=amount-$enter_amont WHERE invest_id='$_GET[reduce_acct]'");
              // $sql = "UPDATE structureinvest_invest SET amount=amount-$enter_amont WHERE invest_id='$_GET[reduce_acct]'";
              echo '
                  <div class="alert alert-success"><strong>Success!</strong> 
                    You just reduce $' . $enter_amont . ' from ' . ucwords($row[4]) . 's Account
                  </div><br />';
            }
          }
          ?>
          <table cellspacing=0 cellpadding=2 border=0 width=100%>
            <tr>
              <td align=left style="order:1px solid #fff;"> Account Name:</td>
              <td align=left style="order:1px solid #fff;"> <?php echo ucwords($row[4]); ?></td>
            </tr>
            <tr>
              <td align=left style="order:1px solid #fff;"> e-wallet:</td>
              <td align=left style="order:1px solid #fff;"> <?php echo ucwords($row[10]); ?></td>
            </tr>
            <tr>
              <td align=left style="order:1px solid #fff;">User e-mail:</td>
              <td align=left style="order:1px solid #fff;"> <a href="mailto:"><?php echo ($row[5]); ?></a></td>
            </tr>
            <tr>
              <td align=left style="order:1px solid #fff;">Current Amount:</td>
              <td align=left style="order:1px solid #fff;"> $<?php echo number_format($row[9]); ?></td>
            </tr>
            <tr>
              <td align=left style="order:1px solid #fff;">Penelize Amount:</td>
              <td align=left style="order:1px solid #fff;"><input type="number" name="enter_amont" placeholder="enter Amount" style=" width:100%;border:2px solid #ff8d3a;" required></td>
            </tr>


          </table>
          <br />
          <button type="submit" name="sent_fast_proof" class="btn btn-info">Penalize users</button>
        </form>

<?php
      }
    } else {
      echo '<div class="alert alert-danger"><strong>Opps!</strong>No new record</div><br />';
    }
  }

  // add plan
  public function PAY_testimony()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_testimony ORDER BY id DESC";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      while ($row = mysqli_fetch_array($query)) {
        echo '

            <tr> 
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;">' . ucwords($row[3]) . '</td>
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;">' . ($row[4]) . ' </td>
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;"> ' . ($row[5]) . ' </td>
          <td bgcolor=ffffff align=left style="border:1px dashed #ff8502;"> 
            <a href="?Testimony&approvetestimony=' . $row[2] . '">Approve </a>
          </td>
        </tr> 

            ';
      }
    } else {
      echo '<div class="alert alert-danger"><strong>Opps!</strong>File not found</div><br />';
    }
  }


  // active news
  public function PAYWASE_aprovetestimony()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "UPDATE mastertraderfx_testimony SET status='active' WHERE testimony_id='$_GET[approvetestimony]'";
    $query = mysqli_query($db, $sql);
    if ($query == true) {
      return true;
    }
  }


  //register member
  public function MFX_btc($btc_wallet)
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = 'INSERT INTO mastertraderfx_bitwallet(btc_wallet) VALUES("' . $btc_wallet . '")';
    $query = mysqli_query($db, $sql);
    if ($query == true) {

      return true;
    } else {
      return false;
    }
  }


  //testmony call for the index message 
  public function MX_showDepositINDEX()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_invest WHERE status='active' ORDER BY id DESC LIMIT 5";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      $countnumber = 1;
      while ($row = mysqli_fetch_array($query)) {
        echo '
            <tr>   
                <th class="with-bg " style="color:#ffc000;">' . $countnumber++ . '</th>
                <th class="with-bg text-white">' . ucwords($row[4]) . '</th>
                
                <th class="text-price" style="color:#ffc000;">$' . number_format($row[9]) . '</th>
            </tr>

            ';
      }
    } else {
      //   $currentdate = date('D d/M/Y');
      echo '
            <tr>   
                <th class="with-bg">1</th>
                <th class="with-bg">Paul hoston</th>
                <th class="text-price" style="color:#ffc000;">$1,000</th>
                
            </tr>
      ';
    }
  }


  // WITHDRAW for the index message 
  public function MFX_showWITHDRAWINDEX()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_withdraw WHERE status = 'paid' ORDER BY id DESC LIMIT 5";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
      $countnumber = 1;
      while ($row = mysqli_fetch_array($query)) {
        echo '

            <tr>   
                <th class="with-bg" style="color:#ffc000;">' . $countnumber++ . '</th>
                <th class="with-bg text-white">' . ucwords($row[4]) . '</th>
                
                <th class="text-price" style="color:#ffc000;">$' . number_format($row[7]) . '</th>
            </tr>

            ';
      }
    } else {
      // $currentdate = date('D d/M/Y');
      echo '
            <tr>   
                <th class="with-bg">1</th>
                <th class="with-bg">Anita Del</th>
                <th class="text-price" style="color:#ffc000;">$89,000</th>
                
            </tr>
      ';
    }
  }

  // total users
  public function MFXtotal_users_online()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_member WHERE status='active'";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    echo $count;
  }


  // total users
  public function MFX_total_users()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_member";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    echo $count;
  }

  // total deposit
  public function MFX_index_depost()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT sum(amount) as amount FROM mastertraderfx_invest";
    $query = mysqli_query($db, $sql);
    if ($query == true) {
      while ($row = mysqli_fetch_assoc($query)) {
        // $total = 0; 
        $all_ammount = $row['amount'];
        echo number_format($all_ammount);
      }
    } else {
      echo '0.00';
    }
  }
  //     public function MFX_index_depost(){   
  //     $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
  //     $sql = "SELECT sum(earn_amount) as earn_amount FROM mastertraderfx_invest";
  //       $query = mysqli_query($db,$sql);
  //       if($query == true){
  //         while($row = mysqli_fetch_assoc($query)) {
  //           // $total = 0; 
  //           $all_ammount = $row['earn_amount'];
  //           echo '$'.number_format($all_ammount);
  //         }
  //       }else{
  //         echo'9098.00';
  //       }
  //   }












  // new uplaod 

  // Total member (active) for admin
  public function paycount_allMember()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_invest";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    echo $count;
  }



  // Total member (active) for admin
  public function PYcount_allMember()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM  mastertraderfx_member WHERE status='active'";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    echo $count;
  }



  // Total member (active) for admin
  public function pycount_allMemberBLOCK()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT * FROM mastertraderfx_member WHERE status='block'";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    echo $count;
  }


  // caculate total Make Deposit 
  public function paytotalMemberInvested()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT sum(amount) as amount FROM mastertraderfx_invest WHERE status='active'";
    $query = mysqli_query($db, $sql);
    if ($query == true) {
      while ($row = mysqli_fetch_assoc($query)) {
        // $total = 0; 
        $all_ammount = $row['amount'];
        echo number_format($all_ammount, 2);
      }
    } else {
      echo '0.00';
    }
  }



  // caculate total that have not Make Deposit 
  public function pytotalMemberInvestednotmade()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT sum(amount) as amount FROM mastertraderfx_invest WHERE status='pending'";
    $query = mysqli_query($db, $sql);
    if ($query == true) {
      while ($row = mysqli_fetch_assoc($query)) {
        // $total = 0; 
        $all_ammount = $row['amount'];
        echo number_format($all_ammount, 2);
      }
    } else {
      echo '0.00';
    }
  }



  // caculate Total Member Balance
  //  public function payotalMemberBalance(){  
  //  $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
  //  $sql = "SELECT sum(amount) as amount FROM mastertraderfx_invest";
  //    $query = mysqli_query($db,$sql);
  //    if($query == true){
  //      while($row = mysqli_fetch_assoc($query)) {
  //        // $total = 0; 
  //        $all_ammount = $row['amount'];
  //        echo number_format($all_ammount, 2);
  //      }
  //    }else{
  //      echo'0.00';
  //    }
  // }



  // caculate Total Member Balance
  public function payotalMemberBalance()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT sum(amount) as amount FROM mastertraderfx_invest";
    $query = mysqli_query($db, $sql);
    if ($query == true) {
      while ($row = mysqli_fetch_assoc($query)) {
        // $total = 0; 
        $all_ammount = $row['amount'];
        echo number_format($all_ammount, 2);
      }
    } else {
      echo '0.00';
    }
  }

  // caculate total Referral Commission 
  public function payTotal_Referral_Commission()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT sum(earn_amount) as earn_amount FROM mastertraderfx_invest";
    $query = mysqli_query($db, $sql);
    if ($query == true) {
      while ($row = mysqli_fetch_assoc($query)) {
        // $total = 0; 
        $all_ammount = $row['earn_amount'];
        echo number_format($all_ammount, 2);
      }
    } else {
      echo '0.00';
    }
  }



  // caculate total Total Withdrawal WHERE status='pending'
  public function payADMINTotal_Withdrawal()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT sum(amout_withdrawn) as amout_withdrawn FROM  mastertraderfx_withdraw";
    $query = mysqli_query($db, $sql);
    if ($query == true) {
      while ($row = mysqli_fetch_assoc($query)) {
        // $total = 0; 
        $all_ammount = $row['amout_withdrawn'];
        echo number_format($all_ammount, 2);
      }
    } else {
      echo '0.00';
    }
  }


  // caculate total Total Withdrawal 
  public function payADMINTotal_Withdrawalpending()
  {
    $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    $sql = "SELECT sum(amout_withdrawn) as amout_withdrawn FROM mastertraderfx_withdraw WHERE status='pending'";
    $query = mysqli_query($db, $sql);
    if ($query == true) {
      while ($row = mysqli_fetch_assoc($query)) {
        // $total = 0; 
        $all_ammount = $row['amout_withdrawn'];
        echo number_format($all_ammount, 2);
      }
    } else {
      echo '0.00';
    }
  }
}
