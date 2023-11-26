<?php

$LIST = $_POST['list'];
include "config.php";
mysqli_query($con, "INSERT INTO `todo`(`list`) VALUES ('$LIST')");

// menentukan halaman mana yang di tuju setelah data dikirim
header("location:index.php");

?>