<?php 
	include_once("includes/header.php"); 
	if($_SESSION['user_details']['user_level_id'] == 3) {
		if($_REQUEST[appointment_id]) {
			$SQL="SELECT * FROM `user`, `course`, `appointment` WHERE appointment_course_id = course_id AND user_id = appointment_user_id AND appointment_id = ".$_REQUEST[appointment_id];
			$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
			$data=mysqli_fetch_assoc($rs);
		}
	}
	if($_SESSION['user_details']['user_level_id'] == 2) {
		if($_REQUEST[appointment_id]) {
			$SQL="SELECT * FROM `user`, `course`, `appointment` WHERE  appointment_course_id = course_id AND user_id = course_tutor_id AND course_id = appointment_course_id AND appointment_id = ".$_REQUEST[appointment_id];
			$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
			$data=mysqli_fetch_assoc($rs);
		}
	}
	print $SQL;
?>
<style>
th {
	height:30px;
	background-color:#666666;
	color:#FFFFFF;
}
</style>
 <div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1">
			<div class="static">
				<h4 class="heading colr">Appointment Confirmation</h4>
			  <div class="form-group" style="color:#000000; font-size:20px">
				  Dear <?=$_SESSION['user_details']['user_name']?>,<br>
				  This is the confirmation of the your appointment #<?=$data['appointment_id']?> has been successfully placed on date <?=$data['appointment_date']?>.<br><br>
			  </div>
			  <div id="myrow">
				<table>
						<tr>
							<th>Course ID</th>
							<td><?=$data[course_id]?></td>
						</tr>
						<tr>
							<th>Course Name</th>
							<td><?=$data[course_name]?></td>
						</tr>
						<tr>
							<th>Course Duration</th>
							<td><?=$data[course_duration]?></td>
						</tr>
						<tr>
							<th>Course Fees</th>
							<td><?=$data[course_fees]?></td>
						</tr>
						<tr>
							<th>Appointment Date</th>
							<td><?=$data[appointment_date]?></td>
						</tr>
						<tr>
							<th>Appointment Name</th>
							<td><?=$data[user_name]?></td>
						</tr>
						<tr>
							<th>Contact</th>
							<td><?=$data[user_mobile]?></td>
						</tr>
						<tr>
							<th>Email</th>
							<td><?=$data[user_email]?></td>
						</tr>
					</table>
				</div>
			</form>
			</div>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
