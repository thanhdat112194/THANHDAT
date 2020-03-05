<?php
//    what is session?
"php session is used to store and pass information from one page to
another temporarily (unil user close the website)
Php session creates unique user id for each browser to recognize
the user and avoid conflict between multiple browsers
";
session_start();
?>
<form action="index.php" method="post">
  <label for="name_user">name_user</label>
  <input type="text" name="name_user">
  <label for="massage">massage</label>
  <input type="password" name="pass">
  <input type="submit" name="sub">
 </form>
<?php
  if(isset($_POST["sub"])){
      $_SESSION["name_user"]=$_POST['name_user'];
      $_SESSION["pass"]=$_POST['pass'];
       header("location: ./mypage.php");
    
  } 


?>