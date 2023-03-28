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
				<input type="text" class="field" placeholder="Id Petugas"  name="id_petugas"> 
				<input type="text" class="field" placeholder="Nisn"  name="nisn">
				<input type="text" class="field" placeholder="Tgl Bayar"  name="tgl_bayar">
				<input type="text" class="field" placeholder="Bulan Bayar"  name="bulan_dibayar">
        		<input type="text" class="field" placeholder="Tahun Bayar"  name="tahun_dibayar">
        		<input type="text" class="field" placeholder="Id spp"  name="id_spp">
				<input type="text" class="field" placeholder="Jumlah Bayar"  name="jumlah_bayar">


			
				<button class="btn">Send</button>
			</div>
		</div>
	</div>
</body>
</html>