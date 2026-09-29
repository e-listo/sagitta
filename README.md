# Sagitta

Tema WordPress kustom untuk situs editorial Sagitta.

## Status proyek

| Milestone | Status | Ringkasan |
| --- | --- | --- |
| M1 — Fondasi tema | Selesai & terdeploy | Fondasi tema, template awal, dan aset dasar. |
| M2 — Beranda editorial | Selesai & terdeploy | Beranda editorial, daftar tulisan terbaru, dan empty state. |
| M3 — Arsip tulisan | Selesai & terdeploy | Indeks tulisan, arsip, artikel individual, pagination, dan gaya editorial tulisan. |
| Hotfix navigasi Tulisan | Selesai & terdeploy | Menu Tulisan mengarah ke Posts page bila dikonfigurasi, atau ke bagian `#tulisan` di beranda sebagai fallback. |

## Cakupan repository

Repository ini hanya menyimpan tema `sagitta`. Jangan commit atau mengubah WordPress core, `wp-config.php`, database, unggahan, kredensial, atau konfigurasi server.

Jangan membuat folder `/next`, memakai page builder/tema jadi, atau menambah plugin tanpa kebutuhan terdokumentasi. Jangan mengarang biografi, kutipan, karya, gambar placeholder, atau informasi kontak. Tidak ada newsletter, pendaftaran publik, toko, atau penyimpanan email.

## Desain

- Latar `#090A0F`; aksen `#D4AF37`
- Judul: Cormorant Garamond
- Teks antarmuka: Plus Jakarta Sans
- Gaya: dark luxury editorial

## Struktur tema

- `front-page.php`: beranda
- `home.php`: indeks tulisan WordPress
- `archive.php`: arsip kategori, tag, dan tanggal
- `single.php`: artikel individual
- `assets/css/`: stylesheet tema
- `inc/setup.php`: setup, enqueue aset, dan fallback navigasi

## Navigasi Tulisan

Menu fallback memakai permalink halaman Posts WordPress jika halaman tersebut sudah ditetapkan di Settings → Reading. Bila belum ada Posts page, menu menuju bagian tulisan yang tersedia pada beranda. Setelah halaman Posts dikonfigurasi, menu otomatis menggunakan URL arsip tersebut.

## Workflow

1. Buat branch fitur dari `main`.
2. Buat commit terfokus, termasuk pembaruan README bila status atau prosedur berubah.
3. Buka pull request menuju `main` dan tinjau perubahan.
4. Merge setelah disetujui.
5. Deploy dari clone tema di server dan lakukan pemeriksaan visual.

## Deploy

Pada direktori clone tema di server, pastikan branch `main` aktif dan working tree bersih, lalu jalankan:

```bash
git status
git branch --show-current
git pull --ff-only origin main
```

Jangan menjalankan `git reset --hard` atau `git clean -fd` sebagai prosedur deploy rutin. Jangan mengubah `.well-known`, `.user.ini`, `php.ini`, atau aturan keamanan `.htaccess` tanpa persetujuan.
