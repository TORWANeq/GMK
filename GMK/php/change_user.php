<?php
    print_r($_POST);
      header("Content-Type: application/json; charset=utf-8");
      if(
          isset($_POST["birthday"])  &&
          isset($_POST["emailAddress"])  &&
          isset($_POST["fName"]) &&
          isset($_POST["id"])  &&
          isset($_POST["lName"])  &&
          isset($_POST["mobile"])  
      ) {
          $birthday = htmlentities($_POST["birthday"], ENT_QUOTES, "utf-8");
          $emailAddress = htmlentities($_POST["emailAddress"], ENT_QUOTES, "utf-8");
          $fName = htmlentities($_POST["fName"], ENT_QUOTES, "utf-8");
          $id = htmlentities($_POST["id"], ENT_QUOTES, "utf-8");
          $lName = htmlentities($_POST["lName"], ENT_QUOTES, "utf-8");
          $mobile = htmlentities($_POST["mobile"], ENT_QUOTES, "utf-8");

          require_once '../loginphp.php';
          require_once "TeamMember.php"; 
  
          require_once "userManagment.php";
          $addMember = new UserManagment();
          $addMember->changeUser($fName, $lName, $mobile, $birthday, $emailAddress, $id);
      }
?>