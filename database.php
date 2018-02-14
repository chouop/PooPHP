<?php
require_once("config.php");
class Database {
//variabel connection.
public $connection;
//create method open_db_connection.
public function open_db_connection(){
	$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
//Test the connection by mysqli_connect().
/*if($connection) {
echo "true";
}else {
	echo "die";
}*/
		if ($connection->connect_error) {
    		echo 'connexion impossible... :'.$connection->connect_error;
		}
	else {
   		 echo 'connexion reussie : '.$connection->host_info;
		}
	}
}
$str = new Database();
$str-> open_db_connection(); 
//Test method open_db_connection.

?>