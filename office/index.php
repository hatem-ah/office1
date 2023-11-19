<?php


require_once __DIR__ .'/config/config.php';
require_once __DIR__ . '/lib/DB/MysqliDb.php';
//to require model and controllers classes:
spl_autoload_register(
	
	function($class){
		
		if(file_exists(__DIR__."/app/models/".$class.".php"))
			require __DIR__."/app/models/".$class.".php";
		else
			require __DIR__."/app/controllers/".$class.".php";
		
	}
);
//-------------------------------------------------------
session_start();

define('BASE_BATH',"/");
$config = require 'config/config.php';
$db = new MysqliDb(
    $config['db_host'],
    $config['db_user'],
    $config['db_pass'],
 	$config['db_name']);
$request=$_SERVER['REQUEST_URI'];
$class=explode('/',$request)[1];
if(file_exists(__DIR__."/app/models/".$class.".php"))
{
$contr="contr_".$class;
$model=new $class($db);
$controller=new $contr($model);
}
else
die("<h1>failed to response </h1>");


if(BASE_BATH.$class."/check"==BASE_BATH."admin"."/check")
{
	
	$controller->check_admin();
}
$id=isset($_GET['id'])?$_GET['id']:" ";
//-------------------------------------------
if(isset($_SESSION['validation']))
{
switch ($request) 
{
    case BASE_BATH.$class."/add":
    	$oper="add_".$class;
    	$controller->$oper();
    	break;
    case BASE_BATH.$class."/update?id=$id":
    	$oper="update_".$class;
    	$controller->$oper();
    	break;
    case BASE_BATH.$class."/delete?id=$id":
    	$oper="delete_".$class;
    	$controller->$oper();
    	break;
    case BASE_BATH.$class :
    	$oper="get_".$class;
    	$controller->$oper();
    	break;
    	
}	
}
else echo "<h1>error 403 </h1>";
  	

?>
