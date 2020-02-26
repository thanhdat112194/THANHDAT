<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     //question 1
     $arr =  ["h","e","l","l","o"];//you should write this reverse
     //ok but you  have example 100000000 element ^^ how  you do  it?
    // i dont know
    // i little help you    you can use for  
    $number = count($arr)-1;//i write it -1 its end elem
    // echo $number;

    // dont know where is the mistake hi
    // ok
  //uncorrect it
  //? why 
    for($i=$number;$i>=0;$i--){
        // if($arr[i]<$arr[$i++]){
        //     $arr[i]=
        // }
        echo $arr[$i];

    }
    //question 2 you undersud
    // your result must be 1,2,3,5,8,13,21,34 ....more 
    // a[0]+a[1]=a[2]
    // $arr1=[1,2,3,5,8,13,21,34];
   // you have not  this nombers
   //you have 50 element ok
   // what you check
   //you can have 2 var
   $num1 = 0;//1,1,2,3
   $num2 = 1;//1,2,3,5 aha just like change position incresing array =.= 
   // ok ^^
    for($i=0;$i<50;$i++){//a circle 1,2,3,4
      
        $tmp = $num1+$num2;
        echo $tmp;//result 1,2,3,5
        $num1 = $num2;
        $num2 = $tmp;

    }
    echo "<br>";
    //you  have hard homework but you should dont  search in internet ok ok
    ///method rand  random number

    $number  =  rand(1,100);//random  number min 1 to max 10
    echo $number;//ok ok
    ///ok ok difficult yes dd h
    //have you question? no thank 
    //when is the next lesson 
    ///i write on fc ok
    //by bye
//a foto
    ?>
</body>
</html>