<?php require_once("includes/session.php"); ?>
<?php confirm_logged_in() ?>
<?php require_once('includes/connection.php'); ?>
<?php
if(isset($_GET['id'])){
	$postno=$_GET['id'];
}
?>
<?php
		$result=mysql_query("Select * from triviatable",$db);
	if(!$result)
	{
		die("Database Query failed: " . mysql_error());
	}
		
		?>
		
		<?php while($row=mysql_fetch_array($result))
$query="DELETE FROM triviatable WHERE PostNo={$postno} LIMIT 1";
if(mysql_query($query,$db))
{
	//success
	header('location:delete.php');
	exit;
}
else
{
	echo "<p> failed </p>";
	echo "<p>".mysql_error()."</p>";
}
?>
		
		<?php mysql_close($db);?>
