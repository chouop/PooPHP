<?php
include("user.php");

/*$database = new Database();

$valeur= escape_string("1");
$sql = "SELECT * FROM users WHERE id=$valeur";
$database-> query($sql);*/
$alluser= new User();
$alluser-> find_all_users();
?>