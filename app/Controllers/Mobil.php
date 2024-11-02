<?php

namespace App\Controllers;

class Mobil extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }

    public function index()
    {
        $data = [
            'title' => 'Sewa Mobil | Page'
        ];
        return view('page/sewamobil', $data);
    }
}
