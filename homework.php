<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

 #d1{
     border: 1px solid black;
     width: 300px;
     height: 40px;
     margin: 0 auto;
 }
 #d2{
    border: 1px solid black;
     width: 300px;
     height: 40px;
     height: 40px;
 }
 #d3{
    border: 1px solid black;
     width: 300px;
     height: 40px;
     color: yellow;
 }
 #d4{
    border: 1px solid black;
     width: 300px;
     height: 40px;
    color : red;
 }
 #d5{
    border: 1px solid black;
     width: 300px;
     height: 40px;
    color: blue;
 }
 #d6{
    border: 1px solid black;
     width: 300px;
     height: 40px;
    color: pink;
 }
 #d7{
    border: 1px solid black;
     width: 300px;
     height: 40px;
    color: orange;
 }
    </style>
</head>
<body>
    <form action="homework.php" method="post">
    <input type="text" value="number">
    <input type="submit" value="submit">
    </form>

<?php
$number=1;
echo "<table id='d1'>";
for($j=0;$j<5;$j++){
echo "<tr id='d1'>";

for($i=0;$i<4;$i++){
    if($j==0&&$i==0){    
        echo "<td id='d4'>";
        echo $number++;
        echo "</td>";
    }elseif($j==0&&$i==2){
        echo "<td id='d4'>";
        echo $number++;
        echo "</td>";
    }elseif($j==1&&$i==1){
        echo "<td id='d5'>";
        echo $number++;
        echo "</td>";
    }
    elseif($j==1&&$i==3){
        echo "<td id='d3'>";
        echo $number++;
        echo "</td>";
    }
    elseif($j==2&&$i==0){
        echo "<td id='d6'>";
        echo $number++;
        echo "</td>";
    }
    elseif($j==3&&$i==0||$j==3&&$i==1||$j==3&&$i==3){
        echo "<td id='d6'>";
        echo "";
        echo "</td>";
        $number++;

    }
        elseif($j==4&&$i==0||$j==4&&$i==1||$j==4&&$i==2||$j==4&&$i==3){
            echo "<td id='d6'>";
            echo "";
            echo "</td>";
            $number++;
    
    }

    else {
        echo "<td id='d1'>";
        echo $number++;
        echo "</td>";
    }
    
  
    

}

echo "</tr>";
}

echo "</table>";

?>

</body>
</html>