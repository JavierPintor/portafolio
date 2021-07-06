<?php
ini_set('display_errors',0);
error_reporting(E_ALL);
$dixi=dirname(__FILE__).'/framework/DIXI.php';
$config=dirname(__FILE__).'/protected/config/data.php';
require_once($dixi);
DIXI::crearAplicacionWeb($config)->run();
?>
