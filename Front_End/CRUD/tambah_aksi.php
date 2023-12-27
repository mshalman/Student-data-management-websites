<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$gender = $_POST['gender'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into sign values('','$fullname','$username','$password','$email','$gender')");
 
// mengalihkan halaman kembali ke index.php
header("location:data.php");
 
?>