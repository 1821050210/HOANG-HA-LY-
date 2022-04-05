<?php
$id = $_GET['id'];
include 'connection.php.php';
$sql = "DELETE FROM news WHERE id = '$id'";
$query = mysqli_query($conn, $sql);
header('location: list_sp.php');
?>