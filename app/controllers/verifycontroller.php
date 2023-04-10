<?php
namespace CAR\controllers;

use CAR\core\controller;
use CAR\core\helpers;
use CAR\pattern\context;
use CAR\pattern\id;
use CAR\pattern\passport;
use CAR\pattern\drivingLicense;

 
class verifycontroller extends controller {
    public $strategy;
    public function verifyStrategy(){
        
        if($_POST['identity']=='id'){
            $this->view(VIEW."\\verify\\idendity",['post'=>$_POST,'files'=>$_FILES]);
        }elseif ($_POST['identity']=='passport'){
            $this->view(VIEW."\\verify\\passport",['post'=>$_POST,'files'=>$_FILES]);
         }elseif($_POST['identity']=='driving-license'){
            $this->view(VIEW."\\verify\\driving_license",['post'=>$_POST,'files'=>$_FILES]);
         }
    }

    public function strategyType(){
        if($_POST['identity']=='id'){
            $context=new context(new id());
        }elseif ($_POST['identity']=='passport'){
            $context=new context(new passport());
        }elseif($_POST['identity']=='driving-license'){
             $context=new context(new drivingLicense());
         }


         if($context->validate($_POST,$_FILES)==1){
            $this->uploadIdendity($_POST,$_FILES);
        } else {
            $message=$context->validate($_POST,$_FILES);
         if(!empty($message)){
         if($_POST['identity']=='id'){
            $this->view(VIEW."\\verify\\idendity",['error'=>$message]);
        }elseif ($_POST['identity']=='passport'){
            $this->view(VIEW."\\verify\\passport",['error'=>$message]);
        }elseif($_POST['identity']=='driving-license'){
            $this->view(VIEW."\\verify\\driving_license",['error'=>$message]);
         }
         }
         }
        }

        public function uploadIdendity($post,$files){
            if($post['identity']=='id'){
                $context=new context(new id());
            }elseif ($post['identity']=='passport'){
                $context=new context(new passport());
            }elseif($post['identity']=='driving-license'){
                 $context=new context(new drivingLicense());
             }
             $status=$context->upload($post,$files);
             if($status==1){
                 $this->view(VIEW."\\rent\\payment",['post'=>$post]);
            }else {
                echo "error in uploading images";
             }
        } 

        
}










        //  if(!empty($status)){
        //  if($_POST['identity']=='id'){
        //     $this->view(VIEW."\\verify\\idendity",['error'=>$status]);
        // }elseif ($_POST['identity']=='passport'){
        //     $this->view(VIEW."\\verify\\passport",['error'=>$status]);
        // }elseif($_POST['identity']=='driving-license'){
        //     $this->view(VIEW."\\verify\\driving_license",['error'=>$status]);
        //  }
        //  }


        // [id] => 21
        // [hours] => 4
        // [identity] => id