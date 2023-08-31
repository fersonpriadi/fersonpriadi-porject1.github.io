<?php
session_start();

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
// memanggil file funtions

$pesan = query("SELECT * FROM pesan ");
// jika tombol cari ditekan 
if ( isset($_POST["cari"])){
    $pesan = cari($_POST["keyword"]);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pengelolaan Data</title>
</head>
<!-- style start -->
<style>

  body {
    background-color : pink;
  }
 h1 {
      color: red;
      text-align: center;
    }

    /* Style untuk link tambah menu */
    a {
      text-decoration: none;
      padding: 5px 10px;
      background-color: #3498db;
      color: #fff;
      border-radius: 5px;
    }

    /* Style untuk tabel */
    table {
      border-collapse: collapse;
      width: 80%;
      margin: 20px auto;
      background-color : brown;
      font-size : 30px;
      font-family: cursive;
    }

    table, th, td {
      border: 1px solid #ccc;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }

    /* Style untuk tombol Ubah dan Hapus */
    .action-buttons a {
      text-decoration: none;
      margin-right: 10px;
      padding: 5px 10px;
      border-radius: 5px;
    }

    .action-buttons a.edit {
      background-color: #27ae60;
      color: #fff;
    }

    .action-buttons a.delete {
      background-color: #e74c3c;
      color: #fff;
    }

    /* Style untuk link Logout */
    .logout-link {
      display: block;
      text-align: center;
      margin-top: 20px;
    }
    .menu-tbh-log {
      margin-left : 72%;
      font-size : 25px;
    }






</style>



<!-- style end -->

<body> 
<div class="menu-tbh-log">
<a href="tambah.php">Tambah Menu</a>
<a href="dashboard.php" class="Dashboard">Dashboard</a>
<a href="logout.php" class="logout">Logout</a>

</div>
<table border="1" cellpadding="15" cellspacing="0" >
  <tr>
    <th>id.</th>
    <th>Makanan</th>
    <th>Harga</th>
    <th>Ganti</th>
  </tr>
<?php $i = 1; ?> 
  <?php foreach( $pesan as $row) : ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?= $row ["makanan"]; ?></td>
    <td><?= $row ["harga"]; ?></td>
    <td><a href="ubah.php?id=<?= $row ["id"]; ?>">Ubah</a>
      <a href="hapus.php?id=<?= $row ["id"]; ?>" onclick="return confirm('Yakin menghapus data ini?');">Hapus</a></td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
  
</table>

</body>
</html>