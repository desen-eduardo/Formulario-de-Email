<?php

namespace App\Controllers;

use App\Controller;
use App\Services\Mail;

class HomeController extends Controller
{
    public function index(): void
    {   
        $this->render('home');
    }

    public function create()
    {   
        $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
        $message = filter_input(INPUT_POST,'message',FILTER_SANITIZE_STRING);

        $mail = new Mail($name,$email,$message);

        if (empty($mail->error())) {
            $data['alert'] = ['msg'=>'Dados enviando com sucesso','type'=>'success'];
            $this->render('home',$data);exit;
        }

        $data['alert'] = ['msg'=>'problema ao enviar o email','type'=>'danger'];
        $this->render('home',$data);
    }
}