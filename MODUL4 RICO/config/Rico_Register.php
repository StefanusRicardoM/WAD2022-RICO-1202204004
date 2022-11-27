<?php
include('Rico_connector.php');
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if($password == $cpassword){
    $sql = "INSERT INTO user_rico (nama, email, no_hp, password) VALUES ('$nama', '$email', '$no_hp', '$password')";
    $sqlquery = mysqli_query($connect2, $sql);
    
    if($sqlquery){
        setcookie('email', $row['email'], time() + (86400 * 30), "/");
        setcookie('nama', $row['nama'], time() + (86400 * 30), "/");
        setcookie('password', $row['password'], time() + (86400 * 30), "/");
        setcookie('no_hp', $row['no_hp'], time() + (86400 * 30), "/");

        header("Location:../RICO_INDEX.php?page=Login");
    }
    else{
        echo "Registrasi gagal";
        header("location:../pages/RICO_Register.php");
    }  
}
else{
    echo "Periksa kembali password anda";
    header("location:../pages/RICO_Register.php");
}
?>