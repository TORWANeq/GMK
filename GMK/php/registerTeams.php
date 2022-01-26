<?php
include '../config.php'; 

class RegisterPerson {
    private $fName; 
    private $lName;
    private $phone;
    private $date;
    private $email;
    
    function __construct($n, $l, $p, $d, $e) {
        $this->fName = $n;
        $this->lName = $l;
        $this->phone = $p;
        $this->date = $d;
        $this->email = $e;
    }

    function getFName() {
        return $this->fName;
    }

    function getLName() {
        return $this->lName;
    }

    function getPhone() {
        return $this->phone;
    }

    function getDate() {
        return $this->date;
    }

    function getEmail() {
        return $this->email;
    }

    function getData($id) {
        return [
            "team" => $id,
            "name" => $this->getFName(),
            "surname" => $this->getLName(),
            "phone" => $this->getPhone(),
            "date" => $this->getDate(),
            "email" => $this->getEmail() 
        ];
    }
}

class CreateTeam {
    private $data;

    function __construct() {
        $this->data = new Databases();  
    }

    private function createTeam($team) {
        if($this->data->insert('team_name', array('team_name'=>$team)))  
           $id_insert = $this->data->insertID();
        else $id_insert = -1;    
        return $id_insert;
    }

    function create($team, $post) {       
        $id_insert = $this->createTeam($team);
        $success_message = '';  
        $len = count($post);
        if ($id_insert < 0) {
            echo json_encode(["error"=>1, "error_msg" => "Two Teams contain the same name"],true);
            return;
        }

        for ($i=0;$i<$len;$i++) {
            $index = $post[$i];
            if(!$this->data->insert('team_register', $index->getData($id_insert))){
                echo json_encode(["error"=>1, "error_msg"=>"Fatal error while execute insert command"],true);
            }      
        }
        
        echo json_encode(["status"=>"success"]);      
    }
}
?>