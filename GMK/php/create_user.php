<?php
    print_r($_POST);
      header("Content-Type: application/json; charset=utf-8");
      if(
          isset($_POST["bday"])  &&
          isset($_POST["email"])  &&
          isset($_POST["fname"]) &&
          isset($_POST["lname"])  &&
          isset($_POST["phone"]) &&
          isset($_POST["team"])
      ) {
          $birthday = htmlentities($_POST["bday"], ENT_QUOTES, "utf-8");
          $emailAddress = htmlentities($_POST["email"], ENT_QUOTES, "utf-8");
          $fName = htmlentities($_POST["fname"], ENT_QUOTES, "utf-8");
          $lName = htmlentities($_POST["lname"], ENT_QUOTES, "utf-8");
          $mobile = htmlentities($_POST["phone"], ENT_QUOTES, "utf-8");
          $team = htmlentities($_POST["team"], ENT_QUOTES, "utf-8");

          require_once '../loginphp.php';
          require_once "TeamMember.php"; 
  
          require_once "userManagment.php";
          $addMember = new UserManagment();
          $addMember->addUserToTeam($team, $fName, $lName, $mobile, $birthday, $emailAddress);
        }


      
?>