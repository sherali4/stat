<?php
namespace app\controllers;
use yii\web\Controller;
class MyController extends AppController
{
    public function actionIndex($id=null){
        //return 'Action Index.';
        $hi = 'Hello World';
        $names = ['Axmedov','Urinov','Ikromov'];
       //return $this->render('index',['hello'=>$hi, 'names'=>$names]);
       return $this->render('index',compact('hi','names','id'));
    }
}

?>