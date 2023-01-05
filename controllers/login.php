<?php

class Login extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->messageLogin = "";
    }

    function render(){
        $this->view->render('login/index');
    }

    function validateLogin(){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username) || empty($password)){
            $messageLogin = 'All fields are required';
        }else{
            $dataAccounts = file_get_contents('accounts.json');
            $jsonAccounts = json_decode($dataAccounts, true);

            if($jsonAccounts['username'] === $username && $jsonAccounts['password'] === $password){
                $_SESSION['userLogIn'] = 1;
                $messageLogin = '';
                $this->LoginSection();
            }else{
                $messageLogin = 'the account does not exist';
                $this->view->messageLogin = $messageLogin;
                $this->render();
            }
        }   
    }

    function LoginSection(){
        if(isset($_SESSION['userLogIn'])){
            $redirectLogin = constant('URL') . "information";
            header("Location: " . $redirectLogin);
        }
    }
}