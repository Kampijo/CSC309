<?php
	// So I don't have to deal with uninitialized $_REQUEST['move']
	$_REQUEST['move']=!empty($_REQUEST['move']) ? $_REQUEST['move'] : '';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>RockPaperScissors</title>
	</head>
	<body>
		<h1>Welcome to RockPaperScissors</h1>
			<form method="post">
				<label><input type="radio" name="move" value="Rock" checked/>Rock</label>
                <br><label><input type="radio" name="move" value="Paper"/>Paper</label>
				<br><label><input type="radio" name="move" value="Scissors"/>Scissors</label>
				<br><br>
				 <input type="submit" name="submit" value="Submit" />
			</form>
		
		<?php echo(view_errors($errors)); ?> 

		<?php 
			if($_SESSION["RockPaperScissors"]->getState()!=""){ 
		?>
				<form method="post">
					<input type="submit" name="submit" value="start again" />
				</form>
		<?php 
			} 
		?>
	</body>
</html>

