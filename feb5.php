<!DOCTYPE html>
<html lang="en">
<head>
  <title>News</title>
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
<body id="page4">
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
				<li><a href="index.php"><span><span>About</span></span></a></li>
				
				
				<li><a href="Services.php"><span><span>Services</span></span></a></li>
				<li><a href="Safety.php"><span><span>Safety</span></span></a></li>
<li><a href="Cargo1.php"><span><span>Cargo</span></span></a></li>
				<li class="end"><a href="Contacts.php"><span><span>Contact Us</span></span></a></li>
			</ul>
		</nav>
	</header><div class="ic">More Website Templates at TemplateMonster.com!</div>
<!-- / header -->
<!--content -->
	<section id="content">
		<div class="wrapper pad1">
			<article class="col1">
				<div class="pad_bot3">
				
				<div class="box1">
							<h2 class="top">Latest News</h2>
							<div class="pad">
                            <marquee direction="up" loop="-1" scrolldelay="300" height="320">
								<strong>February 06, 2015</strong><br>
								<ul class="pad_bot1 list1">
									<li>
										
										<a href="feb1.php">Sky High launches Food Festival for World Cup</a>
									</li>
								</ul>
								<strong>February 09, 2015</strong><br>
								<ul class="pad_bot1 list1">
									<li>
									
										<a href="feb2.php">Public Notice for selling of AI Properties</a>
									</li>
								
								</ul>
								<strong>February 24, 2015</strong><br>
								<ul class="pad_bot2 list1">
									<li>
									
										<a href="feb3.php">The 19th Dreamliner joins the Sky High fleet</a>
									</li>
									
								</ul>
								<strong>March 08, 2015</strong><br>
								<ul class="pad_bot2 list1">
									<li>
									
										<a href="feb4.php">Sky High celebrates International Womens Day with all-women flight, events</a>
									</li>
								</ul>
								<strong>March 28, 2015</strong><br>
								<ul class="pad_bot2 list1">
									<li>
										
										<a href="feb5.php">Sky High clarifies (On London- Delhi flight report)</a>
									</li>
								</ul>
                                <strong>April 01, 2015</strong><br>
								<ul class="pad_bot2 list1">
									<li>
									
										<a href="feb6.php">New Summer Onboard Menu presentation in New York</a>
									</li>
									
								</ul>
                                </marquee>
							</div>
						</div>
					</article>
					<article class="col2">
						<br>
                        <br>
                        <h2>Sky High clarifies (On London- Delhi flight report)</h2>
                        <ul>
                        <li><p>A section of the press has reported of an incident where a passenger had reported sick on board an international flight and more than one passenger claiming to be doctors, came forward to help in the medical emergency case and wanted to see the pilot. According to the report these doctors and the sick passengers were Pakistani nationals and were trying to get access to the cockpit.</p></li>
                        <li><p>Sky High would like to clarify that the above reports are totally false.During last week one of the passenger required medical assistance on aboard a London-Delhi flight and he was assisted by a lady passenger who came forward to help him.</p></li>
                        <li><p>The passenger who required medical assistance was a British passport holder and the nurse who assisted him was an Indian origin.</p></li>
                        <li><p>There were no Pakistani national(s) as mentioned in these reports.</p></li>
                        
                        </ul>
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
						Abhishek Vijhani and Vrinda Narula</div>
				</div>
			</footer>
			<!--footer end-->
		</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>