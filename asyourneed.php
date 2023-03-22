






<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
$name=$_SESSION["email"];
if(!isset($_SESSION["email"]))
 {
	header("Location:../index1.php");
 }
?>
<?php
include "db_connect.php";
//include 'nav6.php';
?>

<?php
 if (isset($_POST["submit"])) {
    $s1= $_POST["flights_from"];
	$s2 = $_POST["flights_to"];
	$s3=$_POST["Departuredate"];
	// $s3 = $_POST["preferedairline"];
	// $s4 = $_POST["preferedseating"];
	// $s5 = $_POST["Departuredate"];
	// $s6 = $_POST["Departuretime"];
	// $s7 = $_POST["adult"];
	// $s8 = $_POST["children"];
	// $s9 = $_POST["infant"];
	// $s10 = $_POST["oneorround"];
	// $s11 = $_POST["class"];
	$adult=$_POST['adult'];
    $children=$_POST['children'];
    $infant=$_POST['infant'];
	$oneorround=$_POST['oneorround'];
	$class=$_POST['class'];
	//$image=$_FILES["image"]["name"];
	//move_uploaded_file($_FILES["image"]["tmp_name"],"pictures/".$image);
	mysqli_query($con,"INSERT INTO `bookasyour_tb`(`name`, `DepartureLocation`, `Arrivallocation`, `Departuredate`,  `adult`, `children`, `infant`, `oneorround`, `class`) VALUES ('$name','$s1','$s2','$s3',  '$adult', '$children', '$infant', '$oneorround', '$class')");
	// $combine = $s1.' '.$s2.' '.$s3.' '.$s4.' '.$s5.' '.$s6.' '.$s7.' '.$s8.' '.$s9.' '.$s10.' '.$s11;
	header('location:packages.php?active=true&from='.$s1.'&to='.$s2.'&Departuredate='.$s3);
	//echo "<script>window.location.href='packages.php';<script>";
 }
// Prepare the SQL query
//$sql = "SELECT * FROM bookasyour_tb WHERE to LIKE '%$s1%'";

    // Execute the query and get the result set
    //$result = mysqli_query($con, $sql);

    // Check if any rows were returned
    // if (mysqli_num_rows($result) > 0) {
    //     // Output the data for each row
    //     while($row = mysqli_fetch_assoc($result)) {
    //         echo "ID: " . $row["book_id"] . "<br>";
    //         echo "From: " . $row["from"] . "<br>";
    //         echo "To: " . $row["to"] . "<br>";
    //         echo "Preferred Airline: " . $row["preferedairline"] . "<br>";
    //         echo "Preferred Seating: " . $row["preferedseating"] . "<br>";
    //         echo "Departure Date: " . $row["Departuredate"] . "<br>";
    //         echo "Departure Time: " . $row["Departuretime"] . "<br>";
    //         echo "Number of Adults: " . $row["adult"] . "<br>";
    //         echo "Number of Children: " . $row["children"] . "<br>";
    //         echo "Number of Infants: " . $row["infant"] . "<br>";
    //         echo "One-way or Round-trip: " . $row["oneorround"] . "<br>";
    //         echo "Class: " . $row["class"] . "<br>";
    //         echo "<hr>";
    //     }
    // } else {
    //     echo "No results found.";
    // }


// Close the database connection


// 	$from=$_POST["from"];
	
// 	$to=$_POST["to"];
	
// 	$preferedairline=$_POST["preferedairline"];
//     $preferedseating=$_POST["preferedseating"];
//     $Departuredate=$_POST["Departuredate"];
//     $Departuretime=$_POST["Departuretime"];
//     $adult=$_POST["adult"];
//     $children=$_POST["children"];
//     $infant=$_POST["infant"];
// 	$oneorround=$_POST["oneorround"];
// 	$class=$_POST["class"];
// 	//$image=$_FILES["image"]["name"];
// 	//move_uploaded_file($_FILES["image"]["tmp_name"],"pictures/".$image);
// 	mysqli_query($con,"INSERT INTO `bookasyour_tb`(`from`, `to`, `preferedairline`, `preferedseating`, `Departuredate`, `Departuretime`, `adult`, `children`,`infant`,`oneorround`,`class`) VALUES ('$from','$to','$preferedairline','$preferedseating','$Departuredate','$Departuretime','$adult','$children','$infant','$oneorround','$class')");
// 	echo "<script language='javascript'>";
// 	echo 'window.location.href = "cart.php";';
// 	echo "alert('flight Booked')";
	
// 	echo "</script>";
	
//}
?>
<!DOCTYPE HTML>
<html>

<head>
<div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
			<!-- top_bg -->
						<div class="top_bg">
							
								<div class="header_top">
									<div class="top_right">
										<ul>
											<li><a href="contact.html">help</a></li>|
											<li><a href="contact.html">Contact</a></li>|
											<!--<li><a href="checkout.html"></a></li>-->
										</ul>
									</div>
									<div class="top_left">
										<h2><span></span> Call us : 032 2352 782</h2>
									</div>
										<div class="clearfix"> </div>
								</div>
							
						</div>
					<div class="clearfix"></div>
	<title></title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Airline Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tags -->
	<!-- Stylesheet -->
	<link href="asyourcss/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<link rel="stylesheet" href="asyourcss/jquery-ui.css" />
	<link href="asyourcss/style.css" rel='stylesheet' type='text/css' />
	<!-- //Stylesheet -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
	<!--//fonts-->
</head>

<body>

<?php
	$flights_res= mysqli_query($con,"SELECT * from flights_tb");
?>

	<!--background-->
	<h1></h1>
	<div class="booking-form-w3layouts">
		<!-- Form starts here -->
		<form action="asyourneed.php" method="post">
			<h2 class="sub-heading-agileits">Search your Flight</h2>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<select class="form-control" name="flights_from" id="flights_from">
						<option selected disabled value="">From</option>
						<?php

							$flights_from_res= mysqli_query($con,"SELECT distinct(DepartureLocation) from flights_tb");
							if($flights_from_res && mysqli_num_rows($flights_from_res) > 0){
								$i=0;
								while($row = mysqli_fetch_array($flights_from_res)){
									echo "<option value='".$row[0]."'>".$row[0]."</option>";
									$i++;
								}
							}
						?>	
					</select>
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<select class="form-control" name="flights_to" id="flights_to">
						<option selected disabled value="">To</option>
						<?php

							$flights_to_res= mysqli_query($con,"SELECT distinct(Arrivallocation) from flights_tb");
							if($flights_from_res && mysqli_num_rows($flights_to_res) > 0){
								$i=0;
								while($row = mysqli_fetch_array($flights_to_res)){
									echo "<option value='".$row[0]."'>".$row[0]."</option>";
									$i++;
								}
							}
						?>	
						
					</select>
						</div>
						</div>
						
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
				<input type="datetime-local" name="Departuredate" id="datepicker" class="form-control datetimepicker" required onchange="addDate()" value="<?php echo isset($Departuredate) ? date("Y-m-d H:i",strtotime($Departuredate)) : '' ?>"> 

					<!-- <input id="datepicker" name="Departuredate" type="date" placeholder="Departure Date" value="Departuredate"   
					    required=""> -->
						
						
				</div>
				<!-- <div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" id="timepicker" name="Departuretime" class="timepicker form-control" placeholder="Departure Time" value="Departuretime" required>
				</div> -->
			</div>

			<div class="triple-wthree">
				<div class="field-agileinfo-spc form-w3-agile-text11">
					<select class="form-control" id="adult" name="adult">
												<option value="">Adult(12+ Yrs)</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>         
												<option value="4">4</option>
												<option value="5">5+</option>
											</select>
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text22">
					<select class="form-control" id="children" name="children">
												<option value="">Children(2-11 Yrs)</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>         
												<option value="4">4</option>
												<option value="5">5+</option>     
											</select>
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text33">
					<select class="form-control" id="infant" name="infant">
												<option value="">Infant(under 2Yrs)</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>         
												<option value="4">4</option>
												<option value="5">5+</option>    
											</select>
				</div>
			</div>
			<div class="radio-section">
				<h6>Select your Fare</h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="oneorround" name="oneorround" value="one way">
						<label for="a-option">One Way</label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="oneorround" name="oneorround" value="Round Trip">
						<label for="b-option">Round-Trip</label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul>
				<div class="radio-section">
				<h6>Select your Fare</h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="class" name="class" value="Bussiness">
						<label for="a-option">Bussiness</label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="class" name="class" value="Premium">
						<label for="b-option">premium</label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
					<li>
						<input type="radio" id="class" name="class" value="Economy">
						<label for="b-option">Economy</label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul>
				<div class="clear"></div>
			</div>
			<!-- <div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<select class="form-control" name="preferedairline" id="preferedairline" required>
										<option>Preferred Airline</option>
										<option value="American Airline">American Airline</option>
										<option value="Delta Airlines">Delta Airlines</option>
										<option value="Frontier Airline">Frontier Airline</option>
										<option value="Jet Blue">Jet Blue</option>
										<option value="Southwest Airlines">Southwest Airlines</option>
									</select>
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<select class="form-control" name="preferedseating" id="preferedseating" required>
										<option>Preferred Seating</option>
										<option value="Window">Window</option>
										<option value="Aisle">Aisle</option>
									<option value="Special">Special (Request note below)</option>
									</select>
				</div> -->
			<!-- </div> -->
<!--
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" id="timepicker1" name="Time" class="timepicker form-control" placeholder="Return Time" value="">
				</div>
			</div>
			<div class="field-agileinfo-spc form-w3-agile-text">
				<textarea name="Message" placeholder="Any Message..."></textarea>
			</div>
			<h3 class="sub-heading-agileits">Personal Details</h3>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="Name" placeholder="Full Name" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="Phone no" placeholder="Phone Number" required="">
				</div>
			</div>
			<div class="field-agileinfo-spc form-w3-agile-text">
				<input type="email" name="Email" placeholder="Email" required="">
			</div>-->
			<!-- <div class="clear"></div> -->
			<input type="submit" value="Search Flights" name="submit">
						</div>
			<!--<input type="reset" value="Clear Form">-->
			<div class="clear"></div>
						
		</form>
	<!--	<php
$a="select * from bookasyour_tb";
$b=mysqli_query($con,$a);
while($row=mysqli_fetch_assoc($b))
{


?>	



		<button onclick="window.location.href='../user12/cart.php?book_id=<?php echo $row['book_id']?>';" type="submit" name="submit">Book here</button>
		<?php
        //}
		?>
		
			<button><a href="../user12/vcart.php">View Booking</a></button>
			
		<!--// Form starts here -->
	</div>
	<!--copyright-->
	<div class="copyright">
	<!--	<p>&copy; 2018. Airline Booking Form . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a>			</p>-->
	</div>
	<!--//copyright-->
	<script type="text/javascript" src="asyourjs/jquery-2.2.3.min.js"></script>
	<!-- Time Js -->
	<script type="text/javascript" src="asyourjs/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker,.timepicker1').wickedpicker({
			twentyFour: false
		});
	</script>
	<!--// Time Js -->
	<!-- Calendar Js -->
	<script src="asyourjs/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar Js -->









</body>

</html>
<!DOCTYPE HTML>
<html>
<head>
<title>My flights</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
   <!--pie-chart--->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
</head> 
<body>
   
				</div>
				<div class="header_bg">
						
							<div class="header">
								<div class="head-t">
									<!-- <div class="logo">
										<a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""> </a>
									</div> -->
										<!-- start header_right 
									<div class="header_right">
										<div class="rgt-bottom">
											<div class="log">
												<div class="login">
													<div id="loginContainer"><a id="loginButton" class=""><span>Login</span></a>
														<div id="loginBox" style="display: none;">                
															<form id="loginForm">
																	<fieldset id="body">
																		<fieldset>
																			  <label for="email">Email Address</label>
																			  <input type="text" name="email" id="email">
																		</fieldset>
																		<fieldset>
																				<label for="password">Password</label>
																				<input type="password" name="password" id="password">
																		 </fieldset>
																		<input type="submit" id="login" value="Sign in">
																		<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
																	</fieldset>
																<span><a href="#">Forgot your password?</a></span>
															</form>
														</div>
													</div>
												</div>
											</div>
											
										<div class="create_btn">
											<a href="checkout.html">Logout</a>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="search">
										<form>
											<input type="text" value="" placeholder="search...">
											<input type="submit" value="">
										</form>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					
				</div>
					<!-- //header-ends -->
				
			<!--
		<div class="fo-top-di">
			<div class="foot-top">
				
					<div class="col-md-6 s-c">
						<li>
							<div class="fooll">
								<h1>follow us on</h1>
							</div>
						</li>
						<li>
							<div class="social-ic">
								<ul>
									<li><a href="#"><i class="facebok"> </i></a></li>
									<li><a href="#"><i class="twiter"> </i></a></li>
									<li><a href="#"><i class="goog"> </i></a></li>
									<li><a href="#"><i class="be"> </i></a></li>
										<div class="clearfix"></div>	
								</ul>
							</div>
						</li>
							<div class="clearfix"> </div>
					</div>
					<div class="col-md-6 s-c">
						<div class="stay">
									<div class="stay-left">
										<form>
											<input type="text" placeholder="Enter your email" required="">
										</form>
									</div>
									<div class="btn-1">
										<form>
											<input type="submit" value="join">
										</form>
									</div>
										<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				
			</div><!--
			<div class="footer">
					<div class="col-md-3 cust">
						<h4>CUSTOMER CARE</h4>
							<li><a href="contact.html">Help Center</a></li>
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="details.html">How To Buy</a></li>
							<li><a href="checkout.html">Delivery</a></li>
					</div>
					<div class="col-md-2 abt">
						<h4>ABOUT US</h4>
							<li><a href="products.html">Our Stories</a></li>
							<li><a href="products.html">Press</a></li>
							<li><a href="faq.html">Career</a></li>
							<li><a href="contact.html">Contact</a></li>
					</div>
					<div class="col-md-2 myac">
						<h4>MY ACCOUNT</h4>
							<li><a href="register.html">Register</a></li>
							<li><a href="checkout.html">My Cart</a></li>
							<li><a href="checkout.html">Order History</a></li>
							<li><a href="details.html">Payment</a></li>
					</div>
					<div class="col-md-5 our-st">
						<div class="our-left">
							<h4>OUR STORES</h4>
						</div>
						
							<li><i class="add"> </i>Mark peter</li>
							<li><i class="phone"> </i>012-586987</li>
							<li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>
					</div>
					<div class="clearfix"> </div>
						<!--<p>© 2016 Gretong. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>-->
			</div>
		</div>
			</div>
			<!--content-->
		</div>
</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="asyourneed.php"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
										<li><a href="vcart1.php"><i class="fa fa-tachometer"></i> <span>View booking status</span></a></li>
										<li><a href="bookyours.php"><i class="fa fa-tachometer"></i> <span>View All flights</span></a></li>
										<li><a href="preferedbooked.php"><i class="fa fa-tachometer"></i> <span>Bookings</span></a></li>
										<li><a href="offers.php"><i class="fa fa-tachometer"></i> <span>view offers</span></a></li>
										<li><a href="viewairlines.php"><i class="fa fa-tachometer"></i> <span>View All Airlines</span></a></li>
										<li><a href="viewairport.php"><i class="fa fa-tachometer"></i> <span>View All Airports</span></a></li>


										<button ><a href='logout.php'>LOGOUT</a></button>
										
										
										
									<!--<li><a href="#"><i class="lnr lnr-chart-bars"></i> <span>Forms</span> <span class="fa fa-angle-right" style="float: right"></span></a>
									  <ul>
										<li><a href="input.html"> Input</a></li>
										<li><a href="validation.html">Validation</a></li>
									</ul>
									</li>-->
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->
   <!-- real-time -->
<script language="javascript" type="text/javascript" src="js/jquery.flot.js"></script>
	<script type="text/javascript">

	$(function() {

		// We use an inline data source in the example, usually data would
		// be fetched from a server

		var data = [],
			totalPoints = 300;

		function getRandomData() {

			if (data.length > 0)
				data = data.slice(1);

			// Do a random walk

			while (data.length < totalPoints) {

				var prev = data.length > 0 ? data[data.length - 1] : 50,
					y = prev + Math.random() * 10 - 5;

				if (y < 0) {
					y = 0;
				} else if (y > 100) {
					y = 100;
				}

				data.push(y);
			}

			// Zip the generated y values with the x values

			var res = [];
			for (var i = 0; i < data.length; ++i) {
				res.push([i, data[i]])
			}

			return res;
		}

		// Set up the control widget

		var updateInterval = 30;
		$("#updateInterval").val(updateInterval).change(function () {
			var v = $(this).val();
			if (v && !isNaN(+v)) {
				updateInterval = +v;
				if (updateInterval < 1) {
					updateInterval = 1;
				} else if (updateInterval > 2000) {
					updateInterval = 2000;
				}
				$(this).val("" + updateInterval);
			}
		});

		var plot = $.plot("#placeholder", [ getRandomData() ], {
			series: {
				shadowSize: 0	// Drawing is faster without shadows
			},
			yaxis: {
				min: 0,
				max: 100
			},
			xaxis: {
				show: false
			}
		});

		function update() {

			plot.setData([getRandomData()]);

			// Since the axes don't change, we don't need to call plot.setupGrid()

			plot.draw();
			setTimeout(update, updateInterval);
		}

		update();

		// Add the Flot version string to the footer

		$("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
	});

	</script>
<!-- /real-time -->
<script src="js/jquery.fn.gantt.js"></script>
    <script>

		$(function() {

			"use strict";

			$(".gantt").gantt({
				source: [{
					name: "Sprint 0",
					desc: "Analysis",
					values: [{
						from: "/Date(1320192000000)/",
						to: "/Date(1322401600000)/",
						label: "Requirement Gathering", 
						customClass: "ganttRed"
					}]
				},{
					name: " ",
					desc: "Scoping",
					values: [{
						from: "/Date(1322611200000)/",
						to: "/Date(1323302400000)/",
						label: "Scoping", 
						customClass: "ganttRed"
					}]
				},{
					name: "Sprint 1",
					desc: "Development",
					values: [{
						from: "/Date(1323802400000)/",
						to: "/Date(1325685200000)/",
						label: "Development", 
						customClass: "ganttGreen"
					}]
				},{
					name: " ",
					desc: "Showcasing",
					values: [{
						from: "/Date(1325685200000)/",
						to: "/Date(1325695200000)/",
						label: "Showcasing", 
						customClass: "ganttBlue"
					}]
				},{
					name: "Sprint 2",
					desc: "Development",
					values: [{
						from: "/Date(1326785200000)/",
						to: "/Date(1325785200000)/",
						label: "Development", 
						customClass: "ganttGreen"
					}]
				},{
					name: " ",
					desc: "Showcasing",
					values: [{
						from: "/Date(1328785200000)/",
						to: "/Date(1328905200000)/",
						label: "Showcasing", 
						customClass: "ganttBlue"
					}]
				},{
					name: "Release Stage",
					desc: "Training",
					values: [{
						from: "/Date(1330011200000)/",
						to: "/Date(1336611200000)/",
						label: "Training", 
						customClass: "ganttOrange"
					}]
				},{
					name: " ",
					desc: "Deployment",
					values: [{
						from: "/Date(1336611200000)/",
						to: "/Date(1338711200000)/",
						label: "Deployment", 
						customClass: "ganttOrange"
					}]
				},{
					name: " ",
					desc: "Warranty Period",
					values: [{
						from: "/Date(1336611200000)/",
						to: "/Date(1349711200000)/",
						label: "Warranty Period", 
						customClass: "ganttOrange"
					}]
				}],
				navigate: "scroll",
				scale: "weeks",
				maxScale: "months",
				minScale: "days",
				itemsPerPage: 10,
				onItemClick: function(data) {
					alert("Item clicked - show some details");
				},
				onAddClick: function(dt, rowId) {
					alert("Empty space clicked - add an item!");
				},
				onRender: function() {
					if (window.console && typeof console.log === "function") {
						console.log("chart rendered");
					}
				}
			});

			$(".gantt").popover({
				selector: ".bar",
				title: "I'm a popover",
				content: "And I'm the content of said popover.",
				trigger: "hover"
			});

			prettyPrint();

		});

    </script>
		   <script src="js/menu_jquery.js"></script>
</body>
</html>