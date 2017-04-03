<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>RockPaperScissors</title>
	</head>
	<body>
		<h1>Welcome to RockPaperScissors</h1>
		<?php echo(view_errors($errors)); ?>
		<?php echo($_SESSION["RockPaperScissors"]->getState()); ?>		
		<form method="post">
			<input type="submit" name="submit" value="start again" />
		</form>
	</body>
</html>

