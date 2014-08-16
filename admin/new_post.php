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
	$PageName="Add New Post";
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
			<form action="create_post.php" method="post">
			<fieldset>
			<legend>Add to Database</legend>
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
			<p>Content     :
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<textarea name="content" id="content" value="" placeholder="Enter content here">
			</textarea>
			</p>
			<p>Visibility  :
			&nbsp;&nbsp;&nbsp;<input type="radio" name="visibility" id="visibility" value="0" checked/>No
			&nbsp;
			<input type="radio" name="visibility" id="visibility" value="1" />Yes
			</p>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;<input type="submit" value="Add Post" />
			</fieldset>
			</form>
		</td>
	</tr>
</table>

<?php require('includes/footer.php'); ?>