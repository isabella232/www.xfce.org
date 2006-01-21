<?php

function microtime_float()
{
	list($usec, $sec) = explode(" ", microtime());
	return ((float)$usec + (float)$sec);
}
$time_start = microtime_float();

include_once ("include/functions.php");
include_once ("include/arrays.php");
include_once ("include/header.php");
include_once ("include/footer.php");
include_once ("include/frontpage.php");
include_once ("include/content.php");

# Load session valiables
session_start();

# User language
$userlang = substr(trim($_SERVER["HTTP_ACCEPT_LANGUAGE"]), 0, 2);
if (!in_array ($userlang, array_keys($languages)))
	$userlang = "en";

# Get saved variables
$layout = UserVariable ("layout", $layouts, "normal");
$lang = UserVariable ("lang", array_keys($languages), $userlang);
$lastvisit = UserLastVisit ();

# Get relative url
$uri = $_SERVER["REDIRECT_URL"];
	$uri = trim($uri, '/');
	$uri = strtolower ($uri);
	
#Create webpage
if ($uri == "")
{
	PrintHeader ($uri, $lang, $layout, $languages);
	PrintFrontpage ($lang);
	PrintFooter ($lang);
}
else
{
	$content = GetContent ($uri, $lang);
	PrintHeader ($uri, $lang, $layout, $languages);
	PrintContent ($content);
	PrintFooter ($lang);
}

$time_end = microtime_float();
echo "<!-- Execution time: ". round($time_end - $time_start, 4) ." seconds -->"; 
?>
