Laravel mendukung fitur CLI dengan menggunakan artisan. Artisan CLI adalah fitur wajib yang harus dikuasai pada laravel untuk memudahkan proses developing.

Artisan CLI dapat menggenerate file dengan struktur kode dasar yang dibutuhkan developer. Misalnya membuat controller, migrations dll. Walaupun bisa ditulis secara manual, tapi dengan CLI akan lebih cepat kerjanya.

Daftar perintah Artisan CLI dapat dilihat dengan mengetikkan code dibawah didalam terminal :

`php artisan list`

# Beberapa Perintah Penting

## Serve

Kita juga bisa menjalankan aplikasi kita kedalam localhost dengan menggunakan code :

`php artisan serve`

## Generate Key

`php artisan key:generate`

perintah diatas digunakan untuk men-generate random string yang digunakan sebagai key yang diperlukan untuk semua proses enkripsi dan dekripsi. Misalnya seperti : proses session, CSRF token, sign url dll. Hasil generate nantinya dicopy dan dipastekan kedalam file .env, tepatnya pada variabel APP_KEY

## Membuat Controller

`php artisan make:controller Controller_Name` 

Hasil generate akan ada di ./app/Http/Controllers

## Membuat Model

`php artisan make:model Model_Name`

Hasil generate akan ada di ./app/Models

## Membuat Database Migration

`php artisan make:migration create_migrationName_table`

Hasilnya akan ada di ./database/migration. Awalan create_ diperlukan dalam nama migration karena untuk memberitahukan pada artisan bahwa kita menggenerate table. Sehingga hasil dari generate tersebut sudah lengkap dengan gambar Schemanya. Jadi kita tinggal mengeditnya. Coba saja bedakan dengan membuat nama migration tanpa create_. Pasti function up() dan down() akan kosong.

Selain itu, dengan menggunakan awalan create_ kita bisa mengikuti aturan Clean Codenya laravel, sehingga kode lebih enak dipandang.

Selain menggunakan *create_* kita juga harus menambahkan huruf *s* dalam penulisan nama tablenya. Kenapa? karena ketika kita menggenerate model, nantinya model tersebut akan memanggil tableName + huruf *s* dibelakangnya.

## Syntax Tambahan

## Membuat Model dan Migration bersamaan

`php artisan make:model ModelName --migration` atau `php artisan make:model ModelName --m`

## Membuat Model dan Controller bersamaan

`php artisan make:model Flight --controller` atau `php artisan make:model Flight -c`

## Membuat Model dan factory bersamaan

`php artisan make:model Flight --factory` atau `php artisan make:model Flight -f`

## Membuat Model dan Seeder bersamaan

`php artisan make:model Flight --seed` atau `php artisan make:model Flight -s`

## Membuat Model, Factory, Seeder dan Controller bersamaan

`php artisan make:model Flight -mfsc`

<br> <br> <hr>

<p align="center">
    <a href="./02%20-%20Struktur%20Folder.md"> <- Prev </a>| <a href="./04%20-%20Make%20Migrations.md"> Next -> </a>
</p>