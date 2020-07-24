<?php 
session_start(); //to ensure you are using same session
require_once "../../include/function.php";

//Reset OAuth access token
//$google_client->revokeToken();
session_destroy(); //destroy the session
redirect_to("index.php"); //to redirect back to "index.php" after logging out
exit(); 
?>