<?php
/* ВАЖНО!!! Ничего не менять*/
require_once('engine/constants/const.php');

header(HEADER_CHARSET);


/*ROUTER*/
if(isset($_GET['action']))
     $action = $_GET['action'];
else 
     $action = $_POST['action'];
     
/*classes*/
require_once(DIR_CLASSES.'/router.php');  
require_once(DIR_CLASSES.'/mysql.php');
$router = new router($action,array('type'=>'module'));
?>