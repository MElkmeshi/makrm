<!DOCTYPE html>
<?php
include('../config.php');

if (isset($_POST['submit'])) {
    $filenamecat1 = $_FILES["cat1"]["name"];
    $tempnamecat1 = $_FILES["cat1"]["tmp_name"];
    $foldercat1 = "../img/" . $filenamecat1;

    $filenamecat2 = $_FILES["cat2"]["name"];
    $tempnamecat2 = $_FILES["cat2"]["tmp_name"];
    $foldercat2 = "../img/" . $filenamecat2;

    if ($_FILES["cat1"]["error"] !== UPLOAD_ERR_OK) {
        if ($_FILES["cat1"]["error"] == 4) {
            $filename = '';
        } else {
            die("File upload failed with error code: " . $_FILES["cat1"]["error"]);
        }
    }

    if ($_FILES["cat2"]["error"] !== UPLOAD_ERR_OK) {
        if ($_FILES["cat2"]["error"] == 4) {
            $filename = '';
        } else {
            die("File upload failed with error code: " . $_FILES["cat2"]["error"]);
        }
    }


    $linkcat1 = "/img/" . $filenamecat1;
    $linkcat2 = "/img/" . $filenamecat2;

    if (move_uploaded_file($tempnamecat1, $foldercat1) && move_uploaded_file($tempnamecat2, $foldercat2)) {
        echo "Image uploaded successfully";
    } else {
        echo "Failed to upload image";
    }
    $name = rawurlencode(
        $_POST["name"]
    );
    $nameEn = $_POST["nameEn"];
    $id = 0;
    $query = "INSERT INTO category (categoryID,categoryName,categoryNameEN,categoryImage1,categoryImage2) VALUES (?,?,?,?,?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "issss", $id, $name, $nameEn, $linkcat1, $linkcat2);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: /admin/");
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
                <label for="categories" class="form-label">Category Name</label>
                <input name="name" type="text" class="form-control" size="36" id="name">
            </div>
            <div class="mb-3">
                <label for="categories" class="form-label">Category Name English</label>
                <input name="nameEn" type="text" class="form-control" size="36" id="nameEn">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Category Image 1</label>
                <input name="cat1" class="form-control" size="36" type="file" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Category Image 2</label>
                <input name="cat2" class="form-control" size="36" type="file" accept="image/*">
            </div>

            <button type="submit" name="submit" class="btn btn-dark mb-3"> Submit </button>
    </div>
    </form>
    </div>

</body>

</html>