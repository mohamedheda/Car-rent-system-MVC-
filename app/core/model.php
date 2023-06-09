<?php
namespace CAR\core;
use Dcblogdev\PdoWrapper\Database as Database;

class model {
    static function db(){
        $options = [
            //required
            'username' => 'root',
            'database' => 'car',
            //optional
            'password' => '',
            'type' => 'mysql',
            'charset' => 'utf8',
            'host' => 'localhost',
            'port' => '3306'
        ];
        
        return $db = new Database($options);
    }
}
