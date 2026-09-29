# Sagitta

Tema WordPress kustom untuk situs editorial Sagitta.

## Status

| Milestone | Status | Ringkasan |
| --- | --- | --- |
| M1 — Fondasi tema | Selesai & terdeploy | Fondasi tema dan aset dasar. |
| M2 — Beranda editorial | Selesai & terdeploy | Beranda editorial dan daftar tulisan terbaru. |
| M3 — Arsip tulisan | Dalam review | Template indeks, arsip, dan artikel individual pada `feat/m3-writing-archive`. |

## Cakupan repository

Repository ini hanya menyimpan tema `sagitta`. Jangan commit atau mengubah WordPress core, `wp-config.php`, database, unggahan, kredensial, atau konfigurasi server.

Jangan membuat folder `/next`, memakai page builder/tema jadi, atau menambah plugin tanpa kebutuhan yang terdokumentasi. Jangan mengarang biografi, kutipan, karya, gambar placeholder, atau informasi kontak. Tidak ada newsletter, pendaftaran publik, toko, atau penyimpanan email.

## Desain

- Latar `#090A0F`; aksen `#D4AF37`
- Judul: Cormorant Garamond
- Teks antarmuka: Plus Jakarta Sans
- Gaya: dark luxury editorial

## Struktur

- `front-page.php`: beranda
- `home.php`: indeks tulisan WordPress
- `archive.php`: arsip kategori, tag, dan tanggal
- `single.php`: artikel individual
- `assets/css/`: stylesheet tema
- `inc/setup.php`: setup dan enqueue aset

## Workflow

1. Buat branch fitur dari `main`.
2. Buat commit yang terfokus, termasuk pembaruan README bila status atau prosedur berubah.
3. Buka pull request menuju `main` dan tinjau perubahan.
4. Merge setelah disetujui.
5. Deploy dari clone tema yang sudah ada di server, lalu lakukan pemeriksaan visual.

## Deploy

Di direktori clone tema pada server, pastikan branch `main` aktif dan working tree bersih, lalu jalankan:

```bash
git status
git branch --show-current
git pull --ff-only origin main
```

Jangan menjalankan `git reset --hard` atau `git clean -fd` sebagai prosedur deploy rutin. Jangan mengubah `.well-known`, `.user.ini`, `php.ini`, atau aturan keamanan `.htaccess` tanpa persetujuan.

## Verifikasi

- Periksa beranda pada desktop dan seluler.
- Periksa indeks tulisan, arsip, dan artikel individual setelah M3 dirilis.
- Pastikan tidak ada error PHP, layar kosong, aset hilang, atau overflow horizontal.
- Bersihkan cache browser, WordPress, server, atau CDN bila aset belum berubah.
