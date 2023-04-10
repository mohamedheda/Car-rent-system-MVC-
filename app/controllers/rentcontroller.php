<?php
namespace CAR\controllers;

use GUMP;
use CAR\core\controller;
use CAR\core\helpers;
use CAR\core\session;
use CAR\models\car;
use CAR\models\rent;
use CAR\pattern\context;
use DateTime;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class rentcontroller extends controller {

    //functions to get hours of rent
    public function hours(){
        $car=new car();
    $car=$car->getcar($_POST['id']);
        $is_valid=GUMP::is_valid(array_merge($_POST),[
            'hours'=>'required|numeric'
        ]);
        if($is_valid==1){
            $this->view(VIEW."\\verify\\verify",['id'=>$_POST['id'],'hours'=>$_POST['hours']]);
        }else {
            $this->view(VIEW."\\rent\\hours",['errors'=>$is_valid,'car'=>$car]);
        }
    }

    public function rent (){
        session::Start();
        $user_id=session::Get('id');
             $rent=new rent();
             $date=$rent->addRent($_POST['id'],$_POST['hours'],$_POST['payment'],$_POST['identity'],$user_id);
            $rentID=$rent->getRent($date);
            // echo "<pre>";
            // print_r($_SERVER);die;
             $this->sendMail($rentID['id']);

            helpers::redirect("home");
            }

            public function sendMail($id){
                
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
                    $mail->Subject = 'Rent a car ';
                    $mail->Body    = "
                    <body>
                        i want to rent this car and i verify my idendity <br>
                        you should prepre the car in 24 hours .
                        <br>
                        <a href="."http://".$_SERVER['HTTP_HOST']."/rent/responseStatus/?id=".$id."&status=1".">accept</a> 
                        <br>
                        <a href="."http://".$_SERVER['HTTP_HOST']."/rent/responseStatus/?id=".$id."&status=2".">reject</a> 
                    </body>
                    </html>";
                
                    $mail->send();
                    // echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            }

            public function responseMail($status){
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
                    $mail->setFrom('owner@gmail.com', 'owner');
                    $mail->addAddress('customer@gmail.com', 'customer');     //Add a recipient


                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Owner respose ';
                    $mail->Body    = "
                        the owner ".$status."
                    ";
                
                    $mail->send();
                    // echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            }

            public function responseStatus(){
                $rent=new rent();
                $requested_at=$rent->getTime($_GET['id']);
                $response_at=date('Y-m-d H:i:s');
                $date1=new DateTime($requested_at);
                $date2=new DateTime($response_at);
                $difference=$date1->diff($date2);
                $hours=$difference->format('%h');                
                // echo $hours;
                if($hours>5){
                        $this->sendMail('didn’t respond for 5 hours');
                        echo "the link is expire ";
                }else{
                    if($_GET['status']==1){
                        $this->responseMail('accepted your request');
                        echo "you accepted the request";
                    }elseif($_GET['status']==2) {
                        $this->responseMail('rejected your request');
                        echo "you rejected the request";
                    }
                }
            }
}