<?php
include('Rico_connector.php');
$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM user_rico where email = '$email' and password = '$password'";
$result = mysqli_query($connect2, $query);
$row = mysqli_fetch_assoc($result);

    if($row){
        if(isset($_POST['remember'])){
            $remember = $_POST['remember'];
            ('remember', $remember, time() + (86400 * 30), "/");
        }
        setcookie('nama', $row['nama'], time() + (86400 * 30), "/");
        setcookie('email',$row['email'], time() + (86400 * 30), "/");
        setcookie('password', $row['password'], time() + (86400 * 30), "/");
        setcookie('no_hp', $row['no_hp'], time() + (86400 * 30), "/");
        header("location:../RICO_INDEX.php");
    }
    else{
        alert('Periksa kembali email dan password');
        header('location:../pages/RICO_Login');
   }


?>