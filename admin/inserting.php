<!DOCTYPE html>
<?php
include('../config.php');

if (isset($_POST['submit'])) {
  $filename = $_FILES["file"]["name"];
  $tempname = $_FILES["file"]["tmp_name"];
  $folder = "../img/" . $filename;

  if ($_FILES["file"]["error"] !== UPLOAD_ERR_OK) {
    if ($_FILES["file"]["error"] == 4) {
      $filename = '';
    } else {
      die("File upload failed with error code: " . $_FILES["file"]["error"]);
    }
  }
  $link = "/img/" . $filename;
  if (move_uploaded_file($tempname, $folder)) {
    echo "Image uploaded successfully";
  } else {
    echo "Failed to upload image";
  }
  $categoryID = filter_var(
    $_POST["categories"],
    FILTER_SANITIZE_NUMBER_INT
  );
  $id = 0;
  $query = "INSERT INTO product (id,productImage,categoryID) VALUES (?,?,?)";
  $stmt = mysqli_prepare($con, $query);
  mysqli_stmt_bind_param($stmt, "isi", $id, $link, $categoryID);

  if (mysqli_stmt_execute($stmt)) {
    header("Location: /admin/main.php");
  } else {
    echo "Error occurred while inserting data.";
  }
  mysqli_stmt_close($stmt);
}

?>
<html>

<head>
  <title>products</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <style>
    .container {
      margin: 0 auto;
      padding: 20px;
      width: 80%;
      background-color: #f7f7f7;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 600px;
    }
  </style>

</head>

<body>

  <div class="container mt-5">

    <form action="" method="POST" enctype="multipart/form-data">

      <div class="mb-3">
        <label for="formFile" class="form-label">Product Image</label>
        <input name="file" class="form-control" size="36" type="file" accept="image/*">
      </div>
      <div class="mb-3">

        <label for="categories" class="form-label">Category</label>
        <select class="form-select" name="categories" id="categories" required>
          <option value="" disabled selected>Select a category</option>
          <?php
          if ($result = mysqli_query($con, "SELECT * FROM category")) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<option value='" . $row['categoryID'] . "'>" . rawurldecode($row['categoryName']) . "</option>";
            }
            mysqli_free_result($result);
          }
          ?>

        </select>
      </div>
      <button type="submit" name="submit" class="btn btn-dark mb-3"> Submit </button>
  </div>
  </form>
  </div>

  <br><br><br><br><br><br>
</body>

</html>