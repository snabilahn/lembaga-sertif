<?php

namespace App\Controllers;

use App\Models\MediaModel;

class Media extends BaseController
{
    protected $mediaModel;
    
    // function untuk controller halaman media dari website
    public function index()
    {
        // memanggil data media dari database dan memasukkannya pada suatu variabel
        $media = $this->mediaModel->findAll();

        // memasukkan parameter judul pada website menggunakan assosiative array dan juga data dari database
        $data = [
            'title' => 'Media - LSP Teknologi Digital',
            'media' => $media
        ];

        // memanggil view dan memasukkan parameter ke dalam view
        return view('pages/media', $data);
    }
}
