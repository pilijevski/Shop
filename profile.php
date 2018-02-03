<?php include 'inc/header.php'; ?>
<?php
$login = Session::get("usrLogin");
if($login == false)
  header("Location:login.php");
  ?>
<div class="main">
  <div class="content">
      <style>
      .tblone{width:550px;margin:0 auto; border:2px solid #ddd;}
      .tblone tr td{text-allign:center;}</style>
    <div class="section group">   
        <?php $id=Session::get("usrId");
                $getData = $user->getUserData($id);
                if($getData)
                {
                    while($result = $getData->fetch_assoc())
                    { 
                                ?>
        <table  class="tblone">
        <tr>
            <td colspan="3"><h2>Profile Detalis</h2></td>
            </tr>
        <tr>
            <td width="20%">Name</td>
            <td width="5%">:</td>
            <td><?php echo $result['name'];?></td>
            </tr>
            <tr>
            <td width="20%">Address</td>
            <td width="5%">:</td>
            <td><?php echo $result['address'];?></td>
            </tr>
            <tr>
            <td width="20%">City</td>
            <td width="5%">:</td>
            <td><?php echo $result['city'];?></td>
            </tr>
            <tr>
            <td width="20%">Country</td>
            <td width="5%">:</td>
            <td><?php echo $result['country'];?></td>
            </tr>
            <tr>
            <td width="20%">Zip-code</td>
            <td width="5%">:</td>
            <td><?php echo $result['zip'];?></td>
            </tr>
            <tr>
            <td width="20%">Phone</td>
            <td width="5%">:</td>
            <td><?php echo $result['phone'];?></td>
            </tr>
            <tr>
            <td width="20%">E-mail</td>
            <td width="5%">:</td>
            <td><?php echo $result['email'];?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><a href="editprofile.php">Update Profile</a></td>
            </tr>           
        </table>
        <?php }}?>
    </div>
  </div>
</div>
</div>
<?php include 'inc/footer.php';?>