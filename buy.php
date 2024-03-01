<?php
// Include database connection file
include "controllers/pg_connect.php";;

// Check if rating ID is set in the URL
if (isset($_GET['rating_id'])) {
    $ratingId = $_GET['rating_id'];

    // Decrement the cart column in the ratings table
    $updateQuery = "UPDATE ratings SET cart = GREATEST(cart - 1, 0) WHERE rating_id = $ratingId";
     // Increment the buy column in the ratings table
     $updateQuery2 = "UPDATE ratings SET buy = buy + 1 WHERE rating_id = $ratingId";
    $updateResult = pg_query($pg_conn, $updateQuery);
    $updateResult2 = pg_query($pg_conn, $updateQuery2);

    if (!$updateResult) {
        // Handle the error, e.g., display an error message or log the error.
        echo "Error updating cart.";
    } else {
        // Display an alert for successful purchase
        echo '<script>alert("1 item has been bought."); window.location.href="addcart.php";</script>';
    }

  
if (!$updateResult2) {
    // Handle the error, e.g., display an error message or log the error.
    echo "Error updating cart.";
} else {
    // Display an alert for successful purchase
    echo '<script>alert("1 item has been bought."); window.location.href="addcart.php";</script>';
}
}

// Close the database connection
if ($pg_conn != NULL) {
    pg_close($pg_conn);
}

// Redirect back to the main page or wherever needed
header("Location: cust_index.php?alert=1 item has been bought");
exit();
?>
