<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_guru WHERE id_guru='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

<div class="container mt-3">
    <div class="card">
        <h5 class="card-header text-center">Edit Data Guru</h5>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Guru</label>
                            <input type="hidden" class="form-control" name="id_guru" value="<?= $d['id_guru']; ?>">
                            <input type="text" class="form-control" name="nama_guru" value="<?= $d['nama_guru']; ?>">
                        </div>
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="number" class="form-control" name="nip" value="<?= $d['nip']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" value="<?= $d['tempat_lahir']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" value="<?= $d['tgl_lahir']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label><br>
                            <label><input type="radio" name="jk" value="lk" <?php if ($d['jk'] == 'lk') echo 'checked'; ?>> Laki-Laki</label>
                            <label><input type="radio" name="jk" value="pr" <?php if ($d['jk'] == 'pr') echo 'checked'; ?>> Perempuan</label>
                        </div>

                        <h4>Data Akun (Untuk Login Guru)</h4>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?= $d['username']; ?>" placeholder="Masukkan Username">
                        </div>

                        <div class="form-group">
                            <label>Password (Kosongkan jika tidak ingin mengubah)</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Wali Kelas Untuk</label>
                            <select name="id_kelas" class="form-control">
                                <option value="">-- Bukan Wali Kelas --</option>
                                <?php
                                $sql_kelas = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
                                while ($k = mysqli_fetch_array($sql_kelas)) {
                                    $selected = ($d['id_kelas'] == $k['id_kelas']) ? 'selected' : '';
                                    echo "<option value='$k[id_kelas]' $selected>$k[kelas]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label>No HP</label>
                            <input type="number" class="form-control" name="nohp" value="<?= $d['nohp']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="<?= $d['email']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" value="<?= $d['jabatan']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Golongan</label>
                            <input type="text" class="form-control" name="golongan" value="<?= $d['golongan']; ?>">
                        </div>
                        <div class="form-group">
                            <label>NUPTK</label>
                            <input type="text" class="form-control" name="nuptk" value="<?= $d['nuptk']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input name="foto" type="file" class="form-control">
                            <small>Foto sekarang: <b><?= $d['foto']; ?></b></small>
                        </div>
                    </div>
                </div>

                <button name="updateGuru" type="submit" class="btn btn-success mr-2">Simpan</button>
                <?php $url = htmlspecialchars($_SERVER['HTTP_REFERER']); ?>
                <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
                </form>
            </div>
        </div>
    </div>

<?php
if (isset($_POST['updateGuru'])) {
    // Ambil data baru
    $id = $_POST['id_guru'];
    $nip = mysqli_real_escape_string($koneksi, $_POST['nip']);
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama_guru']);
    $tempat = mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']);
    $tgl = mysqli_real_escape_string($koneksi, $_POST['tgl_lahir']);
    $jk = mysqli_real_escape_string($koneksi, $_POST['jk']);
    $nohp = mysqli_real_escape_string($koneksi, $_POST['nohp']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $jabatan = mysqli_real_escape_string($koneksi, $_POST['jabatan']);
    $gol = mysqli_real_escape_string($koneksi, $_POST['golongan']);
    $nuptk = mysqli_real_escape_string($koneksi, $_POST['nuptk']);
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $id_kelas = $_POST['id_kelas'];
    $id_kelas_sql = empty($id_kelas) ? "NULL" : "'$id_kelas'";

    // Cek apakah password diisi
    if (!empty($_POST['password'])) {
        $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $password_query = ", password = '$password_hash'";
    } else {
        $password_query = ""; // jangan ubah password
    }

    // Jika upload foto baru
    $gambar = @$_FILES['foto']['name'];
    if (!empty($gambar)) {
        move_uploaded_file($_FILES['foto']['tmp_name'], "../assets/sumber/img/guru/$gambar");
        $foto_query = ", foto = '$gambar'";
    } else {
        $foto_query = "";
    }

    // Update data guru
    $query = "UPDATE tb_guru SET
        nip = '$nip',
        nama_guru = '$nama',
        username = '$username',
        tempat_lahir = '$tempat',
        tgl_lahir = '$tgl',
        jk = '$jk',
        nohp = '$nohp',
        email = '$email',
        jabatan = '$jabatan',
        golongan = '$gol',
        nuptk = '$nuptk',
        id_kelas = $id_kelas_sql
        $password_query
        $foto_query
        WHERE id_guru = '$id'";

    $updateGuru = mysqli_query($koneksi, $query);

    if ($updateGuru) {
        echo "<script>
            alert('Data Berhasil diperbarui!');
            window.location='?page=guru';
        </script>";
    } else {
        echo "<script>
            alert('Gagal memperbarui data: " . mysqli_error($koneksi) . "');
        </script>";
    }
}
?>

<?php } // end while ?>
</body>
</html>
