<!DOCTYPE html>
<html>
<head>
	<title>FORM Pembayaran</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
	<form method="post" action="">
	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
			<?php
include "koneksi.php";
$data=mysqli_query($koneksi,"select * from `pembayaran` where `id_pembayaran`='$_GET[id]'");
$data=mysqli_fetch_array($data);

?>

				<h2>Form Pembayaran</h2>
				<td> <input type="text" class="field" placeholder="id_Pembayaran" name="id_pembayaran" value="<?php echo $data['id_pembayaran']; ?>"> </td> 
				<td> <input type="text" class="field" placeholder="Petugas"  name="id_petugas" value="<?php echo $data['id_petugas']; ?>"> </td> 
				<td> <input type="text" class="field" placeholder="nisn"  name="nisn" value="<?php echo $data['nisn']; ?>"> </td> 
				<td> <input type="text" class="field" placeholder="tgl_bayar"  name="tgl_bayar" value="<?php echo $data['tgl_bayar']; ?>"> </td> 
				<td> <input type="text" class="field" placeholder="bulan_dibayar"  name="bulan_dibayar" value="<?php echo $data['bulan_dibayar']; ?>"> </td> 
                <td> <input type="text" class="field" placeholder="tahun_dibayar"  name="tahun_dibayar" value="<?php echo $data['tahun_dibayar']; ?>"> </td> 
                <td> <input type="text" class="field" placeholder="Id spp"  name="id_spp" value="<?php echo $data['id_spp']; ?>"> </td> 
				<td> <input type="text" class="field" placeholder="jumlah_bayar"  name="jumlah_bayar" value="<?php echo $data['jumlah_bayar']; ?>"> </td> 

			
				<td> <button class="btn" name="proses" value="Ubah"> Send </button> </td>
 			</div>
		</div>
	</div>
</body>
</html>

<?php
        if(isset($_POST['proses']))
        {
            $id_pembayaran      = $_POST['id_pembayaran'];
            $id_petugas         = $_POST['id_petugas'];
            $nisn   			 = $_POST['nisn'];
            $tgl_bayar            = $_POST['tgl_bayar'];
            $bulan_dibayar       = $_POST['bulan_dibayar'];
            $tahun_dibayar       = $_POST['tahun_dibayar'];
            $id_spp               = $_POST['id_spp'];
			$jumlah_bayar           = $_POST['jumlah_bayar'];

            mysqli_query($koneksi, "UPDATE `pembayaran` 
            SET id_pembayaran='$id_pembayaran', id_petugas='$id_petugas', nisn='$nisn', tgl_bayar='$tgl_bayar', bulan_dibayar='$bulan_dibayar', tahun_dibayar='$tahun_dibayar', id_spp='$id_spp', jumlah_bayar='$jumlah_bayar'
            WHERE id_pembayaran='$_GET[id]'") or die(mysqli_error($koneksi));

        

echo "Data Admin telah diubah";
echo "<meta http-equiv=refresh content=1;URL='pembayaran'>";

}

?>