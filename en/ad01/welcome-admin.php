<?php
session_start();
require '../int.php';
 $class = new mastertradersfx_engine;

  if(!isset($_SESSION['username']) AND !isset($_SESSION['password'])){
   echo '<script>window.location="../../login.php"</script>';
}  
 

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"> 
<html > 
	<head> 
		<title>Acorntrade. Auto-payment, mass payment included.</title> 
		<link rel="shortcut icon" href="images/Acorntrade.PNG">
		<link href="images/adminstyle.css" rel="stylesheet" type="text/css">  
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <!-- <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">  -->
			<style>
			 .pagination { 
			 	display: -ms-flexbox; 
			 	display: flex; padding-left: 0; 
			 	list-style: none; 
			 } 
			 .page-link { 
			 	position: relative; 
			 	display: block;
			 	padding: 0.5rem 0.75rem; 
			 	margin-left: -1px; 
			 	line-height: 1.25;
			 	color: #000;
			 	background-color: #fff;
			 	border: 1px solid #999; 
			 	} 
			 .page-item:first-child .page-link { 
			 		margin-left: 0; 
					border-top-left-radius: 0.25rem; 
					border-bottom-left-radius: 0.25rem; 
					} 
			.page-item:last-child .page-link { 
					border-top-right-radius: 0.25rem; 
					border-bottom-right-radius: 0.25rem; 
					} 
			.page-link:hover { 
					z-index: 2; color: #000; 
					text-decoration: none; 
					background-color: #ccc; 
					border-color: #999; 
					} 
				.page-link.disabled { 
					color: #999; 
					} 
				.page-link.disabled:hover { 
					background-color: #fff; 
					} 
				.page-link { 
					cursor: pointer; 
					text-decoration: none; 
					color: #000; 
					} 
				.page-item.active .page-link { 
					z-index: 1; 
					color: #000; 
					background-color: #ccc; 
					border-color: #999; 
					} 
				.page-item.disabled .page-link { 
					color: #666; 
					pointer-events: none; 
					cursor: auto; 
					background-color: #fff; 
					border-color: #999; 
					} 
				.alert { 
					padding: 5px 5px 5px 15px; 
					margin: 2px; 
					border: solid 1px black; 
					display: block; 
					} 
				.alert.alert-danger { 
					background: #FFEEEE; 
					border-color: red; 
					color: #660000; 
					} 
				.alert.alert-warning { 
					background: #FFFFEE;
					border-color: yellow; 
					color: #333300; 
					} 
				.alert.alert-success { 
					background: #EEFFEE; 
					border-color: green; 
					color: #006600; 
					} 
				.alert.alert-info { 
					background: #EEEEFF;
					border-color: blue; 
					color: #000066; 
					}
				table.form { 
					width: 100%; 
					} 
				table.form th { 
					width: 30%; 
					padding: 3px; 
					padding-right: 5px;
					text-align: right; 
					background: #FFC982; 
					color: #493011; 
					} 
				table.form th.title { 
					width: 100%; 
					padding-left: 5px; 
					text-align: left; 
					color: #a45c07; 
				} 
				table.form td { 
					width: 70%; 
					padding: 3px; 
					text-align: left; 
					background: #FEF5EA; 
					} 
			table.form.nosize td { 
					width: auto; 
					} 
			table.form.nosize th { 
					width: auto; 
					} 
			table.form thead th { 
					width: auto;
					padding: 3px; 
					text-align: center; 
					background: #FFC982; 
					color: #FFFFFF; 
					} 
			table.form thead td { 
					width: auto; padding: 3px; 
					text-align: left; 
				} 
			table.form td input[type=text], table.form td input[type=password], table.form td textarea, table.form td select {
				 width: 100%; 
				} 
			table.form td input[type=text].nosize, table.form td input[type=password].nosize, table.form td textarea.nosize, table.form td select.nosize { 
				width: auto; 
			} 
			table.list { 
				width: 100%; 
			} 
			table.list td { 
				width: auto; 
				padding: 3px; 
			} 
			table.list th { 
				width: auto; 
				padding: 3px; 
				text-align: center; 
				background: #FFC982; 
				color: #493011; 
			} 
			table.list .row1 {
			 	background: #FCE7CA; 
			 } 
			table.list .row2 { 
				background: #FFF3E3; 
				} 
			form input[type=submit], form input[type=button], form button, .sbmt {
				display: inline-block; 
				font-weight: bold; 
				text-align: center; 
				text-decoration: none; 
				white-space: nowrap; 
				vertical-align: middle; 
				user-select: none; border: 1px solid transparent; 
				padding: .25rem .5rem; 
				line-height: 1.5; 
				border-radius: .2rem; 
				border: none; 
				} 
			form input[type=submit]:hover, form input[type=button]:hover, form button:hover, .sbmt:hover { 
				background-color: #FAD252; 
				} 
			form input[type=submit]:active, form input[type=button]:active, form button:active, .sbmt:active { 
				background-color: #FFC200; 
				} 
			form input[type=submit]:focus, form input[type=button]:focus, form button:focus, .sbmt:focus { 
				box-shadow: 0 0 0 .2rem rgba(255,236,176,.5); 
			} 
			form input[type=submit]:disabled, form input[type=button]:disabled, form button:disabled, .sbmt:disabled {
				opacity: .65; 
			} 
			.btn { 
				cursor:pointer; 
				text-transform: uppercase; 
			} 
			.sbmt.btn-sm { 
				font-size: .525rem; 
				padding: .25rem .35rem; 
				text-transform: uppercase; 
				cursor:pointer; 
				} 
			.btn-success { 
				color: #fff; 
				background-color: #28a745; 
				border-color: #28a745; 
				} 
			.btn-success:hover { 
				background-color: #218838 !important; 
				border-color: #1e7e34 !important; 
				} 
			.btn-success:focus { 
				background-color: #218838 !important;
				box-shadow: 0 0 0 .2rem rgba(40,167,69,.5) !important; 
				} 
			.btn-danger { 
				color: #fff; 
				background-color: #dc3545;
				border-color: #dc3545; 
				} 
			.btn-danger:hover { 
				background-color: #c82333 !important; 
				border-color: #bd2130 !important; 
				} 
			.btn-danger:focus { 
				background-color: #c82333 !important; 
				box-shadow: 0 0 0 .2rem rgba(220,53,69,.5) !important;
				} 
			.btn-info { 
				color: #fff; 
				background-color: #17a2b8;
				border-color: #17a2b8; 
				} 
			.btn-info:hover { 
				background-color: #138496 !important; 
				border-color: #117a8b !important; 
			} 
			.btn-info:focus { 
				background-color: #138496 !important; 
				box-shadow: 0 0 0 .2rem rgba(23,162,184,.5) !important; 
			} 
			.badge { 
			display: inline-block; 
			padding: .25em .4em; 
			font-size: 75%; 
			font-weight: 700;
			line-height: 1; 
			text-align: center; 
			white-space: nowrap; 
			vertical-align: baseline; 
			border-radius: .25rem; 
			} 
			.badge-success { 
			color: #fff; 
			background-color: #28a745; 
			} 
			.badge-info { 
			color: #fff; 
			background-color: #17a2b8; 
			} 
			.badge-danger { 
				color: #fff; 
				background-color: #dc3545; 
				} 
			.badge-warning { 
				color: #212529; 
				background-color: #ffc107; 
				} 
			.badge-primary { 
				color: #fff; 
				background-color: #007bff; 
				} 
			.badge.sticker { 
				font-size: 90%; 
				} 
			.hide { 
				display:none; 
				} 
			.pshead { 
				padding: 3px; 
				background: #FF8D00; 
				margin: 2px 0; 
				font-weight: bold; 
				overflow: hidden; 
			} 
				.pshead b { 
					display:block; 
					width: 250px; 
					float: left; 
				} 
			.pshead a { 
				float: right; 
				} 
			.psettings { 
				display:none; 
				} 
			</style> 

			<style> 
			.nav {
			 	--display: flex; 
				--flex-wrap: wrap; 
				padding: 0 .25rem; 
				margin-bottom: 0; 
				list-style: none; 
				} 
			.nav-link { 
				border-radius: .25rem; 
				display: block; 
				padding: .5rem 1rem; 
				color: #493011; 
				text-decoration: none; 
				background-color: #FFF3E3; 
				border: solid 1px transparent; 
				-webkit-text-decoration-skip: objects; 
				margin-top: 0.2rem; 
				text-align: left; 
				font-weight: bold; 
				} 
			.nav-link:last-child { 
				margin-bottom: 0.2rem; 
				} 
			.nav-link:hover { 
				background-color: #FFC982; 
				} 
			.nav-link.active { 
				background-color: #FFC982; 
				} 
			.nav-link:active, .nav-link:focus {

				background-color: #FCE7CA

				} 
			.dropdown-toggle.show { 
				border-bottom-right-radius: 0; 
				border-bottom-left-radius: 0; 
				} 
			.dropdown-toggle::after { 
				--display: inline-block; 
				display: none; 
				width: 0; 
				height: 0; 
				margin-left: .255em; 
				vertical-align: .255em; 
				content: ""; 
				border-top: .3em solid; 
				border-right: .3em solid transparent; 
				border-bottom: 0; 
				border-left: .3em solid transparent; 
			} 
			.dropdown-menu { 
				--position: absolute; 
				--top: 100%; left: 0; 
				z-index: 1000; 
				--display: none; 
				--float: left; 
				--min-width: 10rem; 
				padding: .5rem 0;
				margin: 0 0 .125rem 0; 
				--font-size: 1rem; 
				color: #212529; 
				text-align: left; 
				list-style: none; 
				background-color: #fff; 
				background-clip: padding-box; 
				border: 1px solid rgba(0,0,0,.15); 
				border-top: 0; 
				border-bottom-right-radius: .25rem; 
				border-bottom-left-radius: .25rem; 
			} 
				.dropdown-menu.show { 
					display: block;
			 } .dropdown-item { 
			 	display: block; 
			 	--width: 100%; 
			 	padding: .25rem 1rem; 
			 	clear: both; 
			 	font-weight: 400; 
			 	color: #212529; 
			 	text-align: inherit; 
			 	--white-space: nowrap; 
			 	background-color: transparent; 
			 	border: 0; 
			 	text-decoration: none; 
			 } 
			.dropdown-item:hover { 
				background-color: #FCE7CA; 
			} 
			.dropdown-item.active { 
				background-color: #FFC982;
				} 
			.dropdown-item:active, .dropdown-item:focus { 
				background-color: #FCE7CA; 
			} 

		</style>   
	</head> 



	<body bgcolor="#FFFFF2" link="#666699" vlink="#666699" alink="#666699" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"  style="font-family: calibri;"> 
		<center> 
			<table width="760" border="0" cellpadding="0" cellspacing="0" > 
				<tr> 
					<td valign=top> 
			<table cellspacing=0 cellpadding=0 border=0 width=100%> 
				<tr> 
					<td background="images/ver.gif" bgcolor=#FF8D00>
						<img src="images/top.gif" border="0" align=left>
					</td> 
					<td background="images/ver.gif" bgcolor=#FF8D00 valign=bottom align=right >
						<span style="font-family: calibri; font-size: 12px; color: white"> 
							<b>
								<a href="?dashboard" class=toplink>Home</a> &middot; <a href=?log-out class=toplink>Logout</a>
							</b>
						</span>&nbsp; &nbsp; 
					</td> 
				</tr> 
			</table> 
					</td> 
				</tr> 
				<tr> 
					<td valign=top> 
						<table cellspacing=0 cellpadding=1 border=0 width=100% bgcolor=#ff8d00> 
							<tr> 
								<td> 
									<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0"> 
										<tr bgcolor="#FFFFFF" valign="top">  
											<td width=300 align=center>  
												<table cellspacing=0 cellpadding=2 border=0 width="172">
													<tr> 
														<th colspan=2>
															<img src=images/q.gif width=1 height=3>
														</th> 
													</tr> 
													<tr style="background-color: #FF8D00;color: #fff;"> 
														<th colspan=2 class=title>Menu</th> 
													</tr> 
													<tr> 
														<td class=menutxt><a href=?dashboard>Dashboard</a></td> 
													</tr> 
													<tr> 
														<td class=menutxt>
															<a href="?fast-proof">Fast proof</a>
														</td> 
													</tr>
													<tr> 
														<td class=menutxt>
															<!-- <a href="?investment-page">Investment Packages</a> -->
														</td> 
													</tr>   
													<tr> 
														<td class=menutxt><a href="?expiring_deposits">Expiring Deposits</a></td> 
													</tr>   
													<tr> 
														<td class=menutxt>&nbsp;</td> 
													</tr>   
													<tr> 
														<td class=menutxt><a href=?a_members>Members</a></td> 
													</tr>    
													<tr> 
														<td class=menutxt><a href="?a=top_referral_earnings">Top Referral Earnings</a></td> 
													</tr>  
													<tr> 
														<td class=menutxt><a href="?ext_accounts_blacklist">Accounts Blacklist</a></td> 
													</tr>   
													<tr> 
														<td class=menutxt>&nbsp;</td> 
													</tr>        
													<tr> 
														<td class=menutxt>&nbsp;</td> 
													</tr>
													<tr> 
														<td class=menutxt><a href=?aDeposits_histoy>Deposits History</a></td> 
													</tr>
													<tr> 
														<td class=menutxt><a href=?Fund-Balance-History>Fund Balance History</a></td> 
													</tr>
													<tr> 
														<td class=menutxt><a href=?withdraw_request>Withdrawal Requests</a></td> 
													</tr>
													<!-- <tr> 
														<td class=menutxt><a href=?a=thistory&ttype=earning>Earning History</a></td> 
													</tr> -->
													<tr> 
														<td class=menutxt><a href=?withdrawals_history>Withdrawals History</a></td> 
													</tr>
													<tr> 
														<td class=menutxt>&nbsp;</td> 
													</tr>
													<!-- <tr> 
														<td class=menutxt><a href=?a=thistory>Transactions History</a></td> 
													</tr> -->
													<!-- <tr> 
														<td class=menutxt><a href=?a=thistory&ttype=bonus>Bonuses</a></td> 
													</tr> -->
													<!-- <tr> 
														<td class=menutxt><a href=?op>Penalties</a></td> 
													</tr>
													<tr> 
														<td class=menutxt>&nbsp;</td> 
													</tr>   
													<tr> 
														<td class=menutxt><a href="?a=pending_deposits">Pending Deposits</a></td> 
													</tr>   
													<tr> 
														<td class=menutxt>&nbsp;</td> 
													</tr>    
													<tr> 
														<td class=menutxt>&nbsp;</td> 
													</tr>
													<tr> 
														<td class=menutxt><a href=?a=exchange_rates>Exchange Rates</a></td> 
													</tr>
													<tr> 
														<td class=menutxt><a href=?a=thistory&ttype=exchange>Exchange History</a></td> 
													</tr>
													<tr> 
														<td class=menutxt>&nbsp;</td> 
													</tr>
													<tr> 
														<td class=menutxt><a href=?a=send_bonuce>Send a Bonus</a></td> 
													</tr>
													<tr>  
														<td class=menutxt><a href=?a=send_penality>Send a Penalty</a></td> 
													</tr>  
													<tr> 
														<td class=menutxt>&nbsp;</td> 
													</tr> 
													<tr> 
														<td class=menutxt>&nbsp;</td> 
													</tr> 
													<tr> 
														<td class=menutxt><a href=?a=settings>Settings</a></td> 
													</tr>   
													<tr> 
														<td class=menutxt><a href="?a=processings">Processings</a></td> 
													</tr>  
													<tr> 
														<td class=menutxt><a href="?a=auto-pay-settings">Auto-Withdrawals Settings</a></td> 
													</tr>  
													<tr> 
														<td class=menutxt><a href="?a=security">Security</a></td> 
													</tr>  
													<tr> 
														<td class=menutxt><a href="?a=seo_links">Links Replacement</a></td> 
													</tr>   
													<tr> 
														<td class=menutxt>&nbsp;</td> 
													</tr>   
													<tr> 
														<td class=menutxt>&nbsp;</td> 
													</tr> 
													<tr> 
														<td class=menutxt><a href=?a=referal>Referral Settings</a></td> 
													</tr>  
													<tr> 
														<td class=menutxt>&nbsp;</td> 
													</tr>  -->
													<!-- <tr> 
														<td class=menutxt><a href=?dashboard>InfoBoxes Settings</a></td> 
													</tr>  -->
													<tr> 
														<td class=menutxt>&nbsp;</td> 
													</tr>   
													<tr>  
														<td class=menutxt><a href=?send_penality>Send a Penalty</a></td> 
													</tr>  
													<tr>  
														<td class=menutxt><a href=?Testimony>Testimony</a></td> 
													</tr>
													<tr> 
														<td class=menutxt><a href="?news">News</a></td> 
													</tr>  

													<!-- <tr> 
														<td class=menutxt><a href="?a=user_notices">User Notices</a></td> 
													</tr>  
													<tr> 
														<td class=menutxt><a href="?a=custompages">Custom Pages</a></td> 
													</tr>  
													<tr> 
														<td class=menutxt><a href="?a=newsletter">Send a Newsletter</a></td> 
													</tr>  
													<tr> 
														<td class=menutxt><a href="?a=check_ips">IPs Check</a></td> 
													</tr>  
													<tr> 
														<td class=menutxt><a href="?a=email_templates">Email Templates</a></td> 
													</tr>    -->
													<tr> 
														<td class=menutxt>&nbsp;</td> 
													</tr>   
													<tr> 
														<td class=menutxt>&nbsp;</td> 
													</tr> 
													<tr> 
														<td class=menutxt>&nbsp;</td> 
													</tr> 
													<tr> 
														<td class=menutxt><a href=?log-out>Logout</a></td> 
													</tr> 
												</table>  
											</td> 
											<td bgcolor="#ff8d00" valign="top" width=1>
												<img src=images/q.gif width=1 height=1>
											</td>

											<td bgcolor="#FFFFFF" valign="top" width=99%> 











												<!-- Main: Start --> 






												
          <!-- enter user  -->
          <?php if(isset($_GET['a_members'])){ ?>

            <?php require 'st_allmember.php';?>

          <?php }else if(isset($_GET['fast-proof'])){ ?>

            <?php require 'fast-proof.php';?>

          <?php }else if(isset($_GET['manage_fund'])){ ?>

            <?php require 'admin_mangeFund.php';?>

          <?php }else if(isset($_GET['add-funds'])){ ?>

            <?php require 'add-funds.php';?>

          <?php }else if(isset($_GET['investment-page'])){ ?>

            <?php require 'investment-page.php';?>

          <?php }else if(isset($_GET['ext_accounts_blacklist'])){ ?>

            <?php require 'accounts_blacklist.php';?>

          <?php }else if(isset($_GET['aDeposits_histoy'])){ ?>

            <?php require 'Deposits_histoy.php';?>

          <?php }else if(isset($_GET['Fund-Balance-History'])){ ?>

            <?php require 'Fund-Balance-History.php';?>

          <?php }else if(isset($_GET['withdraw_request'])){ ?>

            <?php require 'withdraw_request.php';?>

          <?php }else if(isset($_GET['pay'])){ ?>

            <?php require 'pay_user.php';?>

          <?php }else if(isset($_GET['withdrawals_history'])){ ?>

            <?php require 'withdrawals_history.php';?>

          <?php }else if(isset($_GET['send_penality'])){ ?>

            <?php require 'penality.php';?>

          <?php }else if(isset($_GET['reduce_acct'])){ ?>

            <?php require 'reduce_acctPenalty.php';?>

          <?php }else if(isset($_GET['log-out'])){ ?>

            <?php 

               session_destroy();
                // echo '<script>window.</script>';
                echo '<script>window.location="../../login.php"</script>';

            ?>

          <?php }else if(isset($_GET['news'])){?>

         	 <?php require 'news.php';?>

         <?php }else if(isset($_GET['Testimony'])){?>
         	
         	<?php require 'Testimony.php';?>

         <?php }else if(isset($_GET['expiring_deposits'])){?>
         	
         	<?php require 'expiring_deposits.php';?>

         <?php }else if(isset($_GET['dashboard'])){?>
         	
         	<?php require 'admin_dashboard.php';?>

         <?php } else if(isset($_GET['delete_user'])) { ?>

         	<?php require 'delete_user.php';?>
         	
         <?php } else { ?>

         	<?php require 'admin_dashboard.php';?>

         <?php } ?>




 <!-- <table width="100%" height="100%" border="0" cellpadding="10" cellspacing="0" class="forTexts"> 
 	<tr> 
 		<td width=100% height=100% valign=top>    
 			<h1>gekk</h1>

 			<div class="alert alert-warning"> 

						Welcome to the HYIP Manager Admin Area!<br> You can see help messages on almost all pages of the admin area in this part.<br> <br> You can see how many members are registered in the system on this page.<br> System supports 3 types of users:<br> <li>Active users. These users can login to the members area and receive earnings.</li> <li>Suspended users. These users can login to the members area but will not receive any earnings.</li> <li>Disabled users. These users can not login to the members area and will not receive any earnings.</li> <br> User becomes active when registering and only administrator can change status of any registered user. You can see how many users are active and disabled in the system at the top of this page. <br> <br> Investment packages:<br> You can create unlimited sets of investment packages with any settings and payout options. Also you can change status of any package. <li> Active package. All active users will receive earnings every pay period if made a deposit</li> <li> Inactive package. Users will not receive any earnings</li> <br><br> &quot;Total system earnings&quot; is a difference between funds came from payment processings and all the withdrawals you made. <br> <br> &quot;Total member&#39;s balance&quot; shows you how many funds can users withdraw from the system. It is the sum of all users&#39; earnings and bonuses minus penalties and withdrawals. <br> <br> &quot;Total member&#39;s deposit&quot; shows you how many funds have users ever deposited in your system. <br> <br> &quot;Current members&#39; deposit&quot; shows the overall users&#39; deposit. <br> <br> &quot;Total withdrawals&quot; shows you how many funds have you withdrawn to users&#39; accounts. <br> <br> &quot;Pending withdrawals&quot; shows you how many funds users have requested to withdraw. <br> <br> In/out stats shows you how many funds users have entered in your system and how many funds have you withdrawn today, this week, this month, this year and total. 

				</div>  



 			<br><br> 
				<div class="alert alert-warning"> 

						Welcome to the HYIP Manager Admin Area!<br> You can see help messages on almost all pages of the admin area in this part.<br> <br> You can see how many members are registered in the system on this page.<br> System supports 3 types of users:<br> <li>Active users. These users can login to the members area and receive earnings.</li> <li>Suspended users. These users can login to the members area but will not receive any earnings.</li> <li>Disabled users. These users can not login to the members area and will not receive any earnings.</li> <br> User becomes active when registering and only administrator can change status of any registered user. You can see how many users are active and disabled in the system at the top of this page. <br> <br> Investment packages:<br> You can create unlimited sets of investment packages with any settings and payout options. Also you can change status of any package. <li> Active package. All active users will receive earnings every pay period if made a deposit</li> <li> Inactive package. Users will not receive any earnings</li> <br><br> &quot;Total system earnings&quot; is a difference between funds came from payment processings and all the withdrawals you made. <br> <br> &quot;Total member&#39;s balance&quot; shows you how many funds can users withdraw from the system. It is the sum of all users&#39; earnings and bonuses minus penalties and withdrawals. <br> <br> &quot;Total member&#39;s deposit&quot; shows you how many funds have users ever deposited in your system. <br> <br> &quot;Current members&#39; deposit&quot; shows the overall users&#39; deposit. <br> <br> &quot;Total withdrawals&quot; shows you how many funds have you withdrawn to users&#39; accounts. <br> <br> &quot;Pending withdrawals&quot; shows you how many funds users have requested to withdraw. <br> <br> In/out stats shows you how many funds users have entered in your system and how many funds have you withdrawn today, this week, this month, this year and total. 

				</div>  
		</td> 
	</tr> 
</table>  -->


<!-- Main: END --> 











 </td> 
</tr> 
	</table> 
	</td> </tr> </table> </td> </tr> <tr> <td height="19" bgcolor="ff8d00"><div align="center" class="forCopyright">Powered by Acorntrade.
 </div>
</td> 
</tr> 
</table> </center></body> </html> <!--Page generated 1.0407 sec. -->
<!--Memory: 46 M. -->