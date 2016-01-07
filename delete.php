<?php 
//Koneksi ke database
$server   = "localhost";
$username = "root";
$password = "";
$database = "belajarci";
  
$mysqli = new mysqli ($server, $username, $password, $database);
if (mysqli_connect_errno()) {
    echo 'Koneksi gagal dilakukan dengan alasan : '.mysqli_connect_error();
    exit();
    mysqli_close($mysqli);
} 
//Akhir Koneksi---------------------------------------------------------
 
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        echo "<b>Data yang dihapus tidak ada</b>";
    }
    else {
        $delete = mysqli_query($mysqli,"DELETE FROM user WHERE id='$_GET[id]'") or die ("Mysql Error : ".mysqli_error($mysqli));
        if($delete){
            echo "Berhasil Hapus Data <br>";
            echo "<a href='index.php'>Kembali</a>";
        }
    }
}
?>