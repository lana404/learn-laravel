Yap, kali ini kita akan mempelajari tentang Views pada Laravel. Views digunakan untuk menampilkan data agar lebih mudah dibaca oleh user. Salah satu fitur Views dari Laravel adalah Blade. 

# Apa itu Blade?

Blade merupakan fitur templating yang disediakan oleh Laravel. Blade sendiri bisa terdiri dari HTML, CSS, JS dan PHP. Kelebihan Blade dari templating lainnya adalah Blade tidak membatasi developer untuk menggunakan PHP Native dalam pengembangannya.

Blade templating menggunakan format `.blade.php`. Letak filenya ada di `./resources/views`. Blade memanfaatkan Inheritance dan Section dalam templatingnya. Hal tersebut sangat membantu ketika templating, karena kita tak perlu menuliskan kode yang sama secara berulang-ulang. Misalnya header, footer dan sidebar. Ketiga bagian itu adalah bagian yang jarang terjadi perubahan. Kalau kita menuliskan ketiga bagian tersebut secara satu persatu dalam page maka hanya akan membuang waktu. Tinggal kita manfaatkan section terus kita panggil bagian tersebut ketika kita butuhkan.

File blade nantinya akan dikompilasi dalam kode PHP biasa oleh program. Hasil kompilasi nantinya akan disimpan didalam cache hingga diubah. Sehingga blade tidak memberikan beban tambahan ketika aplikasi dijalankan.

# Membuat Views Sederhana
