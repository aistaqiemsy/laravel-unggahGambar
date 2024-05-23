<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Facades\DB;

class GambarController extends Controller
{
    // public function simpanGambar(Request $request) {
    //     if($request->hasFile('gambar')) {
    //         // membuat (menciptakan folder 'path_ke_folder') bila belum ada
    //         // jalankan perintah : php artisan storage:link 
    //         // sebelum menjalankan aplikasi laravel dan akan membuat folder 'path_ke_folder' di dalam /public/storage
    //         $folder = 'path_ke_folder'; 
    //         $fileName = $request->file('gambar')->hashName();
    //         $path = Storage::disk('public')->putFileAs($folder, $request->file('gambar'), $fileName);

    //         return "Gambar berhasil di unggah! <br>Lokasi penyimpanan <b>$path</b><br> Dengan nama file <b>$fileName</b><hr><center><a href='/gambar/tampil'>Tampilkan Gambar</a></center>";
    //     }
    // }

    public function simpanGambar(Request $request) {
        if($request->hasFile('gambar')) {
            $folder = 'path_ke_folder';
            $fileName = $request->file('gambar')->hashName();
            $path = Storage::disk('public')->putFileAs($folder, $request->file('gambar'), $fileName);

            DB::table('tb_gambar')->insert([
                'nama_gambar' => $fileName
            ]);

            return "Gambar <b>$fileName</b> berhasil di unggah ke MySQL<hr>";
        }
    }

    public function tampilGambar() {
        $gambar = DB::table('tb_gambar')->get();
        return view('tampil', ['gambar' => $gambar]);
    }
}
