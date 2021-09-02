<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;

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
    

<h1>HELLO BASIC</h1>

    <?= $content; ?>  





    <?php $this->endBody() ?>   
</body>
</html>
<?php $this->endPage() ?>