<?php

class RockPaperScissors {
	public $ourMove = 0; // 0 is Rock, 1 is Paper, 2 is Scissors
	public $state = "";

	public function __construct() {
        	$this->ourMove = rand(0,2);
    	}
	
	public function checkMove($playerMove){
		if(($playerMove == 0 && $this->ourMove == 2)
			|| ($playerMove==1 && $this->ourMove==0)
			|| ($playerMove==2 && $this->ourMove==1)){
			$this->state="You beat me!";
		} else {
			$this->state="You have been beaten!";
		}
	}
	public function getState(){
		return $this->state;
	}
}
?>
