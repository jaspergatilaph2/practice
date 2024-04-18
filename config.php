<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

// $conn = new mysqli($servername, $username, $password, $dbname);
// if($conn){
//   echo "Connected....";
// }

if($conn = mysqli_connect($servername, $username, $password, $dbname)){
  $sql = "CREATE DATABASE IF NOT EXISTs $dbname";

  if(mysqli_query($conn, $sql)){
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    include "migrations.php";
  }
}
?>