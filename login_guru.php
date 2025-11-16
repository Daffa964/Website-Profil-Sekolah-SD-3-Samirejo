<?php
session_start();
include 'config/koneksi.php'; // Path ini sudah benar

// Query untuk mengambil logo sekolah (yang hilang di kode Anda)
$oke = mysqli_query($koneksi, "SELECT * FROM tb_sekolah LIMIT 1");
$oke1 = mysqli_fetch_array($oke);

// --- INI LOGIKA LOGIN GURU (YANG BENAR) ---
if (isset($_POST['login_guru'])) { // Saya ganti namanya ke 'login_guru' agar jelas
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    $sql = mysqli_query($koneksi, "SELECT * FROM tb_guru WHERE username = '$username'");
    
    if (mysqli_num_rows($sql) > 0) {
        $data = mysqli_fetch_array($sql);
        
        // Verifikasi password yang di-hash
        if (password_verify($password, $data['password'])) {
            
            // Login sukses, buat SESSIONS
            $_SESSION['Guru'] = $data['id_guru'];
            $_SESSION['NamaGuru'] = $data['nama_guru'];
            $_SESSION['IDKelasWali'] = $data['id_kelas']; // PENTING untuk absensi
            
            // Arahkan ke dashboard guru
            header('Location: guru/index.php');
            exit();

        } else {
            // Password salah
            echo "<script>alert('Username atau Password salah!'); window.location='login_guru.php';</script>";
        }
    } else {
        // Username tidak ditemukan
        echo "<script>alert('Username atau Password salah!'); window.location='login_guru.php';</script>";
    }
}
// --- BATAS LOGIKA LOGIN GURU ---
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Guru - <?= $oke1['nama_sekolah'] ?></title> <link rel="shortcut icon" type="image/png" href="assets/sumber/img/app/<?= $oke1['foto_logo'] ?>" />
    
    <link href="assets/assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="assets/assets2/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<style>
    body {
        background-image: url('assets/sumber/img/bg/bgadmin.jpg');
    }
</style>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card o-hidden border-0 shadow-lg my-5 ">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="assets/sumber/img/app/<?= $oke1['foto_logo'] ?>" alt="Logo" style="width: 80px; height: 80px; margin-bottom: 15px;">
                                        <h1 class="h4 text-gray-900 mb-4">Login Wali Kelas</h1>
                                    </div>
                                    
                                    <form method="POST" action="login_guru.php"> 
                                        <div class="form-group">
                                            <input class="form-control py-4 rounded-pill" type="text" name="username" placeholder="Masukkan Username" required />
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control py-4 rounded-pill" type="password" name="password" placeholder="Masukkan Password" required />
                                        </div>

                                        <hr>
                                        <button type="submit" value="LOGIN" name="login_guru" class="btn btn-primary btn-lg btn-block rounded-pill">Login</button>
                                        
                                        <div class="text-center mt-3">
                                            <a href="login.php">Login sebagai Admin</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/assets2/vendor/jquery/jquery.min.js"></script>
    <script src="assets/assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/assets2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="assets/assets2/js/sb-admin-2.min.js"></script>

</body>

</html>