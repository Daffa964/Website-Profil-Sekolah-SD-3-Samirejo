<?php
// Ambil data guru dan kelas dari SESSION
$id_guru = $_SESSION['Guru'];
$id_kelas_wali = $_SESSION['IDKelasWali'];
$nama_guru = $_SESSION['NamaGuru'];
$tanggal_hari_ini = date("Y-m-d");

// Cek apakah guru ini wali kelas
if (empty($id_kelas_wali)) {
    echo "
    <div class='alert alert-danger' role='alert'>
        Maaf, Anda tidak terdaftar sebagai wali kelas. Fitur ini hanya untuk wali kelas.
    </div>";
} else {
    // Ambil nama kelas
    $kelas_sql = mysqli_query($koneksi, "SELECT kelas FROM tb_kelas WHERE id_kelas = '$id_kelas_wali'");
    $kelas_data = mysqli_fetch_array($kelas_sql);
    $nama_kelas = $kelas_data['kelas'];

    // Ambil daftar siswa
    $siswa_sql = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id_kelas = '$id_kelas_wali' ORDER BY nama_siswa ASC");
?>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Rekap Absensi Harian - Kelas <?= htmlspecialchars($nama_kelas); ?></h1>
        <span class="badge badge-primary">Tanggal: <?= strftime('%A, %d %B %Y'); ?></span>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Siswa Kelas <?= htmlspecialchars($nama_kelas); ?></h6>
        </div>
        <div class="card-body">

            <form action="modul/presensi/simpan.php" method="POST">
                <input type="hidden" name="id_kelas" value="<?= $id_kelas_wali; ?>">
                <input type="hidden" name="tanggal" value="<?= $tanggal_hari_ini; ?>">
                <button type="button" id="tandaiSemuaHadir" class="btn btn-success btn-icon-split mb-3">
                    <span class="icon text-white-50">
                        <i class="fas fa-check-double"></i>
                    </span>
                    <span class="text">Tandai Semua Hadir</span>
                </button>
                <form action="modul/presensi/simpan.php" method="POST"></form>
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIS</th>
                                <th>Nama Siswa</th>
                                <th width="35%">Status Kehadiran</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($siswa = mysqli_fetch_array($siswa_sql)) {
                                // Cek apakah sudah diabsen hari ini
                                $absensi_sql = mysqli_query($koneksi, "SELECT * FROM tb_kehadiran WHERE id_siswa = '$siswa[id_siswa]' AND tanggal = '$tanggal_hari_ini'");
                                $absensi_data = mysqli_fetch_array($absensi_sql);

                                $status = $absensi_data['status'] ?? '';
                                $keterangan = $absensi_data['keterangan'] ?? '';
                            ?>
                                <tr>
                                    <td><?= $no++; ?>.</td>
                                    <td><?= htmlspecialchars($siswa['nis']); ?></td>
                                    <td>
                                        <?= htmlspecialchars($siswa['nama_siswa']); ?>
                                        <input type="hidden" name="id_siswa[]" value="<?= $siswa['id_siswa']; ?>">
                                    </td>
                                    <td>
                                        <?php
                                        $status_options = ['Hadir', 'Sakit', 'Izin', 'Alpha'];
                                        foreach ($status_options as $opt) {
                                            $checked = ($status == $opt) ? 'checked' : '';
                                            $extra_class = ($opt == 'Hadir') ? 'radio-hadir' : '';
                                            echo "
                                                <div class='form-check form-check-inline'>
                                                    <input class='form-check-input $extra_class' type='radio' name='status[$siswa[id_siswa]]' value='$opt' $checked>
                                                    <label class='form-check-label'>$opt</label>
                                                </div>";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <input type="text" name="keterangan[<?= $siswa['id_siswa']; ?>]" class="form-control" value="<?= htmlspecialchars($keterangan); ?>">
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <button type="submit" name="simpan_absensi" class="btn btn-primary btn-lg btn-block">
                    <i class="fas fa-save"></i> Simpan Absensi Hari Ini
                </button>

            </form>
        </div>
    </div>

    <!-- CARD: LAPORAN ALPHA -->
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">
                <i class="fas fa-exclamation-triangle"></i>
                Laporan Siswa Tidak Hadir (Alpha)
            </h6>
        </div>
        <div class="card-body">
            <p>Daftar siswa yang tidak hadir tanpa keterangan (Alpha) hari ini (<?= strftime('%A, %d %B %Y'); ?>). <br>
                Silakan klik tombol <strong>"Kirim WA"</strong> untuk memberitahu wali murid.</p>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th>Nama Siswa</th>
                            <th>Nama Wali</th>
                            <th>No. HP Wali</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql_alpha = mysqli_query($koneksi, "
                            SELECT tb_siswa.nama_siswa, tb_siswa.nama_wali, tb_siswa.nohp_wali 
                            FROM tb_kehadiran
                            JOIN tb_siswa ON tb_kehadiran.id_siswa = tb_siswa.id_siswa
                            WHERE tb_kehadiran.id_kelas = '$id_kelas_wali'
                            AND tb_kehadiran.tanggal = '$tanggal_hari_ini'
                            AND tb_kehadiran.status = 'Alpha'
                        ");

                        if (mysqli_num_rows($sql_alpha) > 0) {
                            while ($s = mysqli_fetch_array($sql_alpha)) {
                                $nama_siswa_wa = $s['nama_siswa'];
                                $nama_wali_wa = $s['nama_wali'];
                                $nohp_wali_wa = $s['nohp_wali'];

                                if (substr($nohp_wali_wa, 0, 1) == "0") {
                                    $nohp_wali_wa = "62" . substr($nohp_wali_wa, 1);
                                }

                                $pesan_wa = "Yth. Bapak/Ibu $nama_wali_wa, wali murid dari ananda $nama_siswa_wa,%0A%0AKami informasikan bahwa pada hari ini, " . strftime('%A, %d %B %Y') . ", ananda $nama_siswa_wa tidak hadir di sekolah tanpa keterangan (Alpha).%0A%0AMohon konfirmasinya terkait ketidakhadiran ananda.%0A%0ATerima kasih.%0A%0AHormat kami,%0A$nama_guru%0AWali Kelas $nama_kelas";

                                $link_wa = "https://api.whatsapp.com/send?phone=$nohp_wali_wa&text=$pesan_wa";
                        ?>
                                <tr>
                                    <td><?= htmlspecialchars($s['nama_siswa']); ?></td>
                                    <td><?= htmlspecialchars($s['nama_wali']); ?></td>
                                    <td><?= htmlspecialchars($s['nohp_wali']); ?></td>
                                    <td class="text-center">
                                        <?php if (!empty($s['nohp_wali'])) : ?>
                                            <a href="<?= $link_wa; ?>" target="_blank" class="btn btn-success btn-sm">
                                                <i class="fab fa-whatsapp"></i> Kirim WA
                                            </a>
                                        <?php else : ?>
                                            <span class="badge badge-warning">No. HP kosong</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='4' class='text-center'>✅ Alhamdulillah, semua siswa hadir atau sudah ada keterangan.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php
} // Penutup if-else
?>