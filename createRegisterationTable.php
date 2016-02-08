<?php
// Connect to the MySQL database  
include_once '/connection.php';
require '/vendor/autoload.php';


$con = new Connection();

$sqlCommand = "CREATE TABLE register (
		 		 id int(11) NOT NULL auto_increment,
				 username varchar(24) NOT NULL,
		 		 password varchar(24) NOT NULL,
		 		 email VARCHAR(70) UNIQUE,
                 PRIMARY KEY (id),
		 		 UNIQUE KEY username (username)
		 		 ) ";
if (mysqli_query($con->$con_db, $sqlCommand)){ 
    //echo "Your registration table has been created successfully!"; 
} else { 
    echo " ERROR: registration table has not been created.";
}
?>