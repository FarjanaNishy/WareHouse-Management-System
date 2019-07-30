<?php
$servername="localhost";
$username="root";
$password="";
$dbname="warehouse";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection Failed: ".$conn->connect_error);
}

$sql="SELECT quan,cst FROM buy";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
	$sum=0;
    while($row = $result->fetch_assoc()) {
        $sum=$sum+(($row["quan"])*($row["cst"]));
    }
}
 echo "Total Buying Cost : ".($sum)."<br>";
//header("Location:../home_general.php?signup=success");
$conn->close();
?>