<?php
 
 namespace DatabaseHandler;
  /** load using composer autoload */
  require_once __DIR__ . '/../vendor/autoload.php';
  use DatabaseHandler\connection;
  /** a class to register a user can be extended to add functionalities such as login and logout */
  class register {
    /** public fun to perform registration */
     public function reg_user($name,$pass,$uemail) {
            /** define an obj of type connection */
            $con = new connection();
            /** encrypte the password */
            $password = md5($password);
            /** check if someone with this username or email already exists */
            $sql="SELECT * FROM register WHERE username='$name' OR email='$uemail'";
            
            $check = mysqli_query($con->con_db,$sql);

            $count_row = $check->num_rows;

             if ($count_row == 0){
                /** if doesnt exist insert to the database */
                $sql1="INSERT INTO register SET username='$name', password='$pass', email='$uemail'";

                $result = mysqli_query($con->con_db,$sql1) or die(mysqli_connect_errno()."Data cannot be inserted");

                return $result;

              }

            else { return false;}

        }
}
?>