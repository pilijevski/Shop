<!DOCTYPE HTML>
<?php  include 'inc/header.php' ;?>
<?php include 'inc/slider.php'; 
 $imgpath32 = realpath(NULL)."/admin"."/";
 $imgpath = realpath($imgpath32);

?>



 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Feature Products
				<?php ?>
			</h3>
    		</div>
    		<div class="clear"></div>	
    	</div>
	      <div class="section group">
			  <?php 
			  $getFpd = $pd->getFeaturedProduct();
			  if($getFpd)
			  	{
					  while($result = $getFpd->fetch_assoc())
					  {
						 
			  ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="<?php echo $imgpath;?>"><img src="admin/<?php echo $result['image'];?>" alt="<?php echo $imgpath;?>" /></a>
					 <h2 style="font-size:18px; text-shadow: 1px 0px grey;"><?php echo $result['productName'];?> </h2>
					 <p><?php echo $result['body'];?> </p>
					 <p style="font-size:18px; text-shadow: 1px 0px grey;"><span class="price">$<?php echo $result['price'];?> </span></p>
				     <div class="button"><span><a href="preview.php?proid=<?php echo $result['productId'];?>" class="details">Details</a></span></div>
				</div>
					  <?php }}?>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<?php 
				 $getNpd = $pd->getNewProduct();
				 if($getNpd)
					{
						while($nresult = $getNpd->fetch_assoc())
					{
							
				?>
				<div class="grid_1_of_4 images_1_of_4">
				<a href="<?php echo $imgpath;?>"><img src="admin/<?php echo $nresult['image'];?>" alt="<?php echo $imgpath;?>" /></a>
				<h2 style="font-size:18px;  text-shadow: 1px 1px grey;"><?php echo $nresult['productName'];?> </h2>
				<p><?php echo $nresult['body'];?> </p>
				<p style="font-size:18px; text-shadow: 1px 0px grey;"><span class="price">$<?php echo $nresult['price'];?> </span></p>
				<div class="button"><span><a href="preview.php?proid=<?php echo $nresult['productId'];?>" class="details">Details</a></span></div>
		   </div>
					<?php }}?>
			</div>
    </div>
 </div>
</div>
<?php include 'inc/footer.php'; ?>
</body>
</html>
