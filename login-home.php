<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[car_id])
	{
		$SQL="SELECT * FROM car WHERE car_id = $_REQUEST[car_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}
?> 
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1">
			<div class="contact">
					<h4 class="heading colr">Welcome To Online Tutor Portal - Customer Portal</h4>
					<ul class='login-home-listing'>
						<?php if($_SESSION['user_details']['user_level_id'] == 2) {?>
							<li><a href="./index.php">Home</a>
							<li><a href="./about.php">About Project</a></li>
							<li><a href="./report-appointment.php">My Appointments</a></li>
							<li><a href="./user.php?user_id=<?=$_SESSION['user_details']['user_id']?>">My Account</a></li>
							<li><a href="./change-password.php">Change Password</a></li>
							<li><a href="./lib/login.php?act=logout">Logout</a></li>
						<?php } ?>
						<?php if($_SESSION['user_details']['user_level_id'] == 3) {?>
							<li><a href="./index.php">Home</a>
							<li><a href="./about.php">About Project</a></li>
							<li><a href="./course.php">Add Course</a></li>
							<li><a href="./course-report.php">My Courses</a></li>
							<li><a href="./report-appointment.php">My Appointments</a></li>
							<li><a href="./user.php?user_id=<?=$_SESSION['user_details']['user_id']?>">My Account</a></li>
							<li><a href="./change-password.php">Change Password</a></li>
							<li><a href="./lib/login.php?act=logout">Logout</a></li>
						<?php } ?>
					</ul>
			</div>
		</div>
		<div class="col2">
			<?php include_once("includes/sidebar.php"); ?> 
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 

