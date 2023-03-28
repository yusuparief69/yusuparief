<?php
include "../../../../config/koneksi.php";

if ($_GET['aksi'] == "tgl_pinjam") {

    

    echo "<html>";
    echo "<head>";
    echo "<title>Laporan Pembayaran SPP - Tanggal Peminjaman</title>";
    echo "<link rel='stylesheet' href='../../../../assets/dist/css/custom.css'>";
    echo "<link rel='stylesheet' href='../../../../assets/bower_components/bootstrap/dist/css/bootstrap.min.css'>";
    echo "<link rel='stylesheet' href='../../../../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'>";
    echo "<link rel='icon' type='icon' href='../../../../assets/dist/img/logo_sekolah.png'>";
    echo "</head>";
    echo "<body onload='window.print()' style='font-family: Quicksand, sans-serif'>";
    echo "<img src='../../../../assets/dist/img/logo_sekolah.png' style='height: 90px; width: 90px; margin-top: 10px; margin-left: 10px; margin-bottom: -50px;'>";
    echo "<h3 class='text-center' style='font-family: Quicksand, sans-serif; margin-top: -30px;'>.:: Laporan Pembayaran SPP ::.</h3>";
    $sql2 = mysqli_query($koneksi, "SELECT * FROM identitas");
    $row = mysqli_fetch_assoc($sql2);

    echo "<p style='font-size: 12px;' class='text-center'>" . $row['alamat_app'] . "<br> Email : " . $row['email_app'] . " | Nomor Telpon : " . $row['nomor_hp'] . " </p>";
    echo "<hr>";
    echo "<table class='table table-striped table-bordered'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>No</th>";
    echo "<th>id_pembayaran</th>";
    echo "<th>id_petugas</th>";
    echo "<th>nisn</th>";
    echo "<th>tgl_bayar</th>";
    echo "<th>bulan_dibayar</th>";
    echo "<th>tahun_dibayar</th>";
    echo "<th>id_spp</th>";
    echo "<th>jumlah_bayar</th>";
    echo "</tr>";
    $no = 1;
    $sql = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id_pembayaran");
    while ($row = mysqli_fetch_assoc($sql)) {
        echo "<tbody>";
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $row['id_pembayaran'] . "</td>";
        echo "<td>" . $row['id_petugas'] . "</td>";
        echo "<td>" . $row['nisn'] . "</td>";
        echo "<td>" . $row['tgl_bayar'] . "</td>";
        echo "<td>" . $row['bulan_dibayar'] . "</td>";
        echo "<td>" . $row['tahun_dibayar'] . "</td>";
        echo "<td>" . $row['id_spp'] . "</td>";
        echo "<td>" . $row['jumlah_bayar'] . "</td>";
        echo "</tr>";
        echo "</tbody>";
    }
    echo "</table>";
    echo "<p style='text-align: center;'>Laporan Pembayaran SPP SMK Merdeka</p>";
    echo "<script src='../../../../assets/bower_components/jquery/dist/jquery.min.js'></script>";
    echo "<script src='../../../../assets/bower_components/bootstrap/dist/js/bootstrap.min.js'></script>";
    echo "</body>";
    echo "</html>";
} elseif ($_GET['aksi'] == "tgl_pengembalian") {

    

    echo "<html>";
    echo "<head>";
    echo "<title>Laporan Pembayaran SPP - Tanggal Pengembalian</title>";
    echo "<link rel='stylesheet' href='../../../../assets/dist/css/custom.css'>";
    echo "<link rel='stylesheet' href='../../../../assets/bower_components/bootstrap/dist/css/bootstrap.min.css'>";
    echo "<link rel='stylesheet' href='../../../../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'>";
    echo "<link rel='icon' type='icon' href='../../../../assets/dist/img/logo_app.png'>";
    echo "</head>";
    echo "<body onload='window.print()' style='font-family: Quicksand, sans-serif'>";
    echo "<img src='../../../../assets/dist/img/logo_sekolah.png' style='height: 90px; width: 90px; margin-top: 10px; margin-left: 10px; margin-bottom: -50px;'>";
    echo "<h3 class='text-center' style='font-family: Quicksand, sans-serif; margin-top: -30px;'>.:: Laporan Pembayaran SPP ::.</h3>";
    $sql2 = mysqli_query($koneksi, "SELECT * FROM identitas");
    $row = mysqli_fetch_assoc($sql2);

    echo "<p style='font-size: 12px;' class='text-center'>" . $row['alamat_app'] . "<br> Email : " . $row['email_app'] . " | Nomor Telpon : " . $row['nomor_hp'] . " </p>";
    echo "<hr>";
    echo "<table class='table table-striped table-bordered'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>No</th>";
    echo "<th>Id Petugas</th>";
    echo "<th>Username</th>";
    echo "<th>Password</th>";
    echo "<th>Nama Petugas</th>";
    echo "<th>Level</th>";
    echo "</tr>";
    $no = 1;
    $sql = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas");
    while ($row = mysqli_fetch_assoc($sql)) {
        echo "<tbody>";
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $row['id_petugas'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['nama_petugas'] . "</td>";
        echo "<td>" . $row['level'] . "</td>";
       
        echo "</tr>";
        echo "</tbody>";
    }
    echo "</table>";
    echo "<p style='text-align: center;'>Laporan Data Petugas Aplikasi SPP</p>";
    echo "<script src='../../../../assets/bower_components/jquery/dist/jquery.min.js'></script>";
    echo "<script src='../../../../assets/bower_components/bootstrap/dist/js/bootstrap.min.js'></script>";
    echo "</body>";
    echo "</html>";
} elseif ($_GET['aksi'] == "nama_anggota") {

    $nama_anggota = $_POST['nama_anggota'];

    echo "<html>";
    echo "<head>";
    echo "<title>Laporan Perpustakaan - Nama Anggota</title>";
    echo "<link rel='stylesheet' href='../../../../assets/dist/css/custom.css'>";
    echo "<link rel='stylesheet' href='../../../../assets/bower_components/bootstrap/dist/css/bootstrap.min.css'>";
    echo "<link rel='stylesheet' href='../../../../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'>";
    echo "<link rel='icon' type='icon' href='../../../../assets/dist/img/logo_app.png'>";
    echo "</head>";
    echo "<body onload='window.print()' style='font-family: Quicksand, sans-serif'>";
    echo "<img src='../../../../assets/dist/img/logo_app.png' style='height: 90px; width: 90px; margin-top: 10px; margin-left: 10px; margin-bottom: -50px;'>";
    echo "<img src='../../../../assets/dist/img/LOGO-PERPUSNAS.png' style='display: block; margin-left: auto; width: 90px; margin-bottom: -70px; margin-top: -38px; margin-right: 5px;'>";
    echo "<h3 class='text-center' style='font-family: Quicksand, sans-serif; margin-top: -30px;'>.:: Laporan Pembayaran SPP ::.</h3>";
    $sql2 = mysqli_query($koneksi, "SELECT * FROM identitas");
    $row = mysqli_fetch_assoc($sql2);

    echo "<p style='font-size: 12px;' class='text-center'>" . $row['alamat_app'] . "<br> Email : " . $row['email_app'] . " | Nomor Telpon : " . $row['nomor_hp'] . " </p>";
    echo "<hr>";
    echo "<table class='table table-striped table-bordered' id='example1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>No</th>";
    echo "<th>Nisn</th>";
    echo "<th>Nis</th>";
    echo "<th>Nama Siswa</th>";
    echo "<th>Id Kelas</th>";
    echo "<th>Alamat</th>";
    echo "<th>No Telepon</th>";
    echo "<th>Id SPP</th>";
    echo "</tr>";
    $no = 1;
    $sql = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn");
    while ($row = mysqli_fetch_assoc($sql)) {
        echo "<tbody>";
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $row['nisn'] . "</td>";
        echo "<td>" . $row['nis'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['id_kelas'] . "</td>";
        echo "<td>" . $row['alamat'] . "</td>";
        echo "<td>" . $row['no_tlp'] . "</td>";
        echo "<td>" . $row['id_spp'] . "</td>";    
       
        echo "</tr>";
        echo "</tbody>";
    }
    echo "</table>";
    echo "<p style='text-align: center;'>Laporan Perpustakaan Berdasarkan Nama Anggota (" . $_POST['nama_anggota'] . ")</p>";
    echo "<script src='../../../../assets/bower_components/jquery/dist/jquery.min.js'></script>";
    echo "<script src='../../../../assets/bower_components/bootstrap/dist/js/bootstrap.min.js'></script>";
    echo "</body>";
    echo "</html>";
}