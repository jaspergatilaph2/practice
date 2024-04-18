 <?php
	include "config.php";

  if($_SERVER['REQUEST_METHOD'] == "GET"){
    $id = $_GET["id"];
  }

  // Fetch data for the selected record if editing
  if(isset($id)) {
    $query = "SELECT * FROM bikes WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
   
    $customer_name = $row['customer_name'];
    $bikeName = $row['bike_name'];
    $bikeBrand = $row['bike_brand'];
    $purchaseDate = $row['purchase_date'];
    $price = $row['price'];
    $quantity = $row['quantity'];
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
  <link rel="icon" href="image/bikes-64.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row mt-5 d-flex justify-content-center">
			<div class="col-sm-5">
				<div class="card p-4">
					<h1><?php echo isset($id) ? 'UPDATE' : 'CREATE'; ?></h1>
					<form action="" method="POST">
            <!-- Add a hidden input field for the ID -->
            <?php if(isset($id)) { ?>
              <input type="hidden" name="id" value="<?php echo $id; ?>">
            <?php } ?>
            <div class="form-group">
							<label for="fullname">Customer Name</label>
							<input type="text" required name="customer_name" class="form-control" id="fullname" value="<?php echo isset($customer_name) ? $customer_name : ''; ?>">
						</div>
						<div class="form-group">
							<label for="fullname">Bike name</label>
							<input type="text" required name="bikeName" class="form-control" id="fullname" value="<?php echo isset($bikeName) ? $bikeName : ''; ?>">
						</div>
						<div class="form-group">
							<label for="age">Bike Brand</label>
							<input type="text" required name="bikeBrand" class="form-control" id="age" value="<?php echo isset($bikeBrand) ? $bikeBrand : ''; ?>">
						<div class="form-group">
							<label for="purchasedate">Purchase Date</label>
							<input type="date" required name="purchase_date" class="form-control" id="bday" value="<?php echo isset($purchaseDate) ? $purchaseDate : ''; ?>">
						</div>
            <div class="form-group">
							<label for="price">Price</label>
							<input type="number" required name="price" class="form-control" id="" value="<?php echo isset($price) ? $price : ''; ?>">
						</div>
            <div class="form-group">
							<label for="quantity">Quantity</label>
							<input type="number" required name="quantity" class="form-control" id="" value="<?php echo isset($quantity) ? $quantity : ''; ?>">
						</div>
						<input type="submit" class="btn btn-primary mt-4" name="submit" value="<?php echo isset($id) ? 'Update' : 'Save'; ?>" >
            <button class="btn btn-primary mt-4" ><a class="text-light" href="index.php">Back</a></button>
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
    $customername = $_POST['customer_name'];
    $bikename = $_POST['bikeName'];
    $bikebrand = $_POST['bikeBrand'];
    $pdate = $_POST['purchase_date'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // If there is an ID, perform an update
    if(isset($_POST['id'])) {
      $id = $_POST['id'];
      $sqlquery = "UPDATE bikes SET customer_name='$customername', bike_name='$bikename', bike_brand='$bikebrand', purchase_date='$pdate', price='$price', quantity='$quantity' WHERE id=$id";
    } else {
      // If no ID, perform an insert (similar to your existing insert code)
      $sqlquery = "INSERT INTO bikes VALUES(null, $customername, '$bikename', '$bikebrand', '$pdate', '$price', '$quantity')";
    }

    if (mysqli_query($conn, $sqlquery)) {
      echo "<script>alert('Successfully ".(isset($id) ? 'Updated' : 'Saved')."!'); window.location='index.php';</script>";
    } else {
      echo mysqli_error($conn);
    }
	}
?>
