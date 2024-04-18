<?php
include "config.php";
?>
<!DOCTYPE html>
<html>

<head>
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="icon" href="image/bikes-64.png" type="image/x-icon">
</head>

<body>
	<div class="container">
		<div class="row mt-5 d-flex justify-content-center">
			<div class="col-sm-5">
				<div class="card p-4">
					<h1>CREATE</h1>
					<p>List of purchase bikes</p>
					<form action="" method="POST">
						<div class="form-group">
							<label for="fullname">Customer Name</label>
							<input type="text" required name="customer_name" class="form-control" id="fullname">
						</div>
						<div class="form-group">
							<label for="fullname">Bike name</label>
							<input type="text" required name="bikeName" class="form-control" id="fullname">
						</div>
						<div class="form-group">
							<label for="age">Bike Brand</label>
							<input type="text" required name="bikeBrand" class="form-control" id="age">
							<div class="form-group">
								<label for="purchasedate">Purchase Date</label>
								<input type="date" required name="purchase_date" class="form-control" id="bday">
							</div>
							<div class="form-group">
								<label for="price">Price</label>
								<input type="number" required name="price" class="form-control" id="" value="">
							</div>
							<div class="form-group">
								<label for="quantity">Quantity</label>
								<input type="number" required name="quantity" class="form-control" id="" value="">
							</div>
							<input type="submit" class="btn btn-primary mt-4" name="submit" value="Save">
							<a href="index.php"><input type="button" class="btn btn-primary mt-4" name="cancel" value="Cancel"></a>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$customer_name = $_POST['customer_name'];
	$bikename = $_POST['bikeName'];
	$bikebrand = $_POST['bikeBrand'];
	$pdate = $_POST['purchase_date'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];

	$totalPrice = $_POST['price'];
	// $sqlquery = "INSERT INTO bikes VALUES(null, $customer_name, '$bikename', '$bikebrand', '$pdate', '$quantity', '$totalPrice')";
	$sqlquery = "INSERT INTO bikes (customer_name, bike_name, bike_brand, purchase_date, quantity, price) VALUES ('$customer_name', '$bikename', '$bikebrand', '$pdate', '$quantity', '$price')";


	if (mysqli_query($conn, $sqlquery)) {
		echo "<script>alert('Successfully Saved!'); window.location='index.php';</script>";
		// echo "<center>Successfully Saved!</center>";
		// header("location:index.php");
	} else {
		echo mysqli_error($conn);
	}
}
?>