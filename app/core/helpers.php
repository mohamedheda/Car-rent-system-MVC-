<?php

namespace CAR\core;

class helpers {
 public static function redirect($path){
    header("LOCATION:http://localhost:8000/".$path);
 }
}