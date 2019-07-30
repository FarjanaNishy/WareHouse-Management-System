<?php
$servername="localhost";
$username="root";
$password="";
$dbname="warehouse";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection Failed: ".$conn->connect_error);
}

$sql="SELECT ex_date,p_id FROM store";
$PI=$_POST['$sql'];
$result=$conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if(date("d/m/Y")===$row["ex_date"]){
        	echo $row["p_id"]."'s product is not valid enough<br>";
        }
    }
} else {
    echo "0 results";
}
$conn->close();
?>