<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="static/Login_css.css">

</head>
<body>
<div class="Login_box">
<h2>LOGIN</h2>
<form name="form_login" method="post" action="login.php">
    <div class="user_box">
        <input type="text" name="username" required="">
        <label>Username</label>
    </div>
    <div class="user_box">
        <input type="password" name="password" required="">
        <label>Password</label>
    </div>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "Login gagal, username dan password salah!";
        }
        elseif($_GET['pesan']=="logout"){
            echo "Anda telah berhasil logout";
        }
        elseif($_GET['pesan'] == "Belum login"){
            echo "Anda harus login";
        }
    }
    ?>
<br>
    <input type="submit" name="submit" value="Login"></td>
</form>
<div class="have_acc">
    <label for="">Belum Punya Akun? <a href="registrasi.php">CREATE</a></label>
</div>
</div>
</body> 
</html>