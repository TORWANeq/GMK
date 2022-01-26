<?php
    class TeamMember {
        private $teamName = "";
        private $name = "";
        private $lastName = "";
        private $birthday = "";
        private $mobile = "";
        private $emailAddress = "";
        private $id ="";

        function __construct($id, $teamName, $n, $ln, $bd, $m, $ea) {
          $this->id = $id;
          $this->teamName = $teamName;
          $this->name = $n;
          $this->lastname = $ln;
          $this->birthday = $bd;
          $this->mobile = $m;
          $this->emailAddress = $ea;
        }

        function getName() {
          return $this->name;
        }

        
        function getLName() {
          return $this->lastname;
        }

        
        function getBDate() {
          return $this->birthday;
        }

        
        function getPhone() {
          return $this->mobile;
        }

        
        function getEmail() {
          return $this->emailAddress;
        }

        function getID() {
            return $this->id;
        }

        function getTeamName() {
            return $this->teamName;
        }

        function createJson() {
            return ["teamName" => $this->getTeamName(),"id"=>$this->id, "fName"=>$this->name, "lName"=>$this->getLName(), "birthday"=>$this->birthday, "mobile"=>$this->mobile, "emailAddress"=>$this->emailAddress];
        }
      }
?>