<?php
namespace app\controllers;
use yii\web\Controller;
class MyController extends Controller
{
    public function actionIndex(){
        //return 'Action Index.';
        $hi = 'Hello World';
        $name = 'Axmedov','Urinov','Ikromov';
        return $this->render('index',['hello'=>$hi]);
       
    }
}

?>