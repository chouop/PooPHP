<?php
require_once("config.php");


//include("init.php");
class Database {
//variabel connection.
public $connection;

//create the constructor of class Database
function __construct(){

		$this -> connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	
}

//create method open_db_connection.
public function open_db_connection(){
	

		if ($this->connection->connect_error) {//si la connection a la base de donnée est imposible alors:
    		echo 'connexion impossible... :'.$this->connection->connect_error;
		}
	else {//si la connection est possible alors:
   		 echo 'connexion reussie : '.$this->connection->host_info;
		}
	}

	//create method query. The input is the result of the query and
//output die(“Query Failed”). It must be a private method, do
//you know why?

 private function confirm_query($result){
        if(!$result){
            die("Query Failed" . mysql_error());
        }
    }

    //create method escape_string. The input is a string and output
//string.
public function escape_string($string) {

//To develop, you can use the mysqli_real_escape_string()
	$strin = mysqli_real_escape_string($this->connection, $string);
	return $strin;
}
//Test it
public function query($sql) {

	//nous executon une requete sql sur la base données 
	$result = mysqli_query($this->connection, $sql);
	//si les lignes selectionnes est superieur a zero on creer un tableau
	$this->confirm_query($result);

	return $result;
			
	//}
  }
  
  

//To develop.

	
}


?>
