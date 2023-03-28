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
$data=mysqli_query($koneksi,"select * from `spp` where `id_spp`='$_GET[id]'");
$data=mysqli_fetch_array($data);

?>

				<h2>Form Kelas</h2>
				<td> <input type="text" class="field" placeholder="Id Spp" name="id_spp" value="<?php echo $data['id_spp']; ?>"> </td> 
				<td> <input type="text" class="field" placeholder="Tahun"  name="tahun" value="<?php echo $data['tahun']; ?>"> </td> 
				<td> <input type="text" class="field" placeholder="Nominal"  name="nominal" value="<?php echo $data['nominal']; ?>"> </td> 

			
				<td> <button class="btn" name="proses" value="Ubah"> Send </button> </td>
 			</div>
		</div>
	</div>
</body>
</html>

<?php
        if(isset($_POST['proses']))
        {
            $id_spp      = $_POST['id_spp'];
            $tahun         = $_POST['tahun'];
            $nominal    = $_POST['nominal'];
            mysqli_query($koneksi, "UPDATE `spp` 
            SET id_spp='$id_spp', tahun='$tahun', nominal='$nominal'
            WHERE id_spp='$_GET[id]'") or die(mysqli_error($koneksi));

        

echo "Data Admin telah diubah";
echo "<meta http-equiv=refresh content=1;URL='spp'>";

}

?>