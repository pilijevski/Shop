<?php
$filepath = realpath(NULL);
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
  include ($filepath."/classes/Session.php");
	Session::init();
	
	Include_once ($filepath.'/classes/Database.php');
	include_once ($filepath.'/Helpers/Helper.php');
	
	spl_autoload_register(function($class){
	include_once (realpath(NULL)."/classes"."/".$class.".php");
});

$db = new Database();
$fm = new Format();	
$pd = new Product();
$ct = new Cart();
$cat = new Category();
$user = new User();

?>

<head>
<title>Techstasy</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/

<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"/>
<link type="text/css" rel="stylesheet" href="http://cdn.dcodes.net/2/menus/mega/css/dc_mega_menu_black.css" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>

<script src="js/jquerymain.js"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 

<script src="js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script> 
<script type="text/javascript" src="js/nav-hover.js"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://cdn.dcodes.net/2/menus/mega/js/jquery.hoverIntent.minified.js"></script>
<script type="text/javascript" src="http://cdn.dcodes.net/2/menus/mega/js/dc_mega_menu.js"></script>
<script type="text/javascript">
  $(document).ready(function($){   
    $('#dc_mega-menu-black').dcMegaMenu({rowItems:'1',speed:'fast',effect:'fade',event:'click'});
  });
</script>
</script>
</head>
<body>
  <div class="wrap">
		<div class="header_top">
			<div class="logo">
				<a href="index.php"><img src="images/logomain.png" alt="" /></a>
			</div>
			  <div class="header_top_right">
			    <div class="search_box">
				    <form>
				    	<input type="text" value="Search for Products" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for Products';}"><input type="submit" value="SEARCH">
				    </form>
			    </div>
			    <div class="shopping_cart">
					<div class="cart">
											
						<a href="cart.php" title="View my shopping cart" rel="nofollow">
								<span class="cart_title">Cart</span>
								<span class="no_product"><?php 
								$checkData = $ct->checkCartTable();
							
								if($checkData)
								{
								$items = Session::get("items");
								echo $items;
								}
								else
								{
									echo "(Empty)";
								}
								?></span>
							</a>
						</div>
						</div>
		   <div class="login">
			 <?php
					if(isset($_GET['uId']))
					{	
						$delData = $ct->delCustomerCart();
						Session::destroy();

					}

		$login = Session::get("usrLogin");
		if($login == false){?>
				<a href="login.php">Login</a></div>
		<?php }else 	{ ?>
			<a href="?uId=<?php Session::get('usrId')?>">Logout</a></div>
		<?php	}?>
		 <div class="clear"></div>
	 </div>
	 <div class="clear"></div>
 </div>
<div class="menu">
<ul id="dc_mega-menu-black" class="dc_mm-black">
<li><a href="index.php">Home</a></li>
<li><a>Categories</a>
<ul>
	<?php 
	 $getCat = $cat->getAllCat();
		if ($getCat)
		{
				while($result = $getCat->fetch_assoc())
				{
	?>			
	<li><a href="productbycat.php?catid=<?php echo $result['catId'];?> "><?php echo $result['catName'];?><ul></ul></a></li>
				</li>
				<?php }}?>
	</ul></li>
<li><a href="products.php">Products</a> </li>
<li><a href="topbrands.php">Top Brands</a></li>
<li><a href="cart.php">Cart</a></li>
<?php $login = Session::get("usrLogin");
  if($login == true) {?>
<li><a href="profile.php">Profile</a> </li>
	<?php } ?>
<li><a href="contact.php">Contact</a> </li>
</ul>
<!-- DC Mega Menu End -->
</div>
	
		