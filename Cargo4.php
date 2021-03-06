<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cargo Jagrons</title>
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
<body id="page2">
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
				<li id="menu_active"><a href="Cargo1.php"><span><span>Cargo</span></span></a></li>
				<li class="end"><a href="Contacts.php"><span><span>Contact Us</span></span></a></li>
			</ul>
		</nav>
	</header>
<!-- / header -->
<!--content -->
<br /><br />

 <iframe src="index1.html" style="width:10200px;height:363px;max-width:100%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe>
                    <br /><br />
	<section id="content">
		<div class="wrapper pad1">
			<article class="col1">
				<div class="pad_bot3">
				
				<div class="box1">
							<h2 class="top">Cargo Services</h2>
							<div class="pad">
								
								<ul class="pad_bot1 list1">
									<li>
										
										<a href="Cargo1.php"><strong>Cargo Operations </strong></a>
									</li>
								</ul>
								
								<ul class="pad_bot1 list1">
									<li>
										
										<a href="Cargo2.php"><strong>Cargo Types </strong></a>
									</li>
								</ul>
								<ul class="pad_bot1 list1">
									<li>
										
										<a href="Cargo3.php"><strong>Cargo Capacity </strong></a>
									</li>
								</ul>
								
								<ul class="pad_bot2 list1">
									<li>
										
										<a href="Cargo4.php"><strong>Cargo Jargons </strong></a>
									</li>
									
								</ul>
								
								<ul class="pad_bot2 list1">
									<li>
										
										<a href="Cargo5.php"><strong>Cargo Tracking </strong></a>
									</li>
								</ul>
								
							</div>
						</div>
					</article>
					<article class="col2">
						<h3 class="pad_top1">Cargo Types</h3>
						
						
						<div class="wrapper">
						<h4>Airway Bill(AWB)</h4>
					<p>The cargo equivalent of a passenger ticket which means the document made out by or on behalf of the shipper. It evidences the contract between the shipper and the carrier(s) for carriage of goods over routes of the carrier.</p>
						</div>
						
						<div class="wrapper">							
							<h4>Cargo</h4>
							<p>Goods carried by airline(s) on behalf of its customer.</p>					
						</div>

						<div class="wrapper">							
							<h4>Cargo Terminal</h4>
							<p>A building or location where cargo is received, stored, Customs cleared and prepared for delivery and delivered.</p>
						</div>

						<div class="wrapper">							
							<h4>Charter Contract</h4>
							<p>A special agreement whereby carrier for an agreed operation places at shipper's disposition the entire capacity of an aircraft.</p>
						</div>
						
						<div class="wrapper">							
							<h4>Charterer</h4>
							<p>A person who has signed a charter contract with carrier.</p>
						</div>

						<div class="wrapper">							
							<h4>Consignee</h4>
							<p>A person whose name appears on the AWB as the party to whom the goods are to be delivered.</p>
						</div>

						<div class="wrapper">							
							<h4>Consignor(Shipper)</h4>
							<p>A person whose name appears on the AWB as the party contracting with the carrier(s) for carriage of goods.</p>
						</div>

						<div class="wrapper">							
							<h4>Consigment(Shipment)</h4>
							<p>One or more pieces of cargo accepted by the carrier from a single shipper, destined for one specific address moving on one AWB to one consignee.</p>
						</div>

						<div class="wrapper">							
							<h4>Cut-off Time</h4>
							<p>The latest time cargo will be accepted for a specific flight prior to its departure.</p>
						</div>

						<div class="wrapper">							
							<h4>Destination</h4>
							<p>The ultimate stopping place according to the contract of carriage.</p>
						</div>

						<div class="wrapper">							
							<h4>Embargo</h4>
							<p>Refusal by carrier for a limited period to accept goods for transportation.</p>
						</div>

						<div class="wrapper">							
							<h4>IATA</h4>
							<p>International Air Transport Association - an Association that establishes international rules and standards for participating air carriers.</p>
						</div>

						<div class="wrapper">							
							<h4>IATA Member</h4>
							<p>Indicates an airline being member of the International Air Transport Association.</p>
						</div>

						<div class="wrapper">							
							<h4>Interline Agreement</h4>
							<p>A contract between two or more carriers to expedite exchange of traffic between the parties to the agreement.</p>
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
						Abhishek Vijhani and Vrinda Narula</div>
				</div>
			</footer>
			<!--footer end-->
		</div>
<script type="text/javascript"> Cufon.now(); </script>
<script>
	jQuery(document).ready(function($) {
		$('#form_4').jqTransform({imgPath:'jqtransformplugin/img/'});	
	});
</script>
</body>
</html>