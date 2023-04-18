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
// alert("Add your Details");
   

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
	<link rel="stylesheet" type="text/css" href="yourstyle.css">
	<!--//fonts-->
</head>

<body>
	<h1></h1>
	<div style="width: 90%; border-radius: 10px; border: 1px solid grey; margin-left: 60px; padding: 10px;">
		














    
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
						<td><input type="button" id="rzp-button1"name="btn"value="pay now"class="btn btn-primary" onclick="pay_now()"/></td>
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
									<?php

include "db_connect.php";
$n = $_SESSION['email'];

// Initialize variables
$adults = isset($_POST['adults']) ? $_POST['adults'] : 0;
$children = isset($_POST['children']) ? $_POST['children'] : 0;
$infants = isset($_POST['infants']) ? $_POST['infants'] : 0;
$seats = array();
if ($adults < 0 || $children < 0 || $infants < 0) {
	// Handle validation error
	echo 'Please enter a valid number of adults, children, and infants.';
	exit;
  }
  

// Create an array of available seats
for ($i = 1; $i <= 100; $i++) {
	$seats[$i] = 'available';
}

// Retrieve the booked seats from the database
$sql = "SELECT seats FROM seats_tb";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$booked_seats = explode(",", $row['seats']);
		foreach ($booked_seats as $seat) {
			if (isset($seats[$seat])) {
				$seats[$seat] = 'unavailable';
			}
		}
	}
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
	// Loop through each seat to see if it is selected
	$selected_seats = array();
	foreach ($seats as $seat => $status) {
		if (isset($_POST['seat'][$seat])) {
			$selected_seats[] = $seat;
		}
	}

	// Check if the number of selected seats is equal to the sum of adults, children, and infants
	$total_passengers = $adults + $children + $infants;
	// Calculate the total fare based on the number of passengers
$fare_per_person = 10000; // Set the fare per person
$total_fare = $total_passengers * $fare_per_person;

// Increase the fare for each child and infant
$child_fare = $fare_per_person * 0.5; // Set the fare for a child (50% of adult fare)
$infant_fare = $fare_per_person * 0.2; // Set the fare for an infant (20% of adult fare)
$total_fare += $children * $child_fare + $infants * $infant_fare;

 echo "Total fare: $" . $total_fare;

	if (count($selected_seats) != $total_passengers) {
		echo "Error: Please select $total_passengers seats.<br>";
	} else {
		// Disable already selected seats and mark them as unavailable
		foreach ($selected_seats as $seat) {
			if ($seats[$seat] == 'available') {
				$seats[$seat] = 'unavailable';
			}
		}

		// Construct the SQL query to insert the form data into the database
	   // Construct the SQL query to insert the form data into the database
		$sql = "INSERT INTO seats_tb (adults, children, infants, name, total_fare,seats) VALUES ('$adults', '$children', '$infants','$n', '";
		$seat_arr = array();
		foreach ($seats as $seat => $status) {
		if ($status == 'unavailable') {
			array_push($seat_arr, $seat);
		 }
		}
		$seats_str = implode(",", $seat_arr);
		$sql .= $seats_str . "', '$total_fare')";

// Execute the SQL query to insert the form data into the database
		if (mysqli_query($con, $sql)) {
		echo "Reservation created successfully";
	} else {
		 echo "Error creating reservation: " . mysqli_error($con);
	}

	}

	// Close the database connection
	mysqli_close($con);
}
?>
<form method="post" action="">

<label for="adults">Adults:</label>
  <input type="number" name="adults" id="adults" value="<?php echo $adults; ?>"><br><br>
  <label for="children">Children:</label>
  <input type="number" name="children" id="children" value="<?php echo $children; ?>"><br><br>
  <label for="infants">Infants:</label>
  <input type="number" name="infants" id="infants" value="<?php echo $infants; ?>"><br><br>

  <!-- <div class="seat-container">
    <php
    // Loop through each seat to display it
    foreach ($seats as $seat => $status) {
      // Determine the CSS class to use for the seat
      $class = $status == 'available' ? 'seat available' : 'seat unavailable';
      // Output the seat HTML
      echo '<div class="' . $class . '">';
      echo '<input type="checkbox" name="seat[' . $seat . ']" id="seat' . $seat . '" value="' . $seat . '" ' . ($status == 'unavailable' ? 'disabled' : '') . '>';
      echo '<label for="seat' . $seat . '">' . $seat . '</label>';
      echo '</div>';

      // Add a new row after every 6 seats
      if ($seat % 20 == 0) {
        echo '<br>';
      }
    }
    ?>
  </div> -->
  <div class="seat-container">
  <?php
  // Loop through each seat to display it
  // Loop through each seat to display it
foreach ($seats as $seat => $status) {
	// Determine the CSS class to use for the seat
	$class = $status == 'available' ? 'seat available' : 'seat unavailable';
	// Determine the label to use for the seat
	$label = $seat % 10 == 1 ? 'Window' : 'Aisle';


	// Output the seat HTML
	echo '<div class="' . $class . '">';
	echo '<input type="checkbox" name="seat[' . $seat . ']" id="seat' . $seat . '" value="' . $seat . '" ' . ($status == 'unavailable' ? 'disabled' : '') . '>';
	echo '<label for="seat' . $seat . '">' . $seat . ' (' . $label . ')</label>';
	echo '</div>';
  
	// Add a new row after every 6 seats
	if ($seat % 6 == 0) {
	  echo '<br>';
	}
  }
  
  ?>
</div>


  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

 <style>
        .seat-container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

.seat {
  display: inline-block;
  border: 1px solid black;
  width: 50px;
  height: 50px;
  margin: 5px;
  text-align: center;
  vertical-align: middle;
  font-size: 16px;
  line-height: 50px;
}
.seat.available {
    background-color: #5cb85c;
    color: #fff;
  }

  .seat.unavailable {
    background-color: #d9534f;
    color: #fff;
  }
   </style>

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
										
										
										<!-- <li><a href="asyourneed.php"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
										<li><a href="#"><i class="fa fa-tachometer"></i> <span>View booking status</span></a></li>
										<li><a href="bookyours.php"><i class="fa fa-tachometer"></i> <span>View All flights</span></a></li>
										<li><a href="preferedbooked.php"><i class="fa fa-tachometer"></i> <span>Bookings</span></a></li>
										<li><a href="offers.php"><i class="fa fa-tachometer"></i> <span>view offers</span></a></li>
										
										<li><a href="viewairlines.php"><i class="fa fa-tachometer"></i> <span>view all airlines</span></a></li>
										<li><a href="viewairpot.php"><i class="fa fa-tachometer"></i> <span>view all airports</span></a></li>

										<button ><a href='logout.php'>LOGOUT</a></button> -->

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

<!-- </html>



<html> -->
<head>
<!--  -->
<body>

	

			<?php

include "db_connect.php";
$n = $_SESSION['email'];

// Initialize variables
$adults = isset($_POST['adults']) ? $_POST['adults'] : 0;
$children = isset($_POST['children']) ? $_POST['children'] : 0;
$infants = isset($_POST['infants']) ? $_POST['infants'] : 0;
$seats = array();
if ($adults < 0 || $children < 0 || $infants < 0) {
	// Handle validation error
	echo 'Please enter a valid number of adults, children, and infants.';
	exit;
  }
  

// Create an array of available seats
for ($i = 1; $i <= 100; $i++) {
	$seats[$i] = 'available';
}

// Retrieve the booked seats from the database
$sql = "SELECT seats FROM seats_tb";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$booked_seats = explode(",", $row['seats']);
		foreach ($booked_seats as $seat) {
			if (isset($seats[$seat])) {
				$seats[$seat] = 'unavailable';
			}
		}
	}
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
	// Loop through each seat to see if it is selected
	$selected_seats = array();
	foreach ($seats as $seat => $status) {
		if (isset($_POST['seat'][$seat])) {
			$selected_seats[] = $seat;
		}
	}

	// Check if the number of selected seats is equal to the sum of adults, children, and infants
	$total_passengers = $adults + $children + $infants;
	// Calculate the total fare based on the number of passengers
$fare_per_person = 1000; // Set the fare per person
$total_fare = $total_passengers * $fare_per_person;

// Increase the fare for each child and infant
$child_fare = $fare_per_person * 0.5; // Set the fare for a child (50% of adult fare)
$infant_fare = $fare_per_person * 0.2; // Set the fare for an infant (20% of adult fare)
$total_fare += $children * $child_fare + $infants * $infant_fare;

echo "Total fare: $" . $total_fare;

	if (count($selected_seats) != $total_passengers) {
		echo "Error: Please select $total_passengers seats.<br>";
	} else {
		// Disable already selected seats and mark them as unavailable
		foreach ($selected_seats as $seat) {
			if ($seats[$seat] == 'available') {
				$seats[$seat] = 'unavailable';
			}
		}

		// Construct the SQL query to insert the form data into the database
	   // Construct the SQL query to insert the form data into the database
		$sql = "INSERT INTO seats_tb (adults, children, infants, seats, total_fare) VALUES ('$adults', '$children', '$infants', '";
		$seat_arr = array();
		foreach ($seats as $seat => $status) {
		if ($status == 'unavailable') {
			array_push($seat_arr, $seat);
		 }
		}
		$seats_str = implode(",", $seat_arr);
		$sql .= $seats_str . "', '$total_fare')";

// Execute the SQL query to insert the form data into the database
		if (mysqli_query($con, $sql)) {
		echo "Reservation created successfully";
	} else {
		 echo "Error creating reservation: " . mysqli_error($con);
	}

	}

	// Close the database connection
	mysqli_close($con);
}
?>
<form method="post" action="">

<label for="adults">Adults:</label>
  <input type="number" name="adults" id="adults" value="<?php echo $adults; ?>"><br><br>
  <label for="children">Children:</label>
  <input type="number" name="children" id="children" value="<?php echo $children; ?>"><br><br>
  <label for="infants">Infants:</label>
  <input type="number" name="infants" id="infants" value="<?php echo $infants; ?>"><br><br>

  <div class="seat-container">
    <?php
    // Loop through each seat to display it
    foreach ($seats as $seat => $status) {
      // Determine the CSS class to use for the seat
      $class = $status == 'available' ? 'seat available' : 'seat unavailable';
      // Output the seat HTML
      echo '<div class="' . $class . '">';
      echo '<input type="checkbox" name="seat[' . $seat . ']" id="seat' . $seat . '" value="' . $seat . '" ' . ($status == 'unavailable' ? 'disabled' : '') . '>';
      echo '<label for="seat' . $seat . '">' . $seat . '</label>';
      echo '</div>';

      // Add a new row after every 6 seats
      if ($seat % 20 == 0) {
        echo '<br>';
      }
    }
    ?>
  </div>
  <br><br>
  <input type="submit" name="submit" value="Book">
</form>

  <style>
        .seat-container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

.seat {
  display: inline-block;
  border: 1px solid black;
  width: 50px;
  height: 50px;
  margin: 5px;
  text-align: center;
  vertical-align: middle;
  font-size: 16px;
  line-height: 50px;
}
  </style>

