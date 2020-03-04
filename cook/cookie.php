

<?php require("function.php"); ?>
<form action="cookie.php" method="POST">
<smail>name</smail>
     <input type="text" name="name" value="
     <?php
      if(mycookie('cookie1_name1')){
        echo mycookie('cookie1_name1');
      } 
      
     ?>
     ">
     <smail>surname</smail>
     <input type="text" name="surname" value="
     <?php
     if(mycookie('cookie_text1')){
          echo mycookie('cookie_text1');
     }
     ?>
     ">
     <smail>age</smail>
     <input type="text" name="age">
<smail>id</smail>
 <input type="text" name="id_">
 <smail>email</smail>
 <input type="email" name="email">
<smail>pass</smail>

     <input type="password" name="pass">
    <smail>remember me 10 min </smail>
     <input type="checkbox" name="check">
     <input type="submit" name="sub">
</form>
<?php

if(isset($_POST["sub"])){
      $cookie_name1 = $_POST["name"];
      //we put in cookie 
     // setcookie("cookie_name",$cookie_name,time()+50,"/");
      //50 secund
      //  '/'  you can use cooie other place 
      echo  $_POST["name"];
}
if(isset($_POST["sub"])){
     $cookie_text1 = $_POST["surname"];
     echo $_POST["surname"];
}
//   a cookie is a small file with maximum size of 4kb that the web /////server  stores on the client computer
//  how use cookie";


?>