<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Connnect database
    include("connect.php");

    include("product.php");
    ?>
</body>

</html>


<!-- Cần fix các lỗi như:
    - chọn ảnh nào hiện ảnh đó ngay(ở edit)
    - và khi người dung không thay đổi ảnh thì vẫn giữ nguyên ảnh cũ,
    - xóa ảnh trong thư mục khi đã có sản phẩm(ở delete)
-->