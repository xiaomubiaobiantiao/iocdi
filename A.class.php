<?php

class A
{
	
	public $c;

	public function __construct( c $c ) {
		echo __CLASS__;
		$this->c = $c;
	}

	public function say() {
		$this->c->say();
	}


}