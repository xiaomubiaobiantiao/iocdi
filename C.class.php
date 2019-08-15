<?php

class C
{
	
	public $b;

	public function __construct( $b ) {
		echo __CLASS__;
		$this->b = $b;
	}

	public function say() {
		$this->b->say();
	}


}