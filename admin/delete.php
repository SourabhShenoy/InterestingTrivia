<?php require_once("includes/session.php"); ?>
<?php confirm_logged_in() ?>
<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php

if(isset($_GET['page'])){
	$PageName=$_GET['page'];
}
else
{
	$PageName="Select a Post to delete";
}

?>

<?php include('includes/header.php'); ?>

<table id="structure">
	<tr>
		<td id="navigation">
		<?php
		$result=mysql_query("Select * from triviatable",$db);
	if(!$result)
	{
		die("Database Query failed: " . mysql_error());
	}
		
		?>
		<?php echo "<br /><br /><a href='content.php'><li>Go Back</li></a>";
		echo "<br /><br /><br /><a href='../index.php'><li>Return to Public Site</li></a></ul>";
		?>
		</td>
		<td id="page">
		<h2>
		<?php echo $PageName ?>
			</h2>
				<div class="page-content">
				
			<br />
			
			<form action="confirm_delete.php" method="post">
			<p>Post No: <select name="postno" id="postno">
			<?php while($row1=mysql_fetch_array($result))
			{
				echo "<option>".
				$row1['PostNo']
				."</option>";
			}
			?>
			</select>
			</p>
			<p><input type="submit" name="submit" value="View Post" style="margin-left:0px;"/></p>
			</form>
			
			</div>
		</td>
	</tr>
</table>

<?php require('includes/footer.php'); ?>