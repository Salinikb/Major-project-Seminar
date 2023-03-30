<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6b773fe9e4.js" crossorigin="anonymous"></script>
    <style type="text/css">
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 5px;
        }
        body {
            font-size: 14px;
        }
    </style>
	
 <?php require_once('db_connect.php'); ?>
  <!DOCTYPE html>
 <html lang="en" class="" style="height: auto;">
 <!-- <php require_once('inc/header.php') ?> -->
 
</head>
<body>
<div class="header-section">
			<!-- top_bg -->
						<div class="top_bg">
							
								<div class="header_top">
									<div class="top_right">
										<ul>
											<!--<li><a href="contact.html">help</a></li>|
											<li><a href="contact.html">Contact</a></li>|-->
											<li><a href="">Hai Athul</a></li>|
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
   <body class="sidebar-mini layout-fixed control-sidebar-slide-open layout-navbar-fixed sidebar-mini-md sidebar-mini-xs" data-new-gr-c-s-check-loaded="14.991.0" data-gr-ext-installed="" style="height: auto;">
     <div class="wrapper">
      <!-- <php require_once('inc/topBarNav.php') ?>
      <php require_once('inc/navigation.php') ?> -->
      
       <!-- Content Wrapper. Contains page content -->
       <div class="content-wrapper pt-3" style="min-height: 567.854px;">
      
       
    <section class="pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="float-left">Price Details</h2>
                        
                       <a href="pricedata-update.php" class="btn btn-info float-right mr-2">Reset View</a>
                        <a href="index.php" class="btn btn-secondary float-right mr-2">Back</a>
                    </div>

                    <div class="form-row">
                        <form action="pricedata-index.php" method="get">
                        <div class="col">
                          <!-- <input type="text" class="form-control" placeholder="Search this table" name="search"> -->
                        </div>
                    </div>
                        </form>
                    <br>

                    <?php
                    // Include config file
                    require_once "db_connect.php";
                    

                    // //Get current URL and parameters for correct pagination
                    // $protocol = $_SERVER['SERVER_PROTOCOL'];
                    // $domain     = $_SERVER['HTTP_HOST'];
                    // $script   = $_SERVER['SCRIPT_NAME'];
                    // $parameters   = $_SERVER['QUERY_STRING'];
                    // $protocol=strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https')
                    //             === FALSE ? 'http' : 'https';
                    // $currenturl = $protocol . '://' . $domain. $script . '?' . $parameters;

                    //Pagination
                    
                    // $total_pages_sql = "SELECT COUNT(*) FROM predicton_tb";
                    // $result = mysqli_query($con,$total_pages_sql);
                    // $total_rows = mysqli_fetch_array($result)[0];

                    //Column sorting on column name
                    $orderBy = array('DepartureLocation', 'Arrivallocation', 'Departuredate', 'price');
                    $order = 'id';
                    if (isset($_GET['order']) && in_array($_GET['order'], $orderBy)) {
                            $order = $_GET['order'];
                        }

                    //Column sort order
                    $sortBy = array('asc', 'desc'); $sort = 'desc';
                    if (isset($_GET['sort']) && in_array($_GET['sort'], $sortBy)) {
                          if($_GET['sort']=='asc') {
                            $sort='desc';
                            }
                    else {
                        $sort='asc';
                        }
                    }






                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM flights_tb ORDER BY $order $sort";
                    $count_pages = "SELECT * FROM flights_tb";


                    if(!empty($_GET['search'])) {
                        $search = ($_GET['search']);
                        $sql = "SELECT * FROM prediction_tb
                            WHERE CONCAT_WS (DepartureLocation,Arrivallocation,price,status)
                            LIKE '%$search%'
                            ORDER BY $order $sort
                            LIMIT $offset, $no_of_records_per_page";
                        $count_pages = "SELECT * FROM sensor_data
                            WHERE CONCAT_WS (DepartureLocation,Arrivallocation,price,status)
                            LIKE '%$search%'
                            ORDER BY $order $sort";
                    }
                    else {
                        $search = "";
                    }

                    if($result = mysqli_query($con, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            if ($result_count = mysqli_query($con, $count_pages)) {
                           }
                            // $number_of_results = mysqli_num_rows($result_count);
                            // echo " " . $number_of_results . " results - Page " . $pageno . " of " . $total_pages;

                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                    
                                        echo "<th><a href=?search=$search&sort=&order=temperature&sort=$sort>DepartureLocation</th>";
										echo "<th><a href=?search=$search&sort=&order=accelerometer_x&sort=$sort>Arrivallocation</th>";
										echo "<th><a href=?search=$search&sort=&order=smoke&sort=$sort>price</th>";
										echo "<th><a href=?search=$search&sort=&order=status&sort=$sort>status</th>";
										
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                    echo "<td>" . $row['DepartureLocation'] . "</td>";echo "<td>" . $row['Arrivallocation'] . "</td>";echo "<td>" . $row['price'] . "</td>";echo "<td>";
								if($row['status']==0)
								{
									echo "<b><font color='blue'>Fresh Data</font></b>. <br>Waiting for Machine Learning Prediction";
									
								}
								elseif($row['status']=="high")
								{
									echo "<b><font color='red'>The price is high</font></b>";
									
								}
								else
								{
									echo "<b><font color='green'>The price is low!!</font>";
									
								}
								
								echo "</td>";
                                        echo "<td>";
								
                                            //echo "<a href='sensor_data-read.php?sid=". $row['sid'] ."' title='View Record' data-toggle='tooltip'><i class='far fa-eye'></i></a>";
                                            echo "<a href='pricedata-update.php?id=". $row['id'] ."' title='Find price' data-toggle='tooltip'>  Find Flight Price <i class='far fa-edit'></i></a>";
                                            //echo "<a href='sensor_data-delete.php?sid=". $row['sid'] ."' title='Delete Record' data-toggle='tooltip'><i class='far fa-trash-alt'></i></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                            echo "</table>";
?>
                                <!-- <ul class="pagination" align-right>
                                <?php
                                    $new_url = preg_replace('/&?pageno=[^&]*/', '', $currenturl);
                                 ?>
                                    <li class="page-item"><a class="page-link" href="<?php echo $new_url .'&pageno=1' ?>">First</a></li>
                                    <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                        <a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo $new_url ."&pageno=".($pageno - 1); } ?>">Prev</a>
                                    </li>
                                    <li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                        <a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo $new_url . "&pageno=".($pageno + 1); } ?>">Next</a>
                                    </li>
                                    <li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                        <a class="page-item"><a class="page-link" href="<?php echo $new_url .'&pageno=' . $total_pages; ?>">Last</a>
                                    </li>
                                </ul> -->
<?php
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        // echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    // Close connection
                    mysqli_close($con);
                    ?>
                </div>
            </div>
        </div>
    </section>
		
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
         <!-- /.content -->
   <div class="modal fade" id="confirm_modal" role='dialog'>
     <div class="modal-dialog modal-md modal-dialog-centered rounded-0" role="document">
       <div class="modal-content">
         <div class="modal-header">
         <h5 class="modal-title">Confirmation</h5>
       </div>
       <div class="modal-body">
         <div id="delete_content"></div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-primary btn-flat" id='confirm' onclick="">Continue</button>
         <button type="button" class="btn btn-secondary btn-flat" data-dismiss="modal">Close</button>
       </div>
       </div>
     </div>
   </div>
   <div class="modal fade rounded-0" id="uni_modal" role='dialog'>
     <div class="modal-dialog modal-md modal-dialog-centered rounded-0" role="document">
       <div class="modal-content rounded-0">
         <div class="modal-header rounded-0">
         <h5 class="modal-title"></h5>
       </div>
       <div class="modal-body rounded-0">
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-primary btn-flat" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
         <button type="button" class="btn btn-secondary btn-flat" data-dismiss="modal">Cancel</button>
       </div>
       </div>
     </div>
   </div>
   <div class="modal fade rounded-0" id="uni_modal_right" role='dialog'>
     <div class="modal-dialog modal-full-height  modal-md rounded-0" role="document">
       <div class="modal-content">
         <div class="modal-header">
         <h5 class="modal-title"></h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span class="fa fa-arrow-right"></span>
         </button>
       </div>
       <div class="modal-body">
       </div>
       </div>
     </div>
   </div>
   <div class="modal fade rounded-0" id="viewer_modal" role='dialog'>
     <div class="modal-dialog modal-md rounded-0" role="document">
       <div class="modal-content">
               <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
               <img src="" alt="">
       </div>
     </div>
   </div>
       </div>
       <!-- /.content-wrapper -->
   
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

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
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts 
			<div class="header-section">
			<!-- top_bg 
						<div class="top_bg">
							
								<div class="header_top">
									<div class="top_right">
										<ul>
											<!--<li><a href="contact.html">help</a></li>|
											<li><a href="contact.html">Contact</a></li>|-->
											<!-- <li><a href="">Hai Athul</a></li>| -->
											<!--<li><a href="checkout.html"></a></li>
										</ul>
									</div>
									<div class="top_left">
										<h2><span></span> Call us : 032 2352 782</h2>
									</div>
										<div class="clearfix"> </div>
								</div>
							
						</div>
					<div class="clearfix"></div>-->
				<!-- /top_bg 
				</div>
				<div class="header_bg">
						
							<div class="header">
								<div class="head-t">
									<div class="logo">
										<a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""> </a>
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
			<!--/sidebar-menu
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="asyourneed.php"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
										<li><a href="pricedata-update.php"><i class="fa fa-tachometer"></i> <span>Search your fare</span></a></li>

										<li><a href="bookflight.php"><i class="fa fa-tachometer"></i> <span>Book your flight</span></a></li>
										<li><a href="vcart1.php"><i class="fa fa-tachometer"></i> <span>View booking status</span></a></li>
										<li><a href="bookyours.php"><i class="fa fa-tachometer"></i> <span>View All flights</span></a></li>
										<li><a href="preferedbooked.php"><i class="fa fa-tachometer"></i> <span>Bookings</span></a></li>
										<li><a href="offers.php"><i class="fa fa-tachometer"></i> <span>view offers</span></a></li>
										<li><a href="viewairlines.php"><i class="fa fa-tachometer"></i> <span>View All Airlines</span></a></li>
										<li><a href="viewairport.php"><i class="fa fa-tachometer"></i> <span>Airport list</span></a></li>
										<li><a href="viewflights.php"><i class="fa fa-tachometer"></i> <span>View seat map</span></a></li>
										<li><a href="http://127.0.0.1:8000/"><i class="fa fa-tachometer"></i> <span>View prices of airlines</span></a></li>

										<!-- <li><a href="feedback.php"><i class="fa fa-tachometer"></i> <span>Give your feedback</span></a></li> -->
										<!-- <button ><a href='logout.php'>LOGOUT</a></button> -->
										
										
										
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
