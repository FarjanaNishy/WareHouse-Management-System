<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>Storing Form</title>
		<link rel="stylesheet" href="css/distribution_form.css">
	</head>
	<body>
		<form action="stC.php" method="post">
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
						<p>Entry Date</p>
					</div>
						<input type="text" name="ed" placeholder="Entry Date">
				</div>
				<div class="r4">
					<div class="r4c1">
						<p>Expiry Date</p>
					</div>
						<input type="text" name="exd" placeholder="Expiry Date">
				</div>
				<div class="r5">
					<div class="r5c1">
						<p>Minimum available Date</p>
					</div>
						<input type="text" name="mad" placeholder="Minimum available Date">
				</div>
				<div class="r6">
					<div class="r6c1">
						<p>Product Quantity</p>
					</div>
						<input type="text" name="pq" placeholder="Product Quantity">
				</div>
				<div class="r7">
					<button type="submit" value="submit" class="submit">Submit</button>
				</div>
			</div>
		</div>
	</form>
	</body>
</html>