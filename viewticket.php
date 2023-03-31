<?php
session_start();
$name=$_SESSION["email"];
if(!isset($_SESSION["email"]))
 {
	header("Location:../index1.php");
 }
?>


<?php
    //echo "<script language='javascript'>";
    //echo 'window.location.href = "manage_flight1.php";';
    //echo "alert('flight details added succefully')";
    
    //echo "</script>";
    

?>
<html>
<?php 
include "db_connect.php";

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Booking</title>
<link href="style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Flat Cart Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--google fonts-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="jsbooks/jquery-1.11.0.min.js"></script>

<script>$(document).ready(function(c) {
    $('.close').on('click', function(c){
        $('.cake-top').fadeOut('slow', function(c){
            $('.cake-top').remove();
        });
    });   
});
</script>

<script>$(document).ready(function(c) {
    $('.close-btm').on('click', function(c){
        $('.cake-bottom').fadeOut('slow', function(c){
            $('.cake-bottom').remove();
        });
    });   
});
</script>
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body> 








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









					<?php 
include "db_connect.php";

?>




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
									<div class="logo">
										
<div class="cart-bottom">
		<table class="table">
			<thead>
				<tr>
					<!-- <th scope="col">Email</th>
					<th scope="col">DepartureLocation</th>
					<th scope="col">Arrivallocation</th>
					<th scope="col">Adult</th>
					<th scope="col">Children</th> 
					<th scope="col">Infant</th> 
					<th scope="col">class</th> 
					<th scope="col">Oneorround</th> 
					<th scope="col">Amount</th> 
					<th scope="col">Payment Id</th>  -->

					

				</tr>
			</thead>
			<tbody>
				
				<?php
					//$airport = $conn->query("SELECT * FROM airport_list ");
					//while($row = $airport->fetch_assoc()){
						//$aname[$row['id']] = ucwords($row['airport'].', '.$row['location']);
					//}

					$sql = $con->query("SELECT b.name, b.adult, b.children, b.infant, b.class, b.oneorround, b.DepartureLocation, b.Arrivallocation, p.amount, p.payment_id, p.payment_status
									FROM bookasyour_tb b
									INNER JOIN payment_tb p ON b.name = p.name");
					 while($row = $sql->fetch_assoc()):
						// $a= 'images1/'.$row["cimage"];
						
						//$booked = $conn->query("SELECT * FROM booked_flight where id = ".$row['id'])->num_rows;
				?>
					<tr>
						

						<!--<td><input type="button" id="rzp-button1"name="btn"value="pay now"class="btn btn-primary" onclick="pay_now()"/></td>-->
						<!-- <td><a href="seats.php?id=<?php echo $row['id']?>"> <h5>Select your seats</h5></td> -->
						<body>
	<div class="header_bg">
		<div class="header">
			<div class="head-t">
				<div class="logo">
					<!-- Your logo goes here -->
				</div>
			</div>
		</div>
	</div>
	<!-- <style>
		.card {
  border: 2px solid #000000; /* change #000000 to the color you want for your border */
  background-color: #ffffff; /* change #ffffff to the color you want for your background */
  padding: 20px;
  max-width: 500px; /* adjust the padding to your preference */
}
		</style>
<div class="card border-dark mb-3" style="background-color: #ffffff;">  <div class="card-body">
	<div class="ticket"> -->
	<style>
				 .card-booknow {
    font-size: 0.8em;
    /* decrease font size */
    padding: 0;
    /* decrease padding */
  }
  
  
  .card {
  width: 500px; /* set desired width */
}
.card {
  border: 2px solid black;
}
				</style>
                <!-- <div class="card" style="padding: 20px;" >
			<div class="card" style="width: 400%; max-width: none; padding: 100px;">

                     <div class="card-container" data-blast="borderColor">
                        <div class="title">
                            <i class="fa fa-plane" data-blast="color"></i> 
							
  <div class="card-container" data-blast="borderColor">
    <div class="title">
      <i class="fa fa-plane" data-blast="color"></i> -->
	  <div class="card card-booknow ">
  <div class="card-container" data-blast="borderColor">
    <div class="title">
      <i class="fa fa-plane" data-blast="color"></i>
	 

		<?php 

		$sql = $con->query("SELECT b.name, b.adult, b.children, b.infant, b.class, b.oneorround, b.DepartureLocation, b.Arrivallocation,b.Departuredate,b.preferedairline,b.preferedseating, p.amount, p.payment_id, p.payment_status
		FROM bookasyour_tb b
		INNER JOIN payment_tb p ON b.name = p.name");
		

		while($row = $sql->fetch_assoc()): ?>
		
			<div class="card-container">
				<div class="ticket-header">
					<h2>Flight Ticket</h2>
					
					<p>Booking ID: <?php echo $row['payment_id'] ?></p>
				</div>
				<div class="ticket-details">
					<div class="ticket-item">
						<span class="ticket-label">Passenger Email:</span>
						<span class="ticket-value"><?php echo $row['name'] ?></span>
					</div>
					<div class="ticket-details">
					
					<div class="ticket-item">
						<span class="ticket-label">Departure Date And Time:</span>
						<span class="ticket-value"><?php echo $row['Departuredate'] ?></span>
					</div>
					<div class="ticket-item">
						<span class="ticket-label">Terminal No:</span>
						<span class="ticket-value">Terminal 1</span>
					</div>
					<div class="ticket-item">
						<span class="ticket-label">Departure City:</span>
						<span class="ticket-value"><?php echo $row['DepartureLocation'] ?></span>
					</div>
					<div class="ticket-item">
						<span class="ticket-label">Arrival City:</span>
						<span class="ticket-value"><?php echo $row['Arrivallocation'] ?></span>
					</div>
					<div class="ticket-item">
						<span class="ticket-label">Class:</span>
						<span class="ticket-value"><?php echo $row['class'] ?></span>
					</div>
					<div class="ticket-item">
						<span class="ticket-label">PreferedAirline:</span>
						<span class="ticket-value"><?php echo $row['preferedairline'] ?></span>
					</div>
					<div class="ticket-item">
						<span class="ticket-label">Preferedseating:</span>
						<span class="ticket-value"><?php echo $row['preferedseating'] ?></span>
					</div>
					<div class="ticket-item">
						<span class="ticket-label">Passengers:</span>
						<span class="ticket-value">
							<?php echo $row['adult'] ?> Adult,
							<?php echo $row['children'] ?> Child,
							<?php echo $row['infant'] ?> Infant

						</span>
						
					</div>
					<div class="ticket-item">
						<span class="ticket-label">Amount:</span>
						<span class="ticket-value"><?php echo $row['amount'] ?></span>
					</div>
				</div>
				

</div>

			
			 <a href="ticket_pdf.php?name=<?php echo $row['name'] ?>&amount=<?php echo $row['amount'] ?>&adult=<?php echo $row['adult'] ?>&children=<?php echo $row['children'] ?>&infant=<?php echo $row['infant'] ?>&class=<?php echo $row['class'] ?>&DepartureLocation=<?php echo $row['DepartureLocation'] ?>&Arrivallocation=<?php echo $row['Arrivallocation'] ?>&preferedairline=<?php echo $row['preferedairline'] ?>&preferedseating=<?php echo $row['preferedseating'] ?>" class="btn btn-primary">Download PDF</a> 
		 <?php
$name=$_SESSION['email'];
$query = "SELECT seat_no FROM seats_tb  
          
          WHERE  name = '$name'";

$result = mysqli_query($con, $query);

if ($row = mysqli_fetch_assoc($result)) {
    $seat_no = $row['seat_no'];
    echo "Seat No: " . $seat_no;
} else {
    echo "Seat not found!";
}
?> 

		<?php endwhile; ?>
		
	</div>
</body>

					</tr>
						
					<!-- <td class="text-right">
					<img src="<?php echo $a ?> " style="width:150px; height:150px;"></td>-->
					
					<?php endwhile;  ?>

					<!-- <td class="text-right">-->
					<!-- <php echo number_format($row['price'],2) ?></td>-->
			</tbody>
		</table>
	</div>
	</div>
									
									<!--	<a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""> </a>
									</div>
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
										<li><a href="#"><i class="fa fa-tachometer"></i> <span>View booking status</span></a></li>
										<li><a href="bookyours.php"><i class="fa fa-tachometer"></i> <span>View All flights</span></a></li>
										<li><a href="preferedbooked.php"><i class="fa fa-tachometer"></i> <span>Bookings</span></a></li>
										<li><a href="offers.php"><i class="fa fa-tachometer"></i> <span>view offers</span></a></li>
										
										<li><a href="viewairlines.php"><i class="fa fa-tachometer"></i> <span>view all airlines</span></a></li>
										<li><a href="viewairpot.php"><i class="fa fa-tachometer"></i> <span>view all airports</span></a></li>

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
						<script>
//   console.log("hello");
// var amt ="100";
    function pay_now(){
		var name = jQuery('#name1').val();
		console.log(name);
		
        var amount=<?php echo $r ?>;
        var options =  {
            "key": "rzp_test_Nu1lKLkEoTANxS", // Enter the Key ID generated from the Dashboard
            "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "Willfly",
            "description": "Test Transaction",
            "image": "https://example.com/your_logo",
            "handler":function(response){
              
               jQuery.ajax({
                   type:"POST",
                   url: "pay.php",
                   data:"payment_id="+response.razorpay_payment_id+"&amount="+amount+"&name="+name,
                   success:function(result){
                       window,location.href="thankyou.php";
                   }
               });
              
      }
        
    
};
var rzp1 = new Razorpay(options);

    rzp1.open();
    
    }
</script>	
<!--js -->

</html>





