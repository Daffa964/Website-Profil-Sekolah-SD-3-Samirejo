<?php
// Cek apakah wali murid sudah login
if (empty($_SESSION['ID_Siswa_Wali'])) {
    echo "
    <script>
        alert('Anda harus login terlebih dahulu!');
        window.location='index.php?page=cek-absensi';
    </script>
    ";
    exit();
}

// Ambil data siswa dari session
$id_siswa = $_SESSION['ID_Siswa_Wali'];
$nama_siswa = $_SESSION['Nama_Siswa_Wali'];

// Tentukan bulan dan tahun
$bulan = isset($_GET['bulan']) ? (int)$_GET['bulan'] : date('m');
$tahun = isset($_GET['tahun']) ? (int)$_GET['tahun'] : date('Y');

// Array nama bulan
$nama_bulan = [
    1 => "Januari",
    2 => "Februari",
    3 => "Maret",
    4 => "April",
    5 => "Mei",
    6 => "Juni",
    7 => "Juli",
    8 => "Agustus",
    9 => "September",
    10 => "Oktober",
    11 => "November",
    12 => "Desember"
];

// Array tahun
$rentang_tahun = range(date('Y') - 3, date('Y') + 1);

?>

<main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="index.php">Home</a></li>
                <li>Portal Wali Murid</li>
            </ol>
            <h2>Laporan Absensi: <?= htmlspecialchars($nama_siswa); ?></h2>
        </div>
    </section>
    <section class="inner-page">
        <div class="container">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pilih Periode Laporan</h6>
                </div>
                <div class="card-body">
                    <form method="GET" action="">
                        <input type="hidden" name="page" value="portal-wali">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="bulan">Bulan</label>
                                    <select name="bulan" id="bulan" class="form-control">
                                        <?php foreach ($nama_bulan as $angka => $nama) : ?>
                                            <option value="<?= $angka; ?>" <?= ($angka == $bulan) ? 'selected' : ''; ?>>
                                                <?= $nama; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="tahun">Tahun</label>
                                    <select name="tahun" id="tahun" class="form-control">
                                        <?php foreach ($rentang_tahun as $th) : ?>
                                            <option value="<?= $th; ?>" <?= ($th == $tahun) ? 'selected' : ''; ?>>
                                                <?= $th; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <i class="fas fa-eye"></i> Tampilkan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <?php
            // Hitung rekap bulanan
            $query_rekap = "
                SELECT 
                    SUM(CASE WHEN status = 'Hadir' THEN 1 ELSE 0 END) AS total_hadir,
                    SUM(CASE WHEN status = 'Sakit' THEN 1 ELSE 0 END) AS total_sakit,
                    SUM(CASE WHEN status = 'Izin' THEN 1 ELSE 0 END) AS total_izin,
                    SUM(CASE WHEN status = 'Alpha' THEN 1 ELSE 0 END) AS total_alpha
                FROM tb_kehadiran
                WHERE id_siswa = '$id_siswa'
                AND MONTH(tanggal) = '$bulan'
                AND YEAR(tanggal) = '$tahun'
            ";
            $rekap_sql = mysqli_query($koneksi, $query_rekap);
            $rekap = mysqli_fetch_assoc($rekap_sql);
            ?>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card border-left-success">
                        <div class="card-body">
                            <div class="text-xs font-weight-bold text-success text-uppercase">Hadir</div>
                            <div class="h5 mb-0 font-weight-bold"><?= (int)$rekap['total_hadir']; ?> Hari</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border-left-info">
                        <div class="card-body">
                            <div class="text-xs font-weight-bold text-info text-uppercase">Izin</div>
                            <div class="h5 mb-0 font-weight-bold"><?= (int)$rekap['total_izin']; ?> Hari</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border-left-warning">
                        <div class="card-body">
                            <div class="text-xs font-weight-bold text-warning text-uppercase">Sakit</div>
                            <div class="h5 mb-0 font-weight-bold"><?= (int)$rekap['total_sakit']; ?> Hari</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border-left-danger">
                        <div class="card-body">
                            <div class="text-xs font-weight-bold text-danger text-uppercase">Alpha</div>
                            <div class="h5 mb-0 font-weight-bold"><?= (int)$rekap['total_alpha']; ?> Hari</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Detail Absensi - Periode: <?= $nama_bulan[$bulan] . ' ' . $tahun; ?>
                    </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $detail_sql = mysqli_query($koneksi, "
                                    SELECT * FROM tb_kehadiran 
                                    WHERE id_siswa = '$id_siswa'
                                    AND MONTH(tanggal) = '$bulan'
                                    AND YEAR(tanggal) = '$tahun'
                                    ORDER BY tanggal ASC
                                ");

                                if (mysqli_num_rows($detail_sql) > 0) {
                                    while ($detail = mysqli_fetch_array($detail_sql)) {
                                        // Format tanggal
                                        $fmt = new IntlDateFormatter('id_ID', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
                                        $tanggal_formatted = $fmt->format(strtotime($detail['tanggal']));


                                        // Atur warna
                                        $status = $detail['status'];
                                        $warna = '';
                                        if ($status == 'Hadir') $warna = 'text-success';
                                        if ($status == 'Sakit') $warna = 'text-warning';
                                        if ($status == 'Izin') $warna = 'text-info';
                                        if ($status == 'Alpha') $warna = 'text-danger';

                                        echo "
                                        <tr>
                                            <td>$tanggal_formatted</td>
                                            <td class='font-weight-bold $warna'>$status</td>
                                            <td>" . htmlspecialchars($detail['keterangan']) . "</td>
                                        </tr>
                                        ";
                                    }
                                } else {
                                    echo "<tr><td colspan='3' class='text-center'>Belum ada data absensi untuk periode ini.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <a href="index.php?page=cek-absensi" class="btn btn-secondary">Cek Siswa Lain (Logout)</a>

        </div>
    </section>
</main>
<style>
    .card.border-left-success {
        border-left: 0.25rem solid #1cc88a !important;
    }

    .card.border-left-info {
        border-left: 0.25rem solid #36b9cc !important;
    }

    .card.border-left-warning {
        border-left: 0.25rem solid #f6c23e !important;
    }

    .card.border-left-danger {
        border-left: 0.25rem solid #e74a3b !important;
    }

    .text-xs {
        font-size: .7rem;
    }

    .text-success {
        color: #1cc88a !important;
    }

    .text-info {
        color: #36b9cc !important;
    }

    .text-warning {
        color: #f6c23e !important;
    }

    .text-danger {
        color: #e74a3b !important;
    }
</style>