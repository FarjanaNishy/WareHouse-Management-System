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
$Q=$_POST['q'];
$CS=$_POST['cs'];

$sql="UPDATE buy SET proo_id='$PI', pro_name='$PN', quan='$Q', cst='$CS' WHERE proo_id='$PI'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header('location: home_general.php');

//header("Location:../home_general.php?signup=success");
$conn->close();
?>