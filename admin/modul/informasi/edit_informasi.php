<?php
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_informasi WHERE id_informasi='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <div class="container mt-3">
        <div class="card">
            <h5 class="card-header text-center">Form Edit Data informasi</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="hidden" class="form-control" name="id_informasi" value="<?= $d['id_informasi']; ?>">
                                <input type="text" class="form-control" name="judul_informasi" value="<?= $d['judul_informasi']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" name="tgl_informasi" value="<?= $d['tgl_informasi']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Isi</label>
                                <textarea class="ckeditor" name="isi_informasi" class="form-control" id="ckeditor" cols="30" rows="10">
                    <?= $d['isi_informasi'] ?>
                  </textarea>
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input name="foto" type="file" class="form-control" value="<?= $d['foto']; ?>">
                            </div>
                            <button name="updateInfo" type="submit" class="btn btn-success mr-2">Simpan</button>
                            <?php
                            $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                            ?>
                            <a href="<?= $url ?>" class="btn btn-danger mr-2">Batal</a>
                        </form>
                    </div>
                </div>
            </div>

            <?php

            if (isset($_POST['updateInfo'])) {

                // Escape semua input agar aman
                $id     = intval($_POST['id_informasi']);
                $judul  = mysqli_real_escape_string($koneksi, $_POST['judul_informasi']);
                $tgl    = mysqli_real_escape_string($koneksi, $_POST['tgl_informasi']);
                $isi    = mysqli_real_escape_string($koneksi, $_POST['isi_informasi']);

                // Upload foto jika ada
                $gambar = $_FILES['foto']['name'];
                if (!empty($gambar)) {
                    move_uploaded_file($_FILES['foto']['tmp_name'], "../assets/sumber/img/berita/$gambar");
                    mysqli_query($koneksi, "UPDATE tb_informasi SET foto='$gambar' WHERE id_informasi='$id'");
                }

                // UPDATE aman
                $updateInfo = mysqli_query($koneksi, "
        UPDATE tb_informasi SET 
            judul_informasi='$judul',
            tgl_informasi='$tgl',
            isi_informasi='$isi'
        WHERE id_informasi='$id'
    ");

                if ($updateInfo) {
                    echo "<script>
            alert('Data Berhasil diperbarui !');
            window.location='?page=berita';
        </script>";
                }
            }


            ?>

        <?php
    }
        ?>

        </body>

        </html>