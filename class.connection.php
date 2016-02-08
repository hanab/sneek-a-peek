
 <?php
 
/*class Conncection {

    public $db;
    protected $db_name = "hanad";
    protected $db_user = "hanad";
    protected $db_pass = "iloveprogramming";
    protected $db_host = "mysql.metropolia.fi";
 
    
    
    public function __construct(){
8
        $this-&gt;db = new mysqli($this-&gt;db_host, $this-&gt;db_user, $this-&gt;db_pass, $this-&gt;db_name);
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
 */
$host="localhost";
$user="root";
$pass="";
$db="hanad";
// connect to the database
$con=mysqli_connect($host,$user,$pass,$db);

?>