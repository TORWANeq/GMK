<?php
//error_reporting(E_ALL);
session_start();
session_destroy();
session_unset();
header("Location:index.php");
?>