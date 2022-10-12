<?php
include_once 'db.php';

$name = $_POST['name'];
$profile = $_POST['profile'];
$sql = "INSERT INTO test VALUES (NULL,'$name','$profile','2019-01-01 00:00:00')";
$ret = mysqli_query($con, $sql);

header('Location: /');
?>
