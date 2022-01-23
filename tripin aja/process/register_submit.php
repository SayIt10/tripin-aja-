<?php 
    $koneksi = new mysqli("localhost","root","","tripin_aja");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email  = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $phonenumber = $_POST['phone_number'];
    $address = $_POST['address'];

    $sql = "INSERT INTO user_tbl(username, password, email, gender, city, phone_number, address, joindate) VALUES ('$username', '$password', '$email', '$gender', '$city', '$phonenumber', '$address', now())";

    $qmember = $koneksi->query($sql);

    header('location:../login.php');
?>