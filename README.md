# Sagitta

Tema WordPress kustom untuk [sagitta.my.id](https://sagitta.my.id), situs editorial Benaya Johan Sagitta.

## Status proyek

| Milestone | Status | Ringkasan |
| --- | --- | --- |
| M1 — Fondasi tema | Selesai dan terdeploy | Tema WordPress kustom, struktur template awal, aset dasar, serta fondasi tampilan editorial. |
| M2 — Beranda editorial | Selesai dan terdeploy | Beranda dark luxury editorial, daftar tulisan terbaru dari pos terbit, serta empty state yang jujur. |
| M3 — Arsip tulisan | Sedang dikerjakan | Template indeks tulisan, arsip, dan artikel individual pada branch `feat/m3-writing-archive`. |

## Cakupan repository

Repository ini hanya menyimpan tema `sagitta`. WordPress core, `wp-config.php`, database, unggahan, dan konfigurasi server tidak disimpan atau diubah dari repository ini.

Pada server, clone tema berada di:

```text
/home/gotk4859/public_html/sagitta.my.id/wp-content/themes/sagitta
```

Jangan membuat folder `/next`, mengganti WordPress core, memasang page builder atau tema jadi, maupun menambah plugin tanpa kebutuhan yang terdokumentasi.

## Arah desain

- Latar: `#090A0F`
- Aksen: `#D4AF37`
- Judul: Cormorant Garamond
- Teks antarmuka: Plus Jakarta Sans
- Gaya: dark luxury editorial

Konten publik terdiri dari pengaturan situs, karya visual, tulisan, dan proyek media. Jangan mengarang biografi, kutipan, karya, gambar placeholder yang menyerupai karya, atau informasi kontak. Tidak ada pendaftaran publik, toko, newsletter, atau penyimpanan email.

## Struktur tema

```text
sagitta/
├── assets/
│   ├── css/
│   │   ├── main.css
│   │   ├── home.css
│   │   └── writing.css
│   └── js/
├── inc/setup.php
├── front-page.php
├── home.php
├── archive.php
├── single.php
├── header.php
├── footer.php
├── functions.php
└── style.css
```

`front-page.php` menangani beranda. `home.php` menangani indeks pos WordPress. `archive.php` menangani arsip kategori, tag, atau tanggal. `single.php` menangani artikel individual.

## Workflow perubahan

1. Buat branch fitur dari `main`.
2. Implementasikan satu milestone dengan commit yang terfokus.
3. Perbarui README ini pada setiap perubahan status milestone, cakupan, atau cara deploy.
4. Buka pull request menuju `main` dan tinjau diff.
5. Merge setelah disetujui.
6. Deploy tema yang sudah berada di `main` ke server dan lakukan pemeriksaan visual.

## Deploy ke produksi

Jalankan hanya dari folder clone tema di server:

```bash
cd /home/gotk4859/public_html/sagitta.my.id/wp-content/themes/sagitta
git status
git branch --show-current
git pull --ff-only origin main
```

Harapkan branch aktif `main` dan working tree bersih sebelum pull. Jangan menjalankan `git reset --hard`, `git clean -fd`, atau mengubah `.well-known`, `.user.ini`, `php.ini`, dan aturan keamanan `.htaccess` tanpa kebutuhan yang disetujui.

## Verifikasi setelah deploy

- Buka beranda pada desktop dan seluler.
- Periksa halaman tulisan, arsip tulisan, dan artikel individual setelah M3 dirilis.
- Pastikan tidak ada error PHP, layar kosong, CSS yang hilang, atau overflow horizontal.
- Purge cache browser, WordPress, server, atau CDN bila perubahan aset belum terlihat.
