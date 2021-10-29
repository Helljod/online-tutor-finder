<?php
	include_once("../includes/db_connect.php");
	include_once("../includes/functions.php");
	if($_REQUEST[act]=="save_appointment")
	{
		save_appointment();
		exit;
	}
	if($_REQUEST[act]=="delete_appointment")
	{
		delete_appointment();
		exit;
	}
	
	###Code for save appointment#####
	function save_appointment()
	{
		global $con;
		$R=$_REQUEST;				
		if($R[appointment_id])
		{
			$statement = "UPDATE `appointment` SET";
			$cond = "WHERE `appointment_id` = '$R[appointment_id]'";
			$msg = "Data Updated Successfully.";
		}
		else
		{
			$statement = "INSERT INTO `appointment` SET";
			$cond = "";
			$msg="Data saved successfully.";
		}
		$SQL=   $statement." 
					`appointment_course_id` = '$R[course_id]', 
					`appointment_user_id` = '".$_SESSION['user_details']['user_id']."', 
					`appointment_date` = '$R[appointment_date]'
					".
				 $cond;
		$rs = mysqli_query($con,$SQL) or die(mysqli_error($con));
		header("Location:../report-appointment.php?msg=$msg");
	}
#########Function for delete appointment##########3
function delete_appointment()
{	
	global $con;
	/////////Delete the record//////////
	$SQL="DELETE FROM appointment WHERE appointment_id = $_REQUEST[appointment_id]";
	mysqli_query($con,$SQL) or die(mysqli_error($con));
	header("Location:../report-appointment.php?msg=Deleted Successfully.");
}
?>
