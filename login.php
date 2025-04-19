<?php
include("connect.php");

// Create session
session_start();
if (isset($_SESSION["mySession"])) {
    header("location: index.php");
}

if (isset($_POST["dangnhap"])) {
    $u_name = $_POST["username"];
    $pw = $_POST["password"];

    $sql = "SELECT username, password FROM user WHERE username='$u_name' AND password='$pw'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['mySession'] = $u_name;
        header("location: index.php");
    } else {
        echo "Login information is incorrect !!!";
    }
}

?>
<h1>Login Page</h1>
<form action="login.php" method="post" enctype="multipart/form-data">
    <label for="un">User Name</label>
    <input type="text" name="username" id="un" autofocus />
    <br />
    <br />
    <label for="pw">Password</label>
    <input type="password" name="password" id="pw" maxlength="10" />
    <br />
    <br />
    <button type="sbumit" name="dangnhap">LOGIN</button>

    <!-- Button Logn up -->
    <button type="sbumit" name="dangky">
        <a href="lognup.php">Logn Up</a>
    </button>
</form>