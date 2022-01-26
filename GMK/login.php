<?php
 session_start();
if(!isset($_POST["login"]) || !isset($_POST["password"]) || empty($_POST["login"]) || empty($_POST["password"])) 
{
  echo "nie ustawiono danych";
  exit();
}

 $email=htmlentities($_POST["login"],ENT_QUOTES,"UTF-8");
 $password=htmlentities($_POST["password"],ENT_QUOTES,"UTF-8");
 
 require_once "loginphp.php";
 
 $login=new Login();
 $login->loginUser($email, $password);
 if(isset($_SESSION["logged_data"])) {
  header("Location: index.php");
 }
?>
