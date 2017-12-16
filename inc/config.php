<?php //echo "test";exit;
if(!defined('__CONFIG__')){
	exit("You do not have a config file");
}
include_once "Classes/DB.php";
$conn = DB::getConnection();
?>
