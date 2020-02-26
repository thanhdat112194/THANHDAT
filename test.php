<?php
$a = "hello"; 
$a = strrev($a);
echo $a;
function myfunction(){
    return "hello my function";
}
echo myfunction();
echo "<br>";
//in the php have more function 
//example  min() max() rand() ...... str_replace() do you know it
//  yeah i knew about it but not all what i need i will search in w3school ^^
//yes but sometimes  need creat your function  because its not in php  ok ok
// we study how create function
$a = "hello"; 
$a = strrev($a);

//strlen its show string length
//but you example  you want to  look your string leng 
function myrev($r){//r its show strrev and $l show length  ok
    $res = "";
       for ($i=strlen($r)-1; $i >=0 ; $i--) { 
         $res .= $r[$i];
       }
       if($r==","){
            $arr = [0=>$res];
            return $arr;
       }elseif (empty($l)) {
           return $res;
       }
     
}
// //if i write len 
$myres = myrev("hello,function");
print_r($myres);
?>