<?php 


namespace app\controllers;

use app\models\Login;
use app\models\Register;
use wfm\Controller;
use RedBeanPHP\R;

/** @property Register $model */

class RegisterController extends Controller
{


    public function indexAction()
    {

      $title[0] = 'Registration form';
      $this->set(['title'=> $title]);

      if(Login::checkAuth()) redirect(base_url());
      

      if (!empty($_POST)) {

          $data = $_POST;
          $this->model->load($data);

          if(!$this->model->validate($data) || !$this->model->checkUnique()){
            
            return $this->model->getErrors();

          }else{ 

            $this->model->attributes['password'] = password_hash($this->model->attributes['password'], PASSWORD_DEFAULT);
            
            if ($this->model->save('user')) {
           
              $_SESSION['success'] = '<p class="form-success">User successfully registered.</p>';

              return redirect(base_url() . '/login');

            } else {

              $_SESSION['errors'] = '<ul class="form-errors"><li>Registration error</li></ul>';

            }

             
          }

          //exit();
      }       
          
    }
}