<?php 
require 'functions.php';

// ambil data di URL 
$id = $_GET["id"];

// query data mahasiswa berdasarkan idnya
$psn = query("SELECT * FROM pesan where id = $id")[0];

// cek apakah tombol submit sudah ditambahkan atau belum
if (isset($_POST["submit"])){

// cek apakah data berhasil diubah atau tidak 
    if (ubah($_POST) > 0 ){
        echo "<script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'index.php';
        </script>";
    }else{
        echo "<script>
        alert('Data gagal Diubah!');
        document.location.href = 'index.php';
    </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Makanan & Minumana</title>
</head>
<body>
    <h1>Ubah Data makanan & minumana</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $psn["id"]; ?>" >
        <ul>
            <li>
                <label for="makanan">MAKANAN :</label>
                <input type="text" name="makanan" id="makanan" required value="<?php echo $psn["makanan"]; ?>">
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga"
                required  value="<?php echo $psn["harga"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!!</button>
            </li>     
        </ul>



    </form>

    <a href="index.php">Back</a>
    
</body>
</html>