<main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="index.php">Home</a></li>
                <li>Cek Absensi Siswa</li>
            </ol>
            <h2>Portal Wali Murid - Cek Absensi</h2>
        </div>
    </section><section class="inner-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h3 class="text-center mb-4">Cek Absensi Siswa</h3>
                            <p class="text-center">Silakan masukkan Nomor Induk Siswa (NIS) dan Nomor HP Wali Murid yang terdaftar untuk melihat rekap absensi.</p>
                            
                            <form action="index.php?page=cek-login-wali" method="POST">
                                <div class="form-group mb-3">
                                    <label for="nis">Nomor Induk Siswa (NIS)</label>
                                    <input type="text" class="form-control" name="nis" id="nis" placeholder="Masukkan NIS" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="nohp_wali">Nomor HP Wali (Contoh: 628...)</label>
                                    <input type="text" class="form-control" name="nohp_wali" id="nohp_wali" placeholder="Masukkan No. HP Anda" required>
                                </div>
                                <button type="submit" name="login_wali" class="btn btn-primary w-100">
                                    <i class="fas fa-search"></i> Cek Absensi
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>