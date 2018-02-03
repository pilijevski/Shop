<div class="footer">
<div class="wrapper">
		<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Terms and Regulations</a></li>
								<li><a href="contact.php"><span>Contact Us</span></a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
						<h4>Profile</h4>
						<ul>
								<li><a href="login.php">Log in</a></li>
								<li><a href="#">Cart</a></li>
								<li><a href="">Track Order</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
						<h4>Contact</h4>
						<ul>
								<li><span>+389-75-530-207</span></li>
								<li><span>+389-70-264-744</span></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
						<h4>Follow us</h4>
						<div class="social-icons">

								<ul>
										<li class="facebook">
												<a href="#" target="_blank"> </a>
										</li>
										<li class="twitter">
												<a href="#" target="_blank"> </a>
										</li>
										<li class="googleplus">
												<a href="#" target="_blank"> </a>
										</li>
										<li class="contact">
												<a href="#" target="_blank"> </a>
										</li>
										<div class="clear"></div>
								</ul>
						</div>
				</div>
		</div>
		<div class="copy_right">
				<p>Petar Ilijevski 245/2015 @ FEIT 2016</p>
		</div>
</div>
    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript">
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>