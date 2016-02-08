
 <?php
 
class Conncection {

    private $name = "hanad";
    private $user = "root";
    private $pass = "";
    private $host = "127.0.0.1";
   
     public $db;
     
 
    
    public function __construct(){
8
        $this->db = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
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