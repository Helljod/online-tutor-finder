<?php 
	include_once("includes/header.php"); 
	if($_SESSION['login'] != 1) {
		header("location:login.php?msg=Login to book appointment with tutor.");
		exit;
	}
	if($_REQUEST[course_id])
	{
		$SQL="SELECT * FROM course, user WHERE course_tutor_id = user_id AND course_id = $_REQUEST[course_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}
?> 
<script>

jQuery(function() {
	jQuery( "#user_dob" ).datepicker({
	  changeMonth: true,
	  changeYear: true,
	   yearRange: "-0:+1",
	   dateFormat: 'd MM,yy'
	});
});
</script>
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1">
			<div class="contact">
				<h4 class="heading colr"><?=$heading?>Book Appointment for <span style="color:#FF0000; text-decoration:underline"><?=$data['course_name']?></span> with  <span style="color:#155638; text-decoration:underline"><?=$data['user_name']?></span></h4>
				<?php
				if($_REQUEST['msg']) { 
				?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
				<?php
				}
				?>
				<form action="lib/appointment.php" enctype="multipart/form-data" method="post" name="frm_course">
				<div id="myrow">
					<table>
						<tr>
							<th>Tutor ID</th>
							<td><?=$data[user_id]?></td>
						</tr>
						<tr>
							<th>Tutor Name</th>
							<td><?=$data[user_name]?></td>
						</tr>
						<tr>
							<th>Course Name</th>
							<td><?=$data[course_name]?></td>
						</tr>
						<tr>
							<th>Tutor Contact</th>
							<td><?=$data[user_mobile]?></td>
						</tr>
						<tr>
							<th>Tutor Email</th>
							<td><?=$data[user_name]?></td>
						</tr>
						<tr>
							<th>Address</th>
							<td><?=$data[user_add1]?> <?=$data[user_add2]?></td>
						</tr>
						<tr>
							<th>Appointment Date</th>
							<td><input name="appointment_date" placeholder="Select Date" name="user_dob" id="user_dob" type="text" class="bar" required style="padding:5px 20px; border: 1px solid #FF0000; width: 200px"/></td>
						</tr>
						
					</table>
					</div>
					<input type="hidden" name="act" value="save_appointment">
					<input type="hidden" name="course_id" value="<?=$data[course_id]?>">
					<div style="text-align:right; margin-top: 33px;">
						<input type="submit" value="Book Appointment" class="button-link">
					</div>
					<br><br><br>
				</form>
			</div>
		</div>
		<div class="col2">
			<?php include_once("includes/sidebar.php"); ?> 
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
