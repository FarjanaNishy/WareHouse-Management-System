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
$PQ=$_POST['pq'];

$sql="UPDATE store SET p_id='$PI', p_name='$PN', en_date='$ED', p_q='$PQ'
WHERE p_id='$PI'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header('location: home_general.php');

//header("Location:../home_general.php?signup=success");
$conn->close();
?>