<?php

namespace App\Controllers;

class Auth extends BaseController
{
    

    public function login()
    {
        // memasukkan parameter judul pada website menggunakan assosiative array
        $data = [
            'title' => 'Login - LSP Teknologi Digital'
        ];

        // memanggil view dan memasukkan parameter ke dalam view
        return view('auth/login', $data);
    }

    public function signup()
    {
        // memasukkan parameter judul pada website menggunakan assosiative array
        $data = [
            'title' => 'Sign Up - LSP Teknologi Digital'
        ];

        // memanggil view dan memasukkan parameter ke dalam view
        return view('auth/signup', $data);
    }
}
