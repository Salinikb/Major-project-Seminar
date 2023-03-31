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
						<!-- <div class="top_bg">
							
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
								</div> -->
							
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
                        <h2 class="float-left">Sentimental Analysis</h2>
                        
                       <a href="chart.php" class="btn btn-info float-right mr-2">Show graph</a>
                        <a href="index2.php" class="btn btn-secondary float-right mr-2">Back</a>
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
                    $orderBy = array('name', 'view', 'comments', 'status');
                    $order = 'f_id';
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
                    $sql = "SELECT * FROM feedback_tb ORDER BY $order $sort";
                    $count_pages = "SELECT * FROM feedback_tb";


                    if(!empty($_GET['search'])) {
                        $search = ($_GET['search']);
                        $sql = "SELECT * FROM feedback_tb
                            WHERE CONCAT_WS (name,view,comments,status)
                            LIKE '%$search%'
                            ORDER BY $order $sort
                            LIMIT $offset, $no_of_records_per_page";
                        $count_pages = "SELECT * FROM feedback_tb
                            WHERE CONCAT_WS (name,status)
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
                                    
                                        echo "<th><a href=?search=$search&sort=&order=temperature&sort=$sort>Email</th>";
										echo "<th><a href=?search=$search&sort=&order=accelerometer_x&sort=$sort>status</th>";
										
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                    echo "<td>" . $row['name'] . "</td>"; echo "<td>";
								if($row['status']=="positive")
								{
									echo "<b><font color='green'>Feedback is positive</font></b>. <br>";
									
								}
								elseif($row['status']=="neutral")
								{
									echo "<b><font color='blue'>The Feedback is Average</font></b>";
									
								}
								else
								{
									echo "<b><font color='red'>The Feedback is worst!!</font>";
									
								}
								
								echo "</td>";
                                        echo "<td>";
								
                                            //echo "<a href='sensor_data-read.php?sid=". $row['sid'] ."' title='View Record' data-toggle='tooltip'><i class='far fa-eye'></i></a>";
                                            // echo "<a href='pricedata-update.php?f_id=". $row['f_id'] ."' title='Find price' data-toggle='tooltip'>  Find Flight Price <i class='far fa-edit'></i></a>";
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
   


