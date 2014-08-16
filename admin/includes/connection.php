<?php
	$machine="localhost";
	$user="root";
	$pass="";
	$db_name="interestingtrivia";
	//Establishing Database Connection
	$db=mysql_connect($machine,$user,$pass);
	if(!$db)
	{
		die("Database Connection failed: " . mysql_error());
	}
?>
<?php
	//Selecting the Database
	$db_select=mysql_select_db($db_name,$db);
	if(!$db_select)
	{
		die("Database Selection failed: " . mysql_error());
	}
?>