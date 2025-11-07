<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="section-title">
            <h2>Gallery Video</h2>
            <p>Dokumentasi Kegiatan SDN 3 Samirejo</p>
        </div>
        <div class="row portfolio-container">
            <?php
            $fetchVideos = mysqli_query($koneksi, "SELECT * FROM tb_gallery WHERE jenis='2'");
            while ($row = mysqli_fetch_assoc($fetchVideos)) {
            ?>
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap text-center">
                        <video src="assets/sumber/img/gallery/video/<?= $row['video'] ?>" controls width="100%" height="320px"></video>
                        <p><?= htmlspecialchars($row['keterangan']) ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
