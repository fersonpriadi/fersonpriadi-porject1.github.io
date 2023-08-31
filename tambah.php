<?php 
session_start();

if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
if (isset($_POST["submit"])){

     

// cek apakah data berhasil ditambahkan atau tidak 
    if (tambah($_POST) > 0 ) {
        echo "<script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'index.php';
        </script>";
    }else{
        echo "<script>
        alert('Data gagal Ditambahkan!');
        document.location.href = 'index.php';
    </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>


<!-- style start -->
<style>
body {
            font-family: Arial, sans-serif;
            background-color : rgba(255, 255, 128, .5);
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            background-color: #fff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }
.form-tambah {
    background-image {
        url (https://djakarta.id/modules/news/images/61adc1bd707da.jpg);
    }
}




</style>

<!-- style end -->


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Menu Makanan </h1>
    <form  action="" method="post" enctype="multipart/form-data" >
        <ul class="form-tambah">
            <li>
                <label for="makanan">Makanan</label>
                <input type="text" name="makanan" id="makanan" placeholder="Input Menu Makanan">
            </li><br>
            <li>
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" placeholder="Input Harga Makanan"
                required>
            </li><br>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li><br> 
        </ul>



    </form>

    <a href="index.php">Back</a>
    
</body>
</html>