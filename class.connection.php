
 <?php
 
class Conncection {

    
 $host="127.0.0.1";
 $user="root";
 $pass="";
 $db="hanad";
    
   
     public $db;
     
 
    
    public function __construct(){
8
        $this->db = mysqli_connect($host,$user,$pass,$db);
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