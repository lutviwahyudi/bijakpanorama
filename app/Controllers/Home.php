<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }

    public function index() 
    {
        $data = [
            'title' => 'Home | Page'
        ];
        return view('page/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | Page'
        ];
        return view('page/about', $data);    
    }
}
