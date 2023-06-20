<?php 
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
    class home_view{
        private $smarty;
        public function __construct(){
            $this->smarty = new Smarty();
        }
        public function showHome($truck_load,$travel){
            session_start();
            $this->smarty->assign('logeado',$_SESSION);
            $this->smarty->assign('truck_load',$truck_load);
            $this->smarty->assign('travels', $travel);
            $this->smarty->display('home.tpl');
        }
        
    }