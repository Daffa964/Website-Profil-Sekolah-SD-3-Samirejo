<?php
// Pastikan file ini di-include oleh index.php yang sudah punya koneksi.php
if (isset($_POST['login_wali'])) {

    $nis = mysqli_real_escape_string($koneksi, $_POST['nis']);
    $nohp_wali = mysqli_real_escape_string($koneksi, $_POST['nohp_wali']);

    // Cari siswa berdasarkan NIS dan No. HP Wali
    $sql = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE nis = '$nis' AND nohp_wali = '$nohp_wali'");
    
    if (mysqli_num_rows($sql) > 0) {
        $data = mysqli_fetch_array($sql);
        
        // Jika data cocok, buat session
        $_SESSION['ID_Siswa_Wali'] = $data['id_siswa'];
        $_SESSION['Nama_Siswa_Wali'] = $data['nama_siswa'];
        
        // Arahkan ke portal wali
        echo "
        <script>
            alert('Login Berhasil. Menampilkan data absensi...');
            window.location='index.php?page=portal-wali';
        </script>
        ";
    } else {
        // Jika data tidak cocok
        echo "
        <script>
            alert('Login Gagal! NIS dan/atau Nomor HP Wali tidak cocok. Silakan coba lagi.');
            window.location='index.php?page=cek-absensi';
        </script>
        ";
    }

} else {
    // Jika diakses langsung, tendang kembali
    // !!! INI BAGIAN YANG DIPERBAIKI !!!
    // Ganti header() dengan JavaScript redirect
    echo "
    <script>
        window.location='index.php?page=cek-absensi';
    </script>
    ";
    exit();
}
?>