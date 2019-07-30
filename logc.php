<?php
$servername="localhost";
$username="root";
$password="";
$dbname="warehouse";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection Failed: ".$conn->connect_error);
}

$PASS=$_POST['pass'];

$sql="SELECT pass FROM login";

$result=$conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row["pass"]===$PASS){
        	header('location: home_general.php');
        }
        else echo "Wrong Password/Username";
    }
}
 //echo "Total Buying Cost : ".($sum)."<br>";

//header("Location:../home_general.php?signup=success");
$conn->close();
?>