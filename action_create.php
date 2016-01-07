<?php
 include "koneksi.php";
//Akhir Koneksi---------------------------------------------------------
 
if(isset($_POST['simpan'])){
$nama     = $_POST['nama'];
$user_name    = $_POST['user_name'];
$password    = $_POST['password'];
 
$data = mysqli_query($mysqli, "INSERT INTO user SET nama='$nama', user_name='$user_name', password='$password'") or die ("data salah : ".mysqli_error($mysqli));
 
if ($data) {
echo "Berhasil Input Data";
echo "<a href='index.php'>lihat</a>";
} else {
echo "Gagal Input Data!!!";
echo "<a href='create.php'>Kembali</a>";
}
}
?>