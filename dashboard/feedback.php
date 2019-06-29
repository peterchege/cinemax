<?php
include "server.php";
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
}
$resultsFeedback=$db->query("SELECT * FROM feedback ORDER BY id Desc");
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Cinemax</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a class="simple-text">
                    Cinemax
                </a>
            </div>
        
            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="upload.php">
                        <i class="pe-7s-user"></i>
                        <p>upload</p>
                    </a>
                </li>
                <li>
                <a href="view_records.php">
                    <i class="pe-7s-science"></i>
                    <p>View Movie records</p>
                </a>
                </li>
                <li class="active">
                    <a href="feedback.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Feedbacks</p>
                    </a>
                </li>
                <li class="active-pro">                    
                        <!-- <i class="pe-7s-rocket"></i> -->
                        <p><form action="server.php" method="GET"> <button type="submit" name="logout" class="btn btn prime2"> Logout</button></form></p>                    
                </li>
            </ul>
        </div>
        </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Feedback Records</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Feedback Records</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    	<th>Subject</th>
                                    	<th>Message</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        
                                    </thead>
                                    <tbody>
                                        <?php while($f=mysqli_fetch_assoc($resultsFeedback)): ?>
                                        <tr>
                                            <td><?= $f['id']; ?></td>
                                        	<td><?= $f['name']; ?></td>
                                            <td><?= $f['email']; ?></td>
                                            <td><?= $f['subject']; ?></td>
                                            <td><?= $f['message']; ?></td>
                                            <td><?= $f['date']; ?></td>
                                            <td><?= $f['time']; ?></td>
                                           
                                        </tr>
                                    <?php endwhile;?>
                                        <!-- <tr>
                                            <td>003</td>
                                            <td>Kinyanjui</td>
                                            <td>Serviced Apartments</td>
                                            <td>Thank you for good holiday experience you guys offered my family and I</td>
                                        </tr>
                                        <tr>
                                            <td>005</td>
                                            <td>Sanaipei</td>
                                            <td>Homestays</td>
                                            <td>Thank you for good holiday experience you guys offered my family and I</td>
                                        </tr>
                                        <tr>
                                            <td>006</td>
                                            <td>Njoki</td>
                                            <td>Inquiry</td>
                                            <td>i need a four bedroom holiday home please contact me via my email i need more details</td>
                                        </tr>
                                        <tr>
                                            <td>008</td>
                                            <td>James</td>
                                            <td>Villas</td>
                                            <td>Thank you for good holiday experience you guys offered my family and I</td>
                                        </tr>
                                        <tr>
                                            <td>010</td>
                                            <td>Omondi</td>
                                            <td>BackPackers</td>
                                            <td>Thank you for good holiday experience you guys offered my family and I</td>
                                        </tr> -->
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>



    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
