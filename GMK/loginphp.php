<?php
error_reporting(E_ERROR | E_PARSE);
class Login {
    static function loginUser(string $login, string $pass) {
      $request = RequestServices::createRequest("Select * From `users` Where login='%s'", $login);
      $result=$request->execute();
      if($result->resultsNumber) {
        $passManager = new PasswordManager();
        $password=$result->results["password"];
        echo $password . " <br>" . $pass;
        if($passManager->verifyPassword($password, $pass)) {
          $user = new UserGlobalData();
          //get user data etc
          $_SESSION["logged_data"] = $user;

          //user logged and get all data what we need
          echo "poprawnie zalogowano";
        } else {
          //pass wasnt corrected
          echo "nie poprawne haslo";
        }
      } else {
        //login wasnt corrected
        echo "nie poprawny login";
      }
    }
  }

  class PasswordManager {
    function verifyPassword(string $password, string $providedPassword) /* -> Bool*/ {
      return password_verify($providedPassword, $password);
    }

    function passwordHash(string $password) /*->String*/ {
     //$password_options = ['cost' => 11,'salt' => mcrypt_create_iv(22,MCRYPT_DEV_URANDOM)];
      return password_hash($password, PASSWORD_BCRYPT );
    }
  }

  class RequestServices {
    private $db;
    private $query  = "";

    private $isConnectedCreated = false;

    private function __construct(string $query,  ...$data) {
      $this->db = @new mysqli("localhost", "root", "", "gramiejska");

      if ($this->db->connect_errno!=0)
    		$this->isConnectedCreated = false;
    	else {
    	 $this->isConnectedCreated = true;

       $len = count($data[0]);
       if ($len > 0) {
          $params = [];
            
          for($i=0;$i<$len;$i++)
          {
            $params[] = mysqli_real_escape_string($this->db,"".$data[0][$i]);
            
          }
          
        
          $this->query= sprintf($query, ...$params);
       } else {
        $this->query = $query;
       }     
     }
    }

    static function createRequest(string $query,  ...$params) /* -> RequestServices*/ {
      return new RequestServices($query, $params);
    }

    function update() {
      if($this->isConnectedCreated) {
        if($res = @$this->db->query($this->query)) {
          return true;
        }else {
          //error
          return false;
        }
      }
    }

    function insert() {
      if($this->isConnectedCreated) {
        if($res = @$this->db->query($this->query)) {
          return $res->insetr_id;
        }else {
          //error
          return -1;
        }
      }
    }

    function execute() /*->RequestResults*/{
      if($this->isConnectedCreated) {
        if($res = @$this->db->query($this->query)) {
          if ($res->num_rows == 1) {
            return new RequestResults($res->num_rows, $res->fetch_assoc());
          } else {
            $results = [];

            while($row = $res->fetch_assoc()){
              $results[]=$row;
            }
            return new RequestResults($res->num_rows, $results);
          }
        }else {
          //error
          return new RequestResults(0,[]);
        }
      }
    }
  }

  class RequestResults {
    public $resultsNumber;
    public $results;

    function __construct($count, $data) {
      $this->resultsNumber = $count;
      $this->results = $data;
    }
  }

  class UserGlobalData {
    private $isLogged = false;
    private $accountType = 0;
    private $user = null;


    function __construct(){
      $this->isLogged = true;
    }

    function setUser(User $user) {
      $this->user = $user;
    }

    function isUserLogged() {
      return $this->isLogged;
    }
  }

  class User {
    private $fName = "";
    private $lName = "";
    private $image = "";

    function __construct(string $fName, string $lName, string $img){
      $this->fName = $fName;
      $this->lName = $lName;
      $this->image = $img;
    }
  }
  ?>