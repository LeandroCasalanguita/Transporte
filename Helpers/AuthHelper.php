<?php

class AuthHelper{
    public function __construct(){

    }

    public function checklogin(){
        session_start();
        if(empty($_SESSION['logeado'])){
            header("Location: " . BASE_URL ."login");
            die;

        }
        
    }
}