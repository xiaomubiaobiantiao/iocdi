<?php


class ContainerME
{

	public $class;

	public function getInstance( $className, $num=array() ) {
		dump( $className );
		$reflector = new ReflectionClass( $className );
		dump( $reflector );
		$constructor = $reflector->getConstructor();
		dump( $constructor );

		$params = array();
		if ( false == empty( $constructor )) {
			$parameters = $constructor->getParameters();
			dump( $parameters );
			foreach ( $parameters as $value ) {
				$class = $value->getClass();
				dump( $class );
				if ( false == empty( $class ))
					$params[] = self::getInstance( $class->name );
			}
		} else {
			echo '无参数';echo '<br>';
		}

		dump( $params );

		$params = array_merge( $params, $num );

		dump( $params );

		$result = $reflector->newInstanceArgs( $params );

		dump( $result );

		return $result;

	}


	public function dump( $pParam ) {
		if ( empty( $pParam )) {
			print( 'NULL' ).'<br>';
		} else {
			var_dump( $pParam );echo '<br>';	
		}
	}

	// public function getInstance( $className, $num=array() ) {
		
	// 	$reflector = new ReflectionClass( $className );
		
	// 	$constructor = $reflector->getConstructor();
		
	// 	$params = array();

	// 	if ( false == empty( $constructor )) {

	// 		$parameters = $constructor->getParameters();
			
	// 		foreach ( $parameters as $value ) {
	// 			$class = $value->getClass();
	// 			if ( false == empty( $class ))
	// 				$params[] = self::getInstance( $class->name );
	// 		}

	// 	} else {
	// 		echo '无参数';echo '<br>';
	// 	}

	// 	$params = array_merge( $params, $num );

	// 	$result = $reflector->newInstanceArgs( $params );

	// 	return $result;

	// }


}