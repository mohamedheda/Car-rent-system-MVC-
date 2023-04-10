<?php

namespace CAR\controllers;

use CAR\core\controller;
use CAR\core\helpers;
use CAR\core\session;
use CAR\models\car;
use CAR\models\rate;
use CAR\models\rent;
use CAR\models\user;
use GUMP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class homecontroller extends controller {

      //function to show cars in home page
      public function showcars(){
        $cars=car::getCars();
        return $cars;
    }


    //function to show home page
    public function index(){
        $cars=$this->showcars();
        session::Start();
        if(!empty($_SESSION['id'])){
        $this->view(VIEW."\home\index",["cars"=>$cars]);
    }
        else{
            helpers::redirect('user/login');
        }
    } 

  public function rent(){
    $car=new car();
    $car=$car->getcar($_GET['id']);
    $this->view(VIEW."\\rent\\hours",['car'=>$car]);
    }



    public function rerurnACar(){
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Port = 2525;
            $mail->Username = '71f354d2f38886';
            $mail->Password = 'd50efb12f3b3ac';


            //Recipients
            $mail->setFrom('customer@gmail.com', 'Customer');
            $mail->addAddress('owner@gmail.com', 'owner');     //Add a recipient


            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Return a Car ';
            $mail->Body    = "
            <body>
                i Return the car
                <br>
                
            </body>
            </html>";
        
            $mail->send();
            // echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        helpers::redirect('\home\rate');

    }
    public function rate(){
        session::Start();
        $rent=new rent();
        $result=$rent->getRentID(session::Get('id'));
        if($result==[]){
            $this->view(VIEW."\home\\notrent",[]);            
        }else{
            $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Port = 2525;
            $mail->Username = '71f354d2f38886';
            $mail->Password = 'd50efb12f3b3ac';


            //Recipients
            $mail->setFrom('customer@gmail.com', 'Customer');
            $mail->addAddress('owner@gmail.com', 'owner');     //Add a recipient


            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Return a Car ';
            $mail->Body    = "
            <body>
                i Return the car
                <br>
            </body>";
        
            $mail->send();
            // echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

            $this->view(VIEW."\home\\rate",[]);
        }
    }

    public function addRate(){
        $is_valid=GUMP::is_valid(array_merge($_POST),[
            'availability'=>'required',
            'credibility'=>'required',
            'attitude'=>'required'
        ]);
        if($is_valid==1){
                $rate=new rate();
                $rate->addRate($_POST);
                $rent=new rent();
                session::Start();
                $user_id=session::Get('id');
                $rent->deleteAll($user_id);
                helpers::redirect('home');
        }else {
            $this->view(VIEW."\home\\rate",['errors'=>$is_valid]);
        }
    }
    }
