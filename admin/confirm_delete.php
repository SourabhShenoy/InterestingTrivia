<?php require_once("includes/session.php"); ?>
<?php confirm_logged_in() ?>
<?php require_once('includes/connection.php'); ?>
<?php
if(isset($_POST['postno'])){
	$postno=$_POST['postno'];
}
else
{
	$postno="";
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
		<?php echo "<br /><br /><a href='delete.php'><li>Go Back</li></a>";
		echo "<br /><br /><br /><a href='../index.php'><li>Return to Public Site</li></a></ul>";
		?>
		</td>
		<td id="page">
		<h2>
			<?php echo "Confirm Delete?";
			?>
			</h2>
				<div class="page-content">
			<br />
			<?php while($row=mysql_fetch_array($result))
				{
					if($row['PostNo']==$postno)
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
			<br /><br />
			<a href="delete_post.php?id=<?php echo $postno ?>">Delete This Post!</a>
			
			</div>
		</td>
	</tr>
</table>

<?php require('includes/footer.php'); ?>