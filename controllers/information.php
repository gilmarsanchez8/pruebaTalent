<?php

class Information extends Controller{
    
    function __construct(){
        parent::__construct();
        $this->view->movies = [];
    }

    function render(){
        $filter = '';
        $movies = $this->model->get($filter);
        $this->view->movies = $movies;
        $this->view->render('information/index');
    }

    function titleSearch(){
        $filter = $_POST['title'];
        $movies = $this->model->get($filter);
        $this->view->movies = $movies;
        $this->view->render('information/index');
    }

    function clearSearch(){
        $this->render();
    }
}