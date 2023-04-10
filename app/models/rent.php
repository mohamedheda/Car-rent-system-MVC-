<?php
namespace CAR\models;

use CAR\core\model;
use PDO;

class rent extends model {
    public function addRent($car_id,$hours,$payment,$idendity,$user_id){
        date_default_timezone_set("Egypt");
         $date=date('y/m/d H:i:s');

        model::db()->insert('rent', [
        'car_id' => $car_id
        , 'hours' => $hours
        ,'payment'=>$payment
        ,'identity'=>$idendity
        ,'user_id'=>$user_id
        ,'requested_at'=>$date
    ]);
    return $date;
    }

    public function getRent($time){
        return model::db()->run("SELECT * FROM rent WHERE requested_at = ?", [$time])->fetch(PDO::FETCH_ASSOC);
    }
    public function getRentID($id){
        return model::db()->run("SELECT * FROM rent WHERE user_id = ?", [$id])->fetchAll();
    }

    public function getTime($id){
        
        $time=model::db()->run("SELECT requested_at FROM rent WHERE id = ?", [$id])->fetch(PDO::FETCH_ASSOC);
        return $time['requested_at'];
    }

    public function deleteAll($user_id){
        model::db()->delete('rent', ['user_id' => $user_id]);
    }

}