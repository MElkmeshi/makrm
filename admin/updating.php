<?php
include_once("../config.php");
if (isset($_POST['update'])) {
  $id = $_POST['id'];
  // $product_name = rawurlencode(filter_var($_POST["pName"], FILTER_SANITIZE_SPECIAL_CHARS));
  // $product_nameEN = filter_var($_POST["pNameEN"], FILTER_SANITIZE_SPECIAL_CHARS);
  // $query = "UPDATE product SET productName = ?, productNameEN = ? WHERE id = ?";
  // $stmt = mysqli_prepare($con, $query);
  // mysqli_stmt_bind_param($stmt, "ssi", $product_name, $product_nameEN,  $id);

  if (mysqli_stmt_execute($stmt)) {
    echo "Record updated successfully";
  } else {
    echo "Error occurred while updating data.";
  }
  mysqli_stmt_close($stmt);
}
