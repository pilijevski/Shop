<?php include 'inc/header.php'; ?>

 <div class="main">
    <div class="content">
		
    	<div class="content_top">
    		<div class="heading">
    		<h3>Acer</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
		  <?php 
			  $getAcer = $pd->getLatestAcer();
			  if($getAcer)
			  	{
					  while($result = $getAcer->fetch_assoc())
					  {
						  ?>
				
				<div class="grid_1_of_4 images_1_of_4">
				<a href="preview.php?proid=<?php echo $result['productId'];?>"><img src="admin/<?php echo $result['image'];?>" alt="" /></a>
				<h2><?php echo $result['productName'];?> </h2>
				<p><?php echo $result['body'];?> </p>
				<p><span class="price">$<?php echo $result['price'];?> </span></p>
				<div class="button"><span><a href="preview.php?proid=<?php echo $result['productId'];?>" class="details">Details</a></span></div>
		   </div>
				<?php }}?>
				
			</div>
		<div class="content_bottom">
    		<div class="heading">
    		<h3>Samsung</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
			<?php 
			$getSamsung = $pd->getLatestSamsung();
			if($getAcer)
				{
					while($result = $getSamsung->fetch_assoc())
					{
						?>
			  
			  <div class="grid_1_of_4 images_1_of_4">
			  <a href="preview.php?proid=<?php echo $result['productId'];?>"><img src="admin/<?php echo $result['image'];?>" alt="" /></a>
			  <h2><?php echo $result['productName'];?> </h2>
			  <p><?php echo $result['body'];?> </p>
			  <p><span class="price">$<?php echo $result['price'];?> </span></p>
			  <div class="button"><span><a href="preview.php?proid=<?php echo $result['productId'];?>" class="details">Details</a></span></div>
		 </div>
			  <?php }}?>
			</div>
	<div class="content_bottom">
    		<div class="heading">
    		<h3>Canon</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
			<?php 
			$getCanon = $pd->getLatestCanon();
			if($getAcer)
				{
					while($result = $getCanon->fetch_assoc())
					{
						?>
			  
			  <div class="grid_1_of_4 images_1_of_4">
			  <a href="preview.php?proid=<?php echo $result['productId'];?>"><img src="admin/<?php echo $result['image'];?>" alt="" /></a>
			  <h2><?php echo $result['productName'];?> </h2>
			  <p><?php echo $result['body'];?> </p>
			  <p><span class="price">$<?php echo $result['price'];?> </span></p>
			  <div class="button"><span><a href="preview.php?proid=<?php echo $result['productId'];?>" class="details">Details</a></span></div>
		 </div>
			  <?php }}?>
				</div>
			</div>
    </div>
 </div>
</div>
<?php include 'inc/footer.php'; ?>
</body>
</html>

