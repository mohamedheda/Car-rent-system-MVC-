<?php
namespace CAR\pattern;

use CAR\models\idendity;

class context {
        public $strategy;
        public function __construct(Verify $strategy)
        {
            $this->strategy=$strategy;
        }
        
        public function validate($post,$files){
            return $this->strategy->validate($post,$files);
        }

        public function upload($post,$files){
            return $this->strategy->upload($post,$files);
        }
}

class image {
    public static function valid($image){
        if($image['error']==UPLOAD_ERR_OK){
            $allowed_extentions=array('jpg','jpeg','png','gif');
            $file_extention=pathinfo($image['name'],PATHINFO_EXTENSION);
            if(in_array($file_extention,$allowed_extentions)){
                return 1;
            }else {
                return 0;
            }
        }
    }

}


interface Verify {

    public function validate($post,$files);
    public function upload($post,$files);
    }



    class id implements Verify {
            function validate($post,$files)
    {   
        if($files['front']['error']==4 || $files['back']['error']==4){
            return "please enter the images";
        }else {
            $validfront=image::valid($files['front']);
            $validback=image::valid($files['back']);
            if($validfront==0||$validback==0){
                return "please enter an valid image eg 'png','jpg'";
            }else {
                return 1;
            }
        }
    }


            public function upload($post,$files){
                $front_extention=pathinfo($files['front']['name'],PATHINFO_EXTENSION);
            $back_extention=pathinfo($files['front']['name'],PATHINFO_EXTENSION);
            $front_name=uniqid();
            $back_name=uniqid();
            $idendity=new idendity();
            $idendity->addIdendity($post['identity'],$front_name.".".$front_extention,$back_name.".".$back_extention);
              move_uploaded_file($files['front']['tmp_name'], __DIR__."/images/id/".$front_name.".".$front_extention);
              move_uploaded_file($files['back']['tmp_name'], __DIR__."/images/id/".$back_name.".".$back_extention);
              return 1;
    }


    }

    class drivingLicense implements Verify {
        public function upload($post,$files){
            $front_extention=pathinfo($files['front']['name'],PATHINFO_EXTENSION);
            $back_extention=pathinfo($files['front']['name'],PATHINFO_EXTENSION);
            $front_name=uniqid();
            $back_name=uniqid();
            $idendity=new idendity();
            $idendity->addIdendity($post['identity'],$front_name.".".$front_extention,$back_name.".".$back_extention);
              move_uploaded_file($files['front']['tmp_name'], __DIR__."/images/id/".$front_name.".".$front_extention);
              move_uploaded_file($files['back']['tmp_name'], __DIR__."/images/id/".$back_name.".".$back_extention);
              return 1;
        }
    
        function validate($post,$files)
        {   
            if($files['front']['error']==4 || $files['back']['error']==4){
                return "please enter the images";
            }else {
                $validfront=image::valid($files['front']);
                $validback=image::valid($files['back']);
                if($validfront==0||$validback==0){
                    return "please enter an valid image eg 'png','jpg'";
                }else {
                    return 1;
                }
            }
        }
    }


    
    class passport implements Verify {
        public function upload($post,$files){
            $file_extention=pathinfo($files['front']['name'],PATHINFO_EXTENSION);
            $front_name=uniqid();
            $idendity=new idendity();
              move_uploaded_file($files['front']['tmp_name'], __DIR__."/images/id/".$front_name.".".$file_extention);
              return 1;
        }
    
        function validate($post,$files)
        {   
            if($files['front']['error']==4 ){
                return "please enter the image";
            }else {
                $validfront=image::valid($files['front']);
                if($validfront==0){
                    return "please enter an valid image eg 'png','jpg'";
                }else {
                    return 1;
                }
            }
        }
}












// if($files['front']['error']!=4){
//     $front=image::validateImage($files['front']);
//             if($front!=1){
//     $post['error']="please enter an valid image eg 'png','jpg'";
// }
// }elseif($files['front']['error']==4) {
// $post['error']="please enter an valid front";
// }
// return $post && $files;



// $front=image::validateImage($files['front']);
// $back=image::validateImage($files['back']);
// if(isset($files['front'])&&isset($files['back'])){
//             if($front!=1&&$back!=1){
//     $message="please enter an valid image eg 'png','jpg'";
//     return $message;
// }else {
//     $message="please enter an valid front and back'";
//     return $message;
// }
// }


// class image {
//     public static function validateImage($image){
//         if($image['error']==UPLOAD_ERR_OK){
//             $allowed_extentions=array('jpg','jpeg','png','gif');
//             $file_extention=pathinfo($image['name'],PATHINFO_EXTENSION);
//             if(in_array($file_extention,$allowed_extentions)){
//                 return 1;
//             }else {
//                 return 0;
//             }
//         }
//     }
//     public static function uplaod(){

//     }
// }