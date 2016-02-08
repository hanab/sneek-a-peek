
 <?php
 
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'hanad');
 
class Conncection {

    

   
     public $db;
     
 
    
    public function __construct(){
8
        $this->db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
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