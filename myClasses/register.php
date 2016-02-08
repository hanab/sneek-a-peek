<?php
 namespace DatabaseHandler;

  require_once __DIR__ . '/../vendor/autoload.php';
  use DatabaseHandler\connection;
  $con = new connection();

 

 
 class register {
 
     public function reg_user($name,$pass,$uemail) {

 

            $password = md5($password);

            $sql="SELECT * FROM register WHERE username='$name' OR email='$uemail'";
            
            global $obj = $con->con_db;
            $check =  $obj->query($sql) ;

            $count_row = $check->num_rows;

 

           
            if ($count_row == 0){

                $sql1="INSERT INTO register SET username='$name', password='$pass', email='$uemail'";

                $result = mysqli_query($con->con_db,$sql1) or die(mysqli_connect_errno()."Data cannot be inserted");

                return $result;

            }

            else { return false;}

        }

 
}
?>