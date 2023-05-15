
<?php
include "db_connect.php";
session_start();

?>
<?php
$n = $_SESSION['email'];


if(!isset($_SESSION['email'])){
    header("Location: bookyours.php");
    }
    
    $sql="select * from login_tb where email='$n'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $user_id=$row['login_id'];


$id=$_GET['id'];
//$targetDir= "images2/";
$sql=mysqli_query($con,"select * from flights_tb where id = $id");
//$img=mysqli_fetch_assoc($sql); 

//$pimage=addslashes(@file_get_contents($img['pimage']));

//$targetFilePath = $targetDir . $pimage;

// move_uploaded_file($_FILES["pimage"]["tmp_name"],$targetFilePath);

// mysqli_query($conn,"insert into tbl_cart ( `cid`,`cimage`, `cname`, `cbrand`, `ccolour`, `cram`, `cstorage`, `cprocessor`, `cdesp`, `cprice`, `coffer`, `ctprice`) select `pid`,`pimage`, `pname`, `pbrand`, `pcolour`, `pram`, `pstorage`, `processor`, `desp`, `price`, `offer`, `tprice` from tbl_productdetail where pid='$id'");


// $targetDir = "../login/images2/";
// $targetFilePath = $targetDir . $pimage;
// move_uploaded_file($_FILES["pimage"]["tmp_name"],$targetFilePath);
// mysqli_query($conn,"SELECT `tbl_login`.loginId,`tbl_productdetail`.pid,`tbl_laptop`.lid where loginid='$'");
// mysqli_query($conn,"insert into `tbl_cart1`(`loginId`, `pid`) select `loginId` ,`pid` from tbl_productdetail where pid='$id'");
//mysqli_query($con,"insert into `tbl_bookings`(`login_id`, `id`) values('$user_id','$id')");?>


<script>
alert("Add your Details");
   

</script>
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
$n = $_SESSION['email'];


if(!isset($_SESSION['email'])){
    header("Location: bookyours.php");
    }
    
    $sql="select * from login_tb where email='$n'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $user_id=$row['login_id'];


$id=$_GET['id'];
//$targetDir= "images2/";
$sql=mysqli_query($con,"select * from flights_tb where id = $id");?>




<?php
include "db_connect.php";
//include 'nav6.php';
?>

<?php
if(isset($_POST["submit"])){
	$passport=$_POST["passport"];
		$dob=$_POST["dob"];
		$air_reward=$_POST["air_reward"];
		$adhaar_no=$_POST["adhaar_no"];
		$email=$_POST["email"];

		// $noofpass=$_POST["noofpass"];
		$Address=$_POST["Address"];
		// $adult=$_POST["adult"];
		// $children=$_POST["children"];
		// $infant=$_POST["infant"];
		// $oneorround=$_POST["oneorround"];
		// $class=$_POST["class"];
		// $package=$_POST["package"];
		//print_r($_FILES);
		
		
	//$image=$_FILES["image"]["name"];
	//move_uploaded_file($_FILES["image"]["tmp_name"],"pictures/".$image);
	//mysqli_query($con,"INSERT INTO `details_tb`(`passport`, `dob`, `air_reward`, `adhaar_no`, `noofpass`, `baggage`,`adult`,`children`,`infant`,`oneorround`,`class`,`package`) VALUES ('$passport','$dob','$air_reward','$adhaar_no','$noofpass','$baggage','$adult','$children','$infant','$oneorround','$class','$package')");
	mysqli_query($con,"INSERT INTO `details_tb`(`passport`, `dob`, `air_reward`, `adhaar_no`,`email`, `Address`) VALUES ('$passport','$dob','$air_reward','$adhaar_no','$email','$Address')");
	
	echo "<script language='javascript'>";
	echo "alert('Details added successfully')";

	
	echo "</script>";
	
}
?>
<!DOCTYPE HTML>
<html>

<head>
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
	<h1></h1>
	<div style="width: 90%; border-radius: 10px; border: 1px solid grey; margin-left: 60px; padding: 10px;">
		<form action="#" method="post" autocomplete="off">
			<div class="container-fluid">
				<div class="col-lg-12">
					<h2>Enter your Details before proceed to your payment</h2>
					
					<div class="form-group col-md-12">
						<label for="" class="control-label">Please Upload passport</label>
						<input type="file" class="form-control" name="passport" id="passport" onchange="displayImg(this,$(this),'cimg')">
					</div>

					<div class="form-group col-md-12">
					<!--	<img src="" alt="sample image" id="cimg">-->
					</div>	

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Date of birth</label>
								<input name="dob" id="dob" type="date" step="any" class="form-control"  reguired>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="">You had Any Air reward</label>
								<input name="air_reward" id="air_reward" type="text" step="any" class="form-control"  reguired>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Adhaar number</label>
								<input name="adhaar_no" id="adhaar_no" type="text" step="any" class="form-control"  reguired>
							</div>
						</div>
						<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Email</label>
								<input name="email" id="email" type="text" step="any" class="form-control"  reguired>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Enter your Address Details</label>
								<input name="Address" id="Address" type="text" step="any" class="form-control"  reguired>
							</div>
						</div>
					</div>
					<!-- Table Panel -->

			<!-- Table Panel -->
			<!-- <php
				if(isset($_POST['edit_submit'])){
					$sr= $_POST['edit_sr'];
					echo "<script>alert('".$sr."');</script>";
				}
			?> -->
			
			<!-- Table Panel -->

					<!-- <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Enter Number of passengers</label>
								<input name="noofpass" id="noofpass" type="text" step="any" class="form-control"  reguired>
							</div>
						</div>

						<div class="col-md-6">
							<div class="row">
								<div class="form-group col-md-2">
									<select class="form-control" id="adult" name="adult">
										<option value="">Adult(12+ Yrs)</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>         
										<option value="4">4</option>
										<option value="5">5+</option>
									</select>
								</div>
								<div class="form-group col-md-2">
									<select class="form-control" id="children" name="children">
										<option value="">Children(2-11 Yrs)</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>         
										<option value="4">4</option>
										<option value="5">5+</option>     
									</select>
								</div>
								<div class="form-group col-md-2">
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
						</div>
					</div>

					<div class="row col-md-6">
						<label>Select your fare</label>
						<div class="col-md-6">
							<div class="form-group">
								<label for="a-option">One Way</label>
								<input type="radio" id="oneorround1" name="oneorround" value="one way">
								<div class="check"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="b-option">Round-Trip</label>
								<input type="radio" id="oneorround2" name="oneorround" value="Round Trip">
								<div class="check"><div class="inside"></div></div>
							</div>
						</div>
					</div>				

					<div class="row class-md-6">
						<label>Select your class</label>
							<div class="col-md-2">
								<div class="form-group">
									<input type="radio" id="class" name="class" value="Bussiness">
									<label for="a-option">Bussiness</label>
									<div class="check"></div>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<input type="radio" id="class" name="class" value="Premium">
									<label for="b-option">premium</label>
									<div class="check"><div class="inside"></div></div>
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group">
									<input type="radio" id="class" name="class" value="Economy">
									<label for="b-option">Economy</label>
									<div class="check"><div class="inside"></div></div>
								</div>
							</div>
						</div>
					</div>

					<div class="clear"></div>

					<div class="row col-md-12">
						<label>Select package</label>
						<div class="col-md-4">
							<div class="form-group">
								<input type="radio" id="package" name="package" value="Basic">
								<u><span>Basic</span></u><br>
								<ul>
									<li>*Flight</li>
									<li>*Additional Checked bag</li>
									<li>*Meal</li>
									<li>*Seat </li>
									<li>*Modification</li>
									<li>*Cancellation upto 8h</li>
								</ul>
								<div class="check"></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="radio" id="package" name="package" value="Value">
								<u><span>Value</span></u><br>
								<ul>
									<li>*Flight</li>
									<li>*Additional Checked bag</li>
									<li>*Meal Sandwich and water </li>
									<li>*Seat </li>
									<li>*Modification</li>
									<li>*Cancellation</li>
								</ul>
								<div class="check"><div class="inside"></div></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="radio" id="package" name="package" value="Extra">
								<u><span for="b-option">Extra</span></br></u>
								*Flight</br>
								*Additional Checked bag</br>
								*Any Meal </br>
								*Any Seat </br>
								*Modification</br>
								*Cancellation</br>
								<div class="check"><div class="inside"></div></div>
							</div>
						</div>
					</div> -->
					<script>
					const adhaarInput = document.getElementById("adhaar_no");
const adhaarRegex = /^\d{12}$/;

adhaarInput.addEventListener("input", () => {
  const adhaarValue = adhaarInput.value.trim();
  if (adhaarRegex.test(adhaarValue)) {
    // Valid input
    adhaarInput.setCustomValidity("");
  } else {
    // Invalid input
    adhaarInput.setCustomValidity("Please enter a valid Aadhaar number");
  }
});
				</script>	
				<script>
				const emailInput = document.getElementById("email");
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

emailInput.addEventListener("input", () => {
  const emailValue = emailInput.value.trim();
  if (emailRegex.test(emailValue)) {
    // Valid input
    emailInput.setCustomValidity("");
  } else {
    // Invalid input
    emailInput.setCustomValidity("Please enter a valid email address");
  }
});

</script>


					<input type="submit" style="width: 100px; color: white;" name="submit" value="Submit" class="form-control btn btn-success">
				</div>
				
			<!--</div>-->
		</form> 

		
		 <form action="#" method="POST"> 
<!-- <input type="hidden"name="id"value="<= $row['id']?>"> -->
<input type="hidden" id="name1" value="<?php echo $n; ?>">

<div class="logo">
    <h3></h3>
</div>
<div class="cart">
   <div class="cart-top">
      <div class="cart-experience">
         <h4></h4>
      </div>
      <div class="cart-login">
         <div class="cart-login-img">
            <!--<img src="imagesbooks/loggin_man.png">-->
         </div>
         <div class="cart-login-text">
            <h5></h5>
         </div>     
          <!--<div class="lang_list">
                <select tabindex="4" class="dropdown">
                    <option value="" class="label" value=""></option>
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                </select>
             </div>      -->
         <div class="clear"> </div>
      </div>
     <div class="clear"> </div>
   </div>

   <div class="cart-bottom">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Airline</th>
					<th scope="col">flightno</th>
					<th scope="col">DepartureLocation</th>
					<th scope="col">Arrivallocation</th>
					<th scope="col">Departure date and time</th>
					<th scope="col">Arrival date and time</th> 
					<th scope="col">Proceed to payment</th> 

				</tr>
			</thead>
			<tbody>
				
				<?php
					//$airport = $conn->query("SELECT * FROM airport_list ");
					//while($row = $airport->fetch_assoc()){
						//$aname[$row['id']] = ucwords($row['airport'].', '.$row['location']);
					//}
					$id=$_REQUEST['id'];

					$qry = $con->query("SELECT * FROM tbl_bookings where bk_id=$id");
					while($row = $sql->fetch_assoc()):
						// $a= 'images1/'.$row["cimage"];
						
						//$booked = $conn->query("SELECT * FROM booked_flight where id = ".$row['id'])->num_rows;
					$r=$row['price'];
				?>
					<tr>
						<!--<th scope="row">1</th>-->
						<td><?php echo $row['Airline'] ?></td>
						<td><?php echo $row['flightNo'] ?></td> 
						<td><?php echo $row['DepartureLocation'] ?></td>
						<td><?php echo $row['Arrivallocation'] ?></td>
						<td><?php echo $row['Departuredate'] ?></td>
						<td><?php echo $row['arrivaldate'] ?></td>
						<!--<td><input type="button" id="rzp-button1"name="btn"value="pay now"class="btn btn-primary" onclick="pay_now()"/></td>-->
						<td><a href="email.php?id=<?php echo $row['id']?>"> <h5>Select your seats</h5></td>

					</tr>
						
					<!-- <td class="text-right">
					<img src="<?php echo $a ?> " style="width:150px; height:150px;"></td>-->
					
				
					<!-- <td class="text-right">-->
					<!-- <php echo number_format($row['price'],2) ?></td>-->
                <?php endwhile;  ?>
			</tbody>
		</table>
	</div>
	</div>
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
									<div class="logo">
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
										<li><a href="pricedata-update.php"><i class="fa fa-tachometer"></i> <span>Predict your fare</span></a></li>

										<!-- <li><a href="bookflight.php"><i class="fa fa-tachometer"></i> <span>Book your flight</span></a></li> -->
										<!-- <li><a href="vcart1.php"><i class="fa fa-tachometer"></i> <span>View booking status</span></a></li> -->
										<li><a href="packages.php"><i class="fa fa-tachometer"></i> <span>View All flights</span></a></li>
										<li><a href="preferedbooked.php"><i class="fa fa-tachometer"></i> <span>Bookings</span></a></li>
										<li><a href="offers.php"><i class="fa fa-tachometer"></i> <span>view offers</span></a></li>
										<li><a href="viewairlines.php"><i class="fa fa-tachometer"></i> <span>View All Airlines</span></a></li>
										<li><a href="viewairport.php"><i class="fa fa-tachometer"></i> <span>Airport list</span></a></li>
										<li><a href="viewflights.php"><i class="fa fa-tachometer"></i> <span>View seat map</span></a></li>
										<li><a href="http://127.0.0.1:8000/"><i class="fa fa-tachometer"></i> <span>View prices of airlines</span></a></li>

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

