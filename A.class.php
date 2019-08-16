<?php
/** aaaaa */
include( 'B.class.php' );
final class A extends B
{
	
	public $c;
	const A = '123';

	/**
	 * [__construct 哈喽]
	 */
	public function __construct() {

	}

	// public function __construct( c $c, b $b ) {
	// 	echo $c->say()," ",$b->say();
	// 	$this->c = $c;
	// }

	public function say() {
		echo '我是A类';;
	}


}