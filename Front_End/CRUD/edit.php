<!DOCTYPE html>
<html>
<head>
    <title>CREATE ACCOUNT</title>
    <link rel="stylesheet" href="../static/Login_css.css">

</head>
<body>
    <div class="Login_box">
        <h2>EDIT ACCOUNT</h2>
        <?php
        include './koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"select * from sign where id='$id'");
        while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="update.php">
                <div class="user_box">
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
					<input type="text" name="fullname" required="" value="<?php echo $d['fullname']; ?>">
                    <label>Full Name</label>
                </div>
                <div class="user_box">
                    <input type="text" name="username" required="" value="<?php echo $d['username']; ?>">
                    <label>Username</label>
                </div>
                <div class="user_box">
                    <input type="password" name="password" required="" value="<?php echo $d['password']; ?>">
                    <label>Password</label>
                </div>
                <div class="user_box">
                    <input type="text" name="email" required="" value="<?php echo $d['email']; ?>">
                    <label>Email</label>
                </div>
                <div class="user_radio">
                    <label>Gender</label>
                </div>
                <div class="user_radio">
                    <input type="radio" name="gender" required="" id="Male" value="<?php echo $d['gender']; ?>">
                    <label for="Male">Male</label> 

                    <input type="radio" name="gender" required="" id="Female" value="<?php echo $d['gender']; ?>">
                    <label for="Female">Female</label>
                </div>
                <div class="submit">
                <tr>
                    <td></td>
                    <td><input type="submit" value="UBAH"></td>
                </tr>		
                </div>
            </form>
            <?php 
	}
	?>
</body>
</html>