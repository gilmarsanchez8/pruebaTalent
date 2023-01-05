<?php

class Register extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->message = "";
        $this->view->username = "";
        $this->view->phone = "";
        $this->view->email = "";
        $this->view->password = "";
    }

    function render(){
        $this->view->render('register/index');
    }

    function registerAccount(){
        $username = $_POST['username'];
        $phone    = $_POST['phone'];
        $email    = $_POST['email'];
        $password = $_POST['password'];

        $patternLetters = "/\d/";
        $patternEmail = "/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/";
        $patternPhone = "/(\+)*([0-9][-]*){9}/";

        if(empty($username) || empty($phone) || empty($email) || empty($password)){
            $message = 'All fields are required';
        }else if(preg_match($patternLetters, $username)){
            $message = 'The username field only allows letters';
        }else if(!preg_match($patternEmail, $email)){
            $message = 'The email field is invalid';
        }else if(!preg_match($patternPhone, $phone)){
            $message = 'The phone field is invalid, must contain the form +123456789';
        }else{
            $arrayAccount = array('username' => $username, 'phone' => $phone, 
                                    'email' => $email, 'password' => $password);
            $jsonString = json_encode($arrayAccount);
            $file = 'accounts.json';
            file_put_contents($file, $jsonString);
            $message = '';
            $username = '';
            $phone = '';
            $email = '';
            $password = '';
        }
        
        $this->view->username = $username;
        $this->view->phone = $phone;
        $this->view->email = $email;
        $this->view->password = $password;
        $this->view->message = $message;
        $this->render();
    }
}