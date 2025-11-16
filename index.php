<?php session_start(); ?>
<?php
include 'config/koneksi.php';
$oke = mysqli_query($koneksi, "SELECT * FROM tb_sekolah");
$oke1 = mysqli_fetch_array($oke);
setlocale(LC_TIME, 'id_ID.utf8');
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $oke1['nama_sekolah'] ?></title>
  <link rel="shortcut icon" type="image/png" href="assets/sumber/img/app/<?= $oke1['foto_logo'] ?>" />
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/assets1/img/favicon.png" rel="icon">
  <link href="assets/assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/assets1/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/assets1/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/assets1/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/assets1/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/assets1/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/assets1/css/style.css" rel="stylesheet">

  <link href="assets/assets2/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mamba - v2.5.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li class="drop-down"><a href="">Profil</a>
            <ul>
              <li><a href="?page=profil&act=sejarah">Sejarah</a></li>
              <li><a href="?page=profil">Visi & Misi</a></li>
              <li><a href="?page=profil&act=akreditasi">Akreditasi</a></li>
              <li><a href="?page=profil&act=kurikulum">Kurikulum</a></li>
              <li><a href="?page=profil&act=ekstrakurikuler">Jenis Ekstrakurikuler</a></li>
              <li><a href="?page=profil&act=sarana">Sarana Prasarana</a></li>
              <li><a href="?page=profil&act=struktur">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="">Fasilitas</a>
            <ul>
              <li><a href="?page=fasilitas">Ruangan Belajar</a></li>
              <li><a href="?page=fasilitas&act=pustaka">Perpustakaan</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="">Guru</a>
            <ul>
              <li><a href="?page=guru">Data Guru</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="">Siswa</a>
            <ul>
              <li><a href="?page=siswa">Data Siswa</a></li>
              <li><a href="?page=ekstrakurikuler">Ekstrakurikuler</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="">Alumni</a>
            <ul>
              <li><a href="?page=alumni">Jejak Alumni</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="">Informasi</a>
            <ul>
              <li><a href="?page=pengumuman&act=berita">Berita Sekolah</a></li>
              <li><a href="?page=pengumuman">Pengumuman</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="">Galeri</a>
            <ul>
              <li><a href="?page=galery">Galeri Foto</a></li>
              <li><a href="?page=galery&act=video">Galeri Video</a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="">Buku Tamu</a>
            <ul>
              <li><a href="?page=bukutamu&act=hal">Data Buku Tamu</a></li>
              <li><a href="?page=bukutamu">Isi Tamu</a></li>
            </ul>
          </li>

          <li class="drop-down"><a href="">Wali Murid</a>
            <ul>
              <li><a href="?page=cek-login-wali">Login Wali</a></li>
              <li><a href="?page=portal-wali">Portal Wali</a></li>
              <li><a href="?page=cek-absensi">Cek Absensi</a></li>
            </ul>
          </li>
        </ul>
      </nav>


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <!-- End Hero -->

  <main id="main">

    <?php
    error_reporting();
    $page = @$_GET['page'];
    $act = @$_GET['act'];

    if ($page == 'guru') {
      if ($act == '') {
        include 'data/guru/hal_guru.php';
      } elseif ($act == 'detail') {
        include 'data/guru/detail_guru.php';
      }
    } elseif ($page == 'tendik') {
      if ($act == '') {
        include 'data/tendik/hal_tendik.php';
      } elseif ($act == 'detail') {
        include 'data/tendik/detail_tendik.php';
      }
    } elseif ($page == 'galery') {
      if ($act == '') {
        include 'data/gallery/hal_gallery.php';
      } elseif ($act == 'video') {
        include 'data/gallery/hal_galleryvideo.php';
      }
    } elseif ($page == 'pengumuman') {
      if ($act == '') {
        include 'data/pengumuman/hal_pengumuman.php';
      } elseif ($act == 'detail') {
        include 'data/pengumuman/detail_pengumuman.php';
      } elseif ($act == 'kalender') {
        include 'data/pengumuman/hal_kalender.php';
      } elseif ($act == 'berita') {
        include 'data/pengumuman/hal_berita.php';
      }
    } elseif ($page == 'fasilitas') {
      if ($act == '') {
        include 'data/fasilitas/hal_ruangan.php';
      } elseif ($act == 'pustaka') {
        include 'data/fasilitas/hal_pustaka.php';
      } elseif ($act == 'fakademik') {
        include 'data/fasilitas/hal_fakademik.php';
      } elseif ($act == 'fnonakademik') {
        include 'data/fasilitas/hal_fnonakademik.php';
      } elseif ($act == 'dll') {
        include 'data/fasilitas/hal_dll.php';
      }
    } elseif ($page == 'profil') {
      if ($act == '') {
        include 'data/profil/hal_visimisi.php';
      } elseif ($act == 'fasilitas') {
        include 'data/profil/hal_fasilitas.php';
      } elseif ($act == 'sejarah') {
        include 'data/profil/hal_sejarah.php';
      } elseif ($act == 'ekstrakurikuler') {
        include 'data/profil/hal_ekstrakurikuler.php';
      } elseif ($act == 'akreditasi') {
        include 'data/profil/hal_akreditasi.php';
      } elseif ($act == 'kurikulum') {
        include 'data/profil/hal_kurikulum.php';
      } elseif ($act == 'struktur') {
        include 'data/profil/hal_struktur.php';
      } elseif ($act == 'sarana') {
        include 'data/profil/hal_sarana.php';
      } elseif ($act == 'peta') {
        include 'data/profil/hal_peta.php';
      } elseif ($act == 'lokasi') {
        include 'data/profil/hal_lokasi.php';
      } elseif ($act == 'katasambutan') {
        include 'data/profil/hal_katasambutan.php';
      }
    } elseif ($page == 'bukutamu') {
      if ($act == '') {
        include 'data/buku tamu/add_bukutamu.php';
      } elseif ($act == 'hal') {
        include 'data/buku tamu/hal_bukutamu.php';
      }
    } elseif ($page == 'siswa') {
      if ($act == '') {
        include 'data/siswa/hal_siswa.php';
      } elseif ($act == 'list') {
        include 'data/siswa/detail_siswa.php';
      }
    } elseif ($page == 'alumni') {
      if ($act == '') {
        include 'data/alumni/hal_alumni.php';
      } elseif ($act == 'list') {
        include 'data/alumni/detail_alumni.php';
      }
    } elseif ($page == 'ekstrakurikuler') {
      if ($act == '') {
        include 'data/ekstrakurikuler/hal_ekstrakurikuler.php';
      }
    } elseif ($page == 'prestasi') {
      if ($act == '') {
        include 'data/prestasi/hal_prestasi.php';
      } elseif ($act == 'detail') {
        include 'data/prestasi/detail_prestasi.php';
      }
    } elseif ($page == 'login') {
      if ($act == '') {
        include 'login.php';
      }
    } elseif ($page == 'cek-absensi') {
      include 'data/wali/cek_absensi.php';
    } elseif ($page == 'cek-login-wali') {
      include 'data/wali/proses_login.php';
    } elseif ($page == 'portal-wali') {
      include 'data/wali/portal.php';
    } elseif ($page == '') {
      include 'home.php';
    } else {
      echo "<b>404!</b> Tidak ada halaman!";
    }
    ?>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-info">
            <h3><?= $oke1['nama_sekolah'] ?></h3>
            <p>
              Jl. Kaliyitno Kulon No.370, Samirejo, Kec. Dawe, Kabupaten Kudus, Jawa Tengah 59353<br>
              <br>
              <strong>Email :</strong> sd3_samirejo@yahoo.co.id<br>
            </p>
          </div>
          <!-- Google Maps -->
          <div class="col-lg-6 col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.3689131777533!2d110.85952947384673!3d-6.724761093271215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70dbeb1fe9507d%3A0x6a486b97031ba2e1!2sSD%203%20Samirejo!5e0!3m2!1sid!2sid!4v1742444207992!5m2!1sid!2sid" width="100%" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><?= $oke1['nama_sekolah'] ?></span></strong>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/assets1/vendor/jquery/jquery.min.js"></script>
  <script src="assets/assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/assets1/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/assets1/vendor/php-email-form/validate.js"></script>
  <script src="assets/assets1/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/assets1/vendor/venobox/venobox.min.js"></script>
  <script src="assets/assets1/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/assets1/vendor/counterup/counterup.min.js"></script>
  <script src="assets/assets1/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/assets1/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/assets1/js/main.js"></script>

  <!-- sb admin -->

  <!-- Page level plugins -->
  <script src="assets/assets2/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assets/assets2/js/demo/datatables-demo.js"></script>
</body>

</html>