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
	$PageName="Select a Post to Edit";
}
?>
<?php include('includes/header.php'); ?>

<table id="structure">
	<tr>
		<td id="navigation">
			<?php
	//Performing MySql Query
	$result=mysql_query("Select * from triviatable",$db);
	if(!$result)
	{
		die("Database Query failed: " . mysql_error());
	}
	// echo "<br /><a href='content.php?page=Home'><p ";if($PageName=='Home'){echo "class='selected'";}echo ">Home</p></a><br /><a href='content.php?page=".urlencode('Planet Bizarre')."'><p ";if($PageName=='Planet Bizarre'){echo "class='selected'";}echo ">Planet Bizarre</p></a><br />
	// <a href='content.php?page=".urlencode('Shocking Stories')."'><p ";if($PageName=='Shocking Stories'){echo "class='selected'";}echo ">Shocking Stories</p></a><br /><a href='content.php?page=".urlencode('Interesting Facts')."'><p ";if($PageName=='Interesting Facts'){echo "class='selected'";}echo ">Interesting Facts</p></a><br />";
	
	echo "<br /><br /><a href='content.php'><li>Go Back</li></a>";
	echo "<br /><br /><br /><a href='../index.php'><li>Return to Public Site</li></a></ul>";
	?>
		</td>
		<td id="page">
			<h2><?php if(!is_null($PageName))
			{
				echo $PageName; 
			}

			?></h2>
			<form action="edit_selected.php" method="post">
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
			<p><input type="submit" name="submit" value="Edit Post" style="margin-left:0px;"/></p>
			</form>
			
		</td>
	</tr>
</table>

<?php require('includes/footer.php'); ?>