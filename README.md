# Sagitta

Tema WordPress kustom untuk [sagitta.my.id](https://sagitta.my.id), ruang editorial Benaya Johan Sagitta.

## Status

Milestone 1 sedang dikerjakan pada branch `feat/m1-theme-foundation`. Branch ini membangun fondasi tema klasik `Sagitta`; `main` tetap menjadi branch rilis sampai PR ditinjau dan di-merge.

Tema dibuat tanpa page builder atau tema jadi. WordPress inti, konfigurasi server, basis data, dan unggahan media tidak disimpan di repositori ini.

## Struktur tema

```text
assets/       CSS dan JavaScript tema
inc/          bootstrap dan fungsi tema
header.php    header dan navigasi utama
footer.php    footer global
front-page.php beranda editorial
index.php     template fallback
404.php       halaman tidak ditemukan
style.css     metadata tema WordPress
functions.php titik masuk fungsi tema
```

## Arah desain

- Dark luxury editorial
- Latar utama `#090A0F`
- Aksen emas `#D4AF37`
- Heading Cormorant Garamond
- Teks antarmuka Plus Jakarta Sans

## Batas proyek

- Jangan memodifikasi atau mem-fork inti WordPress.
- Jangan memakai page builder atau tema jadi.
- Jangan menambah plugin tanpa kebutuhan yang disetujui.
- Jangan commit `wp-config.php`, kredensial, token, dump basis data, atau unggahan pribadi.
- Tidak ada pendaftaran publik, toko, atau penyimpanan email pada tahap ini.
- Jangan mengarang biografi, kutipan, maupun karya.

## Berikutnya

1. Tinjau dan merge fondasi tema pada PR #1.
2. Aktifkan tema dan uji di WordPress.
3. Tambahkan model konten Karya dan Proyek setelah beranda stabil.
4. Ganti placeholder dengan konten yang telah disetujui.
