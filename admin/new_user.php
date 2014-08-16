<?php require_once("includes/session.php"); ?>
<?php confirm_logged_in() ?>
<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php include_once('includes/form_functions.php'); ?>
<?php
if(isset($_POST['submit'])) {
$errors = array();

		// perform validations on the form data
		$required_fields = array('username', 'password');
		$errors = array_merge($errors, check_required_fields($required_fields, $_POST));

		$fields_with_lengths = array('username' => 25, 'password' => 40);
		$errors = array_merge($errors, check_max_field_lengths($fields_with_lengths, $_POST));

		 $username = trim(mysql_prep($_POST['username']));
		$password = trim(mysql_prep($_POST['password']));
		$hashed_password = sha1($password);
		if ( empty($errors) ) {
			$query = "INSERT INTO login (
							UserName,Password
						) VALUES (
							'{$username}', '{$hashed_password}'
						)";
			$result = mysql_query($query, $db);
			 if ($result) {
				 $message = "The user was successfully created.";
			 } else {
				 $message = "The user could not be created.";
				 $message .= "<br />" . mysql_error();
			 }
			 
		} else {
			if (count($errors) == 1) {
				$message = "There was 1 error in the form.";
			} else {
				$message = "There were " . count($errors) . " errors in the form.";
			}
		}
	} else { // Form has not been submitted.
		$username = "";
		$password = "";
		}
?>
<?php include('includes/header.php'); ?>

<table id="structure">
	<tr>
		<td id="navigation">
		<?php echo "<br /><br /><a href='admin.php'><li>Go Back</li></a>";
		echo "<br /><br /><br /><a href='../index.php'><li>Return to Public Site</li></a></ul>";
		?>
		</td>
		<td id="page">
		<h2>
		Create New User
			</h2>
			<?php if (!empty($message)) {echo "<p class=\"message\">" . $message . "</p>";} ?>
			<?php if (!empty($errors)) { display_errors($errors); } ?>
<form action="new_user.php" method="post">
<table>
<tr>
<td>
Username:
</td>
<td>
<input type="text" name="username" maxlenght=30 value="<?php echo htmlentities($username);?>" />
</td>
</tr>
<tr>
<td>
Password:
</td>
<td>
<input type="password" name="password" maxlenght=30 value="<?php echo htmlentities($password);?>" />
</td>
</tr>
<br />
<tr>
<td colspan="2"><input type="submit" name="submit" value="Add New User"/></td>
</tr>
</table>
</form>
			
		</td>
	</tr>
</table>

<?php require('includes/footer.php'); ?>