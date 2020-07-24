<?php 
include "../include/function.php";
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
//echo "Logged out";
redirect_to("vet/index.php"); //to redirect back to "index.php" after logging out
exit(); 
?>