<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_spp      = $_POST['id_spp'];
$tahun         = $_POST['tahun'];
$nominal    = $_POST['nominal'];

$sql = "INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES ('$id_spp','$tahun','$nominal')";
if (mysqli_query($koneksi, $sql)) {
    echo "<meta http-equiv=refresh content=1;URL='spp'>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

?>