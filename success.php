<?php include 'inc/header.php';?>
<style>
    .order {text-align:center;color:green;font-weight:bold;font-size:30px;padding:25px;margin:15px 0 auto;}
</style>
<div class="main">
   <div class="content">
	   <div class="cartoption">		
		   <div class="cartpage">
		   <h1 class="order">Your order has been placed successfully.</h1>
        </div>  
        <?php $delCt= $ct-> delCustomerCart();
            
        ?>
        <div class="shopping">
						<div class="shopleft">
							<a style="display:block;margin-right:auto;
    margin-left:auto;text-align:center;" href="index.php"> <img src="images/shop.png" alt="" /></a>
						</div>
					</div>	
       <div class="clear"></div>
    </div>
 </div>
</div>
<?php include 'inc/footer.php'; ?>
</body>
</html>

