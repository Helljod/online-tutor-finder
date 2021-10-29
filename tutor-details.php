<?php 
	include_once("includes/header.php"); 

	if($_REQUEST[user_id])
	{
		$SQL="SELECT * FROM `user`, `city`, `state` WHERE user_city = city_id AND user_state = state_id AND user_id = ".$_REQUEST[user_id];
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}

	$SQL="SELECT * FROM `user`, `course` WHERE course_tutor_id = user_id AND user_id = ".$_REQUEST[user_id];
	$user_rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
?> 
<script>
function goToPage(user_id, user_cost)
{
	location.href = "lib/cart.php?act=save_item&user_id="+user_id+"&cost="+user_cost;
}
</script>
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1">
			<div class="contact">
				<h4 class="heading colr"><?=$data[user_name]?> Details</h4>
				<?php
				if($_REQUEST['msg']) { 
				?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
				<?php
				}
				?>
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
							<th>City</th>
							<td><?=$data[city_name]?></td>
						</tr>
						<tr>
							<th>State</th>
							<td><?=$data[state_name]?></td>
						</tr>
					</table>
			</div><br><br>
			<h4 class="heading colr">All Course Teach By Tutor</h4>
			<div class="static">
			<table>
					<?php 
					$sr_no=1;
					while($user_data = mysqli_fetch_assoc($user_rs))
					{
					?>
					<tr>
						<td><a href="user-details.php?user_id=<?php echo $user_data[user_id] ?>"><img src="<?=$SERVER_PATH.'uploads/'.$user_data[course_image]?>" style="height:170px; width:150px"></a></td>
						<td style="vertical-align:top">
						<table border="0">
								<tr>
									<td class="tdheading">Tutor Name</th>
									<td><?=$user_data[user_name]?></td>
								</tr>
								<tr>
									<td class="tdheading">Course Name</th>
									<td><?=$user_data[course_name]?></td>
								</tr>
								<tr>
									<td class="tdheading">Total Experience</th>
									<td><?=$user_data[course_experience]?></td>
								</tr>
								<tr>
									<td class="tdheading">Duration</th>
									<td><?=$user_data[course_duration]?></td>
								</tr>
								<tr>
									<td class="tdheading">Fees</th>
									<td><?=$user_data[course_fees]?></td>
								</tr>
								<tr>
									<td colspan="2" style="text-align:center; padding:12px;">
										<a href="appointment.php?course_id=<?=$user_data[course_id]?>" class="button-link">Book Appointment</a>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<?php } ?>
					</table>
			</div>
			</div>
		</div>
		<div class="col2">
			<h4 class="heading colr">Tutor <?=$data['user_name']?></h4>
			<div><img src="<?=$SERVER_PATH.'uploads/'.$data[user_image]?>" style="width: 250px"></div><br>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
