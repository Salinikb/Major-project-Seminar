
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
	//including the database connection file
	include_once("db_connect.php");

	$a="image/";


	if(isset($_POST["submit"])){
		$airlines=$_POST["airlines"];
		$image=$_FILES["image"]["name"];
		$b=$a.$image;
		//print_r($_FILES);
		
		move_uploaded_file($_FILES["image"]["tmp_name"],$b);
		
		$result=mysqli_query($con,"INSERT INTO `airlines_tb`( `airlines`,`image`) VALUES ('$airlines','$image')");
	}

	if(isset($_POST["edit_airlines_submit"])){
		$edit_airlines_id= $_POST['edit_airlines_id'];
		$edit_airlines_name=$_POST["edit_airlines_name"];
		if(!empty($_FILES['edit_airlines_newimage']['tmp_name'])){
			$image=$_FILES["edit_airlines_newimage"]["name"];
			$b=$a.$image;
			//print_r($_FILES);
			move_uploaded_file($_FILES["edit_airlines_newimage"]["tmp_name"],$b);
		}
		else{
			$image=$_POST['edit_airlines_currimg'];
		}
		$result=mysqli_query($con,"UPDATE airlines_tb SET airlines='$edit_airlines_name',image='$image' WHERE id=$edit_airlines_id");
		if($result){
			echo "<script>window.location.href='airlines.php'</script>";
		}
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<!-- Custom CSS -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<!-- Graph CSS -->
		<link href="css/lines.css" rel='stylesheet' type='text/css' />
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
		<!---//webfonts--->  
		<!-- Nav CSS -->
		<link href="css/custom.css" rel="stylesheet">
		<!-- Metis Menu Plugin JavaScript -->
		<script src="js/metisMenu.min.js"></script>
		<script src="js/custom.js"></script>
		<!-- Graph JavaScript -->
		<script src="js/d3.v3.js"></script>
		<script src="js/rickshaw.js"></script>

		<style>
			#edit_airline_div{
				display: none;
			}
		</style>
	</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Willfly</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header">
							<strong>Messages</strong>
							<div class="progress thin">
							  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							    <span class="sr-only">40% Complete (success)</span>
							  </div>
							</div>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/2.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/3.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/4.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/5.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="images/pic1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="dropdown-menu-footer text-center">
							<a href="#">View all messages</a>
						</li>	
	        		</ul>
	      		</li>
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/1.png"><span class="badge">9</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
						<li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						<li class="m_2"><a href="myprofile.php"><i class="fa fa-user"></i> Profile</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
						<li class="divider"></li>
						<li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index2.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Home</a>
                        </li>
						<li>
                            <a href="airlines.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Add airlines</a>
                        </li>
						<li>
                            <a href="airport.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Add airports</a>
                        </li>
						<li>
                            <a href="viewbooked.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Viewbooking status</a>
                        </li>
						<li>
                            <a href="manage_flight1.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Manage all flights</a>
                        </li>
						<li>
                            <a href="flights1.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Add flights</a>
                        </li>
						<li>
                            <a href="#"><i class="fa fa-dashboard fa-fw nav_icon"></i>Feedback</a>
                        </li>
						
						
                        <li>
                           <!-- <a href="#"><i class="fa fa-laptop nav_icon"></i>Layouts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="grids.html">Grid System</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level 
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>Menu Levels<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="graphs.html">Graphs</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level 
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>Mailbox<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="inbox.html">Inbox</a>
                                </li>
                                <li>
                                    <a href="compose.html">Compose email</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level 
                        </li>
                        <li>
                            <a href="asyourneed.php"><i class="fa fa-flask nav_icon"></i>Widgets</a>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-check-square-o nav_icon"></i>Forms<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="forms.html">Basic Forms</a>
                                </li>
                                <li>
                                    <a href="validation.html">Validation</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level 
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>Tables<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="basic_tables.html">Basic Tables</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level 
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw nav_icon"></i>Css<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="media.html">Media</a>
                                </li>
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		<!---->

        <div id="page-wrapper">
        <div class="graphs">
     	<div class="col_3">
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-thumbs-up icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>45%</strong></h5>
                      <span>New Orders</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-users user1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>1019</strong></h5>
                      <span>New Visitors</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget widget1">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-comment user2 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>1012</strong></h5>
                      <span>New Users</span>
                    </div>
                </div>
        	</div>
        	<div class="col-md-3 widget">
        		<div class="r3_counter_box">
                    <i class="pull-left fa fa-dollar dollar1 icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>$450</strong></h5>
                      <span>Profit Today</span>
                    </div>
                </div>
        	 </div>
        	<div class="clearfix"> </div>
      </div>
	  <!--
      <div class="col_1">
		    <div class="col-md-4 span_7">	
		      <div class="cal1 cal_2"><div class="clndr"><div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">July 2015</div><div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day adjacent-month last-month calendar-day-2015-06-28"><div class="day-contents">28</div></td><td class="day adjacent-month last-month calendar-day-2015-06-29"><div class="day-contents">29</div></td><td class="day adjacent-month last-month calendar-day-2015-06-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-01"><div class="day-contents">1</div></td><td class="day calendar-day-2015-07-02"><div class="day-contents">2</div></td><td class="day calendar-day-2015-07-03"><div class="day-contents">3</div></td><td class="day calendar-day-2015-07-04"><div class="day-contents">4</div></td></tr><tr><td class="day calendar-day-2015-07-05"><div class="day-contents">5</div></td><td class="day calendar-day-2015-07-06"><div class="day-contents">6</div></td><td class="day calendar-day-2015-07-07"><div class="day-contents">7</div></td><td class="day calendar-day-2015-07-08"><div class="day-contents">8</div></td><td class="day calendar-day-2015-07-09"><div class="day-contents">9</div></td><td class="day calendar-day-2015-07-10"><div class="day-contents">10</div></td><td class="day calendar-day-2015-07-11"><div class="day-contents">11</div></td></tr><tr><td class="day calendar-day-2015-07-12"><div class="day-contents">12</div></td><td class="day calendar-day-2015-07-13"><div class="day-contents">13</div></td><td class="day calendar-day-2015-07-14"><div class="day-contents">14</div></td><td class="day calendar-day-2015-07-15"><div class="day-contents">15</div></td><td class="day calendar-day-2015-07-16"><div class="day-contents">16</div></td><td class="day calendar-day-2015-07-17"><div class="day-contents">17</div></td><td class="day calendar-day-2015-07-18"><div class="day-contents">18</div></td></tr><tr><td class="day calendar-day-2015-07-19"><div class="day-contents">19</div></td><td class="day calendar-day-2015-07-20"><div class="day-contents">20</div></td><td class="day calendar-day-2015-07-21"><div class="day-contents">21</div></td><td class="day calendar-day-2015-07-22"><div class="day-contents">22</div></td><td class="day calendar-day-2015-07-23"><div class="day-contents">23</div></td><td class="day calendar-day-2015-07-24"><div class="day-contents">24</div></td><td class="day calendar-day-2015-07-25"><div class="day-contents">25</div></td></tr><tr><td class="day calendar-day-2015-07-26"><div class="day-contents">26</div></td><td class="day calendar-day-2015-07-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-07-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-07-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-07-30"><div class="day-contents">30</div></td><td class="day calendar-day-2015-07-31"><div class="day-contents">31</div></td><td class="day adjacent-month next-month calendar-day-2015-08-01"><div class="day-contents">1</div></td></tr></tbody></table></div></div>
		    </div>
		    <div class="col-md-4 span_8">
		       <div class="activity_box">
		        <div class="scrollbar" id="style-2">
                   <div class="activity-row">
	                 <div class="col-xs-1"><i class="fa fa-thumbs-up text-info icon_13"> </i>  </div>
	                 <div class="col-xs-3 activity-img"><img src='images/5.png' class="img-responsive" alt=""/></div>
	                 <div class="col-xs-8 activity-desc">
	                 	<h5><a href="#">Lorem Ipsum</a> liked <a href="#">random</a></h5>
	                    <p>Lorem Ipsum is simply dummy</p>
	                    <h6>8:03</h6>
	                 </div>
	                 <div class="clearfix"> </div>
                    </div>
	  			    <div class="activity-row">
	                 <div class="col-xs-1"><i class="fa fa-comment text-info"></i> </div>
	                 <div class="col-xs-3 activity-img"><img src='images/3.png' class="img-responsive" alt=""/></div>
	                 <div class="col-xs-8 activity-desc">
	                 	<h5><a href="#">simply random</a> liked <a href="#">passages</a></h5>
	                    <p>Lorem Ipsum is simply dummy</p>
	                    <h6>8:03</h6>
	                 </div>
	                 <div class="clearfix"> </div>
                    </div>
                    <div class="activity-row">
	                 <div class="col-xs-1"><i class="fa fa-check text-info icon_11"></i></div>
	                 <div class="col-xs-3 activity-img"><img src='images/1.png' class="img-responsive" alt=""/></div>
	                 <div class="col-xs-8 activity-desc">
	                 	<h5><a href="#">standard chunk</a> liked <a href="#">model</a></h5>
	                    <p>Lorem Ipsum is simply dummy</p>
	                    <h6>8:03</h6>
	                 </div>
	                 <div class="clearfix"> </div>
                    </div>
                    <div class="activity-row1">
	                 <div class="col-xs-1"><i class="fa fa-user text-info icon_12"></i></div>
	                 <div class="col-xs-3 activity-img"><img src='images/4.png' class="img-responsive" alt=""/></div>
	                 <div class="col-xs-8 activity-desc">
	                 	<h5><a href="#">perspiciatis</a> liked <a href="#">donating</a></h5>
	                    <p>Lorem Ipsum is simply dummy</p>
	                    <h6>8:03</h6>
	                 </div>
	                 <div class="clearfix"> </div>
                     </div>
	  		        </div>
		          </div>
		    </div>
		-->
		<!--
			<div class="col-md-4 stats-info">
                <div class="panel-heading">
                    <h4 class="panel-title">Browser Stats</h4>
                </div>
                <div class="panel-body">
                    <ul class="list-unstyled">
                        <li>Google Chrome<div class="text-success pull-right">12%<i class="fa fa-level-up"></i></div></li>
                        <li>Firefox<div class="text-success pull-right">15%<i class="fa fa-level-up"></i></div></li>
                        <li>Internet Explorer<div class="text-success pull-right">18%<i class="fa fa-level-up"></i></div></li>
                        <li>Safari<div class="text-danger pull-right">17%<i class="fa fa-level-down"></i></div></li>
                        <li>Opera<div class="text-danger pull-right">10%<i class="fa fa-level-down"></i></div></li>
                        <li>Mobile &amp; tablet<div class="text-success pull-right">14%<i class="fa fa-level-up"></i></div></li>
                        <li class="last">Others<div class="text-success pull-right">5%<i class="fa fa-level-up"></i></div></li> 
                    </ul>
                </div>
            </div>-->
        <!--    <div class="clearfix"> </div>
	  </div>
	  <div class="span_11">
		<div class="col-md-6 col_4">
		  <div class="map_container"><div id="vmap" style="width: 100%; height: 400px;"></div></div>
		  <!----Calender 
			<link rel="stylesheet" href="css/clndr.css" type="text/css" />
			<script src="js/underscore-min.js" type="text/javascript"></script>
			<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
			<script src="js/clndr.js" type="text/javascript"></script>
			<script src="js/site.js" type="text/javascript"></script>
			<!----End Calender -------->
	<!--	</div>
		<div class="col-md-6 col_5">
		  <div id="chart_container">
		   <div id="chart"></div>
	       <div id="slider"></div>
<script>

var seriesData = [ [], [], [], [], [] ];
var random = new Rickshaw.Fixtures.RandomData(50);

for (var i = 0; i < 75; i++) {
	random.addData(seriesData);
}

var graph = new Rickshaw.Graph( {
	element: document.getElementById("chart"),
	renderer: 'multi',
	
	dotSize: 5,
	series: [
		{
			name: 'temperature',
			data: seriesData.shift(),
			color: '#AFE9FF',
			renderer: 'stack'
		}, {
			name: 'heat index',
			data: seriesData.shift(),
			color: '#FFCAC0',
			renderer: 'stack'
		}, {
			name: 'dewpoint',
			data: seriesData.shift(),
			color: '#555',
			renderer: 'scatterplot'
		}, {
			name: 'pop',
			data: seriesData.shift().map(function(d) { return { x: d.x, y: d.y / 4 } }),
			color: '#555',
			renderer: 'bar'
		}, {
			name: 'humidity',
			data: seriesData.shift().map(function(d) { return { x: d.x, y: d.y * 1.5 } }),
			renderer: 'line',
			color: '#ef553a'
		}
	]
} );


graph.render();

var detail = new Rickshaw.Graph.HoverDetail({
	graph: graph
});
</script>
</div>
	      <!-- map -->
<!--<link href="css/jqvmap.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.vmap.js"></script>
<script src="js/jquery.vmap.sampledata.js" type="text/javascript"></script>
<script src="js/jquery.vmap.world.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#vmap').vectorMap({
		    map: 'world_en',
		    backgroundColor: '#333333',
		    color: '#ffffff',
		    hoverOpacity: 0.7,
		    selectedColor: '#666666',
		    enableZoom: true,
		    showTooltip: true,
		    values: sample_data,
		    scaleColors: ['#C8EEFF', '#006491'],
		    normalizeFunction: 'polynomial'
		});
	});
</script>
<!-- //map -->

<!--
       </div>
       <div class="clearfix"> </div>
    </div>
    <div class="content_bottom">
     <div class="col-md-8 span_3">
		  <div class="bs-example1" data-example-id="contextual-table">
		    <table class="table">
		      <thead>
		        <tr>
		          <th>#</th>
		          <th>Column heading</th>
		          <th>Column heading</th>
		          <th>Column heading</th>
		        </tr>
		      </thead>
		      <tbody>
		        <tr class="active">
		          <th scope="row">1</th>
		          <td>Column content</td>
		          <td>Column content</td>
		          <td>Column content</td>
		        </tr>
		        <tr>
		          <th scope="row">2</th>
		          <td>Column content</td>
		          <td>Column content</td>
		          <td>Column content</td>
		        </tr>
		        <tr class="success">
		          <th scope="row">3</th>
		          <td>Column content</td>
		          <td>Column content</td>
		          <td>Column content</td>
		        </tr>
		        <tr>
		          <th scope="row">4</th>
		          <td>Column content</td>
		          <td>Column content</td>
		          <td>Column content</td>
		        </tr>
		        <tr class="info">
		          <th scope="row">5</th>
		          <td>Column content</td>
		          <td>Column content</td>
		          <td>Column content</td>
		        </tr>
		        <tr>
		          <th scope="row">6</th>
		          <td>Column content</td>
		          <td>Column content</td>
		          <td>Column content</td>
		        </tr>
		        <tr class="warning">
		          <th scope="row">7</th>
		          <td>Column content</td>
		          <td>Column content</td>
		          <td>Column content</td>
		        </tr>
		        <tr>
		          <th scope="row">8</th>
		          <td>Column content</td>
		          <td>Column content</td>
		          <td>Column content</td>
		        </tr>
		        <tr class="danger">
		          <th scope="row">9</th>
		          <td>Column content</td>
		          <td>Column content</td>
		          <td>Column content</td>
		        </tr>
		      </tbody>
		    </table>
		   </div>
	   </div>
	-->
	<!--
	   <div class="col-md-4 span_4">
		 <div class="col_2">
		  <div class="box_1">
		   <div class="col-md-6 col_1_of_2 span_1_of_2">
             <a class="tiles_info">
			    <div class="tiles-head red1">
			        <div class="text-center">Orders</div>
			    </div>
			    <div class="tiles-body red">10</div>
			 </a>
		   </div>
		   <div class="col-md-6 col_1_of_2 span_1_of_2">
              <a class="tiles_info tiles_blue">
			    <div class="tiles-head tiles_blue1">
			        <div class="text-center">Sales</div>
			    </div>
			    <div class="tiles-body blue1">30</div>
			  </a>
		   </div>
		   <div class="clearfix"> </div>
		 </div>
		 <div class="box_1">
		   <div class="col-md-6 col_1_of_2 span_1_of_2">
             <a class="tiles_info">
			    <div class="tiles-head fb1">
			        <div class="text-center">Facebook</div>
			    </div>
			    <div class="tiles-body fb2">10</div>
			 </a>
		   </div>
		   <div class="col-md-6 col_1_of_2 span_1_of_2">
              <a class="tiles_info tiles_blue">
			    <div class="tiles-head tw1">
			        <div class="text-center">Twitter</div>
			    </div>
			    <div class="tiles-body tw2">30</div>
			  </a>
		   </div>
		   <div class="clearfix"> </div>
		   </div>
		  </div>-->
		<!--  <div class="cloud">
			<div class="grid-date">
				<div class="date">
					<p class="date-in">New York</p>
					<span class="date-on">°F °C </span>
					<div class="clearfix"> </div>							
				</div>
				<h4>30°<i class="fa fa-cloud-upload"> </i></h4>
			</div>
			<p class="monday">Monday 10 July</p>
		  </div>
		</div>
		<div class="clearfix"> </div>
	    </div>
		<div class="copy">
            
	    </div>
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row" style="padding: 20px;">
			<!-- FORM Panel -->
			<div class="col-md-4" id="add_airline_div">
				<form action="airlines.php" method="POST" id="airlines" enctype='multipart/form-data'>
					<div class="card">
						<div class="card-header">
							Airlines Form
						</div>
						<div class="card-body">
								<input type="hidden" name="id">
								<div class="form-group">
									<label class="control-label">Airlines</label>
									<textarea name="airlines" id="airlines" name="airlines" cols="30" rows="2" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<label for="" class="control-label">Logo</label>
									<input type="file" class="form-control" name="image" id="image" onchange="displayImg(this,$(this),'cimg')">
								</div>
								<div class="form-group">
									<img src="" alt="" id="cimg">
								</div>	
						</div>
								
						<div class="card-footer">
							<div class="row">
								<div class="col-md-12">
									<input type="submit" class="btn btn-sm btn-primary col-sm-3 offset-md-3" name="submit" value="submit">
									<button class="btn btn-sm btn-default col-sm-3" type="button" onclick="_reset()"> Cancel</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>

			<div class="col-md-4" id="edit_airline_div">
				<form action="airlines.php" method="POST" id="airlines" enctype='multipart/form-data'>
					<div class="card">
						<div class="card-header">
							Edit Airlines Details
						</div>
						<div class="card-body">
								<input type="hidden" name="id">
								<div class="form-group">
									<label class="control-label">Airlines</label>
									<input type="text" name="edit_airlines_id" id="edit_airlines_id" hidden>
									<input type="text" name="edit_airlines_currimg" id="edit_airlines_currimg" hidden>
									<textarea id="edit_airlines_name" name="edit_airlines_name" cols="30" rows="2" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<label for="" class="control-label">Logo</label>
									<input type="file" class="form-control" name="edit_airlines_newimage" id="edit_airlines_newimage" onchange="displayImg(this,$(this),'edit_airlines_image')">
								</div>
								<div class="form-group">
									<img src="" alt="" id="edit_airlines_image">
								</div>	
						</div>
								
						<div class="card-footer">
							<div class="row">
								<div class="col-md-12">
									<input type="submit" class="btn btn-sm btn-primary col-sm-3 offset-md-3" name="edit_airlines_submit" name="edit_airlines_submit" value="Update">
									<button style="margin-left: 10px;" class="btn btn-sm btn-default col-sm-3" type="button" onclick="edit_cancelfun();"> Cancel</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<!-- FORM Panel -->

			<!-- Table Panel -->

			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Image</th>
									<th class="text-center">Name</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$cats = $con->query("SELECT * FROM airlines_tb order by id asc");
								while($row=$cats->fetch_assoc()):
								?>
								<form action="airlines.php" method="POST" enctype='multipart/form-data'>
								<tr>
									<td class="text-center"><?php echo $i++ ?><input name="edit_sr" type="hidden" value="<?php echo $i++ ?>"></td>
									<!--<td class="text-center">-->
									<td><img src="../admin12/image/<?=$row['image'];?>" width="20" height="20"></td>
								
									<td class="">
										 <b><?php echo $row['airlines'] ?></b>
									</td>

									<td class="text-center">
										<button class="btn btn-sm btn-primary edit_airline" name="edit_submit" type="button" onclick="displayAirlinesEditForm('<?=$row['image'];?>','<?php echo $row['airlines'] ?>',<?php echo $row['id'] ?>);" data-id="<?php echo $row['id'] ?>" data-airlines="<?php echo $row['airlines'] ?>" data-logo_path="<?php echo $row['image'] ?>" >Edit</button>
										<button class="btn btn-sm btn-danger delete_airline" name="delete_submit" type="button" onclick="delete_airline(<?php echo $row['id']; ?>);" data-id="<?php echo $row['id'] ?>">Delete</button>
									</td>
								</tr>
								</form>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	
	

</div>

</body>
</html>

<style>
	
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:100px;
		max-height: :150px;
	}
</style>
<script>

	function displayAirlinesEditForm(src, name, id){
		// alert('The src is - '+src+'\nThe name is - '+name);
		var add_airline_div= document.getElementById('add_airline_div');
		var edit_airline_div= document.getElementById('edit_airline_div');
		var edit_airlines_name= document.getElementById('edit_airlines_name');
		var edit_airlines_currimg= document.getElementById('edit_airlines_currimg');
		var edit_airlines_id= document.getElementById('edit_airlines_id');
		var cimg= document.getElementById('cimg');

		add_airline_div.style.display="none";
		edit_airline_div.style.display="block";
		edit_airlines_name.value=name;
		edit_airlines_id.value=id;
		edit_airlines_currimg.value=src;
		$('#edit_airlines_image').attr('src', src);
	}

	function edit_cancelfun(){
		var add_airline_div= document.getElementById('add_airline_div');
		var edit_airline_div= document.getElementById('edit_airline_div');
		add_airline_div.style.display="block";
		edit_airline_div.style.display="none";
	}

	function _reset(){
		$('#cimg').attr('src','');
		$('[name="id"]').val('');
		$('#manage-airlines').get(0).reset();
	}
	
	$('#manage-airlines').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_airlines',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully added",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
				else if(resp==2){
					alert_toast("Data successfully updated",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	})

	$('.edit_airline').click(function(){
		start_load()
		var cat = $('#manage-airlines')
		cat.get(0).reset()
		cat.find("[name='id']").val($(this).attr('data-id'))
		cat.find("[name='airlines']").val($(this).attr('data-airlines'))
		cat.find("#cimg").attr("src","../assets/img/"+$(this).attr('data-logo_path'))
		end_load()
	})

	$('.delete_airline').click(function(){
		_conf("Are you sure to delete this airline?","delete_airline",[$(this).attr('data-id')])
	})
    
	function displayImg(input,_this, obj) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#'+obj).attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	function delete_airline($id){
		// start_load()
		$.ajax({
			url:'admin_class.php',
			method:'POST',
			data:{id:$id,action:"delete_airlines"},
			success:function(resp){
				alert(resp);
				window.location.href="airlines.php";
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload();
					},1500)
				}
			}
		})
	}
</script>