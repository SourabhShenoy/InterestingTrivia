<?php require_once("includes/session.php"); ?>
<?php confirm_logged_in() ?>
<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php
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
header('location:new_post.php');
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
$query="INSERT into triviatable (PageName,Title,Subtitle,ImageUrl,ImageUrl2,Content,Visibility) VALUES ('{$page_name}','{$title}','{$subtitle}','{$image_url}','{$image_url2}','{$content}',$visibility)";
if(mysql_query($query,$db))
{
	//success
	header('location:content.php');
	exit;
}
else
{
	echo "<p> failed </p>";
	echo "<p>".mysql_error()."</p>";
}
?>

<?php mysql_close($db);?>