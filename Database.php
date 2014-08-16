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
<html>
	<head>
		<title>
			Admin Page
		</title>
	</head>
	<body>
	<?php
	//Performing MySql Query
	$result=mysql_query("Select * from triviatable",$db);
	if(!$result)
	{
		die("Database Query failed: " . mysql_error());
	}
	
	//Using returned Data
	// while($row= mysql_fetch_array($result))
	// {
		// echo $row[0]." : ".$row[1]." : ".$row[2]." : ".$row[3]." : ".$row[4]." : ".$row[5]." : ".$row[6]." : "."<br />";
	
	// }
	?>
	</body>
</html>

<?php
mysql_close($db);
?>