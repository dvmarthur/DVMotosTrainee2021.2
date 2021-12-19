<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController
{
    public function login()
    {
        return view('/site/login');
    }

    public function entrar()
    {
        $email = $_POST['email'];
        $senha = hash("sha512", $_POST['senha']);
        
        $redirencionar = App::get('database') -> logar('users', $email, $senha);

        if(!empty($redirencionar)) {
            session_start();
                $_SESSION['user'] = 'ativo';
            return view('admin/adm-dashboard');
        }

        else {

            /*
            echo"<script>Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!'
              })</script>";
            */

            echo "<script>alert('Usuario ou senha incorretos!');</script>";
            return view('site/login');
        }
    }

    public function deslogar()
    {
        session_start();
        session_destroy();

        return view('site/home');
    }

    public function show()
    {
        
    }

    public function create()
    {
 
    }

    public function store()
    {

    }

    public function edit()
    {
  
    }

    public function update()
    {
        
    }

    public function delete()
    {
 
    }
}