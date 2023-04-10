<?php
namespace CAR\models;

use CAR\core\model;
use PDO;

class rate extends model {
    public function addRate($post){
        $data = [
            'availability' => $post['availability'],
            'credibility' => $post['credibility'],
            'attitude' =>$post['attitude']
        ];
        model::db()->insert('rate', $data);
    }   
}