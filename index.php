<?php 
//Koneksi ke database
// $server   = "localhost";
// $username = "root";
// $password = "";
// $database = "belajarci";
  
// $mysqli = new mysqli ($server, $username, $password, $database);
// if (mysqli_connect_errno()) {
//     echo 'Koneksi gagal dilakukan dengan alasan : '.mysqli_connect_error();
//     exit();
//     mysqli_close($mysqli);
// } 
//Akhir Koneksi---------------------------------------------------------
include "koneksi.php";
?>
<html>
    <head>
        <title>User</title>
    </head>
<body>
<p>DAFTAR User</p>
<a href="create.php">Tambah User</a>
    <table width="415" border="1">
        <thead>
          <tr>
            <th width="24">No.</th>
            <th width="133">Nama</th>
            <th width="85">Username</th>
            <th width="56">password</th>
            <th width="38">Edit</th>
            <th width="45">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php $nomor = 0;
                  $data = mysqli_query($mysqli,"SELECT * FROM user"); 
                  while ($show = mysqli_fetch_array($data)) { 
                  $nomor++;
            ?>
          <tr>
            <td><?php echo $nomor;?></td>
            <td><?php echo $show['nama'];?></td>
            <td><?php echo $show['user_name'];?></td>
            <td><?php echo $show['password'];?></td>
            <td><a href="update.php?id=<?php echo $show['id'];?>">edit</a></td>
            <td><a href="delete.php?id=<?php echo $show['id'];?>">del</a></td>
          </tr>
          <?php } ?>
        </tbody>
    </table>
</body>
</html>