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
		<?php echo "<br /><br /><a href='edit_post.php'><li>Go Back</li></a>";
		echo "<br /><br /><br /><a href='../index.php'><li>Return to Public Site</li></a></ul>";
		?>
		</td>
		<td id="page">
		<h2>
			<?php echo "Confirm Edit?";
			?>
			</h2>
			<div class="page-content">
			<br />
			<div id="old" style="float:left; width:500px;">
			<p><b>New Values: </b></p>
			<form action="update_post.php" method="post">
			<fieldset>
			<legend>Update selected Post</legend>
			<p>Page Name   :
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 &nbsp;<select name="page_name" autofocus="on">
			<option value="Home">Home</option>
			<option value="Planet_Bizarre">Planet Bizarre</option>
			<option value="Shocking_Stories">Shocking Stories</option>
			<option value="Interesting_Trivia">Interesting Trivia</option>
			</select>
			</p>
			<p>Post Title       :
			&nbsp;&nbsp;<input type="text" name="title" id="title" value="" placeholder="Title"/>
			</p>
			<p>Subtitle    :
			&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="subtitle" id="subtitle" value="" placeholder="Subtitle"/>
			</p>
			<p>ImageUrl    :
			&nbsp;&nbsp;&nbsp;<input type="text" name="image_url" id="image_url" value="" placeholder="First Image URL"/>
			</p>
			<p>ImageUrl2   :
			&nbsp;<input type="text" name="image_url2" id="image_url2" value="" placeholder="Second Image URL"/>
			</p>
			<p>Content     :<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<textarea name="content" id="content" value="" placeholder="Enter content here" style="height:80; width:25 0">
			</textarea>
			</p>
			<p>Visibility  :
			&nbsp;&nbsp;&nbsp;<input type="radio" name="visibility" id="visibility" value="0" checked/>No
			&nbsp;
			<input type="radio" name="visibility" id="visibility" value="1" />Yes
			</p>
			<input type="hidden" name="postno" value=" <?php echo $postno; ?>"/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;<input type="submit" value="Update Post" />
			</fieldset>
			</form>
			</div>
			
			<div id="new" style="float:right; width:550px;">
			<p><b>Old Values:</b></p>
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
						<p><b>Image Url 1</b>: ".$row['ImageUrl']."</p>
						<p><b>Image Url 2</b>: ".$row['ImageUrl2']."</p>
						<p><b>Content:</b>".$row['Content']."</p>
						<p><b>Visibility:</b>".$x."</p>";
					}
				}
			?>			
			</div>
			</div>
		</td>
	</tr>
</table>

<?php require('includes/footer.php'); ?>