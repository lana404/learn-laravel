Request yang diterima oleh router akan dikelola oleh fungsi pada router tersebut atau dapat juga diteruskan ke controller. Controller inilah yang akan menghubungkan Data (Models) dengan Tampilan (Views).

## Membuat Controller

Membuat controller Matkul : `php artisan make:controller MatkulController -r`

Membuat controller Mahasiswa : `php artisan make:controller JadwalController -r`

-r pada perintah diatas merupakan flag yang memberitahu Artisan untuk menggenerate controller dengan fungsi standar pada file. Artinya pada controller yang digenerat*e dengan flag tersebut sudah memiliki beberapa fungsi seperti *index*, *show*, *update* dll.

Contoh Hasil generate yang telah di edit :

```php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "Ini fungsi index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return "Ini fungsi create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return "Ini fungsi store";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return "Ini fungsi show"
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return "Ini fungsi edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        return "Ini fungsi update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return "Ini fungsi destroy";
    }
}
```

## Konfigurasi Router

Pada [Modul Routing](./05%20-%20Routing.md) kita telah membuat konfigurasi router sederhana, yang mana router tersebut langsung mengembalikan data dari fungsi routernya. Nahh, sekarang kita arahkan router supaya mengembalikan data melalui Controller. Caranya, ubah Controller menjadi seperti diatas. Kemudian, masuk ke *./routes/web.php*, edit *Router::get('/mahasiswa')* menjadi : 

```php
// Route path /mahasiswa memanggil fungsi index dari class MahasiswaController
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
```

<br> <br> <hr>

<p align="center">
    <a href="./05%20-%20Routing.md"> <- Prev </a>| <a href="./07%20-%20Models.md"> Next -> </a>
</p>