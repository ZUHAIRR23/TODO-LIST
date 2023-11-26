<?php
include "config.php";
$ID = $_POST['id'];
$list = $_POST['list'];

mysqli_query($con, "UPDATE `todo` SET `list`='$list' WHERE `todo`. `Id` = '$ID' ");
header("location: index.php");

?>