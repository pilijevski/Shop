<?php include 'inc/header.php';?>
<?php
		$login = Session::get("usrLogin");
		if($login == true)
			header("Location:order.php");
			if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login']))
			{
				$userLogin = $user->loginUser($_POST);	
			}
		?>
			<?php if(isset($userLogin))
			{
				echo $userLogin	;
			}
			?>

 <div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>Existing Customers</h3>
			<form action="" method="post" >
                	<input name="email" placeholder="E-mail" type="text">
                    <input name="password" placeholder="Password" type="password">
					<div class="buttons"><button class="grey" name="login">Sign In</button></div>
					</form>
                    </div>
    	<div class="register_account">
		<?php
			if( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register']))
			{
				$userReg = $user->registerUser($_POST);	
			}
		?>
			<?php if(isset($userReg))
			{
				echo $userReg;
			}
			?>
    		<h3>Register New Account</h3>
    		<form action ="" method="post">
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" name = "name" placeholder="Name" >
							</div>
							
							<div>
							   <input type="text" name = "city" placeholder="City">
							</div>
							
							<div>
								<input type="text" name = "zipcode" placeholder = "Zip Code" >
							</div>
							<div>
								<input type="text" name="email" placeholder = "E-mail"  >
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" placeholder="Address" name="address">
						</div>
						<div>
						<input type="text" placeholder="Country" name="country">
					</div>        
	
		           <div>
		          <input type="text" placeholder="Phone" name = "phone">
		          </div>
				  
				  <div>
					<input type="password" placeholder="Password" name="password">
				</div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><button class="grey" name = "register">Create Account</button></div></div>
		    
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
</div>
<?php include 'inc/footer.php'; ?>
</body>
</html>

