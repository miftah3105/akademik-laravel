# Sistem Informasi Mahasiswa

Website akademik sederhana untuk mengelola data mahasiswa, dosen, dan program studi Jurusan Teknologi Informasi. Aplikasi ini dibuat menggunakan Laravel dan Bootstrap dengan tampilan dashboard kampus modern bernuansa biru.

## Identitas Pembuat

- Nama: Miftahul Azzahra
- NIM: 2411081014
- Kelas: TRPL 2B

## Fitur Utama

- Dashboard/Home dengan hero section modern.
- CRUD data mahasiswa.
- CRUD data dosen.
- Halaman daftar program studi.
- Pencarian data mahasiswa dan dosen.
- Navbar aktif sesuai halaman yang dibuka.
- Tampilan responsif menggunakan Bootstrap.

## Teknologi

- Laravel 13
- PHP 8.3+
- Bootstrap 5
- Bootstrap Icons
- Vite
- MySQL/SQLite sesuai konfigurasi `.env`

## Halaman Aplikasi

- `/` - Home
- `/mahasiswa` - Daftar mahasiswa
- `/mahasiswa/create` - Tambah mahasiswa
- `/dosen` - Daftar dosen
- `/dosen/create` - Tambah dosen
- `/prodi` - Daftar program studi
- `/search?q=keyword` - Hasil pencarian

## Cara Menjalankan

1. Install dependency PHP:

```bash
composer install
```

2. Install dependency frontend:

```bash
npm install
```

3. Salin file environment:

```bash
cp .env.example .env
```

4. Generate application key:

```bash
php artisan key:generate
```

5. Atur koneksi database di file `.env`, lalu jalankan migrasi:

```bash
php artisan migrate
```

6. Jalankan server:

```bash
php artisan serve
```

7. Buka aplikasi di browser:

```text
http://127.0.0.1:8000
```

## Struktur Data

### Mahasiswa

Data mahasiswa mencakup NIM, nama lengkap, tempat lahir, tanggal lahir, email, program studi, dan alamat.

### Dosen

Data dosen mencakup NIK, nama, email, nomor telepon, program studi, dan alamat.

## Tampilan

Desain frontend menggunakan gaya dashboard kampus modern:

- Warna utama biru.
- Navbar gradient dengan logo akademik.
- Card rounded dengan shadow lembut.
- Button dengan hover effect.
- Icon modern dari Bootstrap Icons.
- Layout responsif untuk desktop dan mobile.

## Catatan

Project ini dibuat untuk kebutuhan pembelajaran pemrograman web menggunakan Laravel.
