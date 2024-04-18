<?php
include "config.php";
?>

<!DOCTYPE html>
<html>

<head>
	<title>CRUD</title>
	<link rel="icon" href="image/icons8.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	
	<style>
		body {
			font-size: 20px;
			font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
		}
	</style>
	
</head>

<body>
	<div class="container my-5">
		<a class="btn btn-success mb-4" href="create.php">NEW BIKE</a>
		<h1>Jasper Bikes_Shop</h1>
		<h4>LIST OF BIKE THAT PURCHASE</h4>
		<form method="GET" action="search.php">
			<input type="text" name="search" placeholder="Search..." id="search">
			<!-- <input type="text" name="search" placeholder="Search..." id="search"> -->
			<button type="submit" class="btn btn-primary">Search</button>
		</form>
		<p>Total IDs: <?php echo mysqli_num_rows(mysqli_query($conn, "SELECT id FROM bikes")); ?></p>
		<table class="table table-dark">
			<thead>
				<tr>
					<th>ID</th>
					<th>Customer name</th>
					<th>Bike name</th>
					<th>Bike brand</th>
					<th>Purchase date</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>total Price</th>
					<th>Action</th>

				</tr>
			</thead>
			<tbody>
				<?php
				$totalPrice = 0;
				$totalQuantity = 0;
				$sqlquery = "SELECT * FROM bikes";

				if ($results = mysqli_query($conn, $sqlquery)) {
					while ($row = mysqli_fetch_array($results)) {
						$id = $row['id'];
						$customer_name = $row['customer_name'];
						$bikename = $row['bike_name'];
						$bikebrand = $row['bike_brand'];
						$pdate = $row['purchase_date'];
						$price = $row['price'];
						$quantity = $row['quantity'];
						$totalRowPrice = $row['price'] * $row['quantity'];
						$total = $row['total'];
						$totalPrice += $totalRowPrice;
						echo '<tr>
                <th scope="row">' . $id . '</th>
                <td>' . $customer_name . '</td>
                <td>' . $bikename . '</td>
                <td>' . $bikebrand . '</td>
                <td>' . $pdate . '</td>
                <td>' . $price . '</td>
                <td>' . $quantity . '</td>
                <td>' . $totalRowPrice . '</td>
                <td>
                    <button class="btn btn-primary"><a href="update.php?id=' . $id . '" class="text-light"><i class="bi-pencil-square">Update</i></a></button>
                    <button class="btn btn-danger"><a href="delete.php?id=' . $id . '" class="text-light"><i class="bi bi-trash">Delete</i></a></button>
                </td>
                </tr>';
					}
				}
				?>
			</tbody>
			<p>Overall Total Sell:
				<?php echo $totalPrice; ?>
			</p>
		</table>
	</div>

	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>