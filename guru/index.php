<?php
session_start();
include '../config/koneksi.php';
$oke = mysqli_query($koneksi, "SELECT * FROM tb_sekolah");
$oke1 = mysqli_fetch_array($oke);
setlocale(LC_TIME, 'id_ID.utf8');

if (@$_SESSION['Guru']) {
?>
    <?php
    if (@$_SESSION['Guru']) {
        $sesi = @$_SESSION['Guru'];
    }
    $sql = mysqli_query($koneksi, "SELECT * FROM tb_guru WHERE id_guru = '$sesi'") or die(mysqli_error($koneksi));
    $data = mysqli_fetch_array($sql);
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Halaman Administrator</title>
        <link rel="shortcut icon" type="image/png" href="../assets/sumber/img/app/<?= $oke1['foto_logo'] ?>" />
        <!-- Custom fonts for this template -->
        <link href="../assets/assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../assets/assets2/css/sb-admin-2.min.css" rel="stylesheet">
        <!-- Custom styles for this page -->
        <link href="../assets/assets2/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

        <style>
            /* === MODE CETAK === */
            /* === MODE CETAK / PRINT === */
            @media print {

                /* Pastikan warna latar dan teks ikut tercetak */
                body {
                    -webkit-print-color-adjust: exact !important;
                    color-adjust: exact !important;
                    background: #fff !important;
                    zoom: 90%;
                    /* kecilkan sedikit kalau tabel terlalu lebar */
                    font-family: Arial, sans-serif !important;
                }

                /* Hilangkan semua elemen non-cetak */
                .sidebar,
                .topbar,
                .non-cetak,
                .scroll-to-top,
                .navbar,
                .modal,
                .dataTables_length,
                .dataTables_filter,
                .dataTables_info,
                .dataTables_paginate {
                    display: none !important;
                }

                /* Pastikan konten utama tampil penuh */
                #content-wrapper,
                #content,
                .container-fluid,
                .card,
                .card-body,
                .table-responsive {
                    width: 100% !important;
                    margin: 0 !important;
                    padding: 0 !important;
                    box-shadow: none !important;
                    background: #fff !important;
                    overflow: visible !important;
                }

                /* Atur ukuran kertas */
                @page {
                    size: A4 portrait;
                    margin: 10mm;
                }

                /* Tabel rapi untuk cetak */
                table {
                    width: 100% !important;
                    border-collapse: collapse !important;
                    page-break-inside: auto !important;
                }

                th,
                td {
                    border: 1px solid #000 !important;
                    padding: 6px 8px !important;
                    font-size: 12px !important;
                    text-align: left !important;
                }

                th {
                    background-color: #f0f0f0 !important;
                    font-weight: bold !important;
                }

                tr {
                    page-break-inside: avoid !important;
                    page-break-after: auto !important;
                }

                /* Hilangkan efek shadow dan border dari card */
                .card,
                .card-body {
                    box-shadow: none !important;
                    border: none !important;
                }

                /* Judul halaman tetap terlihat */
                h1,
                h2,
                h3,
                h4,
                h5 {
                    color: #000 !important;
                    margin-top: 0 !important;
                }

                /* Pastikan tabel DataTables tampil semua */
                #dataTable {
                    display: table !important;
                }
            }
        </style>

    </head>

    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                    <?= $data['nama_guru']; ?>
                </a>

                <hr class="sidebar-divider my-0">

                <li class="nav-item active">
                    <a class="nav-link" href="index.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Beranda</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?page=absensi">
                        <i class="fas fa-fw fa-check-square"></i>
                        <span>Rekap Absensi Harian</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?page=laporan">
                        <i class="fas fa-fw fa-print"></i>
                        <span>Laporan Absensi Bulanan</span></a>
                </li>

                <hr class="sidebar-divider d-none d-md-block">

                <hr class="sidebar-divider d-none d-md-block">

                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <form class="form-inline">
                            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                            </button>
                        </form>

                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <h3>
                                <img src="../assets/sumber/img/app/<?= $oke1['foto_logo'] ?>" class="img-fluid" style="width:50px;height:50px;" alt="">
                                <span class="badge badge-primary">
                                    <?= $oke1['nama_sekolah']; ?>
                                </span>
                            </h3>
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                        <?= $data['nama_guru']; ?>
                                    </span>
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="?page=profil">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>

                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <?php
                        error_reporting(0); // Biarkan 0
                        $page = @$_GET['page'];
                        $act = @$_GET['act'];

                        if ($page == 'absensi') {
                            // Halaman rekap absensi harian
                            include 'modul/presensi/rekap.php';
                        } elseif ($page == 'laporan') {
                            // Halaman laporan bulanan baru
                            include 'modul/laporan/bulanan.php';
                        } elseif ($page == '') {
                            // Halaman home guru
                            include 'home.php';
                        } else {
                            echo "Halaman tidak ditemukan.";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar ?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Silahkan pilih logout untuk keluar</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <a class="btn btn-danger" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../assets/assets2/vendor/jquery/jquery.min.js"></script>
        <script src="../assets/assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../assets/assets2/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../assets/assets2/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../assets/assets2/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/assets2/vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../assets/assets2/js/demo/datatables-demo.js"></script>

        <script>
            $(document).ready(function() {
                // Listener untuk tombol "Tandai Semua Hadir"
                $("#tandaiSemuaHadir").click(function() {
                    // Temukan semua radio button dengan class "radio-hadir"
                    // dan set statusnya menjadi checked
                    $(".radio-hadir").prop("checked", true);
                });
            });
        </script>

        <script type="text/javascript" src="../assets/assets2/vendor/ckeditor/ckeditor.js"></script>

    <?php } else {

    include 'modul/500.html';
}

    ?>

    </body>

    </html>