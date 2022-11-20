<?php
include 'Rico_connector.php';
$id = $_POST['id'];
$NamaMobil = $_POST['NamaMobil'];
$NamaPemilik = $_POST['NamaPemilik'];
$Merk = $_POST['Merk'];
$tanggal = $_POST['tanggal'];
$Deskripsi = $_POST['Deskripsi'];
$inputfoto = $_FILES['inputfoto']['name'];
$file_tmp = $_FILES['inputfoto']['tmp_name'];
$statusp = $_POST['statusp'];

if ($file_tmp){
    move_uploaded_file($file_tmp,'../asset/'.$inputfoto);
    $query = "UPDATE showroom_rico_table SET NamaMobil = '$NamaMobil', NamaPemilik = '$NamaPemilik', Merk = '$Merk', tanggal = '$tanggal', Deskripsi = '$Deskripsi', inputfoto = '$inputfoto', statusp = '$statusp' WHERE id_mobil = '$id'";
    $result = mysqli_query($connect, $query);
} else {
    $query = "UPDATE showroom_rico_table SET NamaMobil = '$NamaMobil', NamaPemilik = '$NamaPemilik', Merk = '$Merk', tanggal = '$tanggal', Deskripsi = '$Deskripsi', statusp = '$statusp' WHERE id_mobil = '$id'";
    $result = mysqli_query($connect, $query);
}
header('Location : ../RICO_INDEX.php?page=RICO_MyItem');
?>