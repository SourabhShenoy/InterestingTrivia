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
	$PageName="Welcome to the Admin Page";
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
	echo "<br /><a href='content.php?page=Home'><p ";if($PageName=='Home'){echo "class='selected'";}echo ">Home</p></a><br /><a href='content.php?page=".urlencode('Planet_Bizarre')."'><p ";if($PageName=='Planet_Bizarre'){echo "class='selected'";}echo ">Planet Bizarre</p></a><br />
	<a href='content.php?page=".urlencode('Shocking_Stories')."'><p ";if($PageName=='Shocking_Stories'){echo "class='selected'";}echo ">Shocking Stories</p></a><br /><a href='content.php?page=".urlencode('Interesting_Facts')."'><p ";if($PageName=='Interesting_Facts'){echo "class='selected'";}echo ">Interesting Facts</p></a><br />";
	
	echo "<ul style='list-style-type:square;'><br /><br /><br /><br /><br /><a href='new_post.php'><li>Add a new Post</li></a>";
	echo "<br /><br /><br /><a href='edit_post.php'><li>Edit a Post</li></a>";
	echo "<br /><br /><br /><a href='delete.php'><li>Delete a Post</li></a>";
	echo "<br /><br /><br /><a href='admin.php'><li>Go Back</li></a>";
	echo "<br /><br /><br /><a href='../index.php'><li>Return to Public Site</li></a></ul>";
	?>
		</td>
		<td id="page">
			<h2><?php if(!is_null($PageName))
			{
				echo $PageName; 
			}
			else
			{
				echo "Select a Page to edit";
			}
			?></h2>
			<div class="page-content">
			<br />
			<?php while($row=mysql_fetch_array($result))
			{
				if($row['PageName']==$PageName)
				{
					if($row['Visibility']==1)
					{
						$x=" Visible";
					}
					else
					{
						$x=" Not Visible";
					}
					echo "<h2>Post no:". $row['PostNo']."</h2>
					<h1>Title:".$row['Title']."</h1>
					<h3>Subtitle:".$row['Subtitle']."</h3>
					<p>Image Url 1: ".$row['ImageUrl']."</p>
					<p>Image Url 2: ".$row['ImageUrl2']."</p>
					<p>Content:".$row['Content']."</p>
					<p>Visibility:".$x."</p>";
				}
			}
			?>
			<br />
			</div>
		</td>
	</tr>
</table>

<?php require('includes/footer.php'); ?>