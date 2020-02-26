<?php
$r =  "recursive function php
a recursive function is a function that calls itself;
Care must be taken in php ,however,as your code must not carry out 
a certain number of recursive function calls 
there must be a mechanism (if statement)that stops the recursion after
the desired result has  been found 
 ";
// Example
////our recursive function 
// function recursive($n){
// // print out the number
//     echo $n,"<br>";
//     if($n<10){
//         return recursive($n+1);
// //call the function again.increment number  by one 
//     }
// }
// //call our recursive funcion 
// recursive(1);


// function recursive($a){
//     echo $a." ";
//     if($a<50){
//         return recursive($a+5);
//     }
// }
// recursive(7);



?>
<?php
//multi_table
function multi_table($num,$a = 10){//$a have defaults value  
  echo  $res = $num*$a."<br>";
   if($a<1){
       return 1;
   }
 multi_table($num,$a-1);
}
 multi_table(9);
?>

