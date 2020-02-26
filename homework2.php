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
     width: 400px;
     height: 50px;
     margin: 0 auto;
     background-color: yellow;
 }
 #d2{
    border: 1px solid black;
     width: 300px;
     height: 40px;
     background-color: black;
     height: 40px;
 }
 #d3{
     width: 300px;
     height: 40px;
     background-color: white;
     height: 40px;
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
for($j=0;$j<9;$j++){
echo "<tr id='d1'>";

for($i=0;$i<9;$i++){
    // if($i==0&&$j==1){
    //     echo "<td id='d3'>";
    //     echo 1;
    //     echo "</td>";
    // }elseif($i==0&&$j==0){
    //     echo "<td id='d3'>";
    //     echo "";
    //     echo "</td>";
    // }

    if(($j+$i)%2==0){
    echo "<td id='d1'>";
    // echo $number++;
    echo "</td>";
    }
    else {
        echo "<td id='d2'>";
        // echo $number++;
        echo "</td>";
    // creat new file please
    
  
    

}

echo "</tr>";
}

echo "</table>";

?>

</body>
</html>