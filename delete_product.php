<?php
include("connect.php");

$id = $_GET["this_id"];

$sql = "DELETE FROM products WHERE idSP=$id";
mysqli_query($conn, $sql);

// Cau lenh quay lai trang product
header("location: product.php");
?>