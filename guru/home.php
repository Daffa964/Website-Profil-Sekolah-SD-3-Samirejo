<?php
// Ambil data guru dari session
$id_guru = $_SESSION['Guru'];
$nama_guru = $_SESSION['NamaGuru'];
$id_kelas_wali = $_SESSION['IDKelasWali'];
$tanggal_hari_ini = date("Y-m-d");

// Cek apakah guru ini adalah wali kelas
if (empty($id_kelas_wali)) {
    // Tampilan jika BUKAN wali kelas
    echo "
    <div class='alert alert-info' role='alert'>
      Selamat Datang, <b>$nama_guru</b>. Anda login sebagai guru.
    </div>";
} else {
    // Tampilan jika DIA ADALAH wali kelas
    
    // 1. Ambil Nama Kelas
    $kelas_sql = mysqli_query($koneksi, "SELECT kelas FROM tb_kelas WHERE id_kelas = '$id_kelas_wali'");
    $kelas_data = mysqli_fetch_array($kelas_sql);
    $nama_kelas = $kelas_data['kelas'];

    // 2. Ambil Jumlah Siswa
    $siswa_sql = mysqli_query($koneksi, "SELECT COUNT(id_siswa) AS total_siswa FROM tb_siswa WHERE id_kelas = '$id_kelas_wali'");
    $siswa_data = mysqli_fetch_array($siswa_sql);
    $total_siswa = $siswa_data['total_siswa'];

    // 3. Ambil Ringkasan Absensi HARI INI
    $hadir_sql = mysqli_query($koneksi, "SELECT COUNT(id_kehadiran) AS total FROM tb_kehadiran WHERE id_kelas = '$id_kelas_wali' AND tanggal = '$tanggal_hari_ini' AND status = 'Hadir'");
    $total_hadir = mysqli_fetch_array($hadir_sql)['total'];

    $sakit_sql = mysqli_query($koneksi, "SELECT COUNT(id_kehadiran) AS total FROM tb_kehadiran WHERE id_kelas = '$id_kelas_wali' AND tanggal = '$tanggal_hari_ini' AND status = 'Sakit'");
    $total_sakit = mysqli_fetch_array($sakit_sql)['total'];

    $izin_sql = mysqli_query($koneksi, "SELECT COUNT(id_kehadiran) AS total FROM tb_kehadiran WHERE id_kelas = '$id_kelas_wali' AND tanggal = '$tanggal_hari_ini' AND status = 'Izin'");
    $total_izin = mysqli_fetch_array($izin_sql)['total'];

    $alpha_sql = mysqli_query($koneksi, "SELECT COUNT(id_kehadiran) AS total FROM tb_kehadiran WHERE id_kelas = '$id_kelas_wali' AND tanggal = '$tanggal_hari_ini' AND status = 'Alpha'");
    $total_alpha = mysqli_fetch_array($alpha_sql)['total'];

?>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard Wali Kelas - <?= $nama_kelas; ?></h1>
        <span class="badge badge-primary p-2">Tanggal: <?= strftime('%A, %d %B %Y'); ?></span>
    </div>

    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Siswa (Kelas <?= $nama_kelas; ?>)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_siswa; ?> Siswa</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Hadir Hari Ini</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_hadir; ?> Siswa</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Izin / Sakit</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_sakit + $total_izin; ?> Siswa</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-info-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Alpha Hari Ini</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_alpha; ?> Siswa</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-exclamation-triangle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Selamat Datang, <?= $nama_guru; ?>!</h6>
                </div>
                <div class="card-body">
                    <p>Gunakan tombol di bawah ini untuk merekap absensi harian kelas Anda.</p>
                    <a href="?page=absensi" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-check-square"></i>
                        </span>
                        <span class="text">Mulai Rekap Absensi Hari Ini</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php
} // Penutup "else" (jika dia adalah wali kelas)
?>