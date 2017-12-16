<?php 
//echo "hello kalob ! I'm a web developer";
define('__CONFIG__',true);
require_once 'inc/config.php';
if($_SERVER ['REQUEST_METHOD']=='POST'){
header ('Content-Type: application/json');
$array = ['test1','test2','test3'];
echo json_encode($array,JSON_PRETTY_PRINT);
exit;
}else{
exit('test');
}
?>
