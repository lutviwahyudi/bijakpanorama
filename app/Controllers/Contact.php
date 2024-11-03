<?php

namespace App\Controllers;
use App\Models\MsgModel;

class Contact extends BaseController
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
            'title' => 'Contact | Page'
        ];
        return view('page/contact', $data);
    }

    public function message()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'subject' => $this->request->getPost('subject'),
            'deskripsi' => $this->request->getPost('deskripsi')
        ];

        if ($this->MsgModel->insert($data)) {
            return redirect()->back()->with('success', 'Pesan berhasil dikirim ke admin.');
        } else {
            return redirect()->back()->with('error', 'Gagal mengirim pesan ke admin.');
        }
    }
}
