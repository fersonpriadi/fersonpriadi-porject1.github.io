<?php 
session_start();
require 'functions.php';


// // set cookienya
if(isset($_COOKIE['id']) && isset ($_COOKIE['key'])){
   $id = $_COOKIE['id'];
   $key = $_COOKIE['key']; 


//    ambil username berdasarkan id nya
$result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");

$row = mysqli_fetch_assoc($result);


// cek cookie dan usernamenya 

if($key === hash('sha256', $row['username'])){
    $_SESSION['login'] = true;
}

}


if (isset($_SESSION["login"])){
    header("Location: index.php");
}


if (isset ($_POST["login"])){

    $username = $_POST ["username"];
    $password = $_POST ["password"];

$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

// cek usernamenya 
if(mysqli_num_rows($result) === 1) {
    // jika ada cek passwordnya 

    $row = mysqli_fetch_assoc($result);
     
    if (password_verify($password, $row["password"])) { 

        $_SESSION["login"] = true; 


        // cek remember me
        if(isset ($_POST['remember'])){
            // buat cookienya

            setcookie('id',$row['id'], time()+60);
            setcookie('key',hash('sha256', $row['username']), 
            time()+60);
        }

        header("Location: dashboard.php");
        exit;

    }
}

$error = true;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- style start -->
    <style>
       
body {
    font-family: Arial, sans-serif;
    background-image: url(https://1.bp.blogspot.com/-k87T6IpobQo/XF6cPxPf-9I/AAAAAAAAEJM/ikTPoWhov1k3Pkej5JgvQwI8aKW3WL3rgCLcBGAs/s1600/abstract%252Bbackground.jpg);
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    background-color : pink; 
    padding: 20px;
    border-radius: 18px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    text-align: center;
    transition: background-color 0.3s;
}

.login-container:hover {
    background-color : white
}

.login-container h2 {
    margin-bottom: 20px;
    color: #333;
}

.input-container {
    margin-bottom: 15px;
    margin-right : 20px;
    text-align: left;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #555;
    font-weight: bold;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
    transition: border-color 0.3s;
}

input[type="text"]:focus,
input[type="password"]:focus {
    border-color: #007BFF;
}


button {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}

.tambah-user:hover {
    background-color : salmon;
    border-radius : 20px;
    transition-duration : 0.5s;
}

.tambah-user {
    text-decoration : none;
    float : left;
    font-weight : bold;
    font-size : 20px;
    font-family : "Times New Roman", Times, serif;
}
form {
    padding-left : 20vh;
    padding-right : 20vh;
}




    </style>
<!-- style end  -->



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
</head>
<body>


    <div class="login-container">
    <ul>
            <li>
            <?php if (isset($error) ) : ?>

            <p>Username dan Password Salah!!</p>

            <?php endif; ?>
            </li>
    </ul>
    <div>
    <h1 class="title-cafe">SpOrt<span>.YOU</span></h1>
    </div>

        <h2>Login</h2>
        <form action="" method="post" >
            <div class="input-container">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="inp-username" placeholder="Input username" required>
            </div>
            <div class="input-container">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="inp-password" placeholder="Input Password" required>
            </div>
            <button type="submit" name="login">Login</button>
            <p><a class="tambah-user" href="register.php">Tambah User</a></p>
        </form>
    </div>
</body>
</html>


