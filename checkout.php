<?php
include 'db.php';
if(isset($_POST['bookMovie'])){
	$movie_details=(int)$_POST['bookMovie'];
	 //image details
    $sqlQuery= " SELECT * FROM upload WHERE id='$movie_details' ";
    $images=$db->query($sqlQuery);
	$b=mysqli_fetch_assoc($images);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CINEMAX</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="osho chemicals" name="keywords">
    <meta content="We are the regional market leaders in supply and manufacturing of Insecticides, Fungicides, Herbicides, Foliar Fertilizers, Biological Products, Growth Media, Green House sheeting and Spray Equipments"
        name="description">

    <!-- Favicons -->
    <link href="image/logo.png" rel="icon">
    <link href="image/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/checkout.css" rel="stylesheet">

    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>

<body>



<section id="bill">
    <div class="container bill1">
        <h1>CHECKOUT</h1>
            <div class="row">
                <div class="col-6">
                    <img class="img-resp img-responsive" src="img/rampage.jpg"><br>
                    <p class="text-center kare">Rampage</p>
                    <hr>
                    <ul>
                        <li>MOVIE: Avengers: Infinity War </li>
                        <li>DATE: 02/8/2018</li>
                        <li>TIME: 06:00 PM</li>
                        <li>NAME: VICTOR KISULI</li>
                        <li>PHONE: 0722528640</li>
                        <li>EMAIL: vickisu@gmail.com</li>
                    </ul>
                        <hr>
                        <ul>
                            <li >AMOUNT: Ksh 700/=</li>
                        </ul>
                        <hr>
                        
                   
                </div>

                <div class="col-6">
                    <div class="box-side">
                        <img class="img-fluid img-m" src="img/lipampesa.png">
                            <ul>
                                <li>GO TO YOUR SIM TOOLKIT</li>
                                <li>SELECT MPESA</li>
                                <li>GO TO LIPA NA MPESA</li>
                                <li>SELECT PAYBILL</li>
                                <li>ENTER BUSINESS NO: 82643</li>
                                <li>ENTER ACCOUNT NO (your phone number): 0701 340 459</li>
                            </ul>
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Enter your mpesa code</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="MMH98YHTGJ8">
                                    <small id="emailHelp" class="form-text text-muted">You will recieve an email on completion of payment</small>
                                </div>
                                <button type="submit" class="btn btn-success btn-sc">Submit</button>
                            </form>
                    </div>
                </div>

            </div>
    
       
    </div>
</section>
   
        

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
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
</body>

</html>