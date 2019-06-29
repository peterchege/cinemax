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


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BOOKING TICKET</title>
<link href="css/booking.css" rel="stylesheet" type="text/css">
</head>

<body>
	<h1>BOOKING</h1>
<form action="seat.php" method="GET" class="fm">
			<input type="text" name="movie_name" value="<?= $b['movie_name']; ?>" disabled><br>			
		  	<input type="text" name="movie_price" value="Ksh.<?= $b['movie_price']; ?>" disabled><br>
		  	<input type="text" name="date" value="<?= $b['date']; ?>" disabled><br>
		  	<input type="text" name="time" value="<?= $b['time']; ?>" disabled><br>
		  	<hr>
		  	<hr>
		  	<h2>Enter your details please</h2>
			<label>Full name:</label><br>
		  	<input type="text" name="name" placeholder="John Doe" required><br>
		  	<label>Phone number:</label><br>
		  	<input type="phone" name="phonenumber" placeholder="0722 *** 924" required><br>
		  	<label>Email:</label><br>
		  	<input  type="text" name="email" placeholder="mwangi@gamil.com" required><br>
		  	
  <input class="btn" id="btn" type="submit" name="submit" value="submit">
		  	
</form>
<img id="mim" src="img/minions-12.png" width="300" height="250" alt=""/>
<img id="mim1" src="img/minions1.png" width="500" height="260" alt=""/>
</body>
</html>
