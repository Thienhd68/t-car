<?php
$conn = @mysqli_connect("localhost:3307", "root", "") or die("Error connect server");

mysqli_select_db($conn, "t-car") or die("Error connect database");
mysqli_query($conn, "SETNAME 'utf8'");
?>