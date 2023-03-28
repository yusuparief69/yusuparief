<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_petugas      = $_POST['id_petugas'];
$username         = $_POST['username'];
$password    = $_POST['password'];
$nama_petugas            = $_POST['nama_petugas'];
$level            = $_POST['level'];

$sql = "INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`,`level`) VALUES ('$id_petugas','$username','$password','$nama_petugas','$level')";
if (mysqli_query($koneksi, $sql)) {
    echo "<meta http-equiv=refresh content=1;URL='petugas'>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

?>