<?php require_once("includes/session.php"); ?>
<?php confirm_logged_in() ?>
<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php
if(isset($_POST['postno'])){
	$postno=$_POST['postno'];
}
else
{
	$postno="";
}
$errors=array();
if(!isset($_POST['page_name'])||empty($_POST['page_name'])){
	$errors[]='page_name';
}
if(!isset($_POST['title'])||empty($_POST['title'])){
	$errors[]='title';
}
if(!isset($_POST['subtitle'])||empty($_POST['subtitle'])){
	$errors[]='subtitle';
}
if(!isset($_POST['content'])||empty($_POST['content'])){
	$errors[]='content';
}
if(!empty($errors)){
header('location:edit_selected.php');
}
?>
<?php
$page_name=mysql_prep($_POST['page_name']);
$title=mysql_prep($_POST['title']);
$subtitle=mysql_prep($_POST['subtitle']);
$image_url=mysql_prep($_POST['image_url']);
$image_url2=mysql_prep($_POST['image_url2']);
$content=mysql_prep($_POST['content']);
$visibility=mysql_prep($_POST['visibility']);
?>
<?php
$query="UPDATE triviatable SET PageName='{$page_name}',Title='{$title}',Subtitle='{$subtitle}',ImageUrl='{$image_url}',ImageUrl2='{$image_url2}',Content='{$content}',Visibility={$visibility} WHERE PostNo='{$postno}'";
if(mysql_query($query,$db))
{
	//success
	header('location:edit_post.php');
	exit;
}
else
{
	echo "<p> failed </p>";
	echo "<p>".mysql_error()."</p>";
}
?>

<?php mysql_close($db);?>