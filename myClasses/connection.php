<?php
namespace DatabaseHandler;


class connection {

  //local host mysql databse variables  
 private $host="127.0.0.1";
 private $user="root";
 private $pass="";
 private $db="hanad";
 //a connection variable to be accessed by other classes to connect to DB
 public $con_db;
     
   public function __construct(){
        // construct connection obj by seeting its public property
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

