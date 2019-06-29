<html>
<head>
    <meta charset="utf-8">
    <title>Cinemax</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="cinemax" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/logo-nw.png" rel="icon">
    <link href="img/logo-nw.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/seat.css" rel="stylesheet">
    <script src="lib/jquery/jquery.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>
    <?php

    ?>

    <div class="container">
        <h2 class="h2">SECTION A (VIP)</h2>
        <div class="row space">
        	<?php for($i=1;$i<=24;$i++): ?>
	            <div class="col-md-1">
	                <img id="seat<?=$i?>" src="img/seat2.png">
	                <p>No_<?=$i?></p>
	            </div>
	            <script type="text/javascript">
	            	$("#seat<?=$i?>").click(function(){
	            		if ($("#seat<?=$i?>").attr("src")=="img/seat2.png") {
	            			$("#seat<?=$i?>").attr("src","img/seat3.png");
	            			$("#seat<?=$i?>").addClass("selected");
                            
	            		}else{
	            			$("#seat<?=$i?>").attr("src","img/seat2.png");
	            			$("#seat<?=$i?>").removeClass("selected");
	            		}

	            	});
	            </script>
	        <?php endfor; ?>
        </div>          
<hr><hr>
<h2 class="h2">SECTION B (REGULAR)</h2>
        <div class="row space" >
        	<?php for($i=1;$i<=36;$i++): ?>
            <div class="col-md-1">
                <img id="img<?=$i?>" src="img/seat4.png">
                <p>No_<?=$i;?></p>
            </div>
            <script type="text/javascript">
            	$("#img<?=$i?>").click(function(){
            		if ($("#img<?=$i?>").attr("src")=="img/seat4.png") {
	            			$("#img<?=$i?>").attr("src","img/seat3.png");
	            			$("#img<?=$i?>").addClass("selected");
	            		}else{
	            			$("#img<?=$i?>").attr("src","img/seat4.png");
	            			$("#img<?=$i?>").removeClass("selected");
	            		}
            	});


            </script>
        	<?php endfor; ?>
        </div>        
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                </div>
                <p class="pp">SCREEN</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- <b4-<button type="button" name="" id="" class="btn btn-primary btn-lg btn-block">Buy ticket</button> -->
                <a href="checkout.php" class="btn btn-primary btn-lg btn-block">Buy ticket</a>
            </div>
        </div>        
    </div>



<!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

    <script type="text/javascript">	
</script>
</body>
</html>