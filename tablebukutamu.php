<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check Connection
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}

$sql = "CREATE TABLE buku_tamu (
    id_bt INT(10) PRIMARY KEY,
    nama VARCHAR(40) NOT NULL,
    email VARCHAR(30) NOT NULL,
    isi text()
    )";

if (mysqli_query($conn, $sql)) {
    echo "Tabel Berhasil Dibuat";
} else {
    echo "Gagal Membuat Tabel" . mysqli_error($conn);
}

mysqli_close($conn);
?> 