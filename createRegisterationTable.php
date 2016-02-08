<?php

// Connect to the MySQL database  
 require_once __DIR__ . '/vendor/autoload.php';
 use DatabaseHandler\connection;

 if (class_exists('Connection')) {
    $con = new Connection();
}
else
{
echo " ERROR:";
}
 

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