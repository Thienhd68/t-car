<?php
include("connect.php");

if (isset($_POST["submit_add"])) {
    $add_name_car = $_POST["add_name"];

    // IMG
    $add_Nimg_car = $_FILES["add_img"]["name"];
    $add_Aimg_car = $_FILES["add_img"]["tmp_name"];

    $add_price_car = $_POST["add_price"];
    $add_baohanh_car = $_POST["add_baohanh"];

    $sql = "INSERT INTO products (nameSP, imgSP, priceSP, baohanh)
    value('$add_name_car', '$add_Nimg_car', '$add_price_car', '$add_baohanh_car')
    ";
    mysqli_query($conn, $sql);

    // Add file to foder
    move_uploaded_file($_FILES["add_img"]["tmp_name"], "assets/img/products/" . $add_Nimg_car);

    header("location: product.php");
}

?>

<form action="add_product.php" method="post" enctype="multipart/form-data">
    <label for="">Add Name Product</label>
    <input type="text" name="add_name" />
    <br />
    <br />
    <br />
    <label for="">Add IMG</label>
    <input type="file" name="add_img" />
    <br />
    <br />
    <br />
    <label for="">Add Price</label>
    <input type="text" name="add_price" />
    <br />
    <br />
    <br />
    <label for="">Add BH</label>
    <input type="text" name="add_baohanh" />
    <br />
    <br>
    <input type="submit" name="submit_add" id="btn">

</form>