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
        <th>Product Name</th>
        <th>Entry Date</th>
		<th>Expiry Date</th>	
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
 $sql="SELECT p_id,p_name,en_date,ex_date FROM store";
 $result=$conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
     echo "<tr><td>" .$row["p_id"]. "</td><td>" .$row["p_name"]. "</td><td>" .$row["en_date"]."</td><td>" .$row["ex_date"]. "</td></tr>";
}
}
$conn->close();
    ?>
</table>
</body>
</html>