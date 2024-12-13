<?php

namespace App\Controllers;
use App\Models\MsgModel;
use App\Models\TamuModel;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }
    protected $MsgModel;
    protected $TamuModel;

    public function __construct()
    {
        $this->MsgModel = new MsgModel();
        $this->TamuModel = new TamuModel();
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
            'title' => 'timer | Page',
            'tamu' => $this->TamuModel->findAll()
        ];

        return view('page/timer', $data);    
    }
}
