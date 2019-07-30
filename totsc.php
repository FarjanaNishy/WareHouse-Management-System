<?php
$servername="localhost";
$username="root";
$password="";
$dbname="warehouse";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection Failed: ".$conn->connect_error);
}

$sql="SELECT quan,cst FROM sell";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
	$sum1=0;
    while($row = $result->fetch_assoc()) {
        $sum1=$sum1+(($row["quan"])*($row["cst"]));
    }
}
 echo "Total Profit : ".($sum1)."<br>";
//header("Location:../home_general.php?signup=success");
$conn->close();
?>