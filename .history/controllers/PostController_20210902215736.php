<?php
namespace app\controllers;
use app\controllers;

class PostController extends AppController

    {
        public $layout = 'post'
       public function actionTest()
       {
        $names = ['Axmedov','Urinov','Ikromov'];
       print_r($names);
       var_dump($names);
       return $this->render('test');
       }
    }
?>