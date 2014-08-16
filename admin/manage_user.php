<?php require_once("includes/session.php"); ?>
<?php confirm_logged_in() ?>
<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php include('includes/header.php'); ?>

<table id="structure">
	<tr>
		<td id="navigation">
			<?php
	//Performing MySql Query
	$result=mysql_query("Select * from login",$db);
	if(!$result)
	{
		die("Database Query failed: " . mysql_error());
	}
	?>
	<?php echo "<br /><br /><a href='admin.php'><li>Go Back</li></a>";
		echo "<br /><br /><br /><a href='../index.php'><li>Return to Public Site</li></a></ul>";
		?>
		</td>
		<td id="page">
			<h2>
				<?php echo "Manage Users"; ?>
			
			</h2>
			<div class="page-content">
			<br />
			<?php while($row=mysql_fetch_array($result))
			{
		
					if($row['AdminPrivilege']==1)
					{
						$x=" Enabled";
					}
					else
					{
						$x=" Disabled";
					}
					echo "<h2>Id:". $row['id']."</h2>
					<p>User Name:".$row['UserName']."</p>
					<p>Admin Privilege:".$x."</p><br />	";
			}
			?>
			<br />
			</div>
		</td>
	</tr>
</table>

<?php require('includes/footer.php'); ?>