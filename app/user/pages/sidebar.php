<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../../assets/dist/img/avatar02.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">

                <p><?= $_SESSION['fullname']; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN MENU</li>
            <li><a href="dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i>
                    <span>Master Data</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pengembalian-buku"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
                    <li><a href="kelas"><i class="fa fa-circle-o"></i> Data Kelas</a></li>
                    <li><a href="petugas"><i class="fa fa-circle-o"></i> Data Petugas</a></li>
                    <li><a href="spp"><i class="fa fa-circle-o"></i> Data SPP</a></li>
                </ul>
            </li>
            <li><a href="pembayaran"><i class="fa fa-exchange"></i> <span>Entri Pembayaran</span></a></li>
            <li><a href="laporan"><i class="fa fa-book"></i> <span>Laporan SPP</span></a></li>
            <li><a href="histori"><i class="fa fa-refresh"></i> <span>History Pembayaran</span></a></li>
            <li class="header">LAIN LAIN</li>
            <li><a href="profil-saya"><i class="fa fa-info"></i> <span>Profil Saya</span></a></li>
            <li class="header">LANJUTAN</li>
            <li><a href="#Logout" data-toggle="modal" data-target="#modalLogoutConfirm"><i class="fa fa-sign-out"></i> <span>Keluar</span></a></li> 
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