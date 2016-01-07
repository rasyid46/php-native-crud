<?php
include"koneksi.php";
 
if(isset($_POST['update'])){
$id            = $_POST['id'];
$nama     = $_POST['nama'];
$user_name    = $_POST['user_name'];
$password    = $_POST['password'];
 
 
$data = mysqli_query($mysqli, "UPDATE user SET nama='$nama', user_name='$user_name', password='$password' WHERE id='$id'") or die ("data salah : ".mysqli_error($mysqli));
 
if ($data) {
echo "Berhasil Update Data <br>";
echo "<a href='index.php'>Kembali</a>";
} else {
echo "Gagal Input Data!!! <br>";
echo "<a href='index.php'>Kembali</a>";
}
}
?>