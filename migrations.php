<?php
$query = "CREATE TABLE IF NOT EXISTS `bikes`(id int primary key auto_increment, customer_name char(255), bike_name char(255), bike_brand char(255), purchase_date char(255), prize int not null, quantity int, total int null)";

if(!mysqli_query($conn, $query)){
  print mysqli_error($conn);
}
?>