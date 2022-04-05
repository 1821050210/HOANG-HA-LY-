<?php
$id = $_GET['id'];
include 'connection.php';
$sql = "DELETE FROM userinfo WHERE id = '$id' ";
$query = mysqli_query($conn, $sql);
header('location: list_tk.php');
?>