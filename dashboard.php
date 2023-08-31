<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport.you</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color : pink;
        }

        nav {
            background-color: #333;
            color: #fff;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav li {
            display: inline;
            margin-right: 20px;
            font-size : 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        nav a:hover {
            color: #ff6600; /* Ganti dengan warna yang Anda suka */
        }
.list-menu {
    margin-left : 20cm
}

/* Reset beberapa gaya default */
body, html {
    margin: 0;
    padding: 0;
}

/* Gaya dasar untuk card */
.card {
    max-width: 300px;
    background-color: #fff;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    margin: 20px;
}

.card img {
    width: 100%;
    height: auto;
}

.card-content {
    padding: 20px;
}

.card h2 {
    font-size: 1.5rem;
    margin: 0;
}

.card p {
    margin: 10px 0;
}

.card a {
    display: block;
    background-color: #ff6600;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    text-decoration: none;
    border-radius: 4px;
    font-weight: bold;
}

.card a:hover {
    background-color: #e65100; /* Warna yang berbeda saat hover */
}

.displayunit {
    display : flex;
}




    </style>
</head>
<body>

<div>
    <nav>
        <ul class="list-menu">
            <li><a href="#">Unit Tersedia</a></li>
            <li><a href="#">Pesan</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Tampilkan Pesanan</a></li>
            <li><a href="index.php">List data</a></li>
        </ul>
    </nav>
</div>
<div class="displayunit">

<div class="card">
        <img src="gambar.jpg" alt="Gambar Card">
        <div class="card-content">
            <h2>Judul Card</h2>
            <p>Deskripsi singkat tentang kartu ini. Ini adalah contoh card dengan desain bagus.</p>
            <a href="#">Baca Lebih Lanjut</a>
        </div>
    </div>
    
<div class="card">
        <img src="gambar.jpg" alt="Gambar Card">
        <div class="card-content">
            <h2>Judul Card</h2>
            <p>Deskripsi singkat tentang kartu ini. Ini adalah contoh card dengan desain bagus.</p>
            <a href="#">Baca Lebih Lanjut</a>
        </div>
    </div>
    
<div class="card">
        <img src="gambar.jpg" alt="Gambar Card">
        <div class="card-content">
            <h2>Judul Card</h2>
            <p>Deskripsi singkat tentang kartu ini. Ini adalah contoh card dengan desain bagus.</p>
            <a href="#">Baca Lebih Lanjut</a>
        </div>
    </div>
    
<div class="card">
        <img src="gambar.jpg" alt="Gambar Card">
        <div class="card-content">
            <h2>Judul Card</h2>
            <p>Deskripsi singkat tentang kartu ini. Ini adalah contoh card dengan desain bagus.</p>
            <a href="#">Baca Lebih Lanjut</a>
        </div>
    </div>
    
<div class="card">
        <img src="gambar.jpg" alt="Gambar Card">
        <div class="card-content">
            <h2>Judul Card</h2>
            <p>Deskripsi singkat tentang kartu ini. Ini adalah contoh card dengan desain bagus.</p>
            <a href="#">Baca Lebih Lanjut</a>
        </div>
    </div>
</div>
<a href="login.php">BACK</a>
</body>
</html>
