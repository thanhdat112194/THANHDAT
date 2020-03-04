<?php
// "you should create error in myexplode 
// example
// you should change this error ok ok";


function myexplode($s,$cut){
//you create if here
//

  if(!is_stirng($s)){
    throw new Exception("Value is not impossible");
   
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
}//--end function
//after
try{// try must be out put
  error_reporting(0);//we can off php message about error
  $exp = myexplode("hello,my,explode",",");
  print_r($exp);
}catch(Exception $e){
 echo $e->getMessage();
}





?>