<?php 
	include_once("includes/header.php"); 
	include_once("includes/db_connect.php"); 
	$SQL="SELECT * FROM `user`, `city` WHERE city_id = user_city AND user_level_id = 3";
	if($_REQUEST['area']) {
		$SQL="SELECT * FROM `user`, `city` WHERE city_id = user_city AND user_level_id = 3 AND (user_add1 LIKE '%".$_REQUEST['area']."%' OR city_name LIKE '%".$_REQUEST['area']."%')";
	}
	$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
?>
<script>
function delete_user(user_id)
{
	if(confirm("Do you want to delete the user?"))
	{
		this.document.frm_user.user_id.value=user_id;
		this.document.frm_user.act.value="delete_user";
		this.document.frm_user.submit();
	}
}
jQuery(document).ready(function() {
	jQuery('#mydatatable').DataTable();
});
</script>
<style>
.static table {
	width:280px !important; 
	float:left;
}
</style>
<div class="crumb">
    </div>
    <div class="clear"></div>
	<form name="frm_user" action="tutor-listing.php" method="post">
	<div id="content_sec">
		<div class="col1" style="width:100%">
		<div class="contact">
			<h4 class="heading colr">All Registered Tutors</h4>
			<div class="contact" style="border:1px solid #000000; margin-bottom:20px;">
				<table width="50%">
					<tr height="40px;">
						<th>Search Your Tutor :</th>
						<th>
							<input type="text" placeholder="Enter Area Name" class="search_text" name="area" style="padding:6px; width:200px"> 
							<input type="Submit" value="Search User"  class="simplebtn">
						</th>
					</tr>
				</table>
			</div>
			<?php
			if($_REQUEST['msg']) { 
			?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
			<?php
			}
			?>
				<div class="static">
					<?php 
					$sr_no=1;
					while($data = mysqli_fetch_assoc($rs))
					{
					?>
					<table>
					<tr>
						<td><a href="tutor-details.php?user_id=<?php echo $data[user_id] ?>"><img src="<?=$SERVER_PATH.'uploads/'.$data[user_image]?>" style="height:170px; width:150px"></a></td>
						<td style="vertical-align:top">
							<table border="0">
								<tr>
									<td class="tdheading">Name</th>
									<td><?=$data[user_name]?></td>
								</tr>
								<tr>
									<td class="tdheading">Email</th>
									<td><?=$data[user_email]?></td>
								</tr>
								<tr>
									<td class="tdheading">Contact Number</th>
									<td><?=$data[user_mobile]?></td>
								</tr>
								<tr>
									<td class="tdheading">City</th>
									<td><?=$data[city_name]?></td>
								</tr>
								<tr>
									<td class="tdheading">Address</th>
									<td><?=$data[user_add1]?></td>
								</tr>
								<tr>
									<td colspan="2" style="text-align:center; padding:12px;">
										<a href="tutor-details.php?user_id=<?php echo $data[user_id] ?>" class="button-link">View Details</a>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					</table>
					<?php } ?>					
				</div>
				<input type="hidden" name="act" />
				<input type="hidden" name="user_id" />
			
		</div>
		</div>
	</div>
	</form>
<?php include_once("includes/footer.php"); ?> 
