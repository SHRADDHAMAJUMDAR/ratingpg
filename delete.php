<?php
include 'controllers/pg_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you're receiving the item_id via POST
    $item_id = isset($_POST['item_id']) ? $_POST['item_id'] : 0;

    if ($item_id > 0) {
        // Delete from ratings table
        $deleteRatingsQuery = "DELETE FROM ratings WHERE item_id = $item_id";
        $resultRatings = pg_query($pg_conn, $deleteRatingsQuery);

        // Delete from items table
        $deleteItemsQuery = "DELETE FROM items WHERE item_id = $item_id";
        $resultItems = pg_query($pg_conn, $deleteItemsQuery);

        if ($resultRatings && $resultItems) {
            $response = array('status' => 'success', 'message' => 'Item deleted successfully');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to delete item');
        }

        echo json_encode($response);
    } else {
        $response = array('status' => 'error', 'message' => 'Invalid item ID');
        echo json_encode($response);
    }
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method');
    echo json_encode($response);
}
?>
