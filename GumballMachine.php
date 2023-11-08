<?php

class GumballMachine {

	private $gumballs;
	
	public function getGumballs() {
		return $this->gumballs;
	}
	
	public function setGumballs($amount) {
		$this->gumballs = $amount;
	}
	
	public function turnWheel() {
		// $this->setGumballs($this->getGumballs()-1); // Working code
		$this->setGumballs($this->getGumballs()-2); // Buggy code
	}
}
