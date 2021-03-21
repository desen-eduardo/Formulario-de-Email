<?php

namespace App\Auth;

use App\Database\Entity\User;

trait Authentication 
{   
    private $session;
    
    public function authentication(string $column, string $user,string $password)
    {
        $this->session = User::select()->where($column,$user)->one();
        if (!empty($this->session)) {
            return $this->checkPassword($this->session,$password);
        } 
        return false;
    }

    public function redirect(string $name): void
    {   
        if ($name === 'home') {
            header('Location:'.CONFIG['URL']);exit;    
        }
        header('Location:'.CONFIG['URL'].'/'.$name);
    }
    
    private function checkPassword(object $value,string $password):bool
    {   
        if (password_verify($password,$value->password_user)) {
            $_SESSION['idUser'] = $value->id;
            return true;
        } else {
            return false;
        }
    }

    public function checkSession(): bool
    {
        if (isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])) {
            return true;
        }
        return false;
    }

    public function destroySession(): void
    {
        unset($_SESSION['idUser']);
    }
}