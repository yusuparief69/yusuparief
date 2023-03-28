<!DOCTYPE html>
<html>
<head>
	<title>FORM Kelas</title>
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
$data=mysqli_query($koneksi,"select * from `kelas` where `id_kelas`='$_GET[id]'");
$data=mysqli_fetch_array($data);

?>

				<h2>Form Kelas</h2>
				<td> <input type="text" class="field" placeholder="Id Kelas" name="id_kelas" value="<?php echo $data['id_kelas']; ?>"> </td> 
				<td> <input type="text" class="field" placeholder="Nama Kelas"  name="nama_kelas" value="<?php echo $data['nama_kelas']; ?>"> </td> 
				<td> <input type="text" class="field" placeholder="Kompetensi Keahlian"  name="kompetensi_keahlian" value="<?php echo $data['kompetensi_keahlian']; ?>"> </td> 

			
				<td> <button class="btn" name="proses" value="Ubah"> Send </button> </td>
 			</div>
		</div>
	</div>
</body>
</html>

<?php
        if(isset($_POST['proses']))
        {
            $id_kelas      = $_POST['id_kelas'];
            $nama_kelas         = $_POST['nama_kelas'];
            $kompetensi_keahlian    = $_POST['kompetensi_keahlian'];
            mysqli_query($koneksi, "UPDATE `kelas` 
            SET id_kelas='$id_kelas', nama_kelas='$nama_kelas', kompetensi_keahlian='$kompetensi_keahlian'
            WHERE id_kelas='$_GET[id]'") or die(mysqli_error($koneksi));

        

echo "Data Admin telah diubah";
echo "<meta http-equiv=refresh content=1;URL='kelas'>";

}

?>