<html>
<head>
<title>Create</title>
</head>
<body>
	<?php
	include"koneksi.php";
	$data = mysqli_query($mysqli, "SELECT * FROM user WHERE id='$_GET[id]'");
$datashow = mysqli_fetch_array($data);
	?>
<form action="action_update.php" method="post">
<p>Ubah DATA User</p>
<p>
	<input type="hidden" name="id"  value="<?php echo $datashow['id']; ?>">
Nama : <input type="text" name="nama"  value="<?php echo $datashow['nama']; ?>"> <br>
username: <input type="text" name="user_name" value="<?php echo $datashow['user_name']; ?>"> <br>
password :  <input type="text" name="password"  value="<?php echo $datashow['password']; ?>"> <br>
</p>
 <input type="submit" name="update" value="EDIT">
</form>
</body>
</html>