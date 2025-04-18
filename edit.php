<?php
include("connect.php");

$id = $_GET["this_id"];
$sql = "SELECT * FROM products WHERE idSP=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if (isset($_POST["btn_edit"])) {

    $name_e = $_POST["edit_name"];
    $img_e = $_FILES["edit_img"]["name"];
    $price_e = $_POST["edit_price"];
    $bh_e = $_POST["edit_bh"];

    $sql_e = "UPDATE products SET nameSP='$name_e', imgSP='$img_e', priceSP='$price_e', baohanh='$bh_e'
    WHERE idSP=$id";
    mysqli_query($conn, $sql_e);
    move_uploaded_file($_FILES["edit_img"]["tmp_name"], "assets/img/products/" . $img_e);

    header("location: product.php");
}

?>

<h1>Edit product: <?php echo $row["nameSP"]; ?></h1>
<form action="" method="post" enctype="multipart/form-data">
    <label for="">Edit Name</label>
    <input type="text" name="edit_name" value="<?php echo $row["nameSP"]; ?>" />
    <br />
    <br />
    <br />
    <label for="">Edit </label><img src="assets/img/products/<?php echo $row["imgSP"]; ?>" width="120" />
    <input type="file" name="edit_img" />
    <br />
    <br />
    <br />
    <label for="">Edit Price</label>
    <input type="text" name="edit_price" value="<?php echo $row["priceSP"]; ?>" />
    <br />
    <br />
    <br />
    <label for="">Edit BH</label>
    <input type="text" name="edit_bh" value="<?php echo $row["baohanh"]; ?>" />
    <br />
    <br />
    <input type="submit" name="btn_edit" />
</form>