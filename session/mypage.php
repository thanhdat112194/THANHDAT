<?php
session_start(); 
try{
    error_reporting(0);
if(!$_SESSION["name_user"]){
  
  throw new Exception("<strong>error 404</strong>");
}
}catch(Exception $e){
  echo $e->getMessage();
  die();
}

?>
<h1>my account</h1>

<?php




echo "<p>";
echo  $_SESSION["name_user"];
echo "</p>";

echo "<p>";
echo  $_SESSION["pass"];

echo "</p>";

// session_unset //remove session
?>

<form action="mypage.php" method="post">
<input type="submit" name="submit">LOGOUT
</form>
<?php
if(isset($_POST["submit"])){

    
    session_unset();
    header("location: ./index.php");
}
?>