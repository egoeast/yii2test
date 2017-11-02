<?php
namespace app\models;

use Yii;
use yii\base\Model;

class TestForm extends Model
{
    public $user;
    public $email;

    public function rules()
    {
        return [
            [['user', 'email'], 'required']
        ];
    }
}