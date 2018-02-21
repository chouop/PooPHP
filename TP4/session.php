<?php
 // private $signed_in = false;
 // public $user_id;
 
class Session {// The session must be available every time that application
//is on so let’s create a construct function.
  private $signed_in = false;
  public $user_id;
function __construct() {
	session_start();
	}
}
$session = new Session();
 var_dump($session);
//Try to see the result by var_dump($session).
?>