<?php
include 'Rico_connector.php';
$id = $_GET['id'];
$img = mysqli_query($connect, "SELECT foto_mobil FROM showroom_rico_table WHERE id_mobil = $id");
$row = mysqli_fetch_assoc($img);
unlink("../asset/".$row['foto_mobil']);
$query = "DELETE FROM showroom_rico_table WHERE id_mobil = $id";
$result = mysqli_query($connect, $query);
header('Location:../RICO_INDEX.php');
?>