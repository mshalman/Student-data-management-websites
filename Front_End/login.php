<?php
session_start();

include 'CRUD/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi,"SELECT * FROM sign WHERE username='$username' and password='$password'");


$cek = mysqli_num_rows($data);

if($cek>0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "Login";
    header("location:CRUD/data.php");
}else{
    header("location:index.php?pesan=gagal");
}
?>