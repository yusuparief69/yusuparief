<!DOCTYPE html>
<html>
<head>
	<title>FORM SISWA</title>
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
$data=mysqli_query($koneksi,"select * from `siswa` where `nisn`='$_GET[id]'");
$data=mysqli_fetch_array($data);

?>

				<h2>Form Siswa</h2>
				<td> <input type="text" class="field" placeholder="Nisn" name="nisn" value="<?php echo $data['nisn']; ?>"> </td> 
				<td> <input type="text" class="field" placeholder="Nis"  name="nis" value="<?php echo $data['nis']; ?>"> </td> 
				<td> <input type="text" class="field" placeholder="Nama"  name="nama" value="<?php echo $data['nama']; ?>"> </td> 
				<td> <input type="text" class="field" placeholder="Id kelas"  name="id_kelas" value="<?php echo $data['id_kelas']; ?>"> </td> 
				<td> <input type="text" class="field" placeholder="alamat"  name="alamat" value="<?php echo $data['alamat']; ?>"> </td> 
                <td> <input type="text" class="field" placeholder="No telepon"  name="no_tlp" value="<?php echo $data['no_tlp']; ?>"> </td> 
                <td> <input type="text" class="field" placeholder="Id spp"  name="id_spp" value="<?php echo $data['id_spp']; ?>"> </td> 

			
				<td> <button class="btn" name="proses" value="Ubah"> Send </button> </td>
 			</div>
		</div>
	</div>
</body>
</html>

<?php
        if(isset($_POST['proses']))
        {
            $nisn      = $_POST['nisn'];
            $nis         = $_POST['nis'];
            $nama    = $_POST['nama'];
            $id_kelas            = $_POST['id_kelas'];
            $alamat            = $_POST['alamat'];
            $no_tlp           = $_POST['no_tlp'];
            $id_spp           = $_POST['id_spp'];
            mysqli_query($koneksi, "UPDATE `siswa` 
            SET nisn='$nisn', nis='$nis', nama='$nama', id_kelas='$id_kelas', alamat='$alamat', no_tlp='$no_tlp', id_spp='$id_spp'
            WHERE nisn='$_GET[id]'") or die(mysqli_error($koneksi));

        

echo "Data Admin telah diubah";
echo "<meta http-equiv=refresh content=1;URL='pengembalian-buku'>";

}

?>