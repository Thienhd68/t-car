<?php
include("connect.php");

if (isset($_POST["btn_lognup"])) {
    $name = $_POST["name"];
    $pass = $_POST["pass"];

    $sql = "INSERT INTO user (id, username, password, level)
        VALUES('', '$name', '$pass', 2)
    ";

    mysqli_query($conn, $sql);
    header("location: login.php");
}

?>

<h1>Form Logn Up</h1>
<form action="lognup.php" method="post">
    <label for="name">Your name</label>
    <input type="text" name="name" id="name" required autofocus />
    <br />
    <br />
    <label for="pass">Your password</label>
    <input type="password" name="pass" id="pass" required maxlength="10" />
    <br />
    <br />
    <button type="submit" name="btn_lognup">Create</button>
</form>