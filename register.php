<?php 

require 'functions.php';

if (isset($_POST["registrasi"])){
    if(registrasi ($_POST) > 0 ){
        echo "<script> 
            alert('user baru berhasil ditambahkan!');
        </script>";
    } else {
        echo mysqli_error($conn);
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User account</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>add user account</h1>
<form action="" method="post" >
    <ul>
        <li>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username">
        </li> <br>
        <li>
            <label for="password">Password : </label>
            <input type="password" name="password" id="password">
        </li> <br>
        <li>
            <label for="password2">Konfirmasi Password : </label>
            <input type="password" name="password2" id="password2">
        </li>
        <li>
            <button type="submit" name="registrasi">Registrasi</button>
        </li> <br>
    </ul>
    <a class="back-login" href="login.php">Back to login</a>
</form>



</body>
</html>