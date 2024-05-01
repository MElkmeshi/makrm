<?php
require_once "lang.php";
require_once "config.php";
if (isset($_GET['cat'])) {
    $cat = $_GET['cat'];
    if ($result = mysqli_query($con, "SELECT * FROM category Where categoryName='" . rawurlencode($cat) . "'")) {
        if ($row = mysqli_fetch_assoc($result)) {
            $catEN = $row['categoryNameEN'];
            $cat = urldecode($row['categoryName']);
            $categoryID = $row['categoryID'];
        } else {
            header("Location: /");
        }
    }
} else {
    header("Location: /");
}
