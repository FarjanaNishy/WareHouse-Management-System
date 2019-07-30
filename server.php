<?php
session_start();
$username = "";
$email    = "";
$errors = array(); 
$db=mysqli_connect('localhost', 'root', '', 'registration');
if(isset($_POST['register'])){
	$username=mysql_real_escape_string($_POST['username']);
	$email=mysql_real_escape_string($_POST['email']);
	$password=mysql_real_escape_string($_POST['password']);
	$password_1=mysql_real_escape_string($_POST['password_1']);
	if(empty($username)){
		array_push($errors, "Username is necessary");
	}
	if(empty($email)){
		array_push($errors, "Email is necessary");
	}
	if(empty($password)){
		array_push($errors, "Password is necessary");
	}
	if($password!=$password_1){
		array_push($errors, "Passwords don't match");
	}

	if(count($errors)==0){
		$password=md5($password);
		$que="INSERT INTO user (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  			 mysqli_query($db,$que);
  			 $_SESSION['username'] = $username;
  			 header('location: index1.php');
	}
}
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is necessary");
  }
  if (empty($password)) {
  	array_push($errors, "Password is necessary");
  }

  if (count($errors)==0) {
  	$password = md5($password);
  	$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  header('location: home_staff.php');
  	}else {
  		array_push($errors, "Wrong username/password");
  	}
  }
}
if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>