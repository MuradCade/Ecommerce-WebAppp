<?php


$reciever = "xejabix123@seosnaps.com";
$subject = "Test email from Etech Online Academy";
$body = "welcome to Etech , we are glad to have you";
$sender = "king12murad@gmail.com";

if (mail($reciever,$subject,$body,$sender)) {
    echo "email send successfully";
    # code...
}else{
    echo "failed to send email";
}