
 <?php
 
class Conncection {

    public $db;
    protected $db_name = "hanad";
    protected $db_user = "hanad";
    protected $db_pass = "iloveprogramming";
    protected $db_host = "mysql.metropolia.fi";
 
    
    
    public function __construct(){
8
        $this->db = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
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