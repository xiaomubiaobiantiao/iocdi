<?php
// include( 'Super.class.php' );



class B implements Super
{
	
	public function __construct() {
		// echo __CLASS__;
	}
	
	public function connection() {
		echo 321;
	}

	public function test() {
		echo 'method run success';
	}

	public function saya() {
		echo '我是B类';
	}


}