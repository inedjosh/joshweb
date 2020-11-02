<?php

session_start();

if(isset($_POST['submit'])){

    $err = [];

    $name = htmlspecialchars(trim($_POST['name']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $email = htmlspecialchars(trim($_POST['email']));
    $msg = htmlspecialchars(trim($_POST['msg']));

    if(empty($name) ){
        $err['name'] = 'name field cannot be empty';
    }
    if( empty($subject) ){
        $err['subject'] = 'subject field cannot be empty';
    }
    if( empty($email) ){
        $err['email'] = 'email field cannot be empty';
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $err['email'] = 'enter a valid email please';
    }
    if(empty($msg)){
        $err['msg'] = 'message field cannot be empty';
    }

    if(count($err) === 0 ){
        mail('inedujoshua@gmail.com', $subject, $msg);
        $_SESSION['sent'] = true;
         header('location:index.php');
        echo 123;
    }else{
       $_SESSION['err'] = $err;
         header('location:index.php');
    }
}