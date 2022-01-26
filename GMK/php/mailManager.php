<?php

    interface Mail {
        function sendMail($from, $address, $subject, $message);
    }

    class mailSender implements Mail {
        function __construct() {

        }
        
        function sendMail($from, $address, $subject, $message) {
            $headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=utf-8\r\n";
            $headers .= "From:" . $from;


            if(mail($address,$subject,$message,$headers)){
                return array("status"=>1,"msg"=>"");
            }else{
                return array("status"=>0,"msg"=>""); 
                }
        }
    }
?>