<?php
"you should create error in myexplode 
example
you should change this error ok ok";


function myexplode($s,$cut){
//you create if here
function check($a,$b){
  if(!is_stirng($a) AND !is_string($b)){
    throw new Exception ("Value is not impossible");
  }
  return [$a,$b];
}
try{

}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
    $string = "";
    $result = []; //what is that
//global $le;
 for($i=0;$i<strlen($s);$i++){
   $string .=$s[$i];
       if($s[$i]==$cut){
          $string = substr($string,0,-1);//its end element 
          //substr what is this its cut string we use it
            $result[]=$string;
            $string=""; 
          
         
        }
       
  }
  $result[]=$string;
//   how can we fix it
return $result; //i understand but i ask that 
// $result = [] is the array right?yes how we change string to  array

 
    // you dont use this explode dd
  }//--end function

//my error 
//---------------






?>