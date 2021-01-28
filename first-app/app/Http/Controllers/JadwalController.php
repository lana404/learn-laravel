<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jadwal = Jadwal::all();
        return $jadwal;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request merupakan parameter yang berisi informasi 
        // mengenai request tersebut. Seperti header, body
        // query parameter dll. Parameter tersebut sudah
        // otomatis ditangani oleh laravel.
        $jadwal = new Jadwal();
        // Set column name dengan nilai dari $request->name
        $jadwal->name = $request->name;
        $jadwal->day = $request->day;
        $jadwal->matkul = $request->matkul;
        $jadwal->class = $jadwal->class;
        // Menyimpan data ke database
        $jadwal->save();

        return $jadwal;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Fungnsi find merupakan fungsi default dari class Model
        // Jadi kita tak perlu menulis ulang fungsi pada class
        // turunannya
        // Gunanya untuk mencari data berdasarkan inputan user
        $jadwal = Jadwal::find($id);
        return $jadwal;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        // Cari data terlebih dahulu
        $jadwal = Jadwal::find($id);
        // Memperbarui nilai
        $jadwal->name = $request->name;
        $jadwal->day = $request->day;
        $jadwal->matkul = $request->matkul;
        $jadwal->class = $jadwal->class;
        // Mengupdate data ke database
        $jadwal->update();

        return $jadwal;
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
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        
        return "sukses menghapus ".$id;
    }
}
