<?php
namespace CAR\models;

use CAR\core\model;

class idendity extends model {
    public function addIdendity($type,$front,$back=null){
        model::db()->insert('idendity', ['type' => $type, 'front' => $front,'back'=>$back]);
    }
}