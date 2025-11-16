# Sistem Informasi Profil Sekolah SDN 3 Samirejo

## Deskripsi Sistem

Sistem Informasi Profil Sekolah SDN 3 Samirejo adalah sebuah aplikasi web berbasis PHP yang dirancang untuk menyajikan informasi profil sekolah, data pendidik dan tenaga kependidikan, informasi akademik, serta kegiatan sekolah. Sistem ini digunakan sebagai media informasi resmi SDN 3 Samirejo Kudus untuk siswa, orang tua, dan masyarakat umum.

Sistem ini terdiri dari dua bagian utama:
- **Frontend Website**: Halaman publik yang dapat diakses oleh pengunjung untuk melihat profil sekolah, berita, informasi, dan data sekolah
- **Backend Admin**: Sistem manajemen yang dapat digunakan oleh administrator untuk mengelola konten situs

## Fitur Utama

### Frontend (Halaman Publik)
- Profil Sekolah (Visi, Misi, Sejarah, Akreditasi, Kurikulum, Struktur Organisasi, Sarana Prasarana)
- Data Guru dan Tenaga Kependidikan
- Data Siswa dan Alumni
- Informasi Sekolah (Berita dan Pengumuman)
- Galeri Foto dan Video
- Fasilitas Sekolah
- Ekstrakurikuler
- Buku Tamu
- Portal Wali Murid
- Fitur Cek Absensi Siswa

### Backend (Sistem Admin)
- Dashboard Admin
- Manajemen Data Guru
- Manajemen Data Siswa
- Manajemen Data Alumni
- Manajemen Kelas
- Manajemen Fasilitas
- Manajemen Sarana Prasarana
- Manajemen Informasi Sekolah (Berita & Pengumuman)
- Manajemen Profil Sekolah
- Manajemen Pendukung Sekolah (file dokumen)
- Manajemen Galeri
- Manajemen Ekstrakurikuler
- Manajemen Prestasi

## Teknologi yang Digunakan

- **Server Side**: PHP 8.0+
- **Database**: MySQL/MariaDB
- **Frontend Framework**: Bootstrap 4
- **Admin Template**: SB Admin 2
- **Library**: jQuery, DataTables
- **Server**: Apache (dengan Laragon/XAMPP)

## Struktur Database

Database sistem ini terdiri dari beberapa tabel utama:

- `tb_sekolah`: Informasi profil sekolah (nama, visi, misi, sejarah, logo, dll)
- `tb_admin`: Data administrator sistem
- `tb_guru`: Data guru dan tenaga pendidik
- `tb_siswa`: Data siswa aktif
- `tb_alumni`: Data alumni
- `tb_kelas`: Data kelas sekolah
- `tb_informasi`: Data berita dan pengumuman
- `tb_gallery`: Data galeri foto dan video
- `tb_fasilitas`: Data fasilitas sekolah
- `tb_saranaprasarana`: Data sarana dan prasarana
- `tb_ekstrakurikuler`: Data kegiatan ekstrakurikuler
- `tb_bukutamu`: Data buku tamu

## Kredensial Default

### Admin Login
- **Username**: admin
- **Password**: admin

## Instalasi

### Prasyarat
- PHP 8.0 atau lebih baru
- MySQL/MariaDB
- Web Server (Apache/Nginx)
- Composer (jika diperlukan)

### Langkah-langkah Instalasi

1. **Clone atau download repository**
   ```bash
   git clone https://github.com/username/Website-Profil-Sekolah-SD-3-Samirejo.git
   cd Website-Profil-Sekolah-SD-3-Samirejo
   ```

2. **Konfigurasi Database**
   - Buat database baru dengan nama `db_profilsekolah`
   - Import file SQL dari `database/db_profilsekolah.sql`

3. **Konfigurasi Koneksi Database**
   - Edit file `config/koneksi.php`
   - Sesuaikan konfigurasi:
     ```php
     $host = "localhost";
     $user = "root"; // username database
     $password = ""; // password database
     $dbname = "db_profilsekolah";
     ```

4. **Pengaturan Hak Akses**
   - Pastikan folder `assets/sumber/` dan file di dalamnya memiliki hak akses tulis (755/777)

5. **Akses Aplikasi**
   - Buka browser dan akses `http://localhost/nama_folder/`
   - Untuk masuk ke halaman admin: `http://localhost/nama_folder/admin/`

## Penggunaan

### Frontend (Pengunjung Umum)
1. Buka halaman utama website
2. Navigasi menggunakan menu atas untuk mengakses informasi sekolah
3. Gunakan fitur pencarian dan filter sesuai kebutuhan
4. Untuk menambahkan komentar di buku tamu, kunjungi menu Buku Tamu

### Backend (Administrator)
1. Akses halaman admin melalui `/admin/`
2. Login menggunakan kredensial yang telah disediakan
3. Gunakan menu sidebar untuk mengelola konten
4. Gunakan fitur CRUD untuk mengelola data

## Struktur File

```
├── admin/                 # Folder halaman admin
│   ├── index.php         # Dashboard admin
│   ├── home.php
│   ├── logout.php
│   └── modul/            # Modul-modul admin
│       ├── guru/
│       ├── siswa/
│       ├── informasi/
│       ├── profilSekolah/
│       └── dll/
├── assets/               # File statis (CSS, JS, Gambar)
│   ├── assets1/          # Template frontend
│   ├── assets2/          # Template admin
│   └── sumber/           # File upload
├── config/               # Konfigurasi sistem
│   └── koneksi.php       # Koneksi database
├── data/                 # Data dinamis frontend
│   ├── guru/
│   ├── siswa/
│   ├── alumni/
│   ├── pengumuman/
│   ├── gallery/
│   └── dll/
├── database/             # File database
│   └── db_profilsekolah.sql
├── index.php            # Halaman utama frontend
├── home.php             # Konten halaman beranda
├── login.php            # Halaman login pengguna
└── README.md
```

## Fitur Keamanan

- Sistem otentikasi untuk akses admin
- Validasi input pada formulir
- Proteksi SQL Injection dengan `mysqli_real_escape_string`
- Sistem session untuk manajemen login

## Hak Akses

- **Pengunjung Web**: Akses ke konten publik (profil, berita, galeri, dll)
- **Administrator**: Akses penuh ke sistem manajemen konten
- **Wali Murid**: Akses ke portal wali murid dan fitur cek absensi

## Customisasi

### Ganti Logo dan Identitas Sekolah
1. Upload logo baru ke folder `assets/sumber/img/app/`
2. Update informasi sekolah di halaman admin (Profil Sekolah)
3. Ganti file-file gambar utama sesuai kebutuhan

### Tambah Menu atau Halaman
- Modifikasi file `index.php` untuk menambah menu
- Tambahkan file halaman di folder `data/` sesuai kategori

## Troubleshooting

### Masalah Umum
1. **Koneksi Database Gagal**
   - Periksa konfigurasi pada `config/koneksi.php`
   - Pastikan database server berjalan

2. **Upload Gambar Bermasalah**
   - Periksa hak akses folder upload
   - Pastikan ukuran file tidak melebihi batas maksimal

3. **Halaman Admin Tidak Dapat Diakses**
   - Pastikan sudah login terlebih dahulu
   - Periksa session PHP

### Konfigurasi PHP
Pastikan PHP memiliki ekstensi berikut:
- mysqli
- gd (untuk manipulasi gambar)
- file_uploads (untuk upload file)

## Pengembangan Lebih Lanjut

Fitur yang dapat dikembangkan:
- Sistem akun guru dan wali murid
- Fitur pembayaran sekolah
- Sistem penilaian
- Sistem manajemen perpustakaan
- Integrasi media sosial
- Mobile responsive improvement
- Fitur chat untuk komunikasi

## Kontribusi

Jika Anda ingin berkontribusi pada pengembangan sistem ini:
1. Fork repository
2. Buat branch fitur (`git checkout -b fitur/AwesomeFeature`)
3. Commit perubahan (`git commit -m 'Tambah: FiturAwesome'`)
4. Push ke branch (`git push origin fitur/AwesomeFeature`)
5. Buat pull request

## Lisensi

Sistem ini dibuat untuk keperluan pendidikan dan bersifat open-source untuk penggunaan sekolah dasar. Tidak untuk diperjualbelikan.

## Penulis

Sistem Informasi Profil Sekolah SDN 3 Samirejo
- Developer: Pengembang Sistem
- Tahun: 2025
- Alamat: Jl. Kaliyitno Kulon No.370, Samirejo, Kec. Dawe, Kabupaten Kudus, Jawa Tengah 59353
- Email: sd3_samirejo@yahoo.co.id

## Catatan

- Sistem ini dirancang khusus untuk SDN 3 Samirejo dan dapat dimodifikasi sesuai kebutuhan sekolah lain
- Pastikan untuk backup database secara berkala
- Gunakan kredensial admin dengan bijak dan ganti password default setelah instalasi