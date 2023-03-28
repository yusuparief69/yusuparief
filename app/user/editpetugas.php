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
$data=mysqli_query($koneksi,"select * from `petugas` where `id_petugas`='$_GET[id]'");
$data=mysqli_fetch_array($data);

?>

				<h2>Form Pembayaran</h2>
				<td> <input type="text" class="field" placeholder="Id Petugas" name="id_petugas" value="<?php echo $data['id_petugas']; ?>"> </td> 
				<td> <input type="text" class="field" placeholder="Username"  name="username" value="<?php echo $data['username']; ?>"> </td> 
				<td> <input type="text" class="field" placeholder="Password"  name="password" value="<?php echo $data['password']; ?>"> </td> 
				<td> <input type="text" class="field" placeholder="Nama Petugas"  name="nama_petugas" value="<?php echo $data['nama_petugas']; ?>"> </td> 
				<td> <input type="text" class="field" placeholder="Level"  name="level" value="<?php echo $data['level']; ?>"> </td> 
              
			
				<td> <button class="btn" name="proses" value="Ubah"> Send </button> </td>
 			</div>
		</div>
	</div>
</body>
</html>

<?php
        if(isset($_POST['proses']))
        {
            $id_petugas      = $_POST['id_petugas'];
            $username         = $_POST['username'];
            $password   			 = $_POST['password'];
            $nama_petugas            = $_POST['nama_petugas'];
            $level       = $_POST['level'];
         
            mysqli_query($koneksi, "UPDATE `petugas` 
            SET id_petugas='$id_petugas', username='$username', password='$password', nama_petugas='$nama_petugas', level='$level'
            WHERE id_petugas='$_GET[id]'") or die(mysqli_error($koneksi));

        

echo "Data Admin telah diubah";
echo "<meta http-equiv=refresh content=1;URL='petugas'>";

}

?>