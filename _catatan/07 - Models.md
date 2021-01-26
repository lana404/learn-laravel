Model adalah penghubung antara Controller dengan Database. Model akan berperan untuk menyimpan, mengubah, menghapus dan mengambil data dari Database.

# Membuat Model

Untuk membuat model kita bisa menulis secara manual atau menggenerate melalui Artisan CLI. Perintah untuk menggenerate model :

`php artisan make:model Jadwal`

Hasil dari generate code :

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
}
```

Dilihat dari hasil generate, class Mahasiswa extend kepada class Model. class Model sendiri merupakan bagian dari library *Eloquent*. *Eloquent* merupakan library yang memudahkan kita untuk mengelola data pada laravel. Dengan *Eloquent* kita sudah tak perlu menuliskan kode SQL untuk mengolah data. Karena *Eloquent* lah yang akan menangani semuanya.

Tentang Eloquent akan kita bahas di modul berikutnya :)

# Mengguanakan Model



## Memaksimalkan Eloquent

Seperti yang sudah dijelaskan diatas. 