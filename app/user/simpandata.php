<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nisn      = $_POST['nisn'];
$nis         = $_POST['nis'];
$nama    = $_POST['nama'];
$id_kelas            = $_POST['id_kelas'];
$alamat            = $_POST['alamat'];
$no_tlp           = $_POST['no_tlp'];
$id_spp           = $_POST['id_spp'];

$sql = "INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `id_kelas`,`alamat`,`no_tlp`,`id_spp`) VALUES ('$nisn','$nis','$nama','$id_kelas','$alamat','$no_tlp','$id_spp')";
if (mysqli_query($koneksi, $sql)) {
    echo "<meta http-equiv=refresh content=1;URL='pengembalian-buku'>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

?>