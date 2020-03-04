

<?php require("function.php"); ?>
<form action="cookie.php" method="POST">
<smail>name</smail>
     <input type="text" name="name" value="
     <?php
      if(mycookie('cookie_name')){
        echo mycookie('cookie_name');
      } 
      
     ?>
     ">
     <smail>surname</smail>
     <input type="text" name="surname">
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
      $cookie_name = $_POST["name"];
      //we put in cookie 
     // setcookie("cookie_name",$cookie_name,time()+50,"/");
      //50 secund
      //  '/'  you can use cookie other place 
      echo  $_POST["name"];
}
//   a cookie is a small file with maximum size of 4kb that the web /////server  stores on the client computer
//  how use cookie";


?>