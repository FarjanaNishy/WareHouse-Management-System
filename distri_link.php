<?php
$servername="localhost";
$username="root";
$password="";
$dbname="warehouse";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection Failed: ".$conn->connect_error);
}

$PI=$_POST['pi'];
$DT=$_POST['dt'];
$DN=$_POST['dn'];
$DD=$_POST['dd'];

$sql="INSERT INTO distribution (pro_id, delivery_time, driver_name, deli)
VALUES ('$PI', '$DT', '$DN', '$DD')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header('location: home_general.php');

//header("Location:../home_general.php?signup=success");
$conn->close();
?>