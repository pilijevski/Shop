<?php include 'inc/header.php'; ?>
<?php
$login = Session::get("usrLogin");
if($login == false)
  header("Location:login.php");
  if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
  {
      $id = Session::get("usrId");
      $edituser = $user->editUser($_POST,$id);	
  }
  ?>
<div class="main">
  <div class="content">
      <style>
      .tblone{width:550px;margin:0 auto; border:2px solid #ddd;}
      .tblone tr td{text-allign:center;}
      .tblone input[type='text']{width:400px;padding:5px;font-size:15px;}</style>
    <div class="section group">   
        <?php $id=Session::get("usrId");
                $getData = $user->getUserData($id);
                if($getData)
                {
                    while($result = $getData->fetch_assoc())
                    { 
                                ?>
        <form method="post" action=""> 
        <table  class="tblone">
            <?php if(isset($edituser))  
            echo "<tr><td colspan='2'><h2>".$edituser."</h2></td></tr>"?>
        <tr>
            <td colspan="2"><h2>Update profile</h2></td>
        </tr>  
        <tr>
            <td width="20%">Name</td> 
            <td><input type="text" name="name" value="<?php echo $result['name'];?>"></td>
            </tr>
            <tr>
            <td width="20%">Address</td>
            <td><input type="text" name="address" value="<?php echo $result['address'];?>"></td>
            </tr>
            <tr>
            <td width="20%">City</td>
            <td><input type="text" name="city" value="<?php echo $result['city'];?>"></td>
            </tr>
            <tr>
            <td width="20%">Country</td>
            <td><input type="text" name="country" value="<?php echo $result['country'];?>"></td>
            </tr>
            <tr>
            <td width="20%">Zip-code</td>
            <td><input type="text" name="zip" value="<?php echo $result['zip'];?>"></td>
            </tr>
            <tr>
            <td width="20%">Phone</td>
            <td><input type="text" name="phone" value="<?php echo $result['phone'];?>"></td>
            </tr>
            <tr>
            <td width="20%">E-mail</td>
            <td><input type="text" name="email" value="<?php echo $result['email'];?>"></td>
            </tr>
            <tr>
               
                <td></td>
                <td><input type="submit" name="submit" value="Save Profile"></td>
            </tr>           
        </table>
        </form>
        <?php }}?>
    </div>
  </div>
</div>
</div>
<?php include 'inc/footer.php';?>