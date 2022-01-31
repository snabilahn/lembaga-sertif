<?php

namespace App\Controllers;

class Pages extends BaseController
{
    // function untuk controller halaman index atau homepage dari website
    public function index()
    {
        // memanggil data dari database limit 3 data
        $skema = $this->skemaModel->findAll(3);

        // memasukkan data yg dipanggil dalam suatu variabel
        $data = [
            'title' => 'LSP Teknologi Digital',
            'skema' => $skema
        ];

        // memanggil view dan memasukkan data ke dalam view
        return view('pages/home', $data);
    }

    // function untuk controller halaman profil
    public function profil()
    {
        // memasukkan parameter judul pada website menggunakan assosiative array
        $data = [
            'title' => 'Profil - LSP Teknologi Digital'
        ];

        // memanggil view dan memasukkan parameter ke dalam view
        return view('pages/profil', $data);
    }

    // function untuk controller halaman contact
    public function contact()
    {
        // memasukkan parameter judul pada website menggunakan assosiative array
        $data = [
            'title' => 'Contact - LSP Teknologi Digital'
        ];
        // memanggil view dan memasukkan parameter ke dalam view
        return view('pages/contact', $data);
    }
}
