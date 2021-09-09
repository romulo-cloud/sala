<?php
// PHP Hotel Booking, http://www.netartmedia.net/php-hotel-booking
// A software product of NetArt Media, All Rights Reserved
// Find out more about our products and services on:
// http://www.netartmedia.net
// Released under the MIT license
?><?php
define("IN_SCRIPT","1");
error_reporting(0);
session_start();

require("include/SiteManager.class.php");

/// Connect to the website database

$website = new SiteManager();

$website->LoadSettings();
$website->LoadTemplate();

if(isset($_REQUEST["page"]))
{
	$website->check_word($_REQUEST["page"]);
	$website->SetPage($_REQUEST["page"]);
}

$website->Render();
?>