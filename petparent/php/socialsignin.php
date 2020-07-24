<?php
include('include/config.php');

$google_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

  $_SESSION["logged"] = true;
  if(!empty($data['given_name']))
  {
    $_SESSION["logged"] = true;
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['given_name']) && !empty($data['family_name']))
  {
   $_SESSION['name'] = $data['given_name']." ". $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['email'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

 $google_button = ''.$google_client->createAuthUrl();
}

?>