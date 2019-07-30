<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table align="center" border="1px" style="width: 600px; line-height: 40px;">
    <tr>
        <th colspan="4"><h2>Report</h2></th>
    </tr>
    <t>
        <th>ID</th>
        <th>Buying Cost</th>
        <th>Selling Cost</th> 
        <th>Profit</th>
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


$sql="SELECT proo_id,quan,cst FROM buy";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
	$sum=0;
    while($row = $result->fetch_assoc()) {
        $PO=$row["proo_id"];
		$sql="SELECT quan,cst FROM sell WHERE pr_id='$PO'";
        //$sum=$()
        $summ=($row["quan"])*($row["cst"]);
        $sum=($sum+$summ);
        $result1=$conn->query($sql);
        if($result1->num_rows>0){
            $sum1=0;
        echo "<tr><td>". $row["proo_id"]."</td><td>".$summ."</td><td>";
        while($row=$result1->fetch_assoc()){
            $summ1=($row["quan"])*($row["cst"]);
            $sum1=($sum1+$summ1);
            echo $summ1."</td><td>".($summ1-$summ)."</tr></td>";
            if(($sum1-$sum)<0) echo "It's a loss!!!<br>";
            if(($sum1-$sum)>0) echo "It's a profit!!!<br>";
        }
        echo "</table>";
    }
    else {
       // echo "0 result";
    }
    }
    echo "</table>";
}
else {
    //echo "0 result"; 
}
echo "Total buying Cost: ".$sum."<br>Total selling cost: ".$sum1."<br>Total Profit: ".($sum1-$sum)."<br>";
$conn->close();
?>
</table>
</body>
</html>