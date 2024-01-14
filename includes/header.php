<?php if($_SESSION['login'])
{?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
			<li class="prnt"><a href="profile.php">My Profile</a></li>
				<li class="prnt"><a href="change-password.php">Change Password</a></li>
			<li class="prnt"><a href="tour-history.php"> Reservation History</a></li>
			<li class="prnt"><a href="issuetickets.php">Tickets</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Welcome :</li>				
			<li class="sig"><?php echo htmlentities($_SESSION['login']);?></li> 
			<li class="sigi"><a href="logout.php" >/ Logout</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div><?php } else {?>
<div style="background-color: #3c2f2f; border-bottom: 0 none; height: 50px; line-height: 40px;">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
				<li class="hm"><a href="admin/index.php">Admin Login</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 			
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a></li> 
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Sign In</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div>
<?php }?>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php"><span></span></a>	
		</div>
	
		<!-- <div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			<li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">SAFE &amp;  </div></li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div> -->
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div style="background: #be9b7b; padding: 0.5em 0; text-align: right;">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" style="background: #be9b7b; padding: 0.5em 0; text-align: right;">
    <nav class="cl-effect-1">
        <ul class="nav navbar-nav">
            <li><a href="index.php" style="color: white; text-decoration: none; padding: 10px; transition: background-color 0.3s;">Home</a></li>
            <li><a href="page.php?type=aboutus" style="color: white; text-decoration: none; padding: 10px; transition: background-color 0.3s;">About</a></li>
            <li><a href="package-list.php" style="color: white; text-decoration: none; padding: 10px; transition: background-color 0.3s;">Pastry Packages</a></li>
            <li><a href="page.php?type=privacy" style="color: white; text-decoration: none; padding: 10px; transition: background-color 0.3s;">Privacy Policy</a></li>
            <li><a href="page.php?type=terms" style="color: white; text-decoration: none; padding: 10px; transition: background-color 0.3s;">Terms of Use</a></li>
            <li><a href="page.php?type=contact" style="color: white; text-decoration: none; padding: 10px; transition: background-color 0.3s;">Contact Us</a></li>
            <?php if ($_SESSION['login']) { ?>
                <li><a href="#" data-toggle="modal" data-target="#myModal3" style="color: white; text-decoration: none; padding: 10px; transition: background-color 0.3s;">Need Help? / Write Us</a></li>
            <?php } else { ?>
                <li><a href="enquiry.php" style="color: white; text-decoration: none; padding: 10px; transition: background-color 0.3s;">Inquiry</a></li>
            <?php } ?>
        </ul>
    </nav>
</div><!-- /.navbar-collapse -->


			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>