<?php

//  1 quiz 
//1
// inside array  have the string "node", this string  change "PHP"
//you should use for count
$change = [5,9,22,36,75,98,100,"node",12,"g"];
$a= count($change);
// echo $a;
for($i=0;$i<$a;$i++){
  if($change[$i]=="node"){
    $change[$i] = "PHP";
  }//its dont function
}
print_r($change);
 


//2
//if an array has a string ''PHP'', delete next elements
// $del = [12,55,47,58,45455,1,2,"php","python","node"]; 
// $b= count($del);
// for($i=0;$i<$b;$i++){
//   if($del[$i]=="php"){
//     $del[$i]= "";
//   }
// }
// print_r($del);//tye next
//3
//you should inside array  look for min and max after (min+max)
$num = [5,7,10,3,2,12,9,11,4];
//try it home 
$e=count($num);
for ($j=0; $j <$e; $j++) {//where your $a dd  
    for($i=0;$i<$e-1;$i++){
          if($a[$i]<$a[$i+1]){//for next element you must write $i+1 but you write $i=$i+1
            //I WROTE $i++ is that true when 
            $tmp=$a[$i];            $a[$i]=$a[$i+1];
            $a[$i+1]=$tmp;
          }

    }
}
print_r($num);

//4
//you should change "bye" to  "hello"; 
echo "<br>";
$str = "bye world";

// echo $c; you cAN USE explode
$str1 = explode(" ",$str);
// print_r($str1);
//you can only change [0]
 //must by string and $str ok try 
    $str1[0]="hello";
  $str = $str1[0]." ".$str1[1];
  echo $str;
//5 
//you should string  convert to integer numbers
$str = "555";
$str = (int)$str;
// $str1=$str;
//var_dump($str);
///6
//Fill the array with numbers from 10 to 1 using a for. 
$a=[];
for ($i=10;$i>=1;$i--) {
    $a[] =$i;
  }
//var_dump($a);
echo "<br>";
//7
  //Check that it ends in ".jpg" or ".png" If it is true  return true else 'wrong format'
$img = "image.jpg";//ok

$a = substr($img,-4);
if($a==".jpg" || $a==".png"){
  echo "true";
}else{

  echo "wrong format";
}


?>