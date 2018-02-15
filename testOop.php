<?php
include("database.php");
$database = new Database();

$valeur= escape_string("1");
$sql = "SELECT * FROM users WHERE id=$valeur";
$database-> query($sql);
?>