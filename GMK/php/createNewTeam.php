<?php
// SELECT * FROM team_register AS A RIGHT JOIN `team_name` AS B ON A.team = B.id WHERE 1 
header("Content-Type: application/json; charset=utf-8");

require_once "registerTeams.php";

if(isset($_POST) && !empty($_POST)){
    $class = new CreateTeam();
    // isOK

    $isOK = false;

    $team = htmlentities($_POST['team'], ENT_QUOTES, 'utf-8');
    if (empty($team) || trim($team) == "") {
        //ERROR
        $isOK = false;
    } else {
        $isOK = true;
    }

    // Dowódca

    $name1 = htmlentities($_POST['name1'], ENT_QUOTES, 'utf-8');
    if (empty($name1) || trim($name1) == "") {
        //ERROR
        $isOK = false;
    } else {
        $isOK = true;
    }

    $surname1 = htmlentities($_POST['surname1'], ENT_QUOTES, 'utf-8');
    if (empty($surname1) || trim($surname1) == "") {
        //ERROR
        $isOK = false;
    } else {
        $isOK = true;
    }

    $phone = htmlentities($_POST['phone'], ENT_QUOTES, 'utf-8');
    if (empty($phone) || trim($phone) == "") {
        //ERROR
        $isOK = false;
    } else {
        $isOK = true;
    }

    $date1 = htmlentities($_POST['date1'], ENT_QUOTES, 'utf-8');
    if (empty($date1) || trim($date1) == "") {
        //ERROR
        $isOK = false;
    } else {
        $isOK = true;
    }

    $email1 = htmlentities($_POST['email1'], ENT_QUOTES, 'utf-8');
    if (empty($email1) || trim($email1) == "") {
        //ERROR
        $isOK = false;
    } else {
        $isOK = true;
    }

    $captain = new RegisterPerson($name1, $surname1, $phone, $date1, $email1);

    // 1 druch

    $name2 = htmlentities($_POST['name2'], ENT_QUOTES, 'utf-8');
    if (empty($name2) || trim($name2) == "") {
        //ERROR
        $isOK = false;
    } else {
        $isOK = true;
    }

    $surname2 = htmlentities($_POST['surname2'], ENT_QUOTES, 'utf-8');
    if (empty($surname2) || trim($surname2) == "") {
        //ERROR
        $isOK = false;
    } else {
        $isOK = true;
    }

    $date2 = htmlentities($_POST['date2'], ENT_QUOTES, 'utf-8');
    if (empty($date2) || trim($date2) == "") {
        //ERROR
        $isOK = false;
    } else {
        $isOK = true;
    }
    
    $fsoldier = new RegisterPerson($name2, $surname2, null, $date2, null);


    // 2 druch

    $name3 = htmlentities($_POST['name3'], ENT_QUOTES, 'utf-8');
    if (empty($name3) || trim($name3) == "") {
        //ERROR
        $isOK = false;
    } else {
        $isOK = true;
    }

    $surname3 = htmlentities($_POST['surname3'], ENT_QUOTES, 'utf-8');
    if (empty($surname3) || trim($surname3) == "") {
        //ERROR
        $isOK = false;
    } else {
        $isOK = true;
    }

    $date3 = htmlentities($_POST['date3'], ENT_QUOTES, 'utf-8');
    if (empty($date3) || trim($date3) == "") {
        //ERROR
        $isOK = false;
    } else {
        $isOK = true;
    }

    $ssoldier = new RegisterPerson($name3, $surname3, null, $date3, null);


    // 3 druch

    $name4 = htmlentities($_POST['name4'], ENT_QUOTES, 'utf-8');
    if (empty($name4) || trim($name4) == "") {
        //ERROR
        $isOK = false;
    } else {
        $isOK = true;
    }

    $surname4 = htmlentities($_POST['surname4'], ENT_QUOTES, 'utf-8');
    if (empty($surname4) || trim($surname4) == "") {
        //ERROR
        $isOK = false;
    } else {
        $isOK = true;
    }

    $date4 = htmlentities($_POST['date4'], ENT_QUOTES, 'utf-8');
    if (empty($date4) || trim($date4) == "") {
        //ERROR
        $isOK = false;
    } else {
        $isOK = true;
    }

    $tsoldier = new RegisterPerson($name4, $surname4, null, $date4, null);

    // 4 druch

    $name5 = htmlentities($_POST['name5'], ENT_QUOTES, 'utf-8');
    if (empty($name5) || trim($name5) == "") {
        //ERROR
        $isOK = false;
    } else {
        $isOK = true;
    }

    $surname5 = htmlentities($_POST['surname5'], ENT_QUOTES, 'utf-8');
    if (empty($surname5) || trim($surname5) == "") {
        //ERROR
        $isOK = false;
    } else {
        $isOK = true;
    }

    $date5 = htmlentities($_POST['date5'], ENT_QUOTES, 'utf-8');
    if (empty($date5) || trim($date5) == "") {
        //ERROR
        $isOK = false;
    } else {
        $isOK = true;
    }

    $ffsoldier = new RegisterPerson($name5, $surname5, null, $date5, null);

    if(!isset($_POST["agree"])){
        $isOK = false;
        echo json_encode(["error"=>1, "error_msg"=>"Agree's checkbox isn\'t set"], true);
    }

    if(!isset($_POST["checkbox"])){
        $isOK = false;
        echo json_encode(["error"=>1, "error_msg"=>"Checkbox isn\'t set"],true);
    }

    if($isOK) {
        $class->create($team, [$captain, $fsoldier, $ssoldier, $tsoldier, $ffsoldier]);
        //require_once "../send_form.php";

    } else {
        echo json_encode(["error"=>1, "error_msg"=> "Something went wrong"], true);
    }
    
    exit();
}
?>