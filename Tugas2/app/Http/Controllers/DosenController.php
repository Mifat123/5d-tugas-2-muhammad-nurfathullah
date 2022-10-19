<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\DosenEloquent;


class DosenController

{
    public function index()
    {
        $dsn = DosenEloquent::all();
        return view('DosenEloqORM', ['data' => $dsn], ['title' => 'Dosen']);
    }
    public function insert()
    {
        DosenEloquent::create([
            'nidn' => '1001',
            'nama' => 'Haris',
            'jenis_kelamin' => 'Laki Laki',
            'alamat' => 'Karawang',
            'tempat_lahir' => 'Karawang',
            'tanggal_lahir' => '1987-09-04',
            'photo' => 'Pemandangan Karawang',
        ]);
        return "Berhasil disimpan";
    }
    public function delete()
    {
        $dsn = DosenEloquent::where('nama', 'Haris')->delete();
        return "Berhasil dihapus";
    }
    public function update()
    {
        $dsn = DosenEloquent::where('id', 8)->first()->update([
            'nama' => 'Ujang'
        ]);
        return "Berhasil diupdate";
    }
}
