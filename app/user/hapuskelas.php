<?php
    include "koneksi.php";
$sql=mysqli_query($koneksi,"delete from `kelas` where `id_kelas`='$_GET[id]'");
echo '<script language="javascript" type="text/javascript">
alert("Data Kelas Berhasil Dihapus");
window.location = "kelas";
</script>';
?>