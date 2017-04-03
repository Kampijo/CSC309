<?php
	session_save_path('sess');
	session_start();
	
	header('Content-Type: application/json');
	$guess = $_REQUEST['guess'];
	$reply=array();
	$answer=array();
	if(is_numeric($guess) and $guess >=1 and $guess <=10){
		if($guess > $_SESSION['target']){
			$answer['guess']=$guess;
			$answer['comparison']='>';
			$_SESSION['history'][]=$answer;
		} elseif ($guess < $_SESSION['target']){
			$answer['guess']=$guess;
			$answer['comparison']='<';
			$_SESSION['history'][]=$answer;
		} else {
			$answer['guess']=$guess;
			$answer['comparison']="=";
			$_SESSION['history'][]=$answer;
		}
		$reply['status']='ok';
	} else {
		$reply['status']="error: guess must be between 1 and 10, inclusive.";	
	}
	print json_encode($reply);
	
?>
