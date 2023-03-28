<!DOCTYPE html>
<html lang="en">
<head>
	<title>CRUD PHP dan MySQLi -</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="jquery-3.4.1.min.js"></script>
</head>
<body>

<div class="container col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tabel Data Siswa
            </div>
            <div class="card-body">
                <a href="index-pembayaran.php" class="btn btn-primary">Input Data</a>
                <table class="table table-bordered">
 
	<h2>CRUD DATA Siswa</h2>
	<br/>
	
	
	<br/>
    <table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>Nisn</th>
			<th>Nis</th>
			<th>Nama</th>
			<th>Id Kelas</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>id SPP</th>
            <th>ACTION</th>
		</tr>
		<?php 
		include 'config/koneksi.php';
                      
        $no = 1;
        $data = mysqli_query($koneksi,"select * FROM siswa");
        while($d = mysqli_fetch_array($data)){
         
        
    ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $d['nisn'];?></td>
            <td><?php echo $d['nis'];?></td>
            <td><?php echo $d['nama'];?></td>
            <td><?php echo $d['id_kelas'];?></td>
            <td><?php echo $d['alamat'];?></td>
            <td><?php echo $d['no_tlp'];?></td>
            <td><?php echo $d['id_spp'];?></td>
				<td>
					<a href="edit-pembayaran.php?id=<?php echo $d['nisn']; ?>"class="btn btn-sm btn-warning">Update</a>
					<a href="hapus-pembayaran.php?id=<?php echo $d['nisn']; ?>" class="btn btn-sm btn-danger">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>