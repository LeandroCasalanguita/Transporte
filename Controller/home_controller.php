<?php
require_once ('View/home_view.php');
require_once('Controller/travel_controller.php');
require_once('Controller/truck_load_controller.php');
class home_controller {
    private $view;
    private $truck;
    private $travel;

    public function __construct (){
        $this-> view = new home_view();
        $this-> truck = new truck_load_controller();
        $this-> travel = new travel_controller();
    }
    //muestra los items por categoria
    public function showHome($id=null){
        $truck_load = $this -> truck ->view_load();
        $travel = $this ->travel->show_travels($id);
        $this -> view -> showHome($truck_load,$travel);
    }
}