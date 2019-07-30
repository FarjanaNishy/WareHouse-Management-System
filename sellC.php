<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>Selling Form</title>
		<link rel="stylesheet" href="css/distribution_form.css">
	</head>
	<body>
		<form action="sellC_link.php" method="post">
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
						<p>Price+Labour Cost</p>
					</div>
						<input type="text" name="cs" placeholder="Price+Labour Cost">
				</div>
				<div class="r5">
					<button type="submit" value="submit" class="submit">Submit</button>
				</div>
			</div>
		</div>
	</form>
	</body>
</html>