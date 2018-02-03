<?php include 'inc/header.php'; ?>
<?php
$login = Session::get("usrLogin");
if($login == false)
  header("Location:login.php");
  ?>
  <style> .division{width:48%; float:left;}</style>
<div class="main">
  <div class="content" style="margin-top:0px;padding-top:2px;">
   
       <div class="order">
           <h2>Order Page</h2>
           <div class="division">
           <table class="tblone">
						   <tr>
							   <th>No.</th>
							   <th>Product Name</th>
							   <th>Price</th>
							   <th>Quantity</th>
							   <th>Total Price</th>
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
							   <td>$<?php echo $result['price'];?></td>
							   <td>
								  <?php echo $result['quantity'];?>
							   </td>
							   <td>$ <?php echo $result['price']*$result['quantity'];?></td>
						   </tr>
						   <?php	
								Session::set("items",$sumqt); }}?>
						</table>
						<?php 
						$checkData = $ct->checkCartTable();
						if($checkData)
						{
						?>
						<table class="tbltwo" >
							<tr>
								<td>Sub Total : </td>
								<td>$ <?php 
							 
								echo $sum ?></td>
							</tr>
							<tr>
								<td>Tax : </td>
								<td>18%</td>
							</tr>
							<tr>
								<td>Grand Total :</td>
								<td><b>$ <?php $total = $sum + $sum*0.18;
								echo $total;?></b> </td>
							</tr>
							
					   </table>
						<?php } ?>
           </div>
           <div class="division">
           <style>
      .tblone{width:99%;margin:0 auto; border:2px solid #ddd;}
      .tblone tr td{text-align:center;}
      .tbltwo {float:right;text-align:left; width:50%; border:2px solid #ddd;margin-right:14px;margin-top:12px;}
      .tbltwo tr td{text-align:justify; padding:5px 10px;}
      .orderbtn a {width:200px;display:block;margin:20px auto 0;text-align:center;background:red;color:#ddd;display:block;font-size:25px;border-radius:3px;padding:5px;}
      </style>
    <div class="section group">   
        <?php $id=Session::get("usrId");
                $getData = $user->getUserData($id);
                if($getData)
                {
                    while($result = $getData->fetch_assoc())
                    { 
                                ?>
        <table  class="tblone" width="40%">
        <tr>
            <td colspan="3"><h2>Ship to:</h2></td>
            </tr>
        <tr>
            <td width="10%">Name</td>
            <td width="2%">:</td>
            <td><?php echo $result['name'];?></td>
            </tr>
            <tr>
            <td width="10%">Address</td>
            <td width="2%">:</td>
            <td><?php echo $result['address'];?></td>
            </tr>
            <tr>
            <td width="10%">City</td>
            <td width="2%">:</td>
            <td><?php echo $result['city'];?></td>
            </tr>
            <tr>
            <td width="10%">Country</td>
            <td width="2%">:</td>
            <td><?php echo $result['country'];?></td>
            </tr>
            <tr>
            <td width="20%">Zip-code</td>
            <td width="2%">:</td>
            <td><?php echo $result['zip'];?></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><a href="editprofile.php">Change Address</a></td>
            </tr>           
        </table>
        <?php }}?>
    </div>
           </div>
       </div>
      
    
    <div class="clear"></div>

  <div class="orderbtn"><a href="success.php">Place Order</a></div>
                    </div>
</div>
</div>
<?php include 'inc/footer.php';?>