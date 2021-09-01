<?php


namespace app\models;


use yii\base\Model;

class MyContact extends Model
{
public $name;
public $email;
public function rules()
{
    return [
        [['name','email'],'required'],
        ['email','email']
    ];
}
}