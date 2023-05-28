<?php 

namespace app\models;
use RedBeanPHP\R;

class Register extends \wfm\Model
{

    public array $attributes = [
        'email' => '',
        'password' => '',
        'name' => '',
    ];

    public array $rules = [
      'required' => ['email', 'password', 'name'],
      'email' => ['email'],
      'lengthMin' => [
          ['password', 6],
      ],
  ];


    public function checkUnique($text_error = ''): bool
    {
        $user = R::findOne('user', 'email = ?', [$this->attributes['email']]);
        if ($user) {
            $this->errors['unique'][] = $text_error ?: 'Such user already exists!';
            return false;
        }
        return true;
    }

}