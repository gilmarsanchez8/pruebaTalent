<?php

class Main extends Controller{

    function __construct(){
        parent::__construct();
        $this->view->message = "";
        $this->view->username = "";
        $this->view->phone = "";
        $this->view->email = "";
        $this->view->password = "";
        $_SESSION['userLogIn'] = 0;
    }

    function render(){
        $this->view->render('register/index');
    }
}