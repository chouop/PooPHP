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

	//nous executon une requete sur la bade données avec la requetes sql
	$result = mysqli_query($this->connection, $sql);
	//si les lignes selectionnes est superieur a zero on creer un tableau
	$this->confirm_query($result);

	//if(mysqli_num_rows($result)>0){
	echo'<table width="200" border="1" cellspacing="0" cellpadding="1">'."\n";

	while ($row = mysqli_fetch_array($result)){//pour chaque cellule de mon tableau je recupere la ligne

echo "<tr><td>";
echo($row["id"]);
echo("</td><td>");
echo($row["username"]);
echo("</td><td>");
echo($row["password"]);
echo("</td><td>");
echo($row["first_name"]);
echo("</td><td>");
echo($row["last_name"]);
echo("</td></tr>\n");

}
echo "</table>\n";
			
	//}
  }
  
  

//To develop.

	
}
//creation d'un objet database
/*$database = new Database();
$sql = "SELECT * FROM users";
$database-> query($sql);*/

?>
