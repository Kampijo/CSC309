<?php
	session_save_path("sess");
	session_start(); 
	header('Content-Type: application/json');

	# YOUR CODE GOES HERE
	# Look at the results of executing...
	# http://cs.utm.utoronto.ca/~rosenbl6/309/guessGameAjax/newGame.php

	# HINT: Create a new secret number and initialize the history

    $_SESSION['target'] = rand(1,10);    
    $_SESSION['history'] = array();
    
	$reply=array();
	$reply['status']='ok';
	print json_encode($reply);
?>
