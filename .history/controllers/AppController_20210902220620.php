<?php
    namespace app\controllers;
    use yii\web\Controller;
    class Appcontroller extends Controller
    {
        public function debug($arr)
        {
            echo '<pre>'.print_r($arr,true).'</pre>';
        }
    

    }
        function debug($arr)
        {
            echo '<pre>'.print_r($arr,true).'</pre>';
        }
?>