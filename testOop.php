<?php
include("user.php");

$database = new Database();

$alluser= new User();
//$alluser-> find_all_users();
$alluser-> find_user_by_id("2");

?>