# LOGIKA PERCABANGAN DAN PERULANGAN

##  INGAT TANDA " / " DI README INI SAYA BUAT ARTINYA " ATAU "
## Basic 

- FOR PERTAMA AKAN MENCETAK BINTANG DALAM BENTUK BARIS (KE BAWAH)
- FOR KEDUA AKAN MENCETAK BINTANG DALAM BENTUK KOLOM (KESAMPING)
- FOR 1 JIKA KONDISINYA BELUM TERPENUHI MAKA AKAN MENJALANKAN FOR 2 DAN FOR 2 AKAN MENJALANKAN SAMPAI KE-N = 10; JIKA KONDISI TERBENUHI MAKA FOR TIDAK BERJALAN LAGI DAN AKAN MENJALANKAN FOR 1 YANG MENCETAK BARIS BARU. 

- for 1 , i = 1 <= 10; jalankan for 2, j = 1 <= 10; cetak 10 bintang kesamping, sampai j = 10 <= 10; kondisi terbenuhi maka keluar dari for 2 dan menjalankan PHP_EOL (GANTI BARIS BARU) pada FOR 1

- for 1 , i = 2 <= 10; jalankan for 2, j = 1 <= 10; cetak 10 bintang kesamping, sampai j = 10 <= 10; kondisi terbenuhi maka keluar dari for 2 dan menjalankan PHP_EOL pada FOR 1

- for 1 , i = 3 <= 10; jalankan for 2, j = 1 <= 10; cetak 10 bintang kesamping, sampai j = 10 <= 10; kondisi terbenuhi maka keluar dari for 2 dan menjalankan PHP_EOL pada FOR 1

- dan seterusnya sampai for 1, i = 10 <= 10; maka for terhenti karena sudah sesuai kondisi

## LEVEL 1
- Menambahkan Pengkondisian untuk menampilkan bintang
- yang mana jika i == 1 || i == n || j == 1 || j == n maka tampilkan bintang nya
- i untuk baris dan j untuk kolom dan n = 10
- i == 1 -> hanya menampilkan bintang pada baris 1
- i == n/10 -> hanya menampilkan bintang pada baris 10
- j == 1 -> hanya menampilkan bintang pada kolom baris 1 sampai memenuhi 10 kolom pada baris 1 (berderet)
- j == n/10 -> hanya menampilkan bintang pada baris ke 10 sampai memenuhi 10 kolom (berderet)

## LEVEL 2
- Hanya menambah kondisi yang mana jika i == j maka tampilkan bintang
- jadi misal kan i ke 2 == j ke 2, tampilkan bintang pada baris 2 dan kolom 2
- sampai seterus nya

## LEVEL 3
- kenalikan dari LEVEL 2,
- Karena ingin menampilkan baris 2 kolom 9 
- jadi jika ingin mendapatkan nilai 9 pada baris 2 maka 
- n/10 - (i/1-1) = 9 -> BARIS 2
- n/10 - (i/2 - 1) = 8 -> BARIS 3
- n/10 - (i/2 - 1) = 7 -> BARIS 4
- DAN SETERUSNYA
- maka perlu perlu kita buat kondisi -> j == n -(i-1)