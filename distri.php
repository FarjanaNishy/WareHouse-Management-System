<!DOCTYPE HTML>
<html>
<head>
		<meta charset="utf-8">
		<title>Distribution Form</title>
		<link rel="stylesheet" href="css/distribution_form.css">
	</head>
	<form action="distri_link.php" method="post">
	<body>
		<div class="full wrapper form">
			<div class="main form">
				<div class="r1">
					<div class="r1c1">
					<p>Product ID</p>
					</div>
					<div class="r1c2">
						<input type="text" name="pi" placeholder="Product ID">
					</div>
				</div>
				<div class="r2">
					<div class="r2c1">
					<p>Delivery Time</p>
					</div>
					<div class="r2c2">
						<input type="text" name="dt" placeholder="Delivery Time">
					</div>
				</div>
				<div class="r3">
					<div class="r3c1">
					<p>Driver Name</p>
					</div>
					<div class="r3c2">
						<input type="text" name="dn" placeholder="Driver Name">
					</div>
				</div>
				<div class="r4">
					<div class="r4c1">
					<p>Delivered??</p>
					</div>
					<div class="r4c2">
						<input type="text" name="dd" placeholder="Delivered??">
					</div>
				</div>
				<div class="r4">
					<button type="submit" value="submit" class="submit">Submit</button>
			</div>
		</div>
	</body>
</html>