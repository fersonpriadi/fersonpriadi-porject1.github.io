<!-- function koneksi ke database dan menampilkan data -->
<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pesanan");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows [] = $row;
    }

    return $rows;
}
function tambah($data){
    global $conn;
    $makanan = htmlspecialchars($data["makanan"]);
    $harga = htmlspecialchars($data["harga"]);

$query = "INSERT INTO pesan VALUES
('', '$makanan', '$harga')";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}



function ubah($data) {
    global $conn;
    $id = $data["id"];
    $makanan = htmlspecialchars($data["makanan"]);
    $harga = htmlspecialchars($data["harga"]);        
    
    $query = "UPDATE pesan SET
                makanan = '$makanan',
                harga = '$harga' 
            WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;   
    mysqli_query($conn, "DELETE FROM pesan WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function registrasi ($data) {
    global $conn;
    $username = strtolower(stripslashes ($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    // $level = mysqli_real_escape_string($conn, $data["level"]);


    // cek userame sudah ada atau belom 
    $result = mysqli_query ($conn, "SELECT username FROM users 
                            WHERE username = '$username'");

if ( mysqli_fetch_assoc ($result) ){
    echo "<script> 
        alert ('Username sudah terdaftar!')
        </script>";

        return false;
}

    // cek konfirmasi password 

    if ($password !== $password2){
        echo "<script> 
            alert ('Password anda tidak sesuai !');
            </script>";

            return false;
    }

    // enkripsi passwordnya 
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO users VALUES ('', '$username', '$password','$level')");


    return mysqli_affected_rows($conn);


}

    