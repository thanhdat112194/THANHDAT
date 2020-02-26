
  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  	<style type="text/css">
  		
  	</style>
  </head>
  <body>
    <h1>What is </h1>
<?php

//where ís your homework
//php function
// PHP has a lot of built-in functions that can be called directly, from within a script, to perform a specific task.
// it is possible to create your own functions.
 //do you know it  cAN YOU CREATe MINI FUNCTION?


 function myfunction(){
  return "hello my function";
}
//echo myfunction();
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
// function myrev($r,$l){//r its show strrev and $l show length  ok
//     $res = "";
//        for ($i=strlen($r)-1; $i >=0 ; $i--) { 
//              $res .= $r[$i];
//        }
//        if($l=="len"){
//             $arr = [0=>$res,1=>"length=>".strlen($r)];
//             return $arr;
//        }elseif (empty($l)) {
//            return $res;
//        }
   
// }
// //if i write len 
// $myres = myrev("hello function","len");
// print_r($myres);
// $string = "hello,function";
// $convert =  explode(",",$string);//convert string to array
// print_r($convert);
// echo "<br>";
//question do you try it no ?you should creat you function 

//it create  explode(); you under yes but i dont understand what u want
//you create function that can  convert string to array  aha
//how working this function 
// just like funtion explode we separated word by "" or , .
//its dont mean "*"its can be different
//ok yes
//do you want to try 
//you can use for 
//if you write it in outside 
// you can use for 
// $str = "hello,function";
 //$le = length($str);
function myexplode($s,$cut){

    $string = "";
    $result = []; //what is that
//global $le;
 for($i=0;$i<strlen($s);$i++){
   $string .=$s[$i];
       if($s[$i]==$cut){
           $result[]=$string;
           $string=""; a
        }
  }
  $result[]=$string;
return $result;

 
    // you dont use this explode dd
  }//--end function
 $newexplode = myexplode("hello function"," ");
print_r( $newexplode);
//ok you can write...write inside for?? your question ok no qes


//--------------




// What is an Exception
// With PHP 5 came a new object oriented way of dealing with errors.
// Exception handling is used to change the normal flow of the code execution if a specified error (exceptional) condition occurs. This condition is called an exception.

// This is what normally happens when an exception is triggered:

// The current code state is saved
// The code execution will switch to a predefined (custom) exception handler function
// Depending on the situation, the handler may then resume the execution from the saved code state, terminate the script execution or continue the script from a different location in the code
// We will show different error handling methods:
// Basic use of Exceptions
// Creating a custom exception handler
// Multiple exceptions
// Re-throwing an exception
// Setting a top level exception handler
// Note: Exceptions should only be used with error conditions, and should not be used to jump to another place in the code at a specified point.
//-----------
// Try, throw and catch
// To avoid the error from the example above, we need to create the proper code to handle an exception.

// Proper exception code should include:

// try - A function using an exception should be in a "try" block. If the exception does not trigger, the code will continue as normal. However if the exception triggers, an exception is "thrown"
// throw - This is how you trigger an exception. Each "throw" must have at least one "catch"
// catch - A "catch" block retrieves an exception and creates an object containing the exception information
 //echo strrev("Hello World!");

?>  


</div>








<p></p>
  </body>
  </html>

