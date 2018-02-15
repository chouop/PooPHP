<?php
include("database.php");
$database = new Database();
$sql = "SELECT * FROM users";
$database-> query($sql);
?>