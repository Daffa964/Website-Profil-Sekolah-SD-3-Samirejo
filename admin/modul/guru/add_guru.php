<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Form Input Data Guru</h5>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="nama_guru">
                        </div>
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="number" class="form-control" placeholder="Masukkan NIP / NIK" name="nip">
                        </div>
                        <div class="form-group">
                            <label>NUPTK</label>
                            <input type="text" class="form-control" placeholder="Masukkan NUPTK" name="nuptk">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" name="tempat_lahir">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div class="radio">
                                <input type="radio" name="jk" <?php if (isset($jk) && $jk == "lk") echo "checked"; ?> value="lk">Laki-Laki
                            </div>
                            <div class="radio">
                                <input type="radio" name="jk" <?php if (isset($jk) && $jk == "pr") echo "checked"; ?> value="pr">Perempuan
                            </div>
                        </div>
                        <hr>
<h4>Data Akun (Untuk Login Guru)</h4>
<div class="form-group">
    <label>Username</label>
    <input type="text" name="username" class="form-control" placeholder="Masukan Username">
</div>

<div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control">
</div>

<div class="form-group">
    <label>Wali Kelas Untuk</label>
    <select name="id_kelas" class="form-control">
        <option value="">-- Bukan Wali Kelas --</option>
        <?php
        $sql_kelas = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
        while ($k = mysqli_fetch_array($sql_kelas)) {
            // Di file edit_guru.php, tambahkan seleksi ini:
            // $selected = ($data['id_kelas'] == $k['id_kelas']) ? 'selected' : '';
            // echo "<option value='$k[id_kelas]' $selected>$k[kelas]</option>";

            // Untuk file add_guru.php:
            echo "<option value='$k[id_kelas]'>$k[kelas]</option>";
        }
        ?>
    </select>
</div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>No HP</label>
                        <input type="number" class="form-control" placeholder="Masukkan Nomor HP" name="nohp">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Masukkan Email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Jabatan / Tugas Tambahan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Jabatan" name="jabatan">
                    </div>
                    <div class="form-group">
                        <label>Pangkat / Golongan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Golongan" name="golongan">
                    </div>

                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto">
                        <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                    </div>
                </div>
            </div>
            <button name="saveGuru" type="submit" class="btn btn-primary mr-2">Simpan</button>
            <?php
            $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
            ?>
            <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['saveGuru'])) {
    // Ambil data dari form
    $nip         = mysqli_real_escape_string($koneksi, $_POST['nip']);
    $guruname    = mysqli_real_escape_string($koneksi, $_POST['nama_guru']);
    $tgl         = mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir']);
    $tempat      = mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']);
    $jk          = mysqli_real_escape_string($koneksi, $_POST['jk']);
    $hp          = mysqli_real_escape_string($koneksi, $_POST['nohp']);
    $email       = mysqli_real_escape_string($koneksi, $_POST['email']);
    $jabatan     = mysqli_real_escape_string($koneksi, $_POST['jabatan']);
    $golongan    = mysqli_real_escape_string($koneksi, $_POST['golongan']);
    $nuptk       = mysqli_real_escape_string($koneksi, $_POST['nuptk']);

    // Ambil data akun
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $id_kelas = $_POST['id_kelas']; // bisa kosong
    if (empty($id_kelas)) {
        $id_kelas_sql = "NULL";
    } else {
        $id_kelas_sql = "'$id_kelas'";
    }

    // HASH password (jangan simpan polos!)
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Upload foto (jika ada)
    $sumber       = @$_FILES['foto']['tmp_name'];
    $target       = '../assets/sumber/img/guru/';
    $nama_gambar  = @$_FILES['foto']['name'];
    $pindah       = move_uploaded_file($sumber, $target . $nama_gambar);

    // Jalankan query INSERT baru
    $query = "INSERT INTO tb_guru 
        (nip, nama_guru, username, password, foto, tgl_lahir, tempat_lahir, jk, nohp, email, jabatan, golongan, nuptk, id_kelas)
        VALUES 
        ('$nip', '$guruname', '$username', '$password', '$nama_gambar', '$tgl', '$tempat', '$jk', '$hp', '$email', '$jabatan', '$golongan', '$nuptk', $id_kelas_sql)";
    
    $save = mysqli_query($koneksi, $query);

    if ($save) {
        echo "<script>
            alert('Data Berhasil disimpan!');
            window.location='?page=guru';
        </script>";
    } else {
        echo "<script>
            alert('Gagal menyimpan data: " . mysqli_error($koneksi) . "');
        </script>";
    }
}
?>
