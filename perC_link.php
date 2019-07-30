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


$sql="INSERT INTO buy (proo_id, pro_name, quan, cst)
VALUES ('$PI', '$PN', '$Q', '$CS')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('location: home_general.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//header('location: home_general.php');
$conn->close();
?>