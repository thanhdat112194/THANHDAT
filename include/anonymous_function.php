<?php

$people = [ //bread 
     [
          'name' => "Tom",
           "id" =>  "125",
           "age" =>  "25",
          "email" => "tom@mail.ru"
     ],
     [
        'name' => "jon",//cut ok
         "id" =>  "169",
         "age" =>  "31",
        "email" => "jon@mail.ru"//cut
    ],
    [
        'name' => "gogo",
         "id" =>  "678",
         "age" =>  "42",
        "email" => "gogo@mail.ru"
    ],//more .......

];
$mobile_product = [
           [
               "model"=>"sumsung e250",
               "colore"=> "red",
                "battery"=>"2500",
                "price"=>"100" 
           ],
           [
            "model"=>"nokia 5",
            "colore"=> "black",
             "battery"=>"3500" ,
             "price" => "150"
          ]

];
$model= [];
foreach($mobile_product as $mopdt){
    $model[] = [
                 "m" =>$mopdt["model"],
                 "p" =>$mopdt["price"] 
        
               ];
}
//its anonymous function
 function knife($people,$cut){
    $id = [];
    foreach($people as $value){//knife 
        $id[] = $cut($value);
    }
    return $id;
 }
 //we can output our function

 $id =  knife($people,function($id_number){
    return  $id_number["id"];
});
$age = knife($people,function($age_number){// why do u know cut should be function ??
    return  $age_number["age"];
});
var_dump($age);




die;
$age = [];
foreach($people as $pp){//knife 
    $age[] = $pp["age"]; 
}
$colore = [];
foreach($people as $pp){//knife 
    $colore[] = $pp["colore"]; 
}
//the code will repeat ok its 
//var_dump($id,$age);

 


?>