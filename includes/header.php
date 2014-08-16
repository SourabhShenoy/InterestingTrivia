<?php
	$machine="localhost";
	$user="root";
	$pass="";
	//Establishing Database Connection
	$db=mysql_connect($machine,$user,$pass);
	if(!$db)
	{
		die("Database Connection failed: " . mysql_error());
	}
?>
<?php
	//Selecting the Database
	$db_select=mysql_select_db("interestingtrivia",$db);
	if(!$db_select)
	{
		die("Database Selection failed: " . mysql_error());
	}
?>	
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/main.css" rel="stylesheet" type="text/css" />
	<link href="css/accordion.css" rel="stylesheet" type="text/css" />
	<!-- <link href="css/search.css" rel="stylesheet" type="text/css" /> -->
	<script src="js/search.js" type="text/javascript"> </script>
	<script src="js/search_validation.js" type="text/javascript"></script>
	<title> INTERESTING TRIVIA </title>
</head>
<body onload="document.getElementById('search1').style.visibility='hidden'">
	<section id="outerContainer">