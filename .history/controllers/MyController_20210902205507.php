<?php
namespace app\controllers;
use yii\web\Controller;
class MyController extends Controller
{
    public function actionIndex(){
        //return 'Action Index.';
        $hi = 'Hello World';
        return $this->render('index',['hello'=>$hi]);
       
    }
}

?>