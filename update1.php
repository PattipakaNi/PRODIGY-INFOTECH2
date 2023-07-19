<?php
include "config.php";
$list = $_GET['list'];
$id=$_GET['id'];
mysqli_query($con,"UPDATE `tbltodo` SET `list`='$list' WHERE id=$id");
header("location:index.php");

?>
