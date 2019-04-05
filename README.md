TRACKING-PROJECT
-------------------

Adalah sebuah website yang kami kembangkan dalam masa PKL "Praktik Kerja Lapangan di Bentang Inspira Teknologi" yang dimulai pada tanggal 07 Januari 2019 - 06 Januari 2019 dengan total waktuk Kurang lebih 3 bulan lamanya.

Cara Meng-Akses Website :
~~~
http://localhost/tracking-project/
~~~
Framework yang kami pakai dalam project ini adalah Framework YII2 "Yes It'is"

FUNGSI DI DALAMNYA
-------------------

      CRUD PROJECT/       Membuat Fungsi CRUD "Create Read Update Delete" di bagian Project, agar dapat membuat data project
      CRUD TERMIN/        Membuat Fungsi CRUD Untuk Metode Pembayaran Termin, Agar Dapat Melihat Data Pembayaran Setiap Termin
      Halaman View/       Melihat Hasil Create Project Setelah di buat oleh admin, dihalaman view terdapat index TERMIN (bila metode pembayaran termin)
      ADMIN/              Memiliki Hak Untuk Mengubah Seluruh Data Yang Ada Dalam Website
      Pimpinan/           Memiliki Hak Untuk Melihat Project Tanpa mengubah Data Apapun
      Teknis/             Memiliki Hak Unutk Melihat Project Tanpa Mengubah Data Apapun Dan Tidak Bisa Melihat Metode Pembayaran
      Instansi (Nav)/     Halaman Untuk dapat melihat List Instansi 
      Login/              Aturan Utama Untuk Memasuki Website 
      Logout/             Keluar Dari Akun Yang Digunakan
      About/              Sedikit Formalitas
      Halaman Utama/      Ringkasan Dari Bebeerapa Project, Memuat 10 Project dilanjut dengan halama selanjut nya menggunakan fungsi pagination 



KEKURANGAN 
------------

Berikut Ini kekurangan dari website yang kami buat :

### Belum Tersediannya Registrasi
Karena belum tersedianya Form Registrasi maka untuk dapat menambahkan akun, harus melalui PHPMYADMIN

### Belum Tersedianya Rekapatulasi (Rekap) Instansi
Pada Navbar terdapat pilihan instansi yang berfungsi selian menambahkan instansi, menu ini dapat melihatkan rincian setiap instansi yang ada

### Belum Tersedianya Rekapatulasi (Rekap) Perusahan Yang BekerjaSama
Sama Halnya seperti Rekap Instansi, Namun CRUD nya belum sempat dibuat

### Tampilan Terlalu Sederhana
Pada website ini kami terlalu fokus terhadapat backend makadari itu, kami tidak terlalu memperhatikan masalah frontend, tadinya mau menggunakan template ADMIN LTE (Template Sejuta Umat)

### Tidak Ada Animasi 
Pada awalnya kami ingin mengguakan Sweet Alert untuk bagian Alert, namun karena gagal terus dan tenggak waktu, maka kami putuskan untuk tidak menggunakan Sweet Alert (Widget nya sudah tersedia pada composer)



SARAN
-----
### Frontend
Menggunakan Template untuk tampilan, dan animasi seperti WOW.Js (JavaScript Pada bagian Text/Gambar), Sweet Alert (Menampilkan Peringatan Dll)

### Registrasi
Menambahkan CRUD Registrasi dengan menggunakan CRUD Generator di GII (Caranya gampang Kok)

### Rekapitulasi (Rekap Instansi & Perusahaan)
Membuat Rekap Instasi dan Perusahaaan secara mendetai sesuai periode yang sudah ditetapkan
