<!DOCTYPE html>
<html>
<head>
	<title>REPORT DATA</title>
    <link rel="stylesheet" href="../static/data.css">
</head>
<body>
    <div class="report">
	<h2>REPORT DATA ACCOUNT</h2>
	<span id="tambah">
		<a href="tambah.php">CREATE ACCOUNT</a>
	</span>
	<div style="overflow-x:scroll;">
	<table border="1px">
		<tr>
            <th style="width:22px">No</th>
			<th>Full Name</th>
			<th>Username</th>
			<th>Email</th>
            <th>Gender</th>
			<th>Opsi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from sign");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['fullname']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['gender']; ?></td>
				<td id="opsi">
					<span id="edit"><a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a></span>
					<span id="hapus"><a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a></span>
				</td>
			</tr>
			<?php } ?>
	</table>
</div>
	<br><br>
	<span id="logout">
		<a href="../index.php">LOGOUT</a>
	</span>
</div>
</body>
</html>