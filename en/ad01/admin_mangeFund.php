
 <table width="100%" height="100%" border="0" cellpadding="10" cellspacing="0" class="forTexts" style="padding-left:20px;"> 
 	<tr> 
 		<td width=100% height=100% valign=top>    
 			<h4>User Details</h4>






 			<!-- ////////////////////////////// -->
			
			<?php
				$user_id = $_GET['manage_fund'];
				// echo $user_id;
				$class->PAYgetinfo_to_fund_user_($user_id);
			?>
			<br /><br />


 			<!-- <table cellspacing=0 cellpadding=2 border=0 width=100%> 
 				
 				<tr> 
 					<td align=left style="background-color:#ff8d3a;border:1px solid #fff;"> Total Bonus:</td> 
 					<td align=right style="background-color:#ffc9a5;border:1px solid #fff;"> 
 						 <a href="">Add fund</a>  &nbsp; &nbsp;
 						  <a href="">History </a> 
 					</td> 
 				</tr> 
 				<tr> 
 					<td align=left style="background-color:#ff8d3a;border:1px solid #fff;"> Referral Commissions </td> 
 					<td align=right style="background-color:#ffc9a5;border:1px solid #fff;"> block </td> 
 				</tr> 
 				 
 			</table> --> 





 			<!-- //////////////////////////////// -->
 		
 			<div class="alert alert-warning"> 

						Welcome to the Acorntrade Admin Area!<br> You can see help messages on almost all pages of the admin area in this part.<br> <br> You can see how many members are registered in the system on this page.<br> System supports 3 types of users:<br> <li>Active users. These users can login to the members area and receive earnings.</li> <li>Suspended users. These users can login to the members area but will not receive any earnings.</li> <li>Disabled users. These users can not login to the members area and will not receive any earnings.</li> <br> User becomes active when registering and only administrator can change status of any registered user. You can see how many users are active and disabled in the system at the top of this page. <br> <br> Investment packages:<br> You can create unlimited sets of investment packages with any settings and payout options. Also you can change status of any package. <li> Active package. All active users will receive earnings every pay period if made a deposit</li> <li> Inactive package. Users will not receive any earnings</li> <br><br> &quot;Total system earnings&quot; is a difference between funds came from payment processings and all the withdrawals you made. <br> <br> &quot;Total member&#39;s balance&quot; shows you how many funds can users withdraw from the system. It is the sum of all users&#39; earnings and bonuses minus penalties and withdrawals. <br> <br> &quot;Total member&#39;s deposit&quot; shows you how many funds have users ever deposited in your system. <br> <br> &quot;Current members&#39; deposit&quot; shows the overall users&#39; deposit. <br> <br> &quot;Total withdrawals&quot; shows you how many funds have you withdrawn to users&#39; accounts. <br> <br> &quot;Pending withdrawals&quot; shows you how many funds users have requested to withdraw. <br> <br> In/out stats shows you how many funds users have entered in your system and how many funds have you withdrawn today, this week, this month, this year and total. 

				</div>  



 			<br><br> 
				<!-- <div class="alert alert-warning"> 

						Welcome to the HYIP Manager Admin Area!<br> You can see help messages on almost all pages of the admin area in this part.<br> <br> You can see how many members are registered in the system on this page.<br> System supports 3 types of users:<br> <li>Active users. These users can login to the members area and receive earnings.</li> <li>Suspended users. These users can login to the members area but will not receive any earnings.</li> <li>Disabled users. These users can not login to the members area and will not receive any earnings.</li> <br> User becomes active when registering and only administrator can change status of any registered user. You can see how many users are active and disabled in the system at the top of this page. <br> <br> Investment packages:<br> You can create unlimited sets of investment packages with any settings and payout options. Also you can change status of any package. <li> Active package. All active users will receive earnings every pay period if made a deposit</li> <li> Inactive package. Users will not receive any earnings</li> <br><br> &quot;Total system earnings&quot; is a difference between funds came from payment processings and all the withdrawals you made. <br> <br> &quot;Total member&#39;s balance&quot; shows you how many funds can users withdraw from the system. It is the sum of all users&#39; earnings and bonuses minus penalties and withdrawals. <br> <br> &quot;Total member&#39;s deposit&quot; shows you how many funds have users ever deposited in your system. <br> <br> &quot;Current members&#39; deposit&quot; shows the overall users&#39; deposit. <br> <br> &quot;Total withdrawals&quot; shows you how many funds have you withdrawn to users&#39; accounts. <br> <br> &quot;Pending withdrawals&quot; shows you how many funds users have requested to withdraw. <br> <br> In/out stats shows you how many funds users have entered in your system and how many funds have you withdrawn today, this week, this month, this year and total. 

				</div>   -->
		</td> 
	</tr> 
</table> 


<!-- Main: END --> 