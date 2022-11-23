<?php
include 'Rico_connector.php';
$NamaMobil = $_POST['NamaMobil'];
$NamaPemilik = $_POST['NamaPemilik'];
$Merk = $_POST['Merk'];
$tanggal = $_POST['tanggal'];
$Deskripsi = $_POST['Deskripsi'];
$inputfoto = $_FILES['inputfoto']['name'];
$file_tmp = $_FILES['inputfoto']['tmp_name'];
$statusp = $_POST['statusp'];
move_uploaded_file($file_tmp, '../asset/'.$inputfoto);
$query = mysqli_query($connect, "INSERT INTO showroom_rico_table(nama_mobil,pemilik_mobil,merk_mobil,tanggal_beli,deskripsi,foto_mobil,status_pembayaran)
                                 VALUES('$NamaMobil', '$NamaPemilik', '$Merk', '$tanggal', '$Deskripsi', '$inputfoto', '$statusp')");
   if($query){
      header('Location:../RICO_INDEX.php?page=MyItem');  
   }
?>
