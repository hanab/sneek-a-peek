
 <?php
 
class Conncection {

    public $db;
     $db_name = "hanad";
     $db_user = "root";
     $db_pass = "";
     $db_host = "127.0.0.1";
 
    
    
    public function __construct(){
8
        $this->db = mysqli_connect(db_host,db_user,db_pass,db_name);
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