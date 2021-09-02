<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    
<div class="wrap">
    <div class="container">
       <ul class="nav nav-pills">
           <li role="presentatsion" class="active"><?= Html::a("Главная", $url, $options = [])?></li>
           <li role="presentatsion"><a href="#">about</a></li>
           <li role="presentatsion"><a href="#">about</a></li>
       </ul> 
        <?= $content; ?>  
        
    </div>
</div>








    <?php $this->endBody() ?>   
</body>
</html>
<?php $this->endPage() ?>