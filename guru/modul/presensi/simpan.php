<?php
// Mulai session dan panggil koneksi
session_start();
include '../../../config/koneksi.php'; // Perhatikan path-nya (keluar 3 folder)

// Cek apakah guru sudah login
if (empty($_SESSION['Guru'])) {
    die("Akses dilarang. Silakan login terlebih dahulu.");
}

// Cek apakah tombol simpan ditekan
if (isset($_POST['simpan_absensi'])) {

    // Ambil data dari SESSIONS
    $id_guru = $_SESSION['Guru'];

    // Ambil data dari form (data tersembunyi)
    $id_kelas = $_POST['id_kelas'];
    $tanggal = $_POST['tanggal'];

    // Ambil data array dari form
    $id_siswa_array = $_POST['id_siswa']; // Ini array ID siswa
    $status_array = $_POST['status']; // Ini array asosiatif [id_siswa => status]
    $keterangan_array = $_POST['keterangan']; // Ini array asosiatif [id_siswa => keterangan]

    $berhasil = 0;
    $gagal = 0;

    // Loop sebanyak jumlah siswa yang dikirim
    foreach ($id_siswa_array as $id_siswa) {

        // Cek apakah status untuk siswa ini ada (sudah dicentang)?
        if (isset($status_array[$id_siswa])) {
            // Jika ada, gunakan status itu
            $status = mysqli_real_escape_string($koneksi, $status_array[$id_siswa]);
        } else {
            // Jika guru lupa mencentang, otomatis set ke "Alpha"
            $status = 'Alpha';
        }

        // Ambil keterangan (ini aman jika kosong)
        $keterangan = mysqli_real_escape_string($koneksi, $keterangan_array[$id_siswa]);

        // Query (sisanya SAMA)
        $query = "INSERT INTO tb_kehadiran (id_siswa, id_kelas, id_guru, tanggal, status, keterangan) 
              VALUES ('$id_siswa', '$id_kelas', '$id_guru', '$tanggal', '$status', '$keterangan')
              ON DUPLICATE KEY UPDATE 
              status = '$status', keterangan = '$keterangan', id_guru = '$id_guru'";

        $sql = mysqli_query($koneksi, $query);

        if ($sql) {
            $berhasil++;
        } else {
            $gagal++;
        }
    }

    // Setelah selesai loop, kembalikan ke halaman absensi dengan pesan
    echo "
    <script>
        alert('Absensi berhasil disimpan! Data Berhasil: $berhasil. Data Gagal: $gagal.');
        window.location='../../index.php?page=absensi';
    </script>
    ";
} else {
    // Jika file diakses tanpa menekan tombol
    header('Location: ../../index.php?page=absensi');
    exit();
}
