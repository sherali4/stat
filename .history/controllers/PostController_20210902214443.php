<?php
namespace app\controllers;
use app\controllers;

class PostController extends AppController

    {
       public function actionTest()
       {
        return $this->render('test');
       }
    }
?>