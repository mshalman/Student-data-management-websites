-<!DOCTYPE html>
<html>
<head>
    <title>CREATE ACCOUNT</title>
    <link rel="stylesheet" href="static/Login_css.css">

</head>
<body>
<div class="Login_box">
    <h2>CREATE ACCOUNT</h2>
    <form method="post" action="CRUD/tambah_aksi.php">
<div class="user_box">
    <input type="text" name="fullname" required="">
    <label>Full Name</label>
</div>
<div class="user_box">
    <input type="text" name="username" required="">
    <label>Username</label>
</div>
<div class="user_box">
    <input type="password" name="password" required="">
    <label>Password</label>
</div>
<div class="user_box">
    <input type="text" name="email" required="">
    <label>Email</label>
</div>
<div class="user_radio">
    <label>Gender</label>
</div>
<div class="user_radio">
    <input type="radio" name="gender" id="Male" value="Male" required="">
    <label for="Male">Male</label> 

    <input type="radio" name="gender" id="Female" value="Female" required="">
    <label for="Female">Female</label>
</div>
    <input type="submit" name="create" value="Create"></td>
</form>
<div class="have_acc">
    <label for="">Sudah punya akun?? <a href="index.php">LOGIN</a></label>
</div>
</div>
</body> 
</html>

