# CRUD Mahasiswa

Aplikasi manajemen data mahasiswa berbasis web menggunakan Laravel 12 dengan fitur CRUD lengkap, search, pagination, dan export data.

## Informasi Tugas

**Mata Kuliah:** Pemrograman Berbasis Framework  
**Institusi:** Sekolah Tinggi Teknologi Bontang  
**Nama:** Muhammad Ammar Al Farabi  
**NIM:** 202312056

## Deskripsi

Aplikasi CRUD Mahasiswa adalah sistem informasi sederhana untuk mengelola data mahasiswa dengan antarmuka yang modern dan responsif. Aplikasi ini dibangun menggunakan Laravel framework dengan Bootstrap 5 untuk tampilan UI.

## Fitur

- **Create** - Tambah data mahasiswa baru
- **Read** - Tampilkan daftar mahasiswa dengan pagination
- **Update** - Edit data mahasiswa yang sudah ada
- **Delete** - Hapus data mahasiswa
- **Search** - Pencarian berdasarkan nama, NIM, atau email
- **Pagination** - Opsi tampilan per halaman (4, 8, 12, 20)
- **Export PDF** - Unduh laporan dalam format PDF dengan desain modern
- **Export Excel** - Unduh data dalam format CSV

## Tech Stack

- **Framework:** Laravel 12.0
- **PHP:** 8.2+
- **Database:** SQLite
- **Frontend:** Bootstrap 5.3.2
- **PDF Generator:** DomPDF 3.1

## Requirements

- PHP >= 8.2
- Composer
- SQLite extension enabled

## Instalasi

1. Clone repository
```bash
git clone <repository-url>
cd crud-laravel-main
```

2. Install dependencies
```bash
composer install
```

3. Konfigurasi environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Buat database SQLite
```bash
touch database/database.sqlite
```

5. Jalankan migration
```bash
php artisan migrate
```

6. Jalankan aplikasi
```bash
php artisan serve
```

7. Akses aplikasi di browser
```
http://localhost:8000/mahasiswa
```

## Struktur Database

**Tabel: mahasiswas**

| Field | Type | Constraint |
|-------|------|------------|
| id | bigint | Primary Key |
| nama | string | Required |
| nim | string | Required, Unique |
| email | string | Required, Unique, Email |
| created_at | timestamp | Auto |
| updated_at | timestamp | Auto |

## Routing

| Method | URI | Action | Route Name |
|--------|-----|--------|------------|
| GET | /mahasiswa | index | mahasiswa.index |
| GET | /mahasiswa/create | create | mahasiswa.create |
| POST | /mahasiswa | store | mahasiswa.store |
| GET | /mahasiswa/{id}/edit | edit | mahasiswa.edit |
| PUT | /mahasiswa/{id} | update | mahasiswa.update |
| DELETE | /mahasiswa/{id} | destroy | mahasiswa.destroy |
| GET | /mahasiswa/pdf | generatePDF | mahasiswa.pdf |
| GET | /mahasiswa/export | exportExcel | mahasiswa.export |

## Validasi

- **Nama:** Wajib diisi
- **NIM:** Wajib diisi, harus unik
- **Email:** Wajib diisi, format email valid, harus unik

## Dependencies

```json
"require": {
    "php": "^8.2",
    "laravel/framework": "^12.0",
    "barryvdh/laravel-dompdf": "^3.1",
    "laravel/tinker": "^2.10.1"
}
```

## License

MIT License
