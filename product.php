<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product</title>
    <style>
        button {
            width: 100px;
            height: 35px;
            margin: 22px;
            font-size: 12px;
            border-radius: 12px;
            border: none;
            background-color: aqua;
            opacity: .9;
        }

        button a {
            color: #000;
            text-decoration: none;
            font-weight: bold;
        }

        button:hover {
            font-size: 13.5px;
            width: 103px;
            height: 38px;
            opacity: 1.2;
        }
    </style>

</head>

<body>
    <table width="900" cellspacing="0" cellpadding="6" border="1">
        <thead>
            <tr>
                <th width="9px">STT</th>
                <th style="color:red;font-size:26px">ID</th>
                <th>Name Product</th>
                <th>Image</th>
                <th>Price</th>
                <th>BH</th>
                <th width="20px">DELETE Product</th>
                <th width="20px">EDIT Product</th>
            </tr>
        </thead>

        <tbody>
            <?php
            include("connect.php");

            $sql = "SELECT * FROM products";
            $result = mysqli_query($conn, $sql);

            $stt = 1;
            while ($row = mysqli_fetch_array($result)) {
                ?>

                <tr>
                    <td><?php echo $stt++; ?></td>
                    <td><?php echo $row["idSP"]; ?></td>
                    <td><?php echo $row["nameSP"]; ?></td>
                    <td>
                        <img width="120" src="assets/img/products/<?php echo $row['imgSP']; ?>"
                            alt="<?php echo $row['nameSP']; ?>" />
                    </td>
                    <td><?php echo $row["priceSP"]; ?></td>
                    <td><?php echo $row["baohanh"]; ?></td>
                    <td><a href="delete_product.php?this_id=<?php echo $row["idSP"]; ?>">Delete</a></td>
                    <td><a href="edit.php?this_id=<?php echo $row['idSP'] ?>">Edit</a></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
    <button><a href="add_product.php">ADD Product</a></button>
</body>

</html>