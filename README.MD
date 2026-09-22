
# Product Information System

## Deskripsi
Product Information System adalah aplikasi sederhana berbasis PHP
yang digunakan untuk menampilkan informasi produk dan mengelola
perhitungan nilai aset stok.

Project ini dibuat sebagai Mini Project 1 untuk menerapkan konsep
arsitektur tiga layer, yaitu Data Layer, Processing Layer, dan
Presentation Layer.

## Tujuan
Membuat struktur sistem informasi produk yang terorganisir
dengan memisahkan data, proses pengolahan, dan tampilan.

## Teknologi
- PHP
- HTML
- CSS
- XAMPP
- Visual Studio Code

## Struktur Folder
Produk PW/
├── products.php
├── functions.php
├── index.php
└── README.md

## Fitur
1. Menampilkan data produk.
2. Menyimpan data menggunakan array multidimensi.
3. Menghitung total nilai aset stok.
4. Menampilkan status stok aman dan stok kritis.
5. Memberikan warna merah muda pada produk dengan stok
   kurang dari 3.

### Arsitektur Sistem

### 1. Data Layer
File: products.php

Berfungsi untuk menyimpan data produk berupa ID, nama,
kategori, harga, stok, dan deskripsi.

### 2. Processing Layer
File: functions.php

Berisi fungsi hitungTotalNilaiStok() untuk menghitung total
nilai aset stok dan fungsi isStokKritis() untuk memeriksa
stok produk.

### 3. Presentation Layer
File: index.php

Berfungsi menggabungkan file menggunakan require_once
dan menampilkan data produk ke dalam tabel HTML
menggunakan perulangan foreach.

## Cara Menjalankan Project
1. Install dan buka XAMPP.
2. Aktifkan Apache.
3. Simpan folder project di dalam htdocs.
4. Buka browser.
5. Akses alamat berikut:

   http://localhost/Produk%20PW/

## Contoh Perhitungan
Total nilai aset stok dihitung dengan rumus:

Nilai Aset = Harga Produk x Jumlah Stok

Total nilai aset dari data produk yang tersedia adalah
Rp44.000.000.

## Pengembang
Nama: [Juvita Fayola]
NIM: [250180138]
Mata Kuliah: [Pemograman Web]