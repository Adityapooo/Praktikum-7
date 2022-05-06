<?php
include("dbkoneksi.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //query hapus
    $sql = "DELETE FROM datapegawai WHERE idpg = '$id'";
    $pegawai = mysqli_query($conn,$sql);

    //cek query
    if( $pegawai ){
        echo "<script>alert('Data Karyawan Berhasil Dihapus!'); window.location.href='menghapuspegawai.php'</script>";
    } else {
        echo "<script>alert('Gagal Menghapus data Karyawan!!'); window.location.href='menghapuspegawai.php'</script>";
        die("gagal menghapus...");
    }
    }else {
    // jika coba akses langsung halaman ini akan diredirect ke halaman index
    header('Location: menghapuspegawai.php');
    }
?>