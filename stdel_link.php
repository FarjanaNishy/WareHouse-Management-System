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
$sql="DELETE FROM store WHERE p_id='$PI'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
     echo "Error: " . $sql . "<br>" . $conn->error;;
}
header('location: home_general.php');
//header("Location:../home_general.php?signup=success");
$conn->close();
?>