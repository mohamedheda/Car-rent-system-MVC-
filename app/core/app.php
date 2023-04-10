<?php
namespace CAR\core;
class app {
    private $controller;
    private $method;
    private $params;
    function __construct()
    {
        $this->url();
        $this->render();
    }
    private function url (){
        // echo $_SERVER['REQUEST_URI'] ;die;
        if($_SERVER['REQUEST_URI']!="/"){
        $url=$_SERVER['REQUEST_URI'];
        $url=explode("/",$url);
        unset($url[0]);
        $url=array_values($url);
            $this->controller=!empty($url[0]) ? $url[0]."controller":"homecontroller";
            $this->method=!empty($url[1]) ? $url[1]:"index";
            unset($url[0],$url[1]);
            $url=array_values($url);
            if(!empty($url)){
                $this->params=$url;
            }
        }else {
            $this->controller="homecontroller";
            $this->method="index";
        }
        
    }

    private function render(){
        $controller="CAR\controllers\\".$this->controller;
        if(class_exists($controller)){
            $controller=new $controller;
            if(method_exists($controller,$this->method)){
                call_user_func_array([$controller,$this->method],[$this->params]);
            }else{
                echo "method not found";
            }
        }
        else {
            echo "class not exists";
        }
    }
}