<?php
namespace CAR\models;

use CAR\core\model;
use PDO;

class user extends model {
    public function addUser($post){
        $this->db()->insert('user', ['name' => $post['name'], 'email' => $post['email'],'password'=>$post['password']]);
    }

    public function getUser($email,$password){
        $user=$this->db()->run("SELECT * FROM user WHERE email = ? and password=?", [$email,$password])->fetch(PDO::FETCH_ASSOC);;
        return $user;
    }
}