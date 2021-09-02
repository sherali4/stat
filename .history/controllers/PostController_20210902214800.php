<?php
namespace app\controllers;
use app\controllers;

class PostController extends AppController

    {
       public function actionTest()
       {
        $names = ['Axmedov','Urinov','Ikromov'];
        //return $this->render('index',['hello'=>$hi, 'names'=>$names]);
        return $this->render('index',compact('hi','names','id'));
        return $this->render('test');
       }
    }
?>