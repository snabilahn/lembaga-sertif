<?php

namespace App\Controllers;

use App\Models\Skema_sertifikasiModel;

class Skema extends BaseController
{
    protected $skemaModel;

    // function untuk controller halaman skema dari website 
    public function index()
    {
        // memanggil data skema dari database dan memasukkannya pada suatu variabel
        $skema = $this->skemaModel->findAll();

        // memasukkan parameter judul pada website menggunakan assosiative array dan juga data dari database
        $data = [
            'title' => 'Skema Sertifikasi - LSP Teknologi Digital',
            'skema' => $skema
        ];

        // memanggil view dan memasukkan parameter ke dalam view
        return view('skema/sertifikasi', $data);
    }
}
