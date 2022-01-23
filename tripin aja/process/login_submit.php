<?php
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $koneksi = new mysqli('localhost','root','','tripin_aja');

    $sql = "SELECT * FROM user_tbl WHERE email = '$email' and password = '$password' ";
    $quser = $koneksi->query($sql);
    $rowuser = $quser->fetch_assoc();

    if(!empty($rowuser)) {
        $_SESSION['email'] = $email;

        header("location:../index.php");

    }else{
        echo "username atau password yang anda masukan salah <br> 
        <a href='../index.php'>kembali ke home</a> atau silahkan <a href='../register.php'>register</a>";
    }
?>