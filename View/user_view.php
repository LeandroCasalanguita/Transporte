<?php 
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
    class user_view{
        private $smarty;
        public function __construct(){
            $this->smarty = new Smarty();
        }
        public function showLogin( $fail = ""){
            session_start();
            $this->smarty->assign('logeado',$_SESSION);
            $this->smarty->assign('fail',$fail);
            $this->smarty->display('login.tpl');
        }
        public function log(){
            header("Location: " . BASE_URL ."home");
        }
        public function Register($fail = ""){
            session_start();
            $this->smarty->assign('logeado',$_SESSION);
            $this->smarty->assign('uservalido',$fail);

            $this->smarty->display('register.tpl');
        }
    }