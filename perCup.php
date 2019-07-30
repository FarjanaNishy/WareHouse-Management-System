<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>Buying Form</title>
		<link rel="stylesheet" href="css/distribution_form.css">
	</head>
	<body>
		<form action="perCup_link.php" method="post">
		<div class="full wrapper form">
			<div class="main form">
				<div class="r1">
					<div class="r1c1">
					<p>Product ID</p>
					</div>
						<input type="text" name="pi" placeholder="Product ID">
				</div>
				<div class="r2">
					<div class="r2c1">
						<p>Product Name</p>
					</div>
						<input type="text" name="pn" placeholder="Product Name">
				</div>
				<div class="r3">
					<div class="r3c1">
						<p>Quantity</p>
					</div>
						<input type="text" name="q" placeholder="Quantity">
				</div>
				<div class="r4">
					<div class="r4c1">
						<p>Cost</p>
					</div>
						<input type="text" name="cs" placeholder="Cost">
				</div>
				<div class="r5">
					<button type="update" value="update" class="update">Update</button>
				</div>
			</div>
		</div>
	</form>
	</body>
</html>