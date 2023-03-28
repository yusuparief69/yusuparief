<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../../assets/dist/img/avatar01.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= $_SESSION['fullname']; ?></p>
                <?php
                include "../../config/koneksi.php";

                $id = $_SESSION['id_user'];

                $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = '$id'");
                $row = mysqli_fetch_array($query);
                ?>

                <?php

                if ($row['verif'] == "Iya") {
                    echo "<a><i class='fa fa-check-circle text-info'></i> Akun Terverifikasi</a>";
                } else {
                    echo "<a><i class='fa fa-exclamation text-danger'></i> Tidak Diketahui </a>";
                }

                ?>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN MENU</li>
            <li><a href="dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li class="treeview">

                <li><a href="pembayaran"><i class="fa fa-exchange"></i> <span>Entri Pembayaran</span></a></li>
                <li><a href="history"><i class="fa fa-refresh"></i> <span>History Pembayaran</span></a></li>
        
            </li>
            <li class="header">LAIN LAIN</li>
            <li><a href="identitas-app"><i class="fa fa-info"></i> <span>Identitas Applikasi</span></a></li>
    
                   
            <li class="header">LANJUTAN</li>
            <li><a href="#Logout" data-toggle="modal" data-target="#modalLogoutConfirm"><i class="fa fa-sign-out"></i> <span>Keluar</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<div class="modal fade" id="modalLogoutConfirm">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 5px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" style="font-family: 'Quicksand', sans-serif; font-weight: bold;">Peringatan</h4>
            </div>
            <div class="modal-body">
                <span>Apa anda yakin ingin keluar dari Aplikasi ? <br>
                    Anda harus login kembali jika ingin masuk Aplikasi Pembayaran Spp</span>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-danger">Batal</button>
                <a href="keluar" class="btn btn-primary">Iya, Logout</a>
            </div>
        </div>
    </div>
</div>
<script>
    var refreshId = setInterval(function() {
        $('#jumlahPesan').load('./pages/function/Pesan.php?aksi=jumlahPesan');
    }, 500);
</script>