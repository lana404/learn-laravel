# Struktur Folder Laravel

```
project
   |-- app
        |-- Console
        |-- Exceptions
        |-- Http
              |-- Controllers   (Letak semua Controller yang dibutuhkan pada laravel)
              |-- Middleware    (Letak semua Models yang dibutuhkan pada laravel)
        |-- Models
        |-- Providers
   |-- bootstrap
   |-- config
   |-- database
        |-- factories
        |-- migrations  (Berisi configurasi database dengan ORM)
        |-- seeders
   |-- public           (Tempat assets yang berasal dari pengembang lain)
   |-- resources        (Berisi semua file Views yang masih dalam tahap development)
        |-- css
        |-- js
        |-- lang
        |-- views       (Letak file Blade)
   |-- routes           (Letak Routing pada laravel. Biasanya pada file web.php)
   |-- storage
   |-- tests
   |-- vendor
```
<br> <br> <hr>

<p align="center">
    <a href="01%20-%20Getting%20Start.md"> <- Prev </a>| <a href="./03%20-%20CLI.md"> Next -> </a>
</p>