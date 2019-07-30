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
$sql="INSERT INTO sell(pr_id,pr_name,quan,cst) VALUES('$PI','$PN','$Q','$CS')";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "No Data Found";
}
header('location: home_general.php');

//header("Location:../home_general.php?signup=success");
$conn->close();
?>