Yap, kali ini kita akan mempelajari tentang Views pada Laravel. Views digunakan untuk menampilkan data agar lebih mudah dibaca oleh user. Salah satu fitur Views dari Laravel adalah Blade. 


# Apa itu Blade?

Blade merupakan fitur templating yang disediakan oleh Laravel. Blade sendiri bisa terdiri dari HTML, CSS, JS dan PHP. Kelebihan Blade dari templating lainnya adalah Blade tidak membatasi developer untuk menggunakan PHP Native dalam pengembangannya.

Blade templating menggunakan format `.blade.php`. Letak filenya ada di `./resources/views`. Blade memanfaatkan Inheritance dan Section dalam templatingnya. Hal tersebut sangat membantu ketika templating, karena kita tak perlu menuliskan kode yang sama secara berulang-ulang. Misalnya header, footer dan sidebar. Ketiga bagian itu adalah bagian yang jarang terjadi perubahan. Kalau kita menuliskan ketiga bagian tersebut secara satu persatu dalam page maka hanya akan membuang waktu. Tinggal kita manfaatkan section terus kita panggil bagian tersebut ketika kita butuhkan.

File blade nantinya akan dikompilasi dalam kode PHP biasa oleh program. Hasil kompilasi nantinya akan disimpan didalam cache hingga diubah. Sehingga blade tidak memberikan beban tambahan ketika aplikasi dijalankan.


# Membuat Views Sederhana

Pada praktek kali ini kita akan membuat halaman dashboard. Let's try :)

1. Buat file baru dengan nama `dashboard.blade.php`. Pada `./resources/views/`
2. Isikan kode dibawah ini kedalamnya :
   
   ```html
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title> Dashboard </title>
        </head>
        <body>
            <div style="text-align: center">
                <h1> Hello, Selamat datang di Dashboard </h1>
            </div>
        </body>
        </html> 
   ```
3. Kemudian edit router pada `./routes/web.php`

    ```php
        Route::get('/', function () {
            // Menampilkan halaman dashboard.blade.php
            return view('dashboard');
        });
    ```

4. Sekarang coba refresh halaman dashboard


# Templating

Yeyy,, kita berhasil membuat Views sederhana. Sekarang kita akan mempelajari proses Templating pada Views untuk memaksimalkan fitur dari *blade*. 

Seperti yang telah dibahas di [Pengenalan Blade](#apa-itu-blade), dengan menggunakan fitur section dan inheritance dari blade kita bisa lebih mudah melakukan templating pada laravel. Kita tak perlu menuliskan code yang sama secara berulang kali. Karena selain buang waktu, hal tersebut juga bisa meningkatkan Inkonsistensi penulisan. Selain itu Templating memebrikan kita kemudahan dalam maintenance dan kerja sama tim. Apalagi kalau project sudah mulai besar dan halaman yang ditampilkan terus bertambah.

https://informatika.uc.ac.id/2019/09/laravel-view-blade/

https://medium.com/easyread/membuat-tampilan-web-dengan-blade-pada-aplikasi-laravel-part-i-c9f5ceee65e6