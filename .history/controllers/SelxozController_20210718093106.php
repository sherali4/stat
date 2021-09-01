<?php


namespace app\controllers;


use app\models\MyContact;
use yii\web\Controller;
use Yii;

class SelxozController extends Controller
{
    public $defaultAction = 'xisobot';

    public function actionIndex()
    {
        return 'Axmedov Sherali Isoqovich';
    }

    public function actionXisobot()
    {
        $telegram = 'Sherali Axmedov';
        $massiv = ['Sherali Axmedov', 'Urinov Baxodir', 'Zubaydullayev Baxodir'];
        //   return 'sherai';
        return $this->render('sher', ['telegram' => $telegram, 'massiv' => $massiv]);
    }

    public function actionBaza()
    {
       // return 'DSN';
        $command= Yii::$app->db->createCommand("select * from person order by id desc");
        $result =$command->queryAll();
        return $this->render('index',['data'=>$result]);
    }
}
