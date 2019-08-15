<?php
include( 'A.class.php' );
include( 'C.class.php' );
include( 'B.class.php' );

$a = new A( new C( new B() ) );
//$a->say();
	//phpinfo();


$reflector = new ReflectionClass($a);
print_r( $reflector );echo '<br>';

//获取A类的构造函数
$constructor = $reflector->getConstructor();
// $dependencies = $constructor ->getConstant( $c );
// echo $dependencies;
// die();
print_r( $constructor );echo '<br>';
if ( false == empty( $constructor)) {
	//获取构造函数参数
	$dependencies = $constructor ->getParameters();
	print_r( $dependencies );echo '<br>';
} else {
	//不存在构造方法则输出提示
	echo 'not find '.$reflector->getName().' __construct';
}





// try{
//     $reflection = new ReflectionClass('D');
// } catch(Exception $e) {
//     var_dump($e->getMessage());
// }
// die();
//var_dump( $dependencies );

