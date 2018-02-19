<?php
require_once("database.php");

class User {
//This method find all user in database.
public static function find_all_users(){
global $database;
$database = new Database();
$sql = "SELECT * FROM users";
$database-> query($sql);

//To develop, you can use the query() method from database class.
	}
}
/*$alluser= new User();
$alluser-> find_all_users();*/
?>