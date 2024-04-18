<?php
include "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL query to delete a record based on the provided ID
    $deleteQuery = "DELETE FROM bikes WHERE id = $id";

    if (mysqli_query($conn, $deleteQuery)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    echo "Invalid request. Please provide an ID.";
}

// Redirect to the main page after deletion
header("Location: index.php");
exit();
?>
