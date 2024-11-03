<?php

namespace App\Controllers;
use App\Models\MsgModel;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }
    protected $MsgModel;

    public function __construct()
    {
        $this->MsgModel = new MsgModel();
    }

    public function index() 
    {
        $data = [
            'title' => 'Home | Page',
            'message' => $this->MsgModel->findAll()
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

    public function timer()
    {
        $data = [
            'title' => 'timer | Page'
        ];

        return view('page/timer', $data);    
    }
}
