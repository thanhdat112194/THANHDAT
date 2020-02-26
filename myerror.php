<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .myerror{
             border:1px solid black;
             width:300px;
             height:auto;
             color:red;
       }
    </style>
</head>
<body>
    <?php
//      $b = "friend";
//      $a = "hello {$b}s";
//      echo $a;
//    die;

         function myerror($a,$b){
            if(!is_numeric($a) || !is_numeric($b)){
        throw new Exception("<div class=myerror>({$a}) and ({$b}) must be number and this my error</div>");
                echo "<div class=myerror>error<div>";
            }
            return $a + $b; 
          }
      try{//take this error 
      error_reporting(0);//all error = 0 what does this mean = 0 ??out/??
           echo myerror(hgjgjghj,5);
    }catch(Exception $error){

            echo $error->getMessage();//output our message
    }finally{
         echo  "end";
    }

    ?>
</body>
</html>