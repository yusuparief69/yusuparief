<!DOCTYPE html>
<html>
<head>
	<title>FORM PEMBAYARAN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
	<form method="post" action="simpanpembayaran.php">
	<div class="container">
		<div class="contact-box"> 
			<div class="left"></div>
			<div class="right">
				<h2>Form Pembayaran</h2>
				<input type="text" class="field" placeholder="Id Pembayaran" name="id_pembayaran">
				<select class="field" placeholder="Id Petugas"  name="id_petugas"> 
				<option>Pilih Id Petugas	</option>
				<?php
				include('koneksi.php');
				$sql = mysqli_query($koneksi, "SELECT * FROM `petugas`");
				while ($data = mysqli_fetch_array($sql)) {
					?>
					<option value="<?= $data['id_petugas'] ?>"><?= $data['id_petugas'] ?></option>
					<?php
				}
				?>
					</select>
				<select class="field" placeholder="Nisn"  name="nisn">
				<option>Pilih Nisn</option>
				<?php
				include('koneksi.php');
				$sql = mysqli_query($koneksi, "SELECT * FROM `siswa`");
				while ($data = mysqli_fetch_array($sql)) {
					?>
					<option value="<?= $data['nisn'] ?>"><?= $data['nisn'] ?></option>
					<?php
				}
				?>
					</select>
				<input type="text" class="field" placeholder="Tgl Bayar"  name="tgl_bayar">
				<select class="field" placeholder="Bulan Bayar"  name="bulan_dibayar">
				<option value="1">Januari</option>
				<option value="2">Februari</option>
				<option value="3">Maret</option>
				<option value="4">April</option>
				<option value="5">Mei</option>
				<option value="6">Juni</option>
				<option value="7">Juli</option>
				<option value="8">Agustus</option>
				<option value="9">September</option>
				<option value="10">Oktober</option>
				<option value="11">November</option>
				<option value="12">Desember</option>
</select>
        		<input type="text" class="field" placeholder="Tahun Bayar"  name="tahun_dibayar">
        		<select class="field" placeholder="Id spp"  name="id_spp">
				<option>Pilih Id Spp</option>
				<?php
				include('koneksi.php');
				$sql = mysqli_query($koneksi, "SELECT * FROM `spp`");
				while ($data = mysqli_fetch_array($sql)) {
					?>
					<option value="<?= $data['id_spp'] ?>"><?= $data['id_spp'] ?></option>
					<?php
				}
				?>
					</select>
				<select class="field" placeholder="Jumlah Bayar"  name="jumlah_bayar">
				<option>Pilih Jumlah Bayar</option>
				<?php
				include('koneksi.php');
				$sql = mysqli_query($koneksi, "SELECT * FROM `spp`");
				while ($data = mysqli_fetch_array($sql)) {
					?>
					<option value="<?= $data['nominal'] ?>">Rp. <?= $data['nominal'] ?></option>
					<?php
				}
				?>
					</select>
					
				
			
				

				

			
				<button class="btn">Send</button>
			</div>
		</div>
	</div>
</body>
</html>