























<?php
include "db_connect.php";
session_start();
?>

<?php
if (isset($_POST['delete'])) {
    $bk_id= $_POST['book_id'];
    $del_res= mysqli_query($con, "DELETE FROM tbl_bookings WHERE bk_id = '$bk_id'");
    if($del_res){
        echo "<script>alert('canceled !!');</script>";
    }
   else{
       echo "<script>alert('flight Canceled !!');</script>";
    }
    echo "<script>window.location.href = 'vcart1.php';</script>";
}
?>
<?php
$name = $_SESSION['email'];
$sql="select * from login_tb where email='$name'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $user_id=$row['login_id'];


if(!isset($_SESSION['email'])){
    header("Location: bookyours.php");
    }
    


// $id=$_REQUEST['pid'];
// $targetDir= "images2/";
// $sql=mysqli_query($conn,"select * from tbl_productdetail where pid = $id");
// $img=mysqli_fetch_assoc($sql); 

// $pimage=addslashes(@file_get_contents($img['pimage']));

// $targetFilePath = $targetDir . $pimage;

// move_uploaded_file($_FILES["pimage"]["tmp_name"],$targetFilePath);

// mysqli_query($conn,"insert into tbl_cart ( `cid`,`cimage`, `cname`, `cbrand`, `ccolour`, `cram`, `cstorage`, `cprocessor`, `cdesp`, `cprice`, `coffer`, `ctprice`) select `pid`,`pimage`, `pname`, `pbrand`, `pcolour`, `pram`, `pstorage`, `processor`, `desp`, `price`, `offer`, `tprice` from tbl_productdetail where pid='$id'");


// $targetDir = "../login/images2/";
// $targetFilePath = $targetDir . $pimage;
// move_uploaded_file($_FILES["pimage"]["tmp_name"],$targetFilePath);
// mysqli_query($conn,"SELECT `tbl_login`.loginId,`tbl_productdetail`.pid,`tbl_laptop`.lid where loginid='$'");
// mysqli_query($conn,"insert into `tbl_cart1`(`loginId`, `pid`) select `loginId` ,`pid` from tbl_productdetail where pid='$id'");
// mysqli_query($conn,"insert into `tbl_cart1`(`loginId`, `pid`) values('$user_id','$id')");?>

<script>
alert("View you bookings");

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
<title>View Your Booking Status</title>
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






















<!------------------------------------->
<form action="#" method="POST">
<!--<input type="hidden"name="id"value="<= $row['id']?>">-->
<div class="logo">
    <h3>MY Bookings</h3>
</div>
<div class="cart">
   <div class="cart-top">
      <div class="cart-experience">
         <h4>Your bookings </h4>
      </div>
      <div class="cart-login">
         <div class="cart-login-img">
            <img src="imagesbooks/loggin_man.png">
         </div>
         <div class="cart-login-text">
            <h5>USER</h5>
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
     <div class="table">
        <table>
            <thead>
              <tr  class="main-heading">    
                            
              <th>Airline Name</th>
              <th class="long-txt">Airline</th>
              <th class="long-txt">flightno</th>
		 			<th class="long-txt">DepartureLocation</th>
		 			<th class="long-txt">Arrivallocation</th>
		 			<th class="long-txt">Departure date and time</th>
		 			<th class="long-txt">Arrival date and time</th> 		
					 
					 <th class="long-txt">price</th> 	
					 <th class="long-txt">Action</th>
					 			 			
					 			 	

             </tr>
                        
                    </thead>
                    <tbody>
                        <?php
                            

                            // $qry = $conn->query("SELECT * FROM tbl_cart1 where loginId=$user_id");
                            // $qry = $conn->query("SELECT * FROM tbl_productdetail p1 ,tbl_cart1 c1 where c1.pid=p1.pid,loginId=$user_id");
                            $qry = $con->query("SELECT * FROM flights_tb p1 JOIN tbl_bookings c1 ON c1.id=p1.id WHERE c1.login_id=$user_id");
                            while($row = $qry->fetch_assoc()):
                               // $a= 'images1/'.$row["pimage"];
                                
                                //$booked = $conn->query("SELECT * FROM booked_flight where id = ".$row['id'])->num_rows;

                         ?>
                         <tr>
                            
                            
                            <td class="text-right">
                            <img src="<?php echo $a ?> " style="width:150px; height:150px;"></td>
                             <td class="text-right">
                             <?php echo $row['Airline'] ?></td>
                             <td class="text-right">
                             <?php echo $row['flightNo'] ?></td> 
							 <td class="text-right">
							 <?php echo $row['DepartureLocation'] ?></td>
							 <td class="text-right">
							 <?php echo $row['Arrivallocation'] ?></td>
							 <td class="text-right">
							 <?php echo $row['Departuredate'] ?></td>
							 <td class="text-right">
							 <?php echo $row['arrivaldate'] ?></td>
                             <td class="text-right">
                                <?php echo number_format($row['price'],2) ?></td>
						 	
                                <td>
						 		
						 		
                                 <!-- <b><font color="#00000000">
                                         <a href="delete?id=<?php echo $row['bk_id']?>">cancel</a>
                                     </font></b></td>-->
                                     <form action="vcart1.php" method="POST">
                                         <input type="text" name="book_id" value="<?php echo $row['bk_id']; ?>" hidden>
                                         <input type="submit" name="delete" value="cancel">
                                     </form>
                            

                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    
</div>
















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
										<li><a href="#"><i class="fa fa-tachometer"></i> <span>View booking status</span></a></li>
										<li><a href="bookyours.php"><i class="fa fa-tachometer"></i> <span>View All flights</span></a></li>
										<li><a href="preferedbooked.php"><i class="fa fa-tachometer"></i> <span>Bookings</span></a></li>
										<li><a href="offers.php"><i class="fa fa-tachometer"></i> <span>view offers</span></a></li>
										
										
										
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

</html>