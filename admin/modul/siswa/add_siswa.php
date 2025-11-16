<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Form Input Data Siswa</h5>
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label>NISN</label>
                    <input type="number" class="form-control" placeholder="Masukkan NISN Siswa" name="nisn" required>
                </div>
                <div class="form-group">
                    <label>NIS</label>
                    <input type="number" class="form-control" placeholder="Masukkan NIS Siswa" name="nis" required>
                </div>
                <div class="form-group">
                    <label>Nama Siswa</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Siswa" name="nama_siswa" required>
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="tempat_lahir" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" required>
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jk" value="lk" checked>
                        <label class="form-check-label">Laki-Laki</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="jk" value="pr">
                        <label class="form-check-label">Perempuan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat" required>
                </div>
                <div class="form-group">
                    <label>Nama Wali Murid</label>
                    <input type="text" name="nama_wali" class="form-control" placeholder="Masukan Nama Wali">
                </div>
                <div class="form-group">
                    <label>No. HP Wali (Format: 628...)</label>
                    <input type="text" name="nohp_wali" class="form-control" placeholder="Contoh: 628123456789">
                </div>
                <div class="form-group">
                    <label>Kelas Siswa</label>
                    <select class="form-control" name="id_kelas" required>
                        <option value=''>-- Pilih --</option>
                        <?php
                        $sqlKelas = mysqli_query($koneksi, "SELECT * FROM tb_kelas ORDER BY id_kelas DESC");
                        while ($kelas = mysqli_fetch_array($sqlKelas)) {
                            echo "<option value='{$kelas['id_kelas']}'>{$kelas['kelas']}</option>";
                        }
                        ?>
                    </select>
                </div>
                <button name="SaveSiswa" type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= htmlspecialchars($_SERVER['HTTP_REFERER']) ?>" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['SaveSiswa'])) {
    // Pastikan koneksi ke database sudah ada
    if (!$koneksi) {
        die("Koneksi ke database gagal: " . mysqli_connect_error());
    }

    // Ambil data dari form
    $nis = mysqli_real_escape_string($koneksi, $_POST['nis']);
    $nisn = mysqli_real_escape_string($koneksi, $_POST['nisn']);
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama_siswa']);
    $tempat = mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']);
    $tanggal = $_POST['tanggal_lahir'];  // Tidak perlu escape karena date format
    $jk = $_POST['jk']; // Hanya memiliki dua pilihan, aman langsung digunakan
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $nama_wali = mysqli_real_escape_string($koneksi, $_POST['nama_wali']);
    $nohp_wali = mysqli_real_escape_string($koneksi, $_POST['nohp_wali']);
    $kelas = $_POST['id_kelas'];

    // Query INSERT dengan kolom yang sesuai
    $query = "INSERT INTO tb_siswa (nis, nisn, nama_siswa, tempat_lahir, tanggal_lahir, jk, alamat, id_kelas) 
              VALUES ('$nis', '$nisn', '$nama', '$tempat', '$tanggal', '$jk', '$alamat', '$kelas')";

    // Eksekusi Query
    if (mysqli_query($koneksi, $query)) {
        echo "<script>
            alert('Data Berhasil Disimpan!');
            window.location='?page=siswa';
        </script>";
    } else {
        echo "<script>
            alert('Gagal menyimpan data: " . mysqli_error($koneksi) . "');
        </script>";
    }
}
?>