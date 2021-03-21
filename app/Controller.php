<?php

namespace App;

use League\Plates\Engine;

abstract class Controller
{   
    use \App\Auth\Authentication;
    
    private $view;

    public function __construct()
    {
        $this->view = new Engine(__DIR__.'/../Views', 'php');
    }
     
    public function render(string $name, array $data = []): void
    {   
        echo $this->view->render($name,$data);
    }
}