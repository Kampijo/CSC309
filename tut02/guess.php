<?php 
	session_save_path('sess');
	session_start();
	if(!isset($_SESSION['target'])){
		$_SESSION['target'] = rand(1, 100);
        $_SESSION['counter'] = 1;
	}
?> 
<html>	
	<head>
		<title>Guess Game</title>
	</head>
	<body>
		<h1>Welcome to the guessGame</h1>
		<form method="post"> 
			<label>Your guess: </label><input size="25" type="text" name="guess" autofocus>
			<input type="submit" name="submitGuess" value="check my guess">
		</form>
		<?php if(is_numeric($_REQUEST['guess'])) {
			if ($_REQUEST['guess'] > $_SESSION['target']) {
				$_SESSION['tries'] = $_SESSION['tries'] . "\r\n" . 'Your guess #' .  $_SESSION['counter'] . ' ' . $_REQUEST['guess'] . ' was too high'; 				$_SESSION['tries'] = trim($_SESSION['tries']);
				echo nl2br($_SESSION['tries']);
                                $_SESSION['counter']++; 
			} elseif ($_REQUEST['guess'] < $_SESSION['target'])  { 
				$_SESSION['tries'] = $_SESSION['tries'] . "\r\n" . 'Your guess #' .  $_SESSION['counter'] . ' ' .  $_REQUEST['guess'] . ' was too low'; 			
				$_SESSION['tries'] = trim($_SESSION['tries']);
				echo nl2br($_SESSION['tries']);
                                $_SESSION['counter']++; 
			} else { 
				echo 'You guessed it right!';
				unset($_SESSION['target']);
				unset($_SESSION['tries']);
                unset($_SESSION['counter']);
			}
		      }	 else { 
				echo nl2br($_SESSION['tries']);
		} ?>
	</body>
</html>
