<?php
    include "koneksi.php";
$sql=mysqli_query($koneksi,"delete from `petugas` where `id_petugas`='$_GET[id]'");
echo '<script language="javascript" type="text/javascript">
alert("Data Petugas Berhasil Dihapus");
window.location = "petugas";
</script>';
?>