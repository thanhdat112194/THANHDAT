<?php 
   //we can use for 0-1000
 // we can creat 4 variables for random 
$num = 0;// 2  2+1+1+2 = 6
$num2 = 0;//1
$num3 = 0;//1
$num4 = 0;//2
   for ($i=0; $i < 1000 ; $i++) { //circle  1 2 3 4 5 6stopet  this work so you under 
    //ayyyhi understand
    // but when put 4 number its will be 4/1000 right? if $i=1000
 //   yes our result will be  1000 in 4 half ok i understand
    //  ok next lesson
    // have you question no thanks

       $rand = rand(1,4);// example 2 4  3 1 4 1
       // i under stand that u random from 1 -4 right 
       // if $rand=1 will be case 1=> num=num+1 => num=1; yes yes have you question but
      // why its can be 234 252 248 i dont understand why 
       // what does this means of 4 half 4/1000
       //when randm  1 
        //let we  use switch ok or if
       switch ($rand) {//if $rand ==1
           case 1:
               $num=$num+1; // or $num++ ok
               //in for  1000  half 4/1000  and 
               //how many put in 1 its  give in $num 
               break;
           case 2:
                $num2++;
                break;
           case 3:
                 $num3++;
                  break;
           case 4:
                 $num4++;
                    break;
           default:
            echo   "uncorrect";
               break;
       }
   }

$rand = [$num,$num2,$num3,$num4];
sort($rand);//ok
print_r($rand);
?>