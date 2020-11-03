<?php

session_start();

$name = $subject = $email = $msg = $success = '';

$name_err = $subject_err = $email_err = $msg_err = '';

if(isset($_POST['submit'])){

    
    if(empty($_POST['name'])){
        $name_err = 'name field cannot be empty';
    }else{
     $name = htmlspecialchars(trim($_POST['name']));
    }
    if( empty($_POST['subject'])){
        $subject_err = 'subject field cannot be empty';
    }else{
     $subject = htmlspecialchars(trim($_POST['subject']));
     }
    if( empty($_POST['subject']) ){
        $email_err = 'email field cannot be empty';
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $email_err = 'enter a valid email please';
    }else{
    $email = htmlspecialchars(trim($_POST['email']));
    }
    if(empty($_POST['subject'])){
        $msg_err = 'message field cannot be empty';
    }else {
    $msg = htmlspecialchars(trim($_POST['msg']));
    }

    if($name_err == '' and $subject_err == '' and $email_err == '' and $msg_err == '' ){
       $succes = 'Thank you for contacting me!';
       $name_err = $subject_err = $email_err = $msg_err = '';
    }else{
       $_SESSION['err'] = '!Form was not correctly filled';
    }
}
