<?php
namespace DatabaseHandler;
/** a class to connect to the mysql database on the local machine */

class connection {

  /** the local host variable can be defined as constant as well */
 private $host="127.0.0.1";
 /** the user name of the database */
 private $user="root";
 /** the password for the database */
 private $pass="";
 /** the name of the database where i want to create the table */
 private $db="hanad";
 /** a connection variable to be accessed by other classes to connect to DB */
 public $con_db;
      /** construct connection obj by seeting its public property */
   public function __construct(){
       
        $this->con_db = mysqli_connect($this->host,$this->user,$this->pass,$this->db);

            if(mysqli_connect_errno()) {

                echo "Error: Could not connect to database.";
                    exit;

        }
        else {
        echo "succesfully connected to DB";
        
        }

        }
   }



?>

