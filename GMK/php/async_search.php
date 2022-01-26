<?php
    header("Content-Type: application/json; charset=utf-8");
    if(isset($_POST["search_value"]) && !empty($_POST["search_value"])) {
        $search = htmlentities($_POST["search_value"], ENT_QUOTES, "utf-8");

        require_once '../loginphp.php';
        require_once "TeamMember.php";
        require_once "searchAlgo.php";

        $searchClass = new SearchAlgo();
        if(isset($_POST["all_records"]) && $_POST["all_records"] == true) 
            $response = $searchClass->getAllUser();
        else 
            $response = $searchClass->searchUser($search);

        echo json_encode($response,true);
    }
?>