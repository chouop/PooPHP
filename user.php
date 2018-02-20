<?php
require_once("database.php");

class User {
	//Declaration of properties.
public $id;
public $username;
public $password;
public $first_name;
public $last_name;
//This method find all user in database.
public static function find_all_users(){
global $database;
//$database = new Database();
$sql = "SELECT * FROM users";
return self::find_this_query($sql);

//To develop, you can use the query() method from database class.
	}

public static function find_user_by_id($user_id){
	global $database;
	//$sql = "SELECT * FROM users WHERE id = $user_id LIMIT 1";
	
	$the_result_array = self::find_this_query("SELECT * FROM users WHERE id = $user_id ");
		//IF RESULT IS NOT EMPTY RETURN THE FIRST VALUE OF THE ARRAY ELSE RETIRN FALSE
		return !empty($the_result_array) ? array_shift($the_result_array) : false;
	}
//This method can execute all the query. The input is a string
//and output is the result of the query.
public static function find_this_query ($sql){
global $database;

 $result= $database -> query($sql);
 //if(mysqli_num_rows($result)>0){
	//echo'<table width="200" border="1" cellspacing="0" cellpadding="1">'."\n";

 	$tableau= array();
	while ($row = mysqli_fetch_array($result)){//pour chaque cellule de mon tableau je recupere la ligne
		$tableau[] = self::instantation($row);
/*
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
*/
}
//echo "</table>\n";
return $tableau;
}
/*
private static function instantation($the_record){
//you can use the same code that I provide you in the ‘Assigning
//Array Values to Object Properties’ part.
//To develop.
	foreach ($the_record as $key => $value) {
	
		# code...
		$the_record -> $key = $value;
	}
	return $the_record;

	}*/
	public static function instantation($the_record){
//Another way to create user object inside of the user class.
$the_object = new self;
//To develop by using a loop.
//In your loop you must verify that your object has this
//attribute, so you must to create a new method which name is
//has_the_attribute(). You can

foreach ($the_record as $the_attribute => $value) {
	
		if ($the_object ->has_the_attribute($the_attribute)){
		
		$the_object -> $the_attribute = $value;
	}
	return $the_object;

	}

}

public function has_the_attribute($the_attribute){
//get_object_vars — Gets the properties of the given object. Here
//is the class user
$object_properties = get_object_vars($this);
//array_key_exists — Checks if the given key or index exists in
//the array
return array_key_exists($the_attribute,
$object_properties);
	}
}

?>