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

//To develop.
}
//creation d'un objet database
$database = new Database();


?>
