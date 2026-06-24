# SIAKAD — Sistem Informasi Akademik

Aplikasi web berbasis **Laravel** yang mensimulasikan Sistem Informasi Akademik (SIAKAD) sederhana. Dibangun sebagai Tugas Besar Mata Kuliah Web II — Universitas Suryakancana Cianjur.

---

## Teknologi yang Digunakan

- **Framework:** Laravel 12
- **Autentikasi:** Laravel Breeze
- **Role & Permission:** Spatie Laravel Permission
- **Frontend:** Bootstrap 5
- **Database:** MySQL
- **PDF Export:** Laravel DomPDF
- **Dropdown Search:** Select2

---

## Fitur Utama

### Autentikasi
- Login menggunakan **Username** dan **Password**
- 2 Role: **Admin** dan **Mahasiswa**
- Proteksi halaman berdasarkan role

### Admin
- Kelola data **Dosen** (CRUD)
- Kelola data **Mahasiswa** (CRUD) — akun login mahasiswa dibuat otomatis
- Kelola data **Mata Kuliah** (CRUD)
- Kelola data **Jadwal Perkuliahan** (CRUD) — dengan validasi konflik jadwal
- Pencarian data di semua halaman
- Pagination di semua tabel

### Mahasiswa
- Melihat **Jadwal Perkuliahan**
- Mengelola **KRS** (Kartu Rencana Studi):
  - Ambil mata kuliah
  - Drop mata kuliah
  - Batas maksimal **24 SKS**
  - Export KRS ke **PDF**

## Akses Apilikasi URL : https://rommy.ifalgorithm24.web.id

## Akun Default

| Role | Username | Password |
|---|---|---|
| Admin | `admin` | `password` |
| Mahasiswa | NPM mahasiswa | `password` |

## Informasi Pengembang

| | |
|---|---|
| **Nama** | M.Rommy Arianugraha |
| **NPM** | 5520124014 |
| **Kelas** | IF A 24 |
| **Mata Kuliah** | Pemrograman Web II (IF45123) |
| **Dosen** | Lalan Jaelani, ST., M.Kom |
| **Universitas** | Universitas Suryakancana Cianjur |
