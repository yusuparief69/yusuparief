<?php
    include "koneksi.php";
$sql=mysqli_query($koneksi,"delete from `siswa` where `nisn`='$_GET[id]'");
echo '<script language="javascript" type="text/javascript">
alert("Data Siswa Berhasil Dihapus");
window.location = "pengembalian-buku";
</script>';
?>