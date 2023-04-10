<?php
namespace CAR\models;

use CAR\core\model;
use PDO;

class car extends model {
    public static function getCars(){
        $cars=model::db()->run("SELECT * FROM car WHERE status = ?",['0'])->fetchAll();
        return $cars;
    }
    public function getcar($id){
        $car=model::db()->run("SELECT * FROM car WHERE id = ?", [$id])->fetch(PDO::FETCH_ASSOC);
        return $car;
    }
}