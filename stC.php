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
$PN=$_POST['pn'];
$ED=$_POST['ed'];
$EXD=$_POST['exd'];
$MAD=$_POST['mad'];
$PQ=$_POST['pq'];

$sql="INSERT INTO store (p_id, p_name, en_date, ex_date, date, quan)
VALUES ('$PI', '$PN', '$ED', '$EXD', '$MAD', '$PQ')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header('location: home_general.php');

//header("Location:../home_general.php?signup=success");
$conn->close();
?>