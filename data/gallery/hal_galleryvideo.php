<main id="main">
    <section id="breadcrumbs" class="breadcrumbs" data-aos="fade-down">
        <div class="container">
            <ol>
                <li><a href="index.php">Home</a></li>
                <li>Galeri Video</li>
            </ol>
            <h2>Galeri Video</h2>
        </div>
    </section><section id="gallery-video" class="gallery-video">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Galeri Video Sekolah</h2>
                <p>Dokumentasi berbagai kegiatan sekolah dalam format video.</p>
            </div>

            <div class="row">
                <?php
                // Query mengambil data video (jenis = '2')
                $sql = mysqli_query($koneksi, "SELECT * FROM tb_gallery 
                                            WHERE jenis = '2' 
                                            ORDER BY id_gallery DESC");
                
                if (mysqli_num_rows($sql) == 0) {
                    echo "<div class='col-12 text-center'><p>Belum ada video di galeri.</p></div>";
                }

                while ($data = mysqli_fetch_array($sql)) {
                    // Ambil link youtube dari database
                    $link_youtube = $data['video'];
                    $video_id = '';
                    
                    // Fungsi regex untuk mengekstrak Video ID dari berbagai format link YouTube
                    // (Menangani: youtu.be/ID, watch?v=ID, /embed/ID)
                    if (preg_match('/(watch\?v=|\/embed\/|\.be\/)([a-zA-Z0-9\-_]+)/', $link_youtube, $matches)) {
                        $video_id = $matches[2];
                    }
                    
                    // Buat URL embed yang valid
                    $embed_url = 'https://www.youtube.com/embed/' . $video_id;
                ?>

                    <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="video-item card shadow-sm h-100">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" 
                                        src="<?= $embed_url; ?>" 
                                        title="YouTube video player" 
                                        frameborder="0" 
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                        allowfullscreen>
                                </iframe>
                            </div>
                            
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($data['keterangan']); ?></h5>
                            </div>
                        </div>
                    </div>

                <?php
                } // Penutup while loop
                ?>
            </div> </div>
    </section></main><style>
.embed-responsive {
    position: relative;
    display: block;
    width: 100%;
    padding: 0;
    overflow: hidden;
}
.embed-responsive::before {
    display: block;
    content: "";
}
.embed-responsive .embed-responsive-item,
.embed-responsive embed,
.embed-responsive iframe,
.embed-responsive object,
.embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}
.embed-responsive-16by9::before {
    padding-top: 56.25%;
}
</style>