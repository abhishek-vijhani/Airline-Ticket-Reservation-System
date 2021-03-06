﻿<!DOCTYPE html>
<html lang="en">
<head>
  <title>Europe</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Cabin_400.font.js"></script>
<script type="text/javascript" src="js/tabs.js"></script> 
<script type="text/javascript" src="js/jquery.jqtransform.js" ></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">
	.main, .tabs ul.nav a, .content, .button1, .box1, .top { behavior:url(js/PIE.htc)}
</style>
<![endif]-->
<!--[if lt IE 7]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
	</div>
<![endif]-->
</head>
<body id="page5">
<div class="main">
<!--header -->
	<header>
		<div class="wrapper">
			<?php
		session_start();
		$a=$_SESSION['uid'];
		$b=$_SESSION['pwd'];
		$con=mysqli_connect("localhost","root","","airlines");
	$res=mysqli_query($con,"select F_Name from l1 where Email_ID='$a' and Password='$b' ");
	$value=mysqli_fetch_array($res);
	
			echo"<h1><a href='index.php' id='logo'>Air lines</a></h1>";
			echo"<span id='slogan'>Fast, Frequent &amp; Safe Flights</span>";echo "<br><div style='float:right'><table><tr><th><h4>Hello ".$value['F_Name']."!</h4></th></tr>";
			echo"<tr><td><nav id='top_nav'>";
				echo"<ul><li><a href='index.php' class='nav1'>Home</a></li>";
					echo"<li><a href='login.php' class='nav2'>Logout</a></li>";
					echo"<li><a href='cancel.php' class='nav3'>Cancellation</a></li>";
						echo"</ul>
			</nav></td></tr></table></div>
		</div>";
				
				?>
		<nav>
			<ul id="menu">
				<li><a href="index.php"><span><span>Home</span></span></a></li>
				<li><a href="Offers.php"><span><span>Offers</span></span></a></li>
				
			</ul>
		</nav>
	</header><div class="ic"></div>
<!-- / header -->
<!--content -->
	<section id="content">
		<div class="wrapper pad1">
			
					<article class="col4">
						<h3 class="pad_top1">ITALY</h3>						
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/rome.jpg" alt="Rome" height="150px" width="200px"></figure>
							<p><strong>Rome</strong>, the capital of Italy with a history of over 2000 years with its rich past, consisting of Monumental buildings and attraction of Renaissance period. Rome today is one of the most important tourist destinations of the world, due to the incalculable immensity of its archaeological and artistic treasures, as well as for the charm of its unique traditions, the beauty of its panoramic views, and the majesty of its magnificent "villas" (parks).</p>
						</div>
						<br>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/venice.jpg" alt="Venice" height="150px" width="200px"></figure>
							<p><strong>Venice</strong>, is a city in northeastern Italy sited on a group of 118 small islands separated by canals and linked by bridges. Venice has been known as the "City of Water" and "The Floating City". It is described in The New York Times as "undoubtedly the most beautiful city built by man". It also been described by the Times Online as being one of Europe's most romantic cities.</p>
						</div>
					</article>
					
					
					<article class="col4">
						<h3 class="pad_top1">FRANCE</h3>						
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/paris.jpg" alt="Paris" height="150px" width="200px"></figure>
							<p><strong>Paris</strong> is the capital and most populous city of France. Situated on the Seine River, in the north of the country, it is at the heart of the Île-de-France region. Paris is a global hub of fashion and has been referred to as the "international capital of style"</p>
						</div>
						<br>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/cannes.jpg" alt="Cannes" height="150px" width="200px"></figure>
							<p><strong>Cannes</strong> is a city located in the French Riviera. It is a busy tourist destination and host of the annualCannes Film Festival and Cannes Lions International Advertising Festival. It is a commune of France located in the Alpes-Maritimes department. The city is also famous for its luxury shops, restaurants, and hotels.</p>
						</div>
					</article>
					
					
					<article class="col4">
						<h3 class="pad_top1">UNITED KINGDOM</h3>						
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/london.jpg" alt="London" height="150px" width="200px"></figure>
							<p><strong>London</strong>, is the capital city of England and the United Kingdom standing on the River Thames. Most-visited attractions in London are "British Museum", "National Gallery", "London Eye","Madame Tussauds", "Tower of London".</p>
						</div>
						<br>
						<div class="wrapper pad_bot2">
							<figure class="left marg_right1"><img src="images/glasgow.jpg" alt="Glasgow" height="150px" width="200px"></figure>
							<p><strong>Glasgow</strong>, is the largest city in Scotland, and the third largest in the United Kingdom. Glasgow grew from a small rural settlement on the River Clyde to become one of the largest seaports in Britain. It is home to a variety of theatres including the King's Theatre, the Theatre Royal and the Citizens Theatre and is home to many municipal museums and art galleries. It is also a city of significant religious diversity.</p>
						</div>
					</article>
				</div>
			</section>
			<!--content end-->
			<!--footer -->
			<footer>
				<div class="wrapper">
					<ul id="icons">
						<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Delicious"><img src="images/icon2.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Stumble Upon"><img src="images/icon3.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon4.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon5.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Reddit"><img src="images/icon6.jpg" alt=""></a></li>
					</ul>
					<div class="links">
						<a rel="nofollow" href="index.html" target="_blank">Website</a> developed by:<br>
						Abhishek Vijhani and Vrinda Narula
					</div>
				</div>
			</footer>
			<!--footer end-->
		</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>