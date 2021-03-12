# Lakukan Optimasi pada project terlebih dahulu

## Autoloader Optimization

Untuk mengoptimasi composer, sehingga composer akan lebih cepat menemukan file yang tepat untuk dimuat.

`composer install --optimize-autoloader --no-dev`

Setelah perintah diatas dijalankan maka akan muncul file baru didalam `vendor`, yaitu : autoload.php

**Note** : Ketika mendeploy pastikan selalu menyertakan file *composer.lock*, agar penginstalan depedencies yang diperlukan pada project lebih cepat

## Optimizing Configuration Loading

`php artisan config:cache`

Perintah diatas akan menggabungkan semua file config laravel menjadi satu file cache, sehingga framework lebih mudah dalam memuat file confignya. 

## Optimizing Route Loading

`php artisan route:cache`

Perintah diatas menjadikan route registrations menjadi satu method panggilan dalam cache, sehingga dapat meningkatkan kinerja ketika mendaftarkan ratusan route.

## Optimizing View Loading

`php artisan view:cache`

Meningkatkan kinerja ketika request return a view.


More Information : https://laravel.com/docs/8.x/deployment


# Tutorial

1. [How to Upload Project on Subdomain](https://stackoverflow.com/questions/39886926/how-to-upload-laravel-project-on-subdomain)
2. [Masalah "Your IP address has changed. Please log in again" ketika login CPanel](https://idwebhost.com/blog/hosting-guru/mengatasi-masalah-your-ip-address-has-changed-saat-login-cpanel/)