<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_kelas      = $_POST['id_kelas'];
$nama_kelas         = $_POST['nama_kelas'];
$kompetensi_keahlian    = $_POST['kompetensi_keahlian'];

$sql = "INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kompetensi_keahlian`) VALUES ('$id_kelas','$nama_kelas','$kompetensi_keahlian')";
if (mysqli_query($koneksi, $sql)) {
    echo "<meta http-equiv=refresh content=1;URL='kelas'>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

?>