<?php
    include "koneksi.php";
$sql=mysqli_query($koneksi,"delete from `spp` where `id_spp`='$_GET[id]'");
echo '<script language="javascript" type="text/javascript">
alert("Data SPP Berhasil Dihapus");
window.location = "spp";
</script>';
?>