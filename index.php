<?php
    include 'db.php';
    //image details
    $sqlQuery= " SELECT * FROM upload ";
    $images=$db->query($sqlQuery);
    date_default_timezone_set("Africa/Nairobi");
    $time=date("h:i:sa");

    if(isset($_POST['submitFeedback'])){
    	$name=$_POST['name'];
    	$email=$_POST['email'];
    	$subject=$_POST['subject'];
    	$message=$_POST['message'];
    	$date=date("Y-m-d");
    	

    	$insert="INSERT INTO feedback(name,email,subject,message,date,time) 
    			VALUES('$name','$email','$subject','$message','$date','$time') ";

    	$db->query($insert);
    }  
?>
<!DOCTYPE html>
<html lang="en">

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

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container-fluid">

            <div id="logo" class="pull-left">

                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="index.php" id="im-left">
                    <img src="img/logon.png" width="170" height="auto" alt="" title="" />
                </a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active">
                        <a href="#intro">Home</a>
                    </li>
                    <li>
                        <a href="#about">About Us</a>
                    </li> 
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </header>
    <!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators">
                </ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="carousel-background">
                            <img src="img/rampage2.jpg" alt="">
                        </div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                            <h2>RAMPANGE</h2>
                            <p>NOW PLAYING</p>
                                <a href="#about" class="btn-get-started scrollto">BUY TICKET</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background">
                            <img src="img/wakanda.jpg" alt="">
                        </div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>BLACK PANTHER</h2>
                                <p>NOW PLAYING</p>
                                <a href="#about" class="btn-get-started scrollto">BUY TICKET</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background">
                            <img src="img/share.jpg" alt="">
                        </div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>AVENGERS</h2>
                                <p>Coming Soon</p>
                                <a href="#about" class="btn-get-started scrollto">BUY TICKET</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section>
    <!-- #intro -->

    <main id="main">



    <!--==========================
      About Us Section
    ============================-->
        <section>
            <div class="back-half"></div>

                <header class="section-header">
                    <h3>NOW PLAYING</h3>
                </header>
                <form action="booking.php" method="POST">
                <div class="container-fluid">
                    <div class="row move">
                        <?php while($m=mysqli_fetch_assoc($images)): ?>
                        <div class="col-md-3">                        
                            <div class="movie-content">
                                <img src="<?= 'dashboard/'.$m['movie_poster']?>">
                                <input class="text-left" type="button" value="<?=$m['date'];?>">
                                <input type="button" value="<?=$m['time'];?>">
                                    <p name="description" class="text-center" ><?=$m['movie_description'];?></p>
                                    <a href="booking.php"><button value="<?=$m['id'];?>" name="bookMovie" type="submit" class="btn-primary btn-ticket">BUY TICKET</button></a> 
                            </div>                        
                        </div>
                        <?php endwhile;?>                        
                    </div>
                </div>
                </form>
        </section>



<!--==========================
      traillers
    ============================-->

        <section>
            <div class="back-half1"></div>
        
            <header class="section-header">
                <h3>COMING SOON</h3>
            </header>
        
            <div class="container-fluid">
                <div class="row move">
        
                    <div class="col-md-3">
                        <div class="movie-content">
                            <img src="img/showman.jpg">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia, cum, alias sunt laboriosam itaque
                                blanditiis mollitia commodi reprehenderit corrupti voluptatem rem animi totam dignissimos dicta voluptate
                                ullam illo quidem! Similique!</p>
                            <button class="btn-primary btn-ticket1">WATCH TRAILER</button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="movie-content">
                            <img src="img/dsdas.jpg">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia, cum, alias sunt laboriosam itaque
                                blanditiis mollitia commodi reprehenderit corrupti voluptatem rem animi totam dignissimos dicta voluptate
                                ullam illo quidem! Similique!</p>
                            <button class="btn-primary btn-ticket1">WATCH TRAILER</button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="movie-content">
                            <img src="img/deadpool2.jpg">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia, cum, alias sunt laboriosam itaque
                                blanditiis mollitia commodi reprehenderit corrupti voluptatem rem animi totam dignissimos dicta voluptate
                                ullam illo quidem! Similique!</p>
                            <button class="btn-primary btn-ticket1">WATCH TRAILER</button>
                        </div>
                    </div>
        
                    <div class="col-md-3">
                        <div class="movie-content">
                            <img src="img/avengers.jpg">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia, cum, alias sunt laboriosam itaque
                                blanditiis mollitia commodi reprehenderit corrupti voluptatem rem animi totam dignissimos dicta voluptate
                                ullam illo quidem! Similique!</p>
                            <button class="btn-primary btn-ticket1">WATCH TRAILER</button>
                        </div>
                    </div>
        
                </div>
            </div>
        </section>
        <!-- #about -->


    <!--==========================
      Contact Section
    ============================-->
        <section id="contact" class="section-bg wow fadeInUp">
            <div class="container-fluid">

                <div class="section-header">
                    <h3>Contact Us</h3>
                    <p style="padding-left: 40px;">We would love to hear from you. Please reach us using the contacts below.</p>
                </div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.407208436469!2d36.82171736705119!3d-1.285334470090772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d7acc4cd31%3A0xce70845a51a65005!2sImax+Kenya+Century!5e0!3m2!1sen!2ske!4v1532923484367"
                                width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="row contact-info">

                        <div class="col-md-4">
                            <div class="contact-address">
                                <i class="ion-ios-location-outline"></i>
                                <h3>Address</h3>
                                <address>
                                    Cinemax Complex, Mama ngina Rd, off Tomboya street, Nairobi Area P.O. Box 49916 – GPO 00100 Nairobi – Kenya
                                </address>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-phone">
                                <i class="ion-ios-telephone-outline"></i>
                                <h3>Phone Number</h3>
                                <p>
                                    <a href="tel:+254711045000">(+254) 0711 045000</a>
                                </p>
                                <p>
                                    <a href="tel:+254732167000">0732 167000</a>
                                </p>
                                <p>
                                    <a href="tel:020 391 2000">020 391 2000</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-email">
                                <i class="ion-ios-email-outline"></i>
                                <h3>Email</h3>
                                <p>
                                    <a href="mailto:info@cinemax.com">info@cinemax.com</a>
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="index.php" method="POST" role="form" class="">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars"
                                    />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <input   type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email"
                                    />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"
                                />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center">
                                <button name="submitFeedback"  type="submit"><?=$time;?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- #contact -->

    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
    
        <div class="container">
            <div class="copyright">
                &copy; Copyright
                <strong>Cinemax</strong>. All Rights Reserved
            </div>

        </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top">
        <i class="fa fa-chevron-up"></i>
    </a>

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