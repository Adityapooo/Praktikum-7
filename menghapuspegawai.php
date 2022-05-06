<?php
// Memanggil Koneksi pada file dbkoneksi.php
include 'dbkoneksi.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROGRAM DATA PEGAWAI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> MENU HAPUS DATA KEPEGAWAIAN</h1>
        <p>Daftar Data Pegawai : </p>
            <!-- Menampiilkan Data -->
    <table border="1" width="100%">
        <th>No.</th> 
        <th>ID Pegawai</th>
        <th>Nama Pegawai</th>
        <th>No. HP</th>
        <th>E-mail</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Jabatan</th>
        <th>Hapus Data</th>
        <?php
            $pegawai = mysqli_query($conn, "SELECT * from datapegawai");
            $no=1;
            foreach ($pegawai as $row) {
                echo "<tr>";
                echo "<th>$no</th>";
                echo "<td align = 'center'>".$row['idpg']."</td>";
                echo "<td align = 'center'>".$row['namapg']."</td>";
                echo "<td align = 'center'>".$row['nopg']."</td>";
                echo "<td align = 'center'>".$row['emailpg']."</td>";
                echo "<td align = 'center'>".$row['jkpg']."</td>";
                echo "<td align = 'center'>".$row['alamatpg']."</td>";
                echo "<td align = 'center'>".$row['jabatan']."</td>";
                echo "<td align = 'center'><a href='proseshapus.php?id=".$row['idpg']."'>Hapus</a></td>"; 
                echo "</tr>";
                $no++;
            }
            ?>
    </table>
    <br>
    <a href="index.php"><button class="buttonadd" type="">HALAMAN UTAMA</button></a>
</body>
</html> 