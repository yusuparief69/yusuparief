<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_pembayaran      = $_POST['id_pembayaran'];
$id_petugas         = $_POST['id_petugas'];
$nisn    = $_POST['nisn'];
$tgl_bayar            = $_POST['tgl_bayar'];
$bulan_dibayar            = $_POST['bulan_dibayar'];
$tahun_dibayar            = $_POST['tahun_dibayar'];
$id_spp            = $_POST['id_spp'];
$jumlah_bayar        = $_POST['jumlah_bayar'];

$sql = "INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_bayar`,`bulan_dibayar`,`tahun_dibayar`,`id_spp`,`jumlah_bayar`) VALUES ('$id_pembayaran','$id_petugas','$nisn','$tgl_bayar','$bulan_dibayar','$tahun_dibayar','$id_spp','$jumlah_bayar')";
if (mysqli_query($koneksi, $sql)) {
    echo "<meta http-equiv=refresh content=1;URL='pembayaran'>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

?>