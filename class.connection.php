
 <?php
 
class Conncection {

    
 private $host="127.0.0.1";
 private $user="root";
 private $pass="";
 private $db="hanad";
    
   
     public $db;
     
 
    
    public function __construct(){

        $this->db = mysqli_connect($this->host,$this->user,$this->pass,$this->db);

            if(mysqli_connect_errno()) {

                echo "Error: Could not connect to database.";
                    exit;

        }

        }
   }



?>