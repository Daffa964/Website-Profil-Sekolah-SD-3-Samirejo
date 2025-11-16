<?php
// Proses Simpan Link YouTube
if (isset($_POST['save'])) {
    $keterangan = mysqli_real_escape_string($koneksi, $_POST['keterangan']);
    
    // Ambil link video dari form
    $link_video = mysqli_real_escape_string($koneksi, $_POST['video_link']);

    // Query INSERT ke database
    // Kita simpan LINK-nya di kolom 'video', dan 'foto' kita set ke '0'
    $sql = mysqli_query($koneksi, "INSERT INTO tb_gallery (keterangan, jenis, foto, video) 
                            VALUES ('$keterangan', '2', '0', '$link_video')");

    if ($sql) {
        echo "
        <script>
            alert('Data Video YouTube Berhasil Disimpan');
            window.location='?page=galery';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Gagal Menyimpan Data. Error: " . mysqli_error($koneksi) . "');
            window.location='?page=galery&act=addvideo';
        </script>
        ";
    }
}
?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Upload Video Baru</strong>
            </div>
            <div class="card-body card-block">
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="keterangan" class="form-control-label">Keterangan Video</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="keterangan" id="keterangan" rows="4" placeholder="Keterangan singkat video..." class="form-control" required></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="video_link" class="form-control-label">Link Video YouTube</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="video_link" name="video_link" placeholder="Contoh: https://youtu.be/O5hac_3mZKg" class="form-control" required>
                            <small class="form-text text-muted">
                                Salin link dari YouTube (bisa link `youtu.be` atau `youtube.com/watch?v=...`)
                                <br>
                                <b>PENTING:</b> Pastikan visibilitas video di YouTube adalah <b>Unlisted (Tidak Publik)</b> atau <b>Public</b>. Jangan di-set Private.
                            </small>
                        </div>
                    </div>
                    <hr>
                    <button type="submit" name="save" class="btn btn-primary">
                        <i class="fa fa-save"></i> Simpan Video
                    </button>
                    <a href="?page=galery" class="btn btn-danger">
                        <i class="fa fa-times"></i> Batal
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>