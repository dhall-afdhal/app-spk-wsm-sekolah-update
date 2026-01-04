# 🎓 Sistem Pendukung Keputusan Penentuan Sekolah Terbaik di Kabupaten Bireuen Menggunakan Metode Weighted Sum Model (WSM)
---
<div align="center">
  🖼️ Dokumentasi Sistem <br><br>

| No | Judul Tampilan | Gambar | Deskripsi |
|----|---------------|--------|-----------|
| 1 | **Rumus Lengkap Perhitungan WSM (Excel)** | ![](https://raw.githubusercontent.com/dhall-afdhal/app-spk-wsm-sekolah-update/main/resources/img/exsel-full-rumus.png) | Menampilkan referensi rumus lengkap metode Weighted Sum Model (WSM) dalam bentuk Excel sebagai acuan perhitungan manual dan validasi sistem. |
| 2 | **Halaman Manajemen Kriteria** | ![](https://raw.githubusercontent.com/dhall-afdhal/app-spk-wsm-sekolah-update/main/resources/img/image.3.png) | Halaman untuk mengelola kriteria penilaian sekolah, termasuk bobot kriteria dan jenis kriteria (Benefit atau Cost) yang digunakan dalam metode WSM. |
| 3 | **Dashboard Sistem** | ![](https://raw.githubusercontent.com/dhall-afdhal/app-spk-wsm-sekolah-update/main/resources/img/image1.png) | Dashboard utama yang menyajikan ringkasan data sekolah, kriteria, serta akses cepat ke proses perhitungan dan hasil keputusan. |
| 4 | **Manajemen Data Sekolah** | ![](https://raw.githubusercontent.com/dhall-afdhal/app-spk-wsm-sekolah-update/main/resources/img/image2.png) | Fitur pengelolaan data sekolah sebagai alternatif keputusan, meliputi tambah, ubah, hapus, dan melihat daftar sekolah. |
| 5 | **Input Nilai Sekolah** | ![](https://raw.githubusercontent.com/dhall-afdhal/app-spk-wsm-sekolah-update/main/resources/img/image5.png) | Halaman input nilai setiap sekolah terhadap seluruh kriteria yang membentuk matriks keputusan dalam metode WSM. |
| 6 | **Hasil Perhitungan dan Ranking** | ![](https://raw.githubusercontent.com/dhall-afdhal/app-spk-wsm-sekolah-update/main/resources/img/image6.png) | Menampilkan hasil normalisasi, nilai preferensi (Vi), serta peringkat sekolah terbaik berdasarkan metode Weighted Sum Model (WSM). |

---
  <br><br>
  
  ![Laravel](https://img.shields.io/badge/Laravel-11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
  ![Bootstrap](https://img.shields.io/badge/Bootstrap-5-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
  ![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
</div>

## 📖 Tentang Sistem

**SPK WSM Sekolah** adalah aplikasi Sistem Pendukung Keputusan (SPK) berbasis web yang dirancang untuk membantu Dinas Pendidikan atau pengambil keputusan dalam menentukan sekolah terbaik di Kabupaten Bireuen secara objektif, transparan, dan terukur.

Aplikasi ini menerapkan metode **Weighted Sum Model (WSM)**, salah satu metode pengambilan keputusan multi-kriteria yang paling sederhana namun efektif. Metode ini bekerja dengan menjumlahkan nilai bobot ternormalisasi dari setiap kriteria untuk mendapatkan skor akhir (preferensi) bagi setiap alternatif (sekolah).

### 🎯 Tujuan Aplikasi
*   **Objektivitas:** Menghilangkan bias subjektif dalam penilaian sekolah.
*   **Efisiensi:** Mempercepat proses perhitungan data sekolah yang kompleks.
*   **Transparansi:** Menyajikan hasil perhitungan yang dapat dipertanggungjawabkan dengan rincian langkah perhitungan.

## 🚀 Fitur Utama

1.  **Dashboard Interaktif**
    *   Ringkasan statistik data (Jumlah Sekolah, Kriteria, User).
    *   Visualisasi grafik penilaian.
2.  **Manajemen Data Sekolah (Alternatif)**
    *   CRUD (Create, Read, Update, Delete) data sekolah.
    *   Informasi detail profil sekolah.
3.  **Manajemen Kriteria & Bobot**
    *   Pengaturan kriteria penilaian dinamis (bisa ditambah/ubah).
    *   Penentuan bobot persentase dan jenis atribut (Benefit/Cost).
4.  **Input Penilaian**
    *   Form penilaian sekolah berdasarkan kriteria yang telah ditentukan.
5.  **Perhitungan WSM Otomatis**
    *   **Normalisasi Matriks:** Konversi nilai ke skala 0-1.
    *   **Perhitungan Preferensi:** Perkalian nilai normalisasi dengan bobot.
    *   **Perangkingan:** Pengurutan otomatis dari nilai tertinggi ke terendah.
6.  **Laporan & Export**
    *   Cetak hasil perhitungan.
    *   Export ke **Excel (.xlsx)** lengkap dengan rumus aktif untuk verifikasi off-line.
7.  **Manajemen Pengguna**
    *   Sistem login aman (Auth).
    *   Pengelolaan profil admin.

## 🛠️ Teknologi yang Digunakan

Aplikasi ini dibangun menggunakan teknologi modern untuk menjamin performa dan kemudahan pengembangan:

*   **Backend Framework:** [Laravel 11](https://laravel.com) (PHP Modern Framework)
*   **Frontend Styles:** [Bootstrap 5](https://getbootstrap.com) & Custom CSS (Glassmorphism & Gradients)
*   **Database:** MySQL
*   **Templating:** Blade Engine
*   **Library Tambahan:**
    *   `maatwebsite/excel` (Untuk export Excel)
    *   `sweetalert2` (Notifikasi interaktif)
    *   `aos` (Animasi scroll)
    *   `chart.js` (Visualisasi data)

---

## 💼 Berminat dengan Versi Real / Pro?

Jika Anda tertarik untuk menggunakan **versi lengkap (Real Project)** dari aplikasi ini untuk implementasi nyata di instansi Anda, atau membutuhkan kustomisasi fitur khusus, silakan hubungi kami melalui email:

📧 **Email:** [dhaproductionengineering@gmail.com](mailto:dhaproductionengineering@gmail.com)

---

<div align="center">


**👨‍💻 Developer:** Afdhal

**🏢 Organization:** DHA Production

---

## 🪪 Lisensi

MIT License

Copyright (c) 2020-2026 Afdhal & DHA Production

---

<div align="center">

**⭐ Jika proyek ini membantu Anda, jangan lupa berikan Star! ⭐**  

Made with ❤️ by <a href="https://github.com/dhall-afdhal">Afdhal</a> | DHA Production

</div>

---
