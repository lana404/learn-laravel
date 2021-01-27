Yahh,.. Migrations merupakan fitur yang sangat membantu dalam pengembangan aplikasi. Karena disinilah semua konfigurasi skema database ada. Dengan migration kita menggantikan kode SQL dengan kode PHP (istilah kerennya ORM) untuk membuat skema database.

Langsung praktek.

1. Hapus dulu semua migration yang sudah tergenerate otomatis ketika membuat project

2. Terus desain database sederhana, misalnya :

```
    |  jadwal     |               |  matkul  |
    | - id (PK)   |               | - id (PK) |
    | - name      |               | - name    |
    | - day       |               | - create_at |
    | - matkul    |               | - update_at |
    | - class     |
    | - create_at |
    | - update_at |

    1. create_at berisi kapan data itu dibuat. update_at berisi kapan data itu terakhir diubah.
    2. Hubungan mahasiswa dan matkul adalah one to many. Artinya 1 jadwal bisa memiliki beberapa matkul
```

3. Generate table dengan menggunakan artisan.

    `php artisan make:migration create_jadwals_table`

    `php artisan make:migration create_matkuls_table`

4. Edit file migration, lengakapi dengan nama column table yang sudah dirancang.

```php
// Edit function up() pada file create_jadwal_table
    public function up()
    {
        // CREATE TABLE jadwal(
        Schema::create('jadwals', function (Blueprint $table) {
            // 'id' NOT NULL AUTO_INCREMENT PRIMARY KEY,
            $table->bigIncrements('id');
            // 'name' STRING NOT NULL,
            $table->string('name');
            // 'day'  STRING NOT NULL,
            $table->string('day');
            // 'matkul'  STRING NOT NULL,
            $table->string('matkul');
            // 'class'  STRING NOT NULL,
            $table->string('class');
            // # generate create_at & update_at
            $table->timestamps();
        });
        // );
    }
```

```php
// Edit function up() pada file create_jadwal_table
    public function up()
    {
        Schema::create('matkuls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
    }
```
    column create_at dan update_at tak usah diisikan karena akan tergenerate otomatis.

5. Setting file .env

```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=lat_laravel
    DB_USERNAME=root
    DB_PASSWORD=''
```
   
6. Eksekusi migration

`php artisan migrate`

