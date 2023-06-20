<?php 

    require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
    class truck_load_view{
        private $smarty;
        public function __construct(){
            $this->smarty = new Smarty();
        }  
        //muestra las cargas
        public function displayLoad($loads){
            session_start();
            $this->smarty->assign('logeado', $_SESSION);
            $this->smarty->assign('loads', $loads);
            $this->smarty->display('truck_load.tpl');
        }
        //muestra el formulario para actualizar
        public function up_form($load){
            $this->smarty->assign('load', $load);
            $this->smarty->display('edit_load.tpl');   
        }
        //muestra el formulario para agregar
        public function form_newload(){
            $this->smarty->display('new_load.tpl');
        }

    }