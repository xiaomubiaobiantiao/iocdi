<?php


class ContainerOne
{


	protected $binds;

	public function bind( $abstract, $concrete = NULL ) {
		$concrete == NULL
			? $this->binds[$abstract] = self::getInstance( $abstract )
			: $this->binds[$abstract] = new $abstract( $this->binds[$concrete] );
	}

	public function make( $className ) {
		return $this->binds[$className];
	}

	public function getInstance( $className, $num=array()) {
		
		$reflector = new ReflectionClass( $className );
		$constructor = $reflector->getConstructor();
		$params = array();
		
		if ( false == empty( $constructor )) {
			$parameters = $constructor->getParameters();
			foreach ( $parameters as $value ) {
				$class = $value->getClass();
				if ( false == empty( $class ))
					$params[] = self::getInstance( $class->name );
			}
		} 
		// else {
		// 	echo '__construct not find param'.'<br>';
		// }

		$params = array_merge( $params, $num );
		$result = $reflector->newInstanceArgs( $params );
		return $result;

	}

	public function getBind() {
		dump( $this->binds );
	}

	public function dump( $pParam ) {
		if ( empty( $pParam )) {
			print_r( 'NULL' ).'<br>';
		} else {
			var_dump( $pParam );echo '<br>';
		}
	}


}