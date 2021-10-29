<?php 
	include_once("includes/header.php"); 
	include_once("includes/db_connect.php"); 
	if($_SESSION['user_details']['user_level_id'] == 2) {
		$SQL="SELECT * FROM `appointment`, `course` WHERE appointment_course_id = course_id AND appointment_user_id = ".$_SESSION['user_details']['user_id'];
	}
	if($_SESSION['user_details']['user_level_id'] == 3) {
		$SQL="SELECT * FROM `appointment`, `course` WHERE appointment_course_id = course_id AND course_tutor_id = ".$_SESSION['user_details']['user_id'];
	}
	$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
?>
<script>
function delete_appointment(appointment_id)
{
	if(confirm("Do you want to delete the appointment?"))
	{
		this.document.frm_appointment.appointment_id.value=appointment_id;
		this.document.frm_appointment.act.value="delete_appointment";
		this.document.frm_appointment.submit();
	}
}
jQuery(document).ready(function() {
	jQuery('#mydatatable').DataTable();
});
</script>
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1" style="width:100%">
		<div class="contact">
			<h4 class="heading colr">Your All Appointments</h4>
			<?php
			if($_REQUEST['msg']) { 
			?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
			<?php
			}
			?>
			<form name="frm_appointment" action="lib/appointment.php" method="post">
				<div class="static">
				<table class="table table-striped table-advance table-hover" id="mydatatable" style="color:#000000; width:100%" width="100%">
					<thead>
						<tr class="tablehead bold">
						<td scope="col">ID</td>
						<td scope="col">Course Name</td>
						<td scope="col">Date</td>
						<td scope="col">Action</td>
						</tr>
					</thead>
					<tbody>
					<?php 
					$sr_no=1;
					while($data = mysqli_fetch_assoc($rs))
					{
					?>
					  <tr>
						<td><?=$data[appointment_id]?></td>
						<td><?=$data[course_name]?></td>
						<td><?=$data[appointment_date]?></td>
						<td style="text-align:center">
							<a style="color:#FF0000; font-weight:bold; text-decoration:underline" href="appointment-confirmation.php?appointment_id=<?php echo $data[appointment_id] ?>">View Details</a>
						</td>
						</td>
					  </tr>
					<?php } ?>
					</tbody>
					</table>
				</div>
				<input type="hidden" name="act" />
				<input type="hidden" name="appointment_id" />
			</form>
		</div>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
