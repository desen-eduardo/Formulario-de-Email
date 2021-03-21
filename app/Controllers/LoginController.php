<?php

namespace App\Controllers;

use App\Controller;

class LoginController extends Controller
{
    public function index(): void
    {   
        $this->render('login');
    }

    public function access(): void
    {
        $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);

        if ($this->authentication('email_user',$email,$senha)) {
            $this->redirect('home');
        }
            $data['alert'] = ['msg'=>'Email ou senha invalido','type'=>'danger'];
        
        $this->render('login',$data);
    }

    public function logout(): void
    {
        $this->destroySession();
        $this->redirect('home');
    }
}