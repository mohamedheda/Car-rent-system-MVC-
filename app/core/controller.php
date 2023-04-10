<?php
namespace CAR\core;

class controller{
protected function view($path,$param){
    extract($param);
    require_once $path.".php";
}
}
