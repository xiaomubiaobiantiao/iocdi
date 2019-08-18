<?php
/** aaaaa */
// include( 'B.class.php' );
include( 'Super.class.php' );



class A implements Super
{
	

	/**
	 * [__construct 哈喽]
	 */
	public function __construct() {

	}

	public function connection() {
		echo 123;
	}

	// public function __construct( c $c, b $b ) {
	// 	echo $c->say()," ",$b->say();
	// 	$this->c = $c;
	// }

	public function say() {
		echo '我是A类';;
	}


}