 
 
 
 class register {
 
     public function reg_user($name,$password,$email) {

 

            $password = md5($password);

            $sql="SELECT * FROM register WHERE name='$name' OR email='$email'";

 

            //checking if the username or email is available in db

            $check =  $this->db->query($sql) ;

            $count_row = $check->num_rows;

 

            //if the username is not in db then insert to the table

            if ($count_row == 0){

                $sql1="INSERT INTO users SET uname='$username', upass='$password', fullname='$name', uemail='$email'";

                $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");

                return $result;

            }

            else { return false;}

        }

 
}