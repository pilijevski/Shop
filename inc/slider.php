<div class="header_bottom">
	<div class="header_bottom_left">
		
	<div class="heading">
    		<h3>NEWEST FROM BRANDS</h3>
    		</div>
    		<div class="clear"></div>
		<div class="section group">
			<?php
			//style="color:#70389C; text-align:center;text-shadow: 1px 1px grey;font-size:30px;"
			$iphone  = $pd->getLatestIphone()->fetch_assoc();
			$samsung = $pd->getLatestSamsung()->fetch_assoc();
			$acer    = $pd->getLatestAcer()->fetch_assoc();
			$canon   = $pd->getLatestCanon()->fetch_assoc();
						?>
			<div class="listview_1_of_2 images_1_of_2">
				<div class="listimg listimg_2_of_1">
					 <a href="preview.php?proid=<?php echo $iphone['productId'];?>"> <img src="admin/<?php echo $iphone['image'];?>" alt="" /></a>
				</div>
					<div class="text list_2_of_1">
					<h2 style="text-shadow: 1px 1px grey;">Iphone</h2>
					<h3 style=" padding:5px; font-weight:bold;"> $<?php echo $iphone['price'];?></h3>
					<div class="button"><span><a href="preview.php?proid=<?php echo $iphone['productId'];?>">Add to cart</a></span></div>
					</div>
			 </div>			
			<div class="listview_1_of_2 images_1_of_2">
				<div class="listimg listimg_2_of_1">
				<a href="preview.php?proid=<?php echo $samsung['productId'];?>"> <img src="admin/<?php echo $samsung['image'];?>" alt="" /></a>

				</div>
				<div class="text list_2_of_1">
						<h2 style="text-shadow: 1px 1px grey;">Samsung</h2>
						<h3 style=" padding:5px; font-weight:bold;"> $<?php echo $samsung['price'];?></h3>
						<div class="button"><span><a href="preview.php?proid=<?php echo $samsung['productId'];?>">Add to cart</a></span></div>
						
				</div>
			</div>
		</div>
		<div class="section group">
			<div class="listview_1_of_2 images_1_of_2">
				<div class="listimg listimg_2_of_1">
				<a href="preview.php?proid=<?php echo $acer['productId'];?>"> <img src="admin/<?php echo $acer['image'];?>" alt="" /></a>

				</div>
					<div class="text list_2_of_1">
					<h2 style="text-shadow: 1px 1px grey;">Acer</h2>
					<h3 style=" padding:5px; font-weight:bold;"> $<?php echo $acer['price'];?></h3>
					<div class="button"><span><a href="preview.php?proid=<?php echo $acer['productId'];?>">Add to cart</a></span></div>

				 </div>
			 </div>			
			<div class="listview_1_of_2 images_1_of_2">
				<div class="listimg listimg_2_of_1">
				<a href="preview.php?proid=<?php echo $canon['productId'];?>"> <img src="admin/<?php echo $canon['image'];?>" alt="" /></a>

				</div>
				<div class="text list_2_of_1">
						<h2 style="text-shadow: 1px 1px grey;">Canon</h2>
						<h3 style=" padding:5px; font-weight:bold;"> $<?php echo $canon['price'];?></h3>
						<div class="button"><span><a href="preview.php?proid=<?php echo $canon['productId'];?>">Add to cart</a></span></div>

				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
		 <div class="header_bottom_right_images">
		 <!-- FlexSlider -->
					 
		<section class="slider">
				<div class="flexslider">
				<ul class="slides">
					<li><img src="images/slider1.jpg" alt=""/></li>
					<li><img src="images/slider2.jpg" alt=""/></li>
					<li><img src="images/slider3.jpg" alt=""/></li>
					<li><img src="images/slider5s.jpg" alt=""/></li>
					</ul>
				</div>
			</section>
<!-- FlexSlider -->
		</div>
	<div class="clear"></div>
</div>	