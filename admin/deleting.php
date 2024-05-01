<?php
include_once('../config.php');
if (isset($_POST['id'])) {
    $index = intval($_POST['id']);
    if ($index >= 0) {
        $index = intval($index);

        $query = "DELETE FROM product WHERE id = ?";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "i", $index);

        if (mysqli_stmt_execute($stmt)) {
            echo "Row successfully deleted.";
        } else {
            echo "Error occurred while deleting the data.";
        }
        mysqli_stmt_close($stmt);
    }
} else {
    echo "Invalid request.";
}
