# Instalasi Laravel

Laravel yang digunakan dalam catatan ini adalah 8.x

## Install via Composer

### Requrement
1. php
2. Composer
3. mysql

### Step
1. Buka console, kemudian jalankan perintah dibawah pada terminal
   
   `composer create-project laravel/laravel example-app`

2. Masuk ke folder melalui terminal
3. Jalankan artisan
   
   `php artisan serve`

## Via Laravel Installer

Dengan menggunakan laravel installer, kita bisa membuat project secara offline.
1. Unduh laravel Installer dengan Composer
   
   `composer global require laravel/installer`

2. Setting PATH
   1. macOS: $HOME/.composer/vendor/bin
   2. Windows: %USERPROFILE%\AppData\Roaming\Composer\vendor\bin
   3. GNU / Linux Distributions: Buka file .basrc or .profile pastekan `$HOME/.config/composer/vendor/bin` or `$HOME/.composer/vendor/bin` pada `export PATH="$PATH: disini`
   
3. Membuat Project `laravel new example-app`
4. Masuk ke folder Project
5. Jalankan `php artisan serve` untuk serve

## Di Linux/Windows/MacOS with Docker

### Requrement
1. Docker
2. curl
3. php
4. mysql

### Step
1. Masuk console, kemudian Create new Laravel Project
   
   `curl -s https://laravel.build/example-app | bash`

2. Masuk ke folder `example-app` melalu terminal
   
   `cd example-app`

3. Jalankan *Laravel Sail*
   
   `./vendor/bin/sail up`


__Note__ : *Laravel Sail provides a simple command-line interface for interacting with Laravel's default Docker configuration*

# Konfigurasi

## Setting Aplikasi

1. Masuk ke folder project
2. Buka file .env
3. Ubah APP_NAME, DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD.
4. Lakukan juga pengaturan pada `config/app.php`
