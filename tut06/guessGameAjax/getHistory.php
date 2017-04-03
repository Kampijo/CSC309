<?php
	# Look at the result of executing...
	# http://cs.utm.utoronto.ca/~rosenbl6/309/guessGameAjax/getHistory.php
	# YOUR CODE GOES HERE
	session_save_path('sess');
	session_start();

	header('Content-Type: application/json');
	$reply=array();
	
	$reply['status']='ok';
	$reply['history']=$_SESSION['history'];
	
	print json_encode($reply);
?>
