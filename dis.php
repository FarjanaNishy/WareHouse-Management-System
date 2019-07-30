<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table align="center" border="1px" style="width: 600px; line-height: 40px;">
    <tr>
        <th colspan="4"><h2>View</h2></th>
    </tr>
    <t>
        <th>ID</th>
        <th>Delivery Time</th>
        <th>Driver Name</th>
		<th>Delivered??</th>
    </t>
    <?php
        $servername="localhost";
$username="root";
$password="";
$dbname="warehouse";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}
 $sql="SELECT pro_id,delivery_time,driver_name, deli FROM distribution";
 $result=$conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
     echo "<tr><td>" .$row["pro_id"]. "</td><td>" .$row["delivery_time"]. "</td><td>" .$row["driver_name"]."</td><td>" .$row["deli"]."</td></tr>";
}
}
$conn->close();
    ?>
</table>
</body>
</html>