<?php  include 'inc/header.php' ;?>
 <div class="main">
    <div class="content">
    	<div class="content_top">
			<?php 
			if(!isset($_GET['catid']) || $_GET['catid']==NULL)
			{
				echo "<script>window.location = '404.php';</script>";
			}
			else
		   {
			   $id =$_GET['catid'];
		   }
			 $getPro = $pd->getProductByCatId($id);
			 $getcat = $cat->getCatById($id)->fetch_assoc();
			// $fetched = $getPro->fetch_assoc();
			
			
			?>
    		<div class="heading">
    		<h3><?php echo $getcat['catName'];?></h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
			  <?php
			   if($getPro)
			   {
			   while($result = $getPro->fetch_assoc())
			   {
			   ?>
				<div class="grid_1_of_4 images_1_of_4 " style="margin-left:0">
				<a href="preview.php?proid=<?php echo $result['productId'];?>"> <img src="admin/<?php echo $result['image'];?>" alt="" /></a>
				<h2 style="font-size:18px; text-shadow: 1px 0px grey;"><?php echo $result['productName'];?> </h2>
				<p><?php echo $result['body'];?> </p>
				<p style="font-size:18px; text-shadow: 1px 0px grey;"><span class="price">$<?php echo $result['price'];?> </span></p>
				<div class="button"><span><a href="preview.php?proid=<?php echo $result['productId'];?>" class="details">Details</a></span></div>
		   </div>
				
			   <?php }}?>
				
			</div>

	
	
    </div>
 </div>
</div>
<?php include 'inc/footer.php'; ?>
</body>
</html>

