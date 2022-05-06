<?php
include("dbkoneksi.php");

if (isset($_POST['ubah'])) {
    $idpg = $_POST['idpegawai'];
    $namapg = $_POST['namapegawai'];
    $nopg = $_POST['nopegawai'];
    $emailpg = $_POST['email'];
    $jkpg = $_POST['jkelamin'];
    $alamatpg = $_POST['alamat'];
    $jabatan = $_POST['jabatan'];

    //query insert
    $sql = "UPDATE datapegawai SET idpg='$idpg', namapg='$namapg', nopg='$nopg', emailpg='$emailpg', jkpg='$jkpg', alamatpg='$alamatpg', jabatan='$jabatan' WHERE idpg='$idpg'";
    $pegawai = mysqli_query($conn, $sql);

    //cek query
    if( $pegawai ) {
        echo "<script>alert('Data Karyawan Berhasil Di Ubah!'); window.location.href='ubahpegawai.php'</script>";
    } else {
        echo "<script>alert('Data Karyawan Gagal Di Ubah!!'); window.location.href='ubahpegawai.php'</script>";
       die("Gagal Menyimpan Data");
    }
} else {
    header('Location: index.php');
}
?>