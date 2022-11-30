<?php
include 'Rico_connector.php';
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $no_hp = $_POST['no_hp'];
    $colour = $_POST['colour'];

    if(!empty($password) && !empty($cpassword)){
        if ($password == $cpassword){
            $query = "UPDATE user_rico SET email='$email', nama='$nama', password='$password', no_hp='$no_hp' where email='$email'";
            $result = mysqli_query($connect2, $query);

            if($query){
                setcookie('email',$email, time() + (86400 * 30), "/");
                setcookie('nama', $nama, time() + (86400 * 30), "/");
                setcookie('password', $password, time() + (86400 * 30), "/");
                setcookie('no_hp',$no_hp, time() + (86400 * 30), "/");
                ('colour', $colour, time() + (86400 * 30), "/");
                header('Location:../RICO_INDEX.php');
            }
            else{
                echo 'update tidak berhasil';
                header('Location:../RICO_INDEX.php');
            }
            }
        else{
            echo 'periksa kembali password anda';
            header('Location:../RICO_INDEX.php');
        }
        }
    