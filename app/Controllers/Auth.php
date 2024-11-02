<?php 

namespace App\Controllers;


class Auth extends BaseController {

    public function index()
    {
        $data = [
            'title' => 'Login | Page'
        ];

        return view('auth/login', $data);    
    }
}

?>