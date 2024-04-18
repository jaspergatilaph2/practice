<?php
include "config.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="icon" href="image/bikes-64.png" type="image/x-icon">
</head>

<body>
    <div class="container my-5">
        <a class="btn btn-success mb-4" href="create.php">NEW BIKE</a>
        <a class="btn btn-success mb-4" href="index.php">Back</a>
        <!-- <a class="btn btn-success mb-4" href="search.php">SEARCH</a> -->
        <h1>LIST OF BIKE THAT PURCHASE</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Bike Name</th>
                    <th>Bike Brand</th>
                    <th>Bike purchase_date</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
               <?php
               if(isset($_GET['search'])){
                $filtersearch = $_GET['search'];
                $query = "SELECT * FROM bikes WHERE CONCAT(id, customer_name, bike_name, bike_brand, purchase_date, price, quantity) LIKE '%$filtersearch%'";
                $qurey_run = mysqli_query($conn, $query);

                if(mysqli_num_rows($qurey_run) > 0){
                    echo "<p>Total IDs found: " . mysqli_num_rows($qurey_run) . "</p>";
                    foreach($qurey_run as $items){
                        ?>
                        <tr>
                            <td><?= $items['id']?></td>
                            <td><?= $items['customer_name']?></td>
                            <td><?= $items['bike_name']?></td>
                            <td><?= $items['bike_brand']?></td>
                            <td><?= $items['purchase_date']?></td>
                            <td><?= $items['price']?></td>
                            <td><?= $items['quantity']?></td>
                            <td></td>
                        </tr>
                        <?php
             
                    }
                }else{
                     echo '<div class="alert alert-warning" role="alert">
                     No data found for the search term: ' . htmlspecialchars($filtersearch) . '
                   </div>';
                }
               }
               ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>