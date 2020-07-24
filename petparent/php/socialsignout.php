<?php
require_once "../include/vendor/autoload.php";

$google_client = new Google_Client();

$google_client->setClientId("1080146652417-27m4c0dgv8t79cq81usmq5lo4hck0gdi.apps.googleusercontent.com");
$google_client->setClientSecret("ZzfNHo9u8PWDWLpKNvIW3k25");
$google_client->setRedirectUri("http://localhost/MyFurries/php/socialsignin.php");
$google_client->addScope("email");
$google_client->addScope("profile");
session_start();

$google_client->revokeToken();
session_destroy();

echo "Logged Out";
?>