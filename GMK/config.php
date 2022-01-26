<?php   
 //database.php  
 class Databases{  
      public $con;  
      public $error;  
      public function __construct()  
      {  
           $this->con = mysqli_connect("localhost", "root", "", "gramiejska");  
           if(!$this->con)  
           {  
                echo 'Database Connection Error ' . mysqli_connect_error($this->con);  
           }  
      }  
      public function insert($table_name, $data)  
      {  
           $values = [];
          for ($i = 0; $i < count(array_values($data)); $i++)
               $values [] = mysqli_escape_string($this -> con, array_values($data)[$i]);
           $string = "INSERT INTO ".$table_name." (`";            
           $string .= implode("`,`", array_keys($data)) . '`) VALUES (';            
           $string .= "'" . implode("','",$values) . "')";  
           
           if(mysqli_query($this->con, $string))  
           {  
                return true;  
           }  
           else  
           {  
                echo mysqli_error($this->con);  
           }  
      }  

      public function insertID(){
         return  $this->con->insert_id;
      }
 }  
 ?> 