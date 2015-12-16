<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the entry form
 */
class EntryForm extends Model
{
    public $name;
    public $email;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name and password are both required
            [['name', 'email'], 'required'],
            // password is validated by validatePassword()
            ['email','email'],
        ];
    }
  }
