<?php 
include_once("includes/header.php"); 
include_once("includes/db_connect.php"); 
global $SERVER_PATH;
?> 
	<div id="banner">
    	<div class="left">
        	<div class="anythingSlider">
        
          <div class="wrapper">
            <ul>
               <li><a href="#"><img src="./images/banner1.jpg" alt="" /></a></li>
               <li><a href="#"><img src="./images/banner1.jpg" alt="" /></a></li>
               <li><a href="#"><img src="./images/banner1.jpg" alt="" /></a></li>
            </ul>        
          </div>
          
        </div>
        </div>
    </div>
    <div class="clear"></div>
  <script type="text/javascript" src="./js/cont_slide.js"></script>
  <div id="content_sec">
     <div class="col1" style="width: 98%">
     <h4 class="heading colr">About Online Tutor Portal</h4>
				<div style="font-size:12px;">
				<p>Online tutoring is the process of tutoring in an online, virtual, or networked, environment, in which teachers and learners participate from separate physical locations. Online tutoring is practiced using many different approaches for distinct sets of users. The distinctions are in content and user interface, as well as in tutoring styles and tutor-training methodologies. Definitions associated with online tutoring vary widely, reflecting the ongoing evolution of the technology, the refinement and variation in online learning methodology, and the interactions of the organizations that deliver online tutoring services with the institutions, individuals, and learners that employ the services. This Internet-based service is a form of micropublishing.</p>
        <p>Tutoring may take the form of a group of learners simultaneously logged in online, then receiving instruction from a single tutor, also known as many-to-one tutoring and live online tutoring. This is often known as e-moderation, defined as the facilitation of the achievement of goals of independent learning, learner autonomy, self-reflection, knowledge construction, collaborative or group-based learning, online discussion, transformative learning and communities of practice.[1][2][3][4] These functions of moderation are based on constructivist or social-constructivist principles of learning.</p>
        </div>
		<h4 class="heading colr">Currently Registered Tutors</h4>
    <div class="static">
      <?php
        $SQL="SELECT * FROM `user` WHERE user_level_id = 3 ORDER BY user_id DESC LIMIT 0,5";
        $rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
      ?>
      <?php 
					$sr_no=1;
					while($data = mysqli_fetch_assoc($rs))
					{
					?>
					<div style="float:left; border:1px solid; margin:8px; padding:8px">
						<a href="tutor-details.php?user_id=<?php echo $data[user_id] ?>"><img src="<?=$SERVER_PATH.'uploads/'.$data[user_image]?>" style="height:180px; width:150px"></a><br>
						<div style="text-align:center; border-top:2px solid; padding: 5px 0px; font-weight:bold; font-size:14px;"><?=$data[user_name]?></div>
					</div>
					<?php } ?>
			</div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>
<?php include_once("includes/footer.php"); ?> 
