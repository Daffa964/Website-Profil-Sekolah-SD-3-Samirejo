<?php
// Ambil data guru dan kelas dari SESSIONS
$id_guru = $_SESSION['Guru'];
$id_kelas_wali = $_SESSION['IDKelasWali'];

// Cek apakah guru ini adalah wali kelas
if (empty($id_kelas_wali)) {
    echo "
    <div class='alert alert-danger' role='alert'>
      Maaf, Anda tidak terdaftar sebagai wali kelas. Fitur ini hanya untuk wali kelas.
    </div>";
    exit(); // Hentikan eksekusi jika bukan wali kelas
}

// Ambil nama kelas
$kelas_sql = mysqli_query($koneksi, "SELECT kelas FROM tb_kelas WHERE id_kelas = '$id_kelas_wali'");
$kelas_data = mysqli_fetch_array($kelas_sql);
$nama_kelas = $kelas_data['kelas'];

// Tentukan bulan dan tahun
// Jika ada input dari form, gunakan itu. Jika tidak, gunakan bulan & tahun saat ini.
$bulan = isset($_GET['bulan']) ? (int)$_GET['bulan'] : date('m');
$tahun = isset($_GET['tahun']) ? (int)$_GET['tahun'] : date('Y');

// Array nama bulan
$nama_bulan = [
    1 => "Januari", 2 => "Februari", 3 => "Maret", 4 => "April",
    5 => "Mei", 6 => "Juni", 7 => "Juli", 8 => "Agustus",
    9 => "September", 10 => "Oktober", 11 => "November", 12 => "Desember"
];

// Array tahun (misal: 3 tahun ke belakang dan 1 tahun ke depan)
$rentang_tahun = range(date('Y') - 3, date('Y') + 1);

?>

<div class="d-sm-flex align-items-center justify-content-between mb-4 non-cetak">
    <h1 class="h3 mb-0 text-gray-800">Laporan Absensi Bulanan - Kelas <?= $nama_kelas; ?></h1>
</div>

<div class="card shadow mb-4 non-cetak">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pilih Periode Laporan</h6>
    </div>
    <div class="card-body">
        <form method="GET" action="">
            <input type="hidden" name="page" value="laporan">
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

<div class="card shadow mb-4 area-cetak">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">
            Rekap Absensi Kelas <?= $nama_kelas; ?> - Periode: <?= $nama_bulan[$bulan] . ' ' . $tahun; ?>
        </h6>
        <button onclick="window.print()" class="btn btn-info btn-sm non-cetak">
            <i class="fas fa-print"></i> Cetak Laporan
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th width="5%">No.</th>
                        <th>Nama Siswa</th>
                        <th width="10%">Hadir</th>
                        <th width="10%">Sakit</th>
                        <th width="10%">Izin</th>
                        <th width="10%">Alpha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Ambil daftar siswa di kelas ini
                    $siswa_sql = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id_kelas = '$id_kelas_wali' ORDER BY nama_siswa ASC");
                    $no = 1;

                    while ($siswa = mysqli_fetch_array($siswa_sql)) {
                        // Untuk setiap siswa, hitung rekapnya
                        $query_rekap = "
                            SELECT 
                                SUM(CASE WHEN status = 'Hadir' THEN 1 ELSE 0 END) AS total_hadir,
                                SUM(CASE WHEN status = 'Sakit' THEN 1 ELSE 0 END) AS total_sakit,
                                SUM(CASE WHEN status = 'Izin' THEN 1 ELSE 0 END) AS total_izin,
                                SUM(CASE WHEN status = 'Alpha' THEN 1 ELSE 0 END) AS total_alpha
                            FROM tb_kehadiran
                            WHERE id_siswa = '{$siswa['id_siswa']}'
                            AND MONTH(tanggal) = '$bulan'
                            AND YEAR(tanggal) = '$tahun'
                        ";
                        $rekap_sql = mysqli_query($koneksi, $query_rekap);
                        $rekap = mysqli_fetch_assoc($rekap_sql);
                    ?>
                        <tr>
                            <td class="text-center"><?= $no++; ?>.</td>
                            <td><?= $siswa['nama_siswa']; ?></td>
                            <td class="text-center"><?= (int)$rekap['total_hadir']; ?></td>
                            <td class="text-center"><?= (int)$rekap['total_sakit']; ?></td>
                            <td class="text-center"><?= (int)$rekap['total_izin']; ?></td>
                            <td class="text-center"><?= (int)$rekap['total_alpha']; ?></td>
                        </tr>
                    <?php
                    } // Penutup while
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>