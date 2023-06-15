<?php
include 'config.php';
 $ID = $_GET['Id'];
mysqli_query($con,"DELETE FROM `image` WHERE id = $ID");

header('location:index.php');

?>