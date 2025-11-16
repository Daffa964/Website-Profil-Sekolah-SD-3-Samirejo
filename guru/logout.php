<?php
session_start();

// Hapus semua session guru
unset($_SESSION['Guru']);
unset($_SESSION['NamaGuru']);
unset($_SESSION['IDKelasWali']);

// Hancurkan session dan arahkan ke halaman login guru
session_destroy();
echo "<script>alert('Anda telah logout.'); window.location='../login_guru.php';</script>";
exit();
?>