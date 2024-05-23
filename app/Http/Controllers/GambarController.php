<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class GambarController extends Controller
{
    public function simpanGambar(Request $request) {
        if($request->hasFile('gambar')) {
            // membuat (menciptakan folder 'path_ke_folder') bila belum ada
            // jalankan perintah : php artisan storage:link 
            // sebelum menjalankan aplikasi laravel dan akan membuat folder 'path_ke_folder' di dalam /public/storage
            $folder = 'path_ke_folder'; 
            $fileName = $request->file('gambar')->hashName();
            $path = Storage::disk('public')->putFileAs($folder, $request->file('gambar'), $fileName);

            return "Gambar berhasil di unggah! <br>Lokasi penyimpanan <b>$path</b><br> Dengan nama file <b>$fileName</b><hr><center><a href='/gambar/tampil'>Tampilkan Gambar</a></center>";
        }
    }

    public function tampilGambar() {
        return view('tampil');
    }
}
