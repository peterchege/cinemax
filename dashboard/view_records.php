<?php
    include 'server.php';
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location:login.php');
    }
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
    
            <li class="active">
                <a href="view_records.php" >
                    <i class="pe-7s-science"></i>
                    <p>View Movie records</p>
                </a>
            </li>
            <li>
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
                    <a class="navbar-brand" href="#">Movie Records</a>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">Movie Database</h4>                                
                            </div>
                            <!-- Begin table -->
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>id</th>
                                        <th>Movie Name</th>
                                        <th>Movie Genre</th>
                                    	<th>Movie Description</th>
                                    	<th>Price</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th id="poster">Movie_Poster</th>
                                    </thead>
                                    <tbody>
                                        <?php while($b=mysqli_fetch_assoc($sqlquery)): ?>
                                        <tr>
                                            <td><?= $b['id'];?></td>
                                        	<td><?= $b['movie_name'];?></td>
                                            <td><?= $b['genre'];?></td>
                                            <td><?= $b['movie_description'];?></td>
                                        	<td><?= $b['movie_price'];?></td>
                                            <td><?= $b['date'];?></td>
                                            <td><?= $b['time'];?></td>
                                            <td><?= $b['movie_poster'];?></td>                                         
                                       <td>
                                       <form><button name="updateRecords" value="<?=$b['id'];?>" class="btn btn-primary prime" data-toggle="modal" data-target="#mimi">
                                            update
                                        </button></form>
                                        </td>
                                        <td>
                                        <a href="view_records.php?delete=<?=$b['id'];?>"><button name="delete" class="btn prime2">delete</button></a>
                                        </td>
                                        </tr>
                                    <?php endwhile; ?>                                        
                                    </tbody>
                                </table>
                            </div>  <!-- end table -->

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
