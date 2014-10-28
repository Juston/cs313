<!DOCTYPE html>
<html>
<head>
	<title>Home Page!</title>
</head>
<body>
	Welcome <?php echo $_SESSION['userName']; ?>
	<form method="post" action=".">
		<input type="submit" name="action" value="Sign Out">
	</form>
</body>
</html>