<?php
// "the include (or require) statement takes all the text/code/markup/ that exists 
// in the  specified file and copies it into the file that uses the include statement
// ";
include "function.php";  //include or include_once
// //yu
// $newexplode = myexplode(dsjadsjdg,",");//and this must be string
// print_r($newexplode);

$r = myexplode("hello,function",",");
print_r($r);



//chua loi ","good

// $str= "hello,function,bye,good";
// echo preg_match_all("/\W/",$str,$match);


// //----------------


?>