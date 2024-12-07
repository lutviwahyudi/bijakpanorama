<?php 

namespace App\Controllers;
use App\Models\AuthModel;
use CodeIgniter\I18n\Time;

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

    public function registrasi()
    {
        $data = [
            'title' => 'Halaman | Registrasi'
        ];
        
        return view('auth/regis', $data);
    }

    public function daftar()
    {
        // memvalidasi semua data regis
        $validation = \config\Services::validation();

        $validation->setRules([
            'username' => 'required|min_length[3]|max_length[50]',
            'nomor' => 'required|min_length[10]|max_length[15]',
            'password' => 'required|min_length[8]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $password = $this->request->getPost('password');
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $data = [
            'username' => $this->request->getPost('username'),
            'nomor' => $this->request->getPost('nomor'),
            'password' => $hashedPassword,
            'user_level' => 2, 
            'date' => Time::now('Asia/Jakarta', 'Y-m-d H:i:s')
        ];

        if ($this->AuthModel->insert($data)) {
            return redirect()->to('/auth')->with('success', 'Registrasi berhasil, silahkan login');
        }else {
            return redirect()->back()->withInput()->with('error', 'Registrasi gagal, silahkan coba lagi');
        }

    }

    public function login()
    {

        // Validasi input
        $validation = \Config\Services::validation();

        $validation->setRules([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // ambil data input
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // cek keberadaan user
        $user = $this->AuthModel->where('username', $username)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'username anda salah');
        }

        // veriskasi password
        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'password anda salah');
        }

        // Set session berdasarkan `user_level`
        session()->set([
            'id_user'    => $user['id_user'],
            'username'   => $user['username'],
            'user_level' => $user['user_level'],
            'logged_in'  => true
        ]);

        // Arahkan ke halaman berdasarkan `user_level`
        if ($user['user_level'] == 1) {
            return redirect()->to('/home/timer'); // Halaman Admin
        } else {
            return redirect()->to('/home'); // Halaman Home
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth')->with('success', 'Anda telah logout');
    }

}

?>