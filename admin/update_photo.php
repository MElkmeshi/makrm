<?php
include_once("../config.php");
if (isset($_POST['submit_photo'])) {
    $product_id = $_POST['product_id'];
    $filename = $_FILES["new_image"]["name"];
    $tempname = $_FILES["new_image"]["tmp_name"];
    $folder = "../img/" . $filename;
    $link = "/img/" .  $filename;
    if (move_uploaded_file($tempname, $folder)) {
        $query = "UPDATE product SET productImage = ? WHERE id = ?";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "si", $link, $product_id);

        if (mysqli_stmt_execute($stmt)) {
            header("Location: /admin/main.php");
        } else {
            echo "Error occurred while updating product photo.";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Failed to upload new image.";
    }
}
