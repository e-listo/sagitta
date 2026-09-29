# Sagitta

Tema WordPress kustom untuk situs editorial Sagitta.

## Status pada branch ini

| Milestone | Status | Ringkasan |
| --- | --- | --- |
| M1 — Fondasi tema | Selesai | Fondasi tema, template awal, dan aset dasar. |
| M2 — Beranda editorial | Selesai | Beranda editorial, daftar tulisan terbaru dari pos terbit, dan empty state. |

Branch ini adalah snapshot pekerjaan M2. Pekerjaan berikutnya dibuat pada branch fitur terpisah dari `main`.

## Cakupan

Repository hanya menyimpan tema `sagitta`. Jangan commit atau mengubah WordPress core, `wp-config.php`, database, unggahan, kredensial, atau konfigurasi server.

Jangan membuat folder `/next`, memakai page builder/tema jadi, atau menambah plugin tanpa kebutuhan terdokumentasi. Jangan mengarang biografi, kutipan, karya, gambar placeholder, atau informasi kontak. Tidak ada newsletter, pendaftaran publik, toko, atau penyimpanan email.

## Desain

- Latar `#090A0F`; aksen `#D4AF37`
- Judul: Cormorant Garamond
- Teks antarmuka: Plus Jakarta Sans
- Gaya: dark luxury editorial

## Struktur M2

- `front-page.php`: beranda editorial
- `assets/css/home.css`: gaya khusus beranda
- `inc/setup.php`: setup tema dan enqueue aset

## Workflow dan deploy

Gunakan branch fitur, commit terfokus, pull request ke `main`, lalu deploy versi `main` dari clone tema yang sudah ada di server. Sebelum deploy, pastikan working tree bersih dan branch aktif adalah `main`, kemudian gunakan `git pull --ff-only origin main`.

Jangan menjalankan `git reset --hard` atau `git clean -fd` sebagai prosedur deploy rutin. Jangan mengubah `.well-known`, `.user.ini`, `php.ini`, atau aturan keamanan `.htaccess` tanpa persetujuan.
