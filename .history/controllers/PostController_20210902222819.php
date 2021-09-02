<?php
namespace app\controllers;
use app\controllers;
use Yii;

class PostController extends AppController

    {
        public $layout = 'post';
       public function actionTest()
       {
        $names = ['Axmedov','Urinov','Ikromov'];
     /*   print_r($names);
       echo '<br>';
       var_dump($names); */
       //var_dump(Yii::$app);
       $this->debug($names);
       return $this->render('test');
       }
    public function actionShow
    }
?>