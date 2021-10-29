<?php 
	include_once("includes/header.php"); 

	if($_REQUEST[product_id])
	{
		$SQL="SELECT * FROM `product`, `company`, `type` WHERE product_type_id = type_id AND product_company_id = company_id AND product_id = ".$_REQUEST[product_id];
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}

	$SQL="SELECT * FROM `product`, `company`, `type` WHERE product_type_id = type_id AND product_company_id = company_id AND type_id = ".$data[type_id];
	$product_rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
?> 
<script>
function goToPage(product_id, product_cost)
{
	location.href = "lib/cart.php?act=save_item&product_id="+product_id+"&cost="+product_cost;
}
</script>
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1">
			<div class="contact">
				<h4 class="heading colr"><?=$data[product_name]?> Details</h4>
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
							<th>Book ID</th>
							<td><?=$data[product_id]?></td>
						</tr>
						<tr>
							<th>Book Name</th>
							<td><?=$data[product_name]?></td>
						</tr>
						<tr>
							<th>Book Type</th>
							<td><?=$data[type_name]?></td>
						</tr>
						<tr>
							<th>Book Name</th>
							<td><?=$data[product_name]?></td>
						</tr>
						<tr>
							<th>Book Category</th>
							<td><?=$data[company_name]?></td>
						</tr>
						<tr>
							<th>Book Price</th>
							<td><?=$data[product_price]?></td>
						</tr>
						<tr>
							<th>Book Description</th>
							<td><?=$data[product_description]?></td>
						</tr>
					</table>
					<div style="text-align:right; margin-top: 33px;">
						<a href="#" onClick="goToPage(<?=$data[product_id]?>,<?=$data[product_price]?>)" class="button-link">Add to Cart</a>
					</div>
			</div><br><br>
			<h4 class="heading colr">All Related Books</h4>
			<div class="static">
			<table>
					<?php 
					$sr_no=1;
					while($product_data = mysqli_fetch_assoc($product_rs))
					{
					?>
					<tr>
						<td><a href="product-details.php?product_id=<?php echo $product_data[product_id] ?>"><img src="<?=$SERVER_PATH.'uploads/'.$product_data[product_image]?>" style="height:170px; width:150px"></a></td>
						<td style="vertical-align:top">
						<table border="0">
								<tr>
									<td class="tdheading">Book ID</th>
									<td><?=$product_data[product_id]?></td>
								</tr>
								<tr>
									<td class="tdheading">Book Name</th>
									<td><?=$product_data[product_name]?></td>
								</tr>
								<tr>
									<td class="tdheading">Book Type</th>
									<td><?=$product_data[type_name]?></td>
								</tr>
								<tr>
									<td class="tdheading">Category</th>
									<td><?=$product_data[company_name]?></td>
								</tr>
								<tr>
									<td class="tdheading">Price</th>
									<td><?=$product_data[product_price]?></td>
								</tr>
								<tr>
									<td colspan="2" style="text-align:center; padding:12px;">
										<a href="product-details.php?product_id=<?php echo $product_data[product_id] ?>" class="button-link">View Details</a>
										<a href="#"  onClick="goToPage(<?=$data[product_id]?>,<?=$data[product_price]?>)" class="button-link">Add to Cart</a>
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
			<h4 class="heading colr">Book <?=$data['product_name']?></h4>
			<div><img src="<?=$SERVER_PATH.'uploads/'.$data[product_image]?>" style="width: 250px"></div><br>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
