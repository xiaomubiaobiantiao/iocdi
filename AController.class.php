<?php
include( 'AService.class.php' );


class AController
{

	// protected $service;
	public $bb;

	public function __construct( AService $pService, $bb ) {
		$this->service = $pService;
		$this->bb = $bb;
	}

	public function aaa() {
		$this->service->say();
		echo $this->bb;
		echo 10 + $this->bb;
	}




}
