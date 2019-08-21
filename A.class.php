<?php
/** aaaaa */
// include( 'B.class.php' );
include( 'Super.class.php' );



class A implements Super
{
	

	/**
	 * [__construct 哈喽]
	 */
	public function __construct( B $obj ) {
		$obj->test();
		$obj->connection();
	}

	public function connection() {
		echo 123;
	}

	public function methodTest( B $obj ) {
		$obj->connection();
		$obj->test();
	}

	public function say() {
		echo '我是A类';;
	}


}