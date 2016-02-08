 <?php
 
 require_once __DIR__ . '/vendor/autoload.php';
 use DatabaseHandler\connection;
 $con = new connection();
 
 class register {
 
     public function reg_user($uname,$upassword,$uemail) {

 

            $password = md5($password);

            $sql="SELECT * FROM register WHERE name='$uname' OR email='$uemail'";

 

            //checking if the username or email is available in db

            $check =  $con->con_db->query($sql) ;

            $count_row = $check->num_rows;

 

            //if the username is not in db then insert to the table

            if ($count_row == 0){

                $sql1="INSERT INTO users SET name='$name', upass='$password', uemail='$email'";

                $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");

                return $result;

            }

            else { return false;}

        }

 
}
?>