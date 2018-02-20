<?php
include("user.php");

$database = new Database();

/*$alluser= new User();
//$alluser-> find_all_users();
$alluser-> find_user_by_id("2");*/
//Bring the values from database.
//$found_user = new User();
$found_user = User::find_user_by_id(3);
//$found_user-> find_user_by_id("1");
//Create user object.
$user= new User();
//like this you assign array values to the object properties.
$user->id = $found_user["id"];
$user->username = $found_user["username"];
$user->password = $found_user["password"];
$user->first_name = $found_user["first_name"];
$user->last_name = $found_user["last_name"];
//echo $user->id;
echo $user ->username;

?>