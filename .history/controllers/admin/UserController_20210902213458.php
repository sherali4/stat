<?php
namespace app\controllers\admin;
use ../;
class UserController extends AppController
{
    public function actionIndex(){
      // return 'ADMIN';
       return $this->render('index');
    }
}
?>