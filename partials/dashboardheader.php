<?php
session_start();
require_once "../include/error.php";
require_once "../include/db_connect.php";
require_once "../include/function.php";
//require_once "php/socialsignin.php";
require_once "../petparent/php/dashboard.php";
if(!isset($_SESSION['logged']) && $_SESSION['role']==="Pet Parent")
{
	redirect_to("index.php");
}
   
?>




<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<!-- DESCRIPTION -->
	<meta name="description" content="Tora : Business Agency Multipurpose HTML Template" />

	<!-- OG -->


	<!-- FAVICONS ICON ============================================= -->

	<link rel="icon" type="image/png" href="../ideathon/logo.png	">

	<!-- PAGE TITLE HERE ============================================= -->
	<title>Clean-O-Rama</title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="../assets/css/assets.css">
	<link rel="stylesheet" type="text/css" href="../assets/vendors/calendar/fullcalendar.css">

	<!-- TYPOGRAPHY ============================================= -->
	<link href="oldassets/css/furrie.css" rel="stylesheet" type="text/css">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="../assets1/css/shortcodes/shortcodes.css">
	
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,900;1,700&display=swap" rel="stylesheet">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="../assets1/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assets1/css/dashboard.css">
	<link href="../oldassets/css/tagsinput.css" rel="../stylesheet" type="text/css">




	<link href="../oldassets/css/newfurries.css" rel="stylesheet" type="text/css">
	<link href="../oldassets/css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css">

	<script src="../oldassets/js/cities.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />

</head>


<body class="ttr-opened-sidebar ttr-pinned-sidebar">

	<!-- header start -->
    <?php include "../petparent/navbardashboard.php"; ?>
	<!-- header end -->
	<!-- Left sidebar menu start -->
    <?php include "../petparent/sidebar.php"; ?>
	<!-- Left sidebar menu end -->
