<?php
namespace app\controllers;
use yii\web\Controller;
class MyController extends Controller
{
    public function actionIndex(){
        //return 'Action Index.';
        $hi = 'Hello World';
        $names = ['Axmedov','Urinov','Ikromov'];
       //return $this->render('index',['hello'=>$hi, 'names'=>$names]);
       return $this->render('index',compact('hi','names'));
    }
}

?>