<?php
include( 'AModel.class.php' );


class AService
{

	public $model;

	public function __construct( AModel $pModel ) {
		$this->model = $pModel;
	}

	public function say() {
		echo __CLASS__;
		$this->model->getData();
	}

}