<?php 
namespace CAR\controllers;

use CAR\core\controller;
use CAR\core\helpers;
use CAR\core\session;
use CAR\models\car;
use CAR\models\user;
use GUMP; 

class usercontroller extends controller {
//fuction to validate data from form
public function validateFormRegister($post){
    $is_valid=GUMP::is_valid(array_merge($post),[
        'name'=>'required|alpha_numeric',
        'email'=>'required|valid_email',
        'password'=>'required|between_len,4;100'
    ]);
    return $is_valid;
}

//function to open register page
public function register(){
    $this->view(VIEW."\home\\register",[]);
}

 //function to open login page

 public function login(){
    $this->view(VIEW."\home\\login",[]);
}

//function to register user in system an db
public function store(){
    $is_valid=$this->validateFormRegister($_POST);

    if($is_valid==1){
        $user=new user();
        $user->addUser($_POST);
        helpers::redirect('home\index');
    }else{
        $this->view(VIEW."\home\\register",["errors"=>$is_valid]);
    }
}

public function validataLoginData($post){
    $is_valid=GUMP::is_valid(array_merge($post),[
        'email'=>'required|valid_email',
        'password'=>'required|between_len,4;100'
    ]);
    return $is_valid;
}

//log user in and start session 
public function enter(){
    $is_valid=$this->validataLoginData($_POST);
    if($is_valid==1){
        $user=new user();
    $logedUser=$user->getUser($_POST['email'],$_POST['password']);
    if($logedUser==false){
        $this->view(VIEW."\home\\login",['post'=>$_POST,'loginErr'=>"please enter the correct email or the correct password"]);
    }else {
                session::Start();
        session::Set('id',$logedUser['id']);
        $this->view(VIEW."\home\\index",['logedUser'=>$logedUser]);
        helpers::redirect('home\index');
    }
    }else{
        $this->view(VIEW."\home\\login",['errors'=>$is_valid]);
    }
}


    //function to logout
    public function logOut(){
        session::Start();
        if(!empty($_SESSION['id'])){
            session::Stop();
            helpers::redirect('home\index');
        }
    }
}