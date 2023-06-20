<?php 
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
    class travel_view{
        private $smarty;
        public function __construct(){
            $this->smarty = new Smarty();
        }
        //muestra todos los viajes
        public function showTravels($travels){
            session_start();
            $this->smarty->assign('logeado', $_SESSION);
            $this->smarty->assign('travels', $travels);
            $this->smarty->display('travel.tpl');
        }
        //muestra detalles de los viajes
        public function show_travel($travel){
            $this->smarty->assign('travel', $travel);
            $this->smarty->display('details_travel.tpl');
        }
        //muestra el formulario para actualizar viajes
        public function add_form($travel,$load){
            $this->smarty->assign('travels', $travel);
            $this->smarty->assign('type_load',$load);
            $this->smarty->display('update_travel.tpl');
        }
        //muestra el formulario para agregar viajes
        public function adtravel($load){
            $this->smarty->assign('type_load',$load);
            $this->smarty->display('addtravel.tpl');
        }
    }