<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$gender = $_POST['gender'];
 
// update data ke database
mysqli_query($koneksi,"update sign set fullname='$fullname', username='$username', password='$password', email='$email', gender='$gender' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:data.php");
 
?>