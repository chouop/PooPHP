<?php
require_once("database.php");

class User {
//This method find all user in database.
public static function find_all_users(){
global $database;
//$database = new Database();
$sql = "SELECT * FROM users";
$database-> query($sql);

//To develop, you can use the query() method from database class.
	}
public static function find_user_by_id($user_id){
	global $database;
	$sql = "SELECT * FROM users WHERE id = '$user_id'";
	$database-> query($sql);
	}
}
/*$alluser= new User();
$alluser-> find_all_users();*/
?>