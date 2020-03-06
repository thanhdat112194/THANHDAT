

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
     <input type="text" name="surname" value="
     
     <?php
     
     if(mycookie('cookie_surname')){
        echo mycookie('cookie_surename');
      } 
      ?>
     ">
     <smail>age</smail>
     <input type="text" name="age" value="
     
     <?php
     
     if(mycookie('cookie_age')){
        echo mycookie('cookie_age');
      } 
      ?>
     ">
<smail>id</smail>
 <input type="text" name="id_" value="
     
     <?php
     
     if(mycookie('cookie_id')){
        echo mycookie('cookie_id');
      } 
      ?>
     ">
 <smail>email</smail>
 <input type="email" name="email" value="
     
     <?php
     
     if(mycookie('cookie_email')){
        echo mycookie('cookie_email');
      } 
      ?>
     ">
<smail>pass</smail>

     <input type="password" name="pass">
    <smail>remember me 10 min </smail>
     <input type="checkbox" name="check" value="
     
     <?php
     
     if(mycookie('cookie_check')){
        echo mycookie('cookie_check');
      } 
      ?>
     ">
     <input type="submit" name="sub">
</form>
<?php

if(isset($_POST["sub"])){
      $cookie_name = $_POST["name"];
      //we put in cookie 
     // setcookie("cookie_name",$cookie_name,time()+50,"/");
      //50 secund
      //  '/'  you can use cookie other place 
      echo  "my_firstname ".$_POST["name"];
      echo "<br>";
      setcookie("cookie_name",$cookie_name,time() + (86400 * 30));
}

if(isset($_POST["sub"])){
     $cookie_surename = $_POST["surname"];
     echo"my_surename ".$_POST["surname"];
     echo "<br>";
}
if(isset($_POST["sub"])){
     $cookie_age= $_POST["age"];
     echo"my_age ".$_POST["age"];
     echo "<br>";
}
if(isset($_POST["sub"])){
     $cookie_id = $_POST["id_"];
     echo"my_id ".$_POST["id_"];
     echo "<br>";
}
if(isset($_POST["sub"])){
     $cookie_email = $_POST["email"];
     echo"my_email ".$_POST["email"];
     echo "<br>";
}
if(isset($_POST["sub"])){
     $cookie_check = $_POST['check'];
     echo "This wiil be content in 10 minutes";
}
if(isset($_POST["sub"])){
     $cookie_text1 = $_POST["surname"];
     echo $_POST["surname"];
}
//   a cookie is a small file with maximum size of 4kb that the web /////server  stores on the client computer
//  how use cookie";


?>