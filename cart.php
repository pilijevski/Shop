<?php include 'inc/header.php';?>

<?php 
if( $_SERVER['REQUEST_METHOD'] == 'POST')
{
	$cartId      = $_POST['cartId'];
	$quantity    = $_POST['quantity'];
	$updateCart  = $ct->updateCart($cartId,$quantity);
	if($quantity<=0)
	{
		$delProduct = $ct->delProductByCart($cartId);
	}
}

if(isset($_GET['delPro']))
{
	 $delId =$_GET['delPro'];
	 
	 $delProduct = $ct->delProductByCart($delId);
} 
?>
<div class="main">
   <div class="content">
	   <div class="cartoption">		
		   <div class="cartpage">
		   <?php 
						$checkData = $ct->checkCartTable();
						if(!$checkData)
						{ echo "<h1 style='color:red;font-size:30px; font-weight:bold;'>Your cart is empty!</h1>";
						}
						else
						{
						?>
				   <h2>Your Cart</h2>
				   <?php
				   if (isset($updateCart))
				   {
					   echo $updateCart;
				   }
				   if (isset($delProduct))
				   {
					  echo $delProduct;
					  echo $delId;
				   }
				   ?>
					   <table class="tblone">
						   <tr>
							   <th width="5%">No.</th>
							   <th width="30%">Product Name</th>
							   <th width="10%">Image</th>
							   <th width="15%">Price</th>
							   <th width="15%">Quantity</th>
							   <th width="15%">Total Price</th>
							   <th width="10%">Action</th>
						   </tr>
						   <?php 
						   $getPro= $ct->getCartProduct();
						   $sum=0;
						   $sumqt=0;
						   if($getPro)
						   { $i=0;
							
						   while($result = $getPro->fetch_assoc())
						   { $i++;
								$sum+=$result['price']*$result['quantity'];
								$sumqt+=$result['quantity'];
								
						   ?>
						   <tr>
							   <td><?php echo $i;?></td>
							   <td><?php echo $result['productName'];?></td>
							   <td><img src="admin/<?php echo $result['image'];?>" alt=""/></td>
							   <td>$<?php echo $result['price'];?></td>
							   <td>
								   <form action="" method="post">
								   <input type="hidden" name="cartId" value="<?php echo $result['cartId'];?>"/>
									   <input type="number" name="quantity" value="<?php echo $result['quantity'];?>"/>
									   <input type="submit" name="submit" value="Update"/>
								   </form>
							   </td>
							   <td>$ <?php echo $result['price']*$result['quantity'];?></td>
							   <td><a onclick="return confirm('Are you sure you want to delete?')" href="?delPro=<?php echo $result['cartId'];?>">X</a></td>
						   </tr>
						   <?php	
								Session::set("items",$sumqt); }}?>
						</table>
						<?php 
						$checkData = $ct->checkCartTable();
						if($checkData)
						{
						?>
						<table style="float:right;text-align:left;" width="40%">
							<tr>
								<th>Sub Total : </th>
								<td>$ <?php 
							 
								echo $sum ?></td>
							</tr>
							<tr>
								<th>Tax : </th>
								<td>18%</td>
							</tr>
							<tr>
								<th>Grand Total :</th>
								<td><b>$ <?php $total = $sum + $sum*0.18;
								echo $total;?></b> </td>
							</tr>
					   </table>
						<?php }} ?>
					</div>
					<div class="shopping">
						<div class="shopleft">
							<a href="index.php"> <img src="images/shop.png" alt="" /></a>
						</div>
						<div class="shopright">
							<a href="login.php"> <img src="images/check.png" alt="" /></a>
						</div>
					</div>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
</div>
<?php include 'inc/footer.php'; ?>
</body>
</html>
