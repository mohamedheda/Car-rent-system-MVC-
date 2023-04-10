<?php 
define("ROOT",dirname(__DIR__));
define("DS",DIRECTORY_SEPARATOR);
define("PUBLIC",ROOT.DS."public");
define("APP",ROOT.DS."app");
define("CONFIG",APP.DS."config");
define("MODEL",APP.DS."models");
define("VIEW",APP.DS."views");
define("CONTROLLER",APP.DS."controllers");
define("CORE",APP.DS."core");

require_once "../vendor/autoload.php";
$app=new CAR\core\app();

// echo $_SERVER['REQUEST_URI'];