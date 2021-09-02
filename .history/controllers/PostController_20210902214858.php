<?php
namespace app\controllers;
use app\controllers;

class PostController extends AppController

    {
       public function actionTest()
       {
        $names = ['Axmedov','Urinov','Ikromov'];
        print_r($names);
        var_dump($names);
        return $this->render('test');
       }
    }
?>