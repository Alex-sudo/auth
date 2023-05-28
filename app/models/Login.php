<?php 

namespace app\models;
use RedBeanPHP\R;


class Login extends \wfm\Model
{

    public function login(): bool
    {
        $email = post('email');
        $password = post('password');
        
        if ($email && $password){ 
           $user = R::findOne('user', "email = ?", [$email]);

            if ($user) {
                if (password_verify($password, $user->password)) {
                    foreach ($user as $k => $v) {
                        if (!$k != 'password') {
                            $_SESSION['user'][$k] = $v;
                        }
                    }
                    return true;
                }
            }
        } 
        
        return false;
    }


    public static function checkAuth() :bool
    {
        return isset($_SESSION['user']);
    }

}