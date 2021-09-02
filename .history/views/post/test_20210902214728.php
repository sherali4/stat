<h1>POST CONTROLLER</h1>
<?php
 $names = ['Axmedov','Urinov','Ikromov'];
 //return $this->render('index',['hello'=>$hi, 'names'=>$names]);
 return $this->render('index',compact('hi','names','id'));
?>