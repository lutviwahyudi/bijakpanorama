<?php 

namespace App\Controllers;
use App\Models\AuthModel;

class Auth extends BaseController {

    protected $AuthModel;
    public function __construct() 
    {
        $this->AuthModel = new AuthModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Login | Page'
        ];

        return view('auth/login', $data);    
    }

    public function login()
    {
        // Validasi input
        if (!$this->validate([
            'username' => 'required',
            'password' => 'required'
        ])) {
            return redirect()->back()->with('error', 'Username dan password harus diisi');
        }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cari pengguna berdasarkan username
        $user = $this->AuthModel->where('username', $username)->first();

        if ($user) {
            if ($password === $user['password']) {
                session()->set([
                    'user_id' => $user['id_user'],
                    'username' => $user['username'],
                    'logged_in' => true
                ]);
                return redirect()->to('home/timer');
            } else {
                echo "Anda salah Salah Password";
                }
        }
    }
}

?>