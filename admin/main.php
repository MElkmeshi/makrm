<?php
// include('inserting.php');
include_once('../config.php');
$query = "SELECT id, productName,productNameEN ,productImage, categoryName FROM product LEFT OUTER JOIN category on product.categoryID = category.categoryID";
$stmt = mysqli_prepare($con, $query);
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="./delete.js" defer></script>
    <script src="./update.js" defer></script>
</head>

<div class="container">

    <div class="d-flex justify-content-end">
        <a href="inserting.php">
            <button class="btn btn-dark">Add Product</button>
        </a>
    </div>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Category Name</th>
            <th>Product Name</th>
            <th>Modify Name</th>
            <th>Product Image</th>
            <th>Modify Image</th>
            <th>Delete</th>

        </tr>
        <?php
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_bind_result($stmt, $id, $product_name, $product_nameEN,  $product_image, $categoryName);
            $sn = 1;
            while (mysqli_stmt_fetch($stmt)) {
        ?>
                <tr>
                    <th scope="row"><?php echo $sn; ?> </th>
                    <td data-column="cName"><?php echo urldecode($categoryName) ?></td>
                    <td class="editable" data-column="pName"><?php echo urldecode($product_name); ?></td>
                    <td class="editable" data-column="pNameEN"><?php echo $product_nameEN; ?></td>
                    <td align="center"><button class="edit btn btn-dark" data-id="<?php echo $id; ?>">Modify</button></td>
                    <td align="center"><img src="<?php echo  $product_image; ?>" alt="" width:"200" height="100" /></td>
                    <td align="center">
                        <form action="update_photo.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="product_id" value="<?php echo $id; ?>">
                            <input class="form-control" type="file" name="new_image" size="36" style="height:35px" accept="image/*" required><br>
                            <button type="submit" class="btn btn-dark" name="submit_photo">Change Photo</button>
                        </form>
                    </td>
                    <td align="center"><button class='delete btn btn-danger' type="submit" name='delete' data-id="<?php echo $id; ?>">Delete</button></td>

                <tr>
                <?php
                $sn++;
            }
            mysqli_stmt_close($stmt);
        } else { ?>
                <tr>
                    <td colspan="6">No data found</td>
                </tr>
            <?php } ?>
    </table>
</div>