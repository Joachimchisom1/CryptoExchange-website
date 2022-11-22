
 <table width="100%" height="100%" border="0" cellpadding="10" cellspacing="0" class="forTexts"> 
 	<tr> 
 		<td width=100% height=100% valign=top>    
 			<h4>Investment Package</h4>






 			<!-- ////////////////////////////// -->
			


 			 <form method="POST">

                  <?php
                  if(isset($_POST['Continue'])){
                      $datesENT = date('D, d-m-Y').' by ' .date('h:i a');
                      $plan_id = rand(0001,9999).'OO';

                      // main plan
                      $package_name = trim($_POST['package_name']);
                      $package_profit = trim($_POST['package_profit']);
                      $package_minAmount = trim($_POST['package_minAmount']);
                      $package_MaxAmount = trim($_POST['package_MaxAmount']);
                      $package_time = trim($_POST['package_time']);

                      // status
                      $status1 = 'active';

                      if($class->PAY_insertPackage($plan_id,$package_name,$package_profit,$package_minAmount,$package_MaxAmount,$package_time,$datesENT,$status1)){
                        echo '<div class="alert alert-success"><strong>success!</strong> Package added</div><br />';
                      }else{
                        echo '<div class="alert alert-danger"><strong>Opps!</strong> error, package not seve</div><br />';
                      }
                    }





                  ?>
                    <div class="row form-group">
                            <small class="text-danger" style="font-size:12px;">enter package name</small><br />
                            <input class="form-control" type="text" placeholder="enter package name" name="package_name" required style=" width:100%;border:2px solid #ff8d3a;">
                            <br /><br />

                          <small class="text-danger" style="font-size:12px;">Profit %</small><br />
                            <input class="form-control" type="number" placeholder="Profit %" name="package_profit" required style=" width:100%;border:2px solid #ff8d3a;">
                            <br /><br />

                        <!-- <div class="col-lg-2"> -->
                          <small class="text-danger" style="font-size:12px;">Min Amount</small><br />
                            <input class="form-control" type="number" placeholder="$ Min Amount" name="package_minAmount" required style=" width:100%;border:2px solid #ff8d3a;">
                             <br /><br />
                        <!-- </div> -->

                        <!-- <div class="col-lg-2"> -->
                          <small class="text-danger" style="font-size:12px;">Max Amount</small><br />
                            <input class="form-control" type="number" placeholder="$ Max Amount" name="package_MaxAmount" required style=" width:100%;border:2px solid #ff8d3a;">
                             <br /><br />
                        <!-- </div> -->

                        <!-- <div class="col-lg-2"> -->
                          <small class="text-danger" style="font-size:12px;">Duration</small><br />
                            <input class="form-control" type="number" placeholder="days 0:00" name="package_time" required style=" width:100%;border:2px solid #ff8d3a;">
                             <br /><br />
                        <!-- </div> -->
                        <!-- <div class="col-lg-12"> -->
                           <button type="submit" name="Continue" class="btn btn-sm btn-success"><i class="far fa-save"></i> Save pakage</button>
                            <br /><br />
                        <!-- </div> -->


                    </div>

                </form>

                <br /><br/>
                <table cellspacing=0 cellpadding=2 border=0 width=100%> 
 				<tr> 
 					<th bgcolor=FFEA00 align=left>Plan name</th>
 					<th bgcolor=FFEA00 align=left>Plan profit</th> 
 					<th bgcolor=FFEA00 align=left>Min Amount</th> 
 					<th bgcolor=FFEA00 align=left>Max Amount</th>
 					<th bgcolor=FFEA00 align=left>Duration</th>
 					<th bgcolor=FFEA00 align=left>status</th>
 				</tr>
 				
 					<?php
 						$class->PAYadd_plan();
 					?>
 				<!-- <tr> 
 					<td bgcolor=fff25c align=left> <small>[delete]</small></td>
 					<td bgcolor=fff25c align=left> <small>[e-mail]</small></td>
 					<td bgcolor=fff25c align=left> <small>[manage funds]</small></td> 
 					<td bgcolor=fff25c align=left> <small>[delete]</small></td>
 					<td bgcolor=fff25c align=left> <small>[e-mail]</small></td>
 					<td bgcolor=fff25c align=left> <small>[delete]</small></td>
 				</tr>  -->
 			</table> 





 			<!-- //////////////////////////////// -->
 			<br />
 			<div class="alert alert-warning"> 

						Welcome to the Acorntrade Manager Admin Area!<br> You can see help messages on almost all pages of the admin area in this part.<br> <br> You can see how many members are registered in the system on this page.<br> System supports 3 types of users:<br> <li>Active users. These users can login to the members area and receive earnings.</li> <li>Suspended users. These users can login to the members area but will not receive any earnings.</li> <li>Disabled users. These users can not login to the members area and will not receive any earnings.</li> <br> User becomes active when registering and only administrator can change status of any registered user. You can see how many users are active and disabled in the system at the top of this page. <br> <br> Investment packages:<br> You can create unlimited sets of investment packages with any settings and payout options. Also you can change status of any package. <li> Active package. All active users will receive earnings every pay period if made a deposit</li> <li> Inactive package. Users will not receive any earnings</li> <br><br> &quot;Total system earnings&quot; is a difference between funds came from payment processings and all the withdrawals you made. <br> <br> &quot;Total member&#39;s balance&quot; shows you how many funds can users withdraw from the system. It is the sum of all users&#39; earnings and bonuses minus penalties and withdrawals. <br> <br> &quot;Total member&#39;s deposit&quot; shows you how many funds have users ever deposited in your system. <br> <br> &quot;Current members&#39; deposit&quot; shows the overall users&#39; deposit. <br> <br> &quot;Total withdrawals&quot; shows you how many funds have you withdrawn to users&#39; accounts. <br> <br> &quot;Pending withdrawals&quot; shows you how many funds users have requested to withdraw. <br> <br> In/out stats shows you how many funds users have entered in your system and how many funds have you withdrawn today, this week, this month, this year and total. 

				</div>  



 			<br><br> 
				<!-- <div class="alert alert-warning"> 

						Welcome to the HYIP Manager Admin Area!<br> You can see help messages on almost all pages of the admin area in this part.<br> <br> You can see how many members are registered in the system on this page.<br> System supports 3 types of users:<br> <li>Active users. These users can login to the members area and receive earnings.</li> <li>Suspended users. These users can login to the members area but will not receive any earnings.</li> <li>Disabled users. These users can not login to the members area and will not receive any earnings.</li> <br> User becomes active when registering and only administrator can change status of any registered user. You can see how many users are active and disabled in the system at the top of this page. <br> <br> Investment packages:<br> You can create unlimited sets of investment packages with any settings and payout options. Also you can change status of any package. <li> Active package. All active users will receive earnings every pay period if made a deposit</li> <li> Inactive package. Users will not receive any earnings</li> <br><br> &quot;Total system earnings&quot; is a difference between funds came from payment processings and all the withdrawals you made. <br> <br> &quot;Total member&#39;s balance&quot; shows you how many funds can users withdraw from the system. It is the sum of all users&#39; earnings and bonuses minus penalties and withdrawals. <br> <br> &quot;Total member&#39;s deposit&quot; shows you how many funds have users ever deposited in your system. <br> <br> &quot;Current members&#39; deposit&quot; shows the overall users&#39; deposit. <br> <br> &quot;Total withdrawals&quot; shows you how many funds have you withdrawn to users&#39; accounts. <br> <br> &quot;Pending withdrawals&quot; shows you how many funds users have requested to withdraw. <br> <br> In/out stats shows you how many funds users have entered in your system and how many funds have you withdrawn today, this week, this month, this year and total. 

				</div>   -->
		</td> 
	</tr> 
</table> 


<!-- Main: END --> 