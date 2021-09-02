<?php
namespace app\controllers\admin;
use yii\web\Controller;
class UserController extends AppController
{
    public function actionIndex(){
      // return 'ADMIN';
       return $this->render('index');
    }
}
?>