<?php
$db=mysqli_connect("localhost","root","","cinema");

//uploading movie details
if(isset($_POST['submitMovieDetails'])){
	$movie_name =$_POST['movie_name'];
	$genre =$_POST['genre'];
	$description =$_POST['description'];
	$price =$_POST['price'];
	$date =$_POST['date'];
	$time =$_POST['time'];

	//image details
	$photo = $_FILES['movie_poster'];
    $name = $photo['name'];
    $nameArray = explode('.',$name);
    $fileName = $nameArray[0];
    $fileExt = $nameArray[1];
    $mime = explode('/',$photo['type']);
    $mimeType = $mime[0];
    $mimeExt = $mime[1];
    $tmpLoc = $photo['tmp_name'];
    $fileSize = $photo['size'];
    
    $allowed = array('png', 'jpg', 'jpeg', 'gif');
    
    
    $uploadName = md5(microtime()).'.'.$fileExt;
    $uploadPath = $_SERVER['DOCUMENT_ROOT'].'/cinemax/dashboard/img/movies/'.$uploadName;
    $dbpath = 'img/movies/'.$uploadName;

	//upload file and insert into database
    move_uploaded_file($tmpLoc, $uploadPath);
	$sql=" INSERT INTO upload(movie_name, genre, movie_description, movie_price, `date`, `time`, movie_poster)
			 VALUES('$movie_name','$genre','$description','$price','$date','$time','$dbpath') ";
	$db->query($sql); 
	header('location:view_records.php');
}

//editing movie records
if(isset($_GET['updateRecords'])){
	$edit_id=(int)$_GET['updateRecords'];
	$sql="SELECT * FROM upload WHERE id='$edit_id' ";
	$edit_content=$db->query($sql);
	$e=mysqli_fetch_assoc($edit_content);
}

//delete
if(isset($_GET['delete'])){
	$delete_id=(int)$_GET['delete'];
	
	//delete image
	$sqldelete="SELECT * FROM upload WHERE id='$delete_id'";
	$deleteQuery=$db->query($sqldelete);
	$d=mysqli_fetch_assoc($deleteQuery);
	$path=$d['movie_poster'];
	unlink($path);

	//delete content
	$sql1=" DELETE FROM upload WHERE id='$delete_id' ";
	
	$db->query($sql1);
}

//viewing movies
$sql= " SELECT * FROM upload ORDER BY id DESC ";
$sqlquery=$db->query($sql);

//login
if(isset($_POST['login'])){
	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql=" SELECT * FROM accounts WHERE user_name='$username' && password='$password' ";
	$login=$db->query($sql);
	if(mysqli_num_rows($login)==1){
		$_SESSION['username']=$username;
		header('Location:dashboard.php');
	}else{
		echo "You entered the wrong details. Please try again.";
	}
}

//logout
if(isset($_GET['logout'])){
	session_start();
	session_destroy();
	header('location:login.php');
}




?>