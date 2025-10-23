<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11.x-red?style=flat-square" alt="Laravel Version">
  <img src="https://img.shields.io/badge/Database-SQLite-blue?style=flat-square" alt="Database">
  <img src="https://img.shields.io/badge/Status-Completed-green?style=flat-square" alt="Status">
</p>

---

# 🏝️ Decision Support System: Rekomendasi Wisata di Bali

**Decision Support System (DSS) Rekomendasi Wisata di Bali** adalah aplikasi berbasis web sederhana yang dikembangkan menggunakan **Laravel** dan **SQLite**.  
Sistem ini bertujuan membantu pengguna menentukan rekomendasi tempat wisata di Bali berdasarkan preferensi pribadi seperti jenis wisata, suasana, aktivitas air, lokasi pantai, dan minat kuliner.

---

## 🎯 Tujuan Proyek

Memberikan dukungan keputusan yang membantu wisatawan dalam memilih destinasi wisata yang sesuai dengan minat dan karakteristik mereka.  
Proyek ini juga menjadi implementasi konsep _Knowledge-Based Decision Support System_ dengan mengacu pada pengetahuan seorang pakar di bidang pariwisata.

---

## 🧠 Pakar dan Akuisisi Ilmu

**Nama Pakar:**  
**Ni Luh Putu Yuliani, S.Par., M.Par.**  
Dosen Pariwisata – Universitas Udayana

**Sumber Pengetahuan:**  
Beliau mengklasifikasikan berbagai destinasi wisata di Bali berdasarkan preferensi wisatawan — meliputi wisata alam, budaya, kuliner, petualangan, dan relaksasi.  
Pengetahuan tersebut diadaptasi menjadi aturan (_rule-based_) dalam logika sistem.

---

## 🧩 Fitur Utama

-   🧭 Form berisi 5 pertanyaan untuk mengetahui preferensi wisata pengguna
-   🤖 Logika pengambilan keputusan berbasis aturan sederhana (_rule-based system_)
-   🗃️ Penyimpanan data jawaban dan hasil rekomendasi menggunakan SQLite
-   📊 Tampilan hasil rekomendasi disertai nama pakar sumber pengetahuan
-   🎨 Desain responsif menggunakan Tailwind CSS

---

## 🗺️ Alur Sistem

1. Pengguna membuka halaman utama dan mengisi 5 pertanyaan singkat.
2. Sistem memproses jawaban menggunakan aturan keputusan (if–else rule).
3. Hasil rekomendasi wisata akan ditampilkan berdasarkan preferensi.
4. Data pengguna dan hasil rekomendasi otomatis disimpan ke database.

---

## 💻 Teknologi yang Digunakan

| Komponen  | Teknologi                          |
| --------- | ---------------------------------- |
| Framework | Laravel 11                         |
| Database  | SQLite (default Laravel)           |
| Frontend  | Tailwind CSS                       |
| Bahasa    | PHP 8+                             |
| Tipe DSS  | Rule-Based Decision Support System |

---
