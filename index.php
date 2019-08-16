<?php

header("Content-type:text/html;charset=utf-8");

include( 'Container.class.php' );
include( 'A.class.php' );
include( 'C.class.php' );
// include( 'B.class.php' );

// $a = new A( new C(), new B() );

//$class = new ReflectionClass('A');
// $class = new ReflectionClass('ReflectionClass');



$container = new Container();
// var_dump( $container );
// $container->bind( 'A', function ($container ){
// 	return new A;
// });

$container->bind( 'C', $container );
$container->bind( 'B', $container );
$container->bind( 'A', $container );

$container->bind( 'A', function ($container ){
	return new A;
});


$param = $container->getParam();

dump( $param );

// $test = $container->make( 'A' );
// var_dump( $test );
// $test->say();
die();

getClassInfo( $class );

$reflector = new ReflectionClass($a);
// print_r( $reflector );echo '<br>';

//获取A类的构造函数
$constructor = $reflector->getConstructor();
// print_r( $constructor );echo '<br>';
if ( false == empty( $constructor)) {
	//获取构造函数参数
	$dependencies = $constructor->getParameters();
	// var_dump( $dependencies );
	foreach ( $dependencies as $value ) {
		// echo $value;
		$aa = $value->getClass()->name;
		$newObj[] = new $aa();
		// var_dump( $newObj );
	}

	// print_r( $dependencies );echo '<br>';
} else {
	//不存在构造方法则输出提示
	echo 'not find '.$constructor->class.' __construct';
}

$refNew = $reflector->newInstanceArgs($newObj);// Test 对象


$refNew->say();


// try{
//     $reflection = new ReflectionClass('D');
// } catch(Exception $e) {
//     var_dump($e->getMessage());
// }
// die();
//var_dump( $dependencies );

function getClassInfo( $class ) {
	// echo $class->getName();
	// echo $class->getConstant( 'A' );
	// $cc = $class->getConstructor();
	// $aa = $class->getDefaultProperties();
	// $bb = $class->getDocComment();
	// echo $class->getEndLine();
	// $aa = $class->getExtension();
	// $aa = $class->getFileName();
	// $aa = $class->getMethod('say');
	// $aa = $class->getMethods();
	// $aa = $class->getModifiers();
	// $aa = $class->getNamespaceName();
	// $aa = $class->getParentClass();
	// $aa = $class->getProperties();
	// echo $class->getProperty( 'c' );
	$aa = $class->getReflectionConstant();
	var_dump( $aa );
	// echo $aa;
	// $class->__construct();
}

function dump( $pParam ) {

	// echo '<pre>';
	// foreach ( $pParam as $value ) {
	// 	if ( is_array( $value )) {
	// 		dump( $value );
	// 	} else {
	// 		print_r( $value );
	// 	}
	// }
	// echo '</pre>';	
	// if( is_array( $pParam ))

	echo '<pre>';
	print_r( $pParam );
	echo '</pre>';



}