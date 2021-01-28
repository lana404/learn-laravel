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