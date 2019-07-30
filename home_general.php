<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			Warehouse Management System
		</title>
		<link rel="stylesheet" href="css/home.css">
	</head>
	
	<body>
	
	<!--Menu Start-->
	<div class="full_wrapper menubar">
		<div class="wrapper">
			<ul class="menu">
				<li><a href="home_general.php">Home</a></li>
				<li><a href="#">Cost</a>
					<ul>
						<li><a href="perC.php">Buy</a></li>
						<ul>
							<li><a href="perCup.php">Update Buy</a></li>
						</ul>
						<li><a href="sellC.php">Sell</a></li>
					</ul>
				
				</li>
				<li><a href="#">Distribution</a>
					<ul>
						<li><a href="distri.php">Store</a></li>
						<li><a href="dis.php">View</a></li>
					</ul>
				</li>
				<li><a href="#">Store</a>
					<ul>
						<li><a href="st.php">Store</a></li>
						<li><a href="vie.php">View Store</a></li>
						<li><a href="stup.php">Update Store</a></li>
						<li><a href="stdel.php">Delete Store</a></li>
					</ul>
				</li>
				<li><a href="tot_link.php">Report</a></li>
				<li><a href="logO.php">Logout</a></li>
			</ul>
		</div>
	</div>
			<body>
			<h1 style="color: red">Notifications</h1>
			</body>
	<!--Menu End-->
	</div>
	<!--Footer End-->
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="warehouse";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection Failed: ".$conn->connect_error);
}

$sql="SELECT date,p_id FROM store";
//$sql="ELECT COUNT(pro_id) FROM distribution";
//$PI=$_POST['$sql'];
$result=$conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if(date("d/m/Y")===$row["date"]){
        	echo $row["p_id"]."'s will be expired soon!!!<br>";
        }
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="warehouse";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection Failed: ".$conn->connect_error);
}

$sql="SELECT quan FROM store";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
	$cnt=0;
    while($row = $result->fetch_assoc()) {
        $cnt=$cnt+$row['quan'];
    }
}
echo "Total Storage : 1000Ton<br>";
echo "Storage Available: ".(1000-$cnt)."Ton<br>";
$conn->close();
?>

<body>
	<br><br>
	<h1 style="text-align: center; color: green">About Warehouse</h1>
	<p style="text-align: center;">A warehouse is a building for storing goods.Warehouses are used by manufacturers, importers, exporters, wholesalers, transport businesses, customs, etc. They are usually large plain buildings in industrial parks on the outskirts of cities, towns or villages.They usually have loading docks to load and unload goods from trucks. Sometimes warehouses are designed for the loading and unloading of goods directly from railways, airports, or seaports. They often have cranes and forklifts for moving goods, which are usually placed on ISO standard pallets loaded into pallet racks. Stored goods can include any raw materials, packing materials, spare parts, components, or finished goods associated with agriculture, manufacturing, and production.</p>
</body>
<body>
	<br><br>
	<h1 style="text-align: center;color: green">Some Pictures of Warehouse</h1>
	<img src="3.jpg" width="680" height="300"><img src="5.jpg" width="669" height="300">
</body>
<body>
	<br><br>
	<h1 style="text-align: center;color: green">Contact Information</h1>
	<p style="text-align: center;">Name: Saidur Rahman Sajol<br>Mobile Number: 01725940852<br>Email: rahmansaidur970@gmail.com<br>Dhaka,Bangladesh.</p>
</body>
<body>
	<br><br>
	<h1 style="text-align: center;color: green">Through Google Map</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14592.152143172538!2d90.3906595!3d23.8882699!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaa41c726134f443b!2sInternational+University+Of+Business+Agriculture+%26+Technology!5e0!3m2!1sen!2sbd!4v1555528850444!5m2!1sen!2sbd" width="1350" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</body>
<body>
	<br><br><br>
	<h1 style="text-align: center;color: blue">Developed By Break_Timers</h1>
</body>
	</body>
</html>