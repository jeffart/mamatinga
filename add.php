

<?php

header('Content-type: text/javascript');

   $json = array(

     'success' => false,
     'result'  =>0

);

if(isset($_POST['first'],$_POST['second']) && (!empty($_POST['first']))){

   $first  = (int)$_POST['first'];
   $second = (int)$_POST['second'];

   $json['success'] = true;

   $json['result'] = $first + $second;

}else {

    $json['success'] = false;

    $json['result'] = 0;

}


echo json_encode($json);