
 <?php
 
class Conncection {

    private $db_name = "hanad";
    private $db_user = "root";
    private $db_pass = "";
    private $db_host = "127.0.0.1";
   
     public $db;
     
 
    
    public function __construct(){
8
        $this->db = mysqli_connect($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
9
            if(mysqli_connect_errno()) {
11
                echo "Error: Could not connect to database.";
12
                    exit;
13
        }
14
        }
15    }



?>