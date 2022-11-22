<table width="100%" height="100%" border="0" cellpadding="10" cellspacing="0" class="forTexts"> 
 	<tr> 
 		<td width=100% height=100% valign=top>   
			<h4>Fast Proof<hr /></h4>
 			<form method="post">
 				<?php
 					if(isset($_POST['sent_fast_proof'])){
 						$fullname = trim(ucwords($_POST['fullname_1']));
 						$sendmail = trim($_POST['mail']);
 						$amount = trim($_POST['amount']);
 						$btc_wallet = trim($_POST['btc_id']);
 						$hashid = trim($_POST['hash_id']);

 						if(empty($fullname) || empty($amount) || empty($sendmail) || empty($btc_wallet)){
 							echo ' <div style="padding:19px; background-color:#d61515;color:#fff;" class="sr_flash">
                            <b>Empty! some box are empty!</b> try again
                        </div><br /><br />';
 						}else{

 			$to = $sendmail;
	        $subject = 'withdrawals has been sent';
	        $message = '

 								<section>
              <!-- header -->
              <div class="container" style="background-color:#000000;padding:3px;">
                <br />
                <img id="logo" width="190"  class="img-responsive" style="margin-left: auto; margin-right: auto; display: block;" src="images/AC.png" alt="Acorns">
                <br /><br />
              </div>
              <!-- header ends here -->
              <!-- body -->
              <div class="container" style="background-color:#efefef;padding-top:10px;padding-right:50px;padding-left:10px;border-bottom:5px solid #000;">
                         <table style="width:110%;  border: 1px solid black; " >
						 <h4 style="text-align: center;"> SUCCESSFUL WITHDRAWAL</h4>
                                        <tr>
                                          <th style="border: 1px solid black; text-align: left;">Account Name</th>
                                          <td style="border: 1px solid black; text-align: left;"> '.ucwords($fullname).'</td>
                                        </tr>
                            
                                        <tr>
                                             <th style="border: 1px solid black; text-align: left;">Transaction Method</th>
                                            <td style="border: 1px solid black; text-align: left;">Bitcoin</td>
                                          </tr>
                            
                                          <tr>
                                             <th style="border: 1px solid black; text-align: left;">Transaction Amount</th>
                                            <td style="border: 1px solid black; text-align: left;">$'.number_format($amount, 2).'</td>
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
                            
                            <p style="text-align: center;">INVITE YOUR FRIENDS AND FAMILY TO JOIN US TODAT AND SHARE REFERAL BONUSES.
                            FOR FURTHER ASSISTANCE CONCACT OUR LIVE SUPPORT THAT IS 24/7 0NLINE TO HELP.</p>
                            
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
        echo '<div class="alert alert-success"><b>Sent!</b> Mail sent</div><br />';
    }
        	echo $message;
 					}

 				?>

 					<label><b>Fullname</b></label><br />
 					<input type="text" name="fullname_1" placeholder="enter fullname" style="padding:5px; width: 100%;"><br /><br />


 					<label><b>sent to mail</b></label><br />
 					<input type="email" name="mail" placeholder="enter email" style="padding:5px; width:100%;"><br /><br />


 					<label><b>$ amount</b></label><br />
 					<input type="number" name="amount" placeholder="enter amount" style="padding:5px; width: 100%;"><br /><br />


 					<label><b>Bitcoin Wallet</b></label><br />
 					<input type="text" name="btc_id" placeholder="enter bitcoin wallet" style="padding:5px; width: 100%;"><br /><br />


 					<label><b>Transaction Batch</b></label><br />
 					<input type="text" name="hash_id" placeholder="enter Transaction batch" style="padding:5px; width: 100%;"><br /><br />

 					<input type="submit" name="sent_fast_proof" value="send mail" class="btn btn-danger">
 				</form>
 			<!-- ////////////////////////////// -->

 			<!-- //////////////////////////////// -->
 			
 			<!-- <div class="alert alert-warning"> 
 
		 

			</div>  

 -->

 			<br><br> 
				
		</td> 
	</tr> 
</table> 


<!-- Main: END --> 