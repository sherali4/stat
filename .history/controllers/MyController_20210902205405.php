<?php
namespace app\controllers;
use yii\web\Controller;
class MyController extends Controller
{
    public function actionIndex(){
        //return 'Action Index.';
        return $this->render('index');
        $hi = 'Hello World';
    }
}

?>