# Sagitta

Tema WordPress kustom untuk [sagitta.my.id](https://sagitta.my.id), ruang editorial Benaya Johan Sagitta.

Situs menggunakan WordPress inti yang dipasang di server. Repositori ini **bukan** salinan WordPress: pada keadaan akhir, repositori hanya menyimpan tema `Sagitta` dan kode yang diperlukan untuk mengembangkannya.

## Status

- WordPress telah terpasang pada akar addon domain `sagitta.my.id`.
- Tema bawaan WordPress masih dipakai sementara sebagai fallback.
- Tema kustom `Sagitta` belum dibuat maupun diaktifkan.
- `index.html` dan `docs/konten-dan-deliverable.md` adalah artefak fase landing-page sebelumnya; keduanya menjadi acuan visual dan perencanaan selama migrasi, bukan berkas yang dideploy sebagai tema.

## Arah desain

- Dark luxury editorial
- Latar utama `#090A0F`
- Aksen emas `#D4AF37`
- Judul: Cormorant Garamond
- Teks antarmuka: Plus Jakarta Sans
- Konten: pengaturan situs, karya visual, tulisan, dan proyek media

Tampilan dibuat khusus; tidak menggunakan tema jadi atau page builder.

## Target struktur

Setelah kerangka tema dibuat, akar repositori akan berisi:

```text
sagitta/
├── style.css
├── functions.php
├── index.php
├── front-page.php
├── header.php
├── footer.php
├── screenshot.png
├── assets/
│   ├── css/
│   └── js/
└── inc/
    ├── setup.php
    ├── content-types.php
    └── customizer.php
```

Tema akan dideploy ke:

```text
/home/gotk4859/public_html/sagitta.my.id/wp-content/themes/sagitta/
```

Jangan meng-clone versi repositori saat ini langsung ke direktori tema. Struktur tema belum dibentuk dan belum siap diaktifkan.

## Batas proyek

- Jangan memodifikasi atau mem-fork inti WordPress.
- Jangan memakai page builder atau tema jadi.
- Jangan menambah plugin tanpa kebutuhan yang disetujui.
- Jangan commit `wp-config.php`, inti WordPress, `wp-content/uploads/`, cadangan basis data, kredensial, atau token.
- Jangan menimpa `.htaccess`, `.well-known`, `.user.ini`, atau `php.ini` di akar domain.
- Tidak ada pendaftaran publik, toko, atau penyimpanan email pada tahap ini.
- Jangan mengarang biografi, kutipan, maupun karya.

## Tahapan berikutnya

1. Membuat kerangka minimum tema agar dikenali WordPress.
2. Memindahkan sistem desain landing page ke template PHP dan aset tema.
3. Mengaktifkan serta menguji tema di lingkungan produksi.
4. Menambahkan model konten `Karya` dan `Proyek` setelah halaman depan stabil.
5. Mengganti placeholder dengan konten dan tautan yang telah disetujui.

## Pengembangan lokal dan deploy

Tema dikembangkan dengan Git dan disinkronkan ke folder tema WordPress. Inti WordPress, konfigurasi server, basis data, serta unggahan dikelola di server dan berada di luar ruang lingkup repositori ini.
