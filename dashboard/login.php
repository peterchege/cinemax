<?php 
	include 'server.php';
?>
<!doctype html>
<html><head>
<meta charset="utf-8">
<title>LOGIN</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/e-coins.png" rel="icon">
  <link href="img/e-coins.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
  <!-- Main Stylesheet File -->
  <link href="css/login.css" rel="stylesheet">
  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<!-- Morris graph charts -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<link href="lib/morris.js/morris.js" >

</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-6">
			
				<div class="back-blue">
					<h1>Cinemax</h1><hr>
					<br>
					<p class="text-center">Please log in to access the dashboard services</p>
					
					<form method="POST" action="login.php" class="text-center"> 
						<input type="text" name="username" placeholder="Username"><br>
						<input type="password" name="password" placeholder="Password"><br>
						<button name="login" type="submit">LOGIN</button>
					</form>
				</div>
				
		
			</div>
			
			<div class="col-6">
				<div class="back-white">
		    	
			    </div>
			   
			</div>
		</div>

	</div>

<!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
</body>
</html>
