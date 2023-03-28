<?php
    include "koneksi.php";
$sql=mysqli_query($koneksi,"delete from `pembayaran` where `id_pembayaran`='$_GET[id]'");
echo '<script language="javascript" type="text/javascript">
alert("Data Pembayaran Berhasil Dihapus");
window.location = "pembayaran";
</script>';

?>