<?php 

namespace app\controllers;

use app\models\Login;
use app\models\Register;
use wfm\Controller;
use RedBeanPHP\R;



class LoginController extends Controller
{

    public function indexAction()
    {

        $title[0] = 'Login form';
        $this->set(['title'=> $title]);       

        if (Login::checkAuth()) {
            redirect(base_url());
        }

        if (!empty($_POST)) {
            if ($this->model->login()) {
                $_SESSION['success'] = '<p class="form-success">You have successfully logged in.</p>';
                $_SESSION['user'] = true;
                $_SESSION['firework'] = true;

                redirect(base_url());
            } else {
                $_SESSION['errors'] = '<p class="form-errors">Authorisation Error!</p>';
            }
        }

    }

    public function logoutAction()
    {
        if (Login::checkAuth()) unset($_SESSION['user']);

        redirect(base_url());
    }

}