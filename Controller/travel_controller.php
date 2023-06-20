<?php
    require_once('Model/travel_model.php');
    require_once('View/travel_view.php');
    class travel_controller{
        private $model;
        private $view;

        public function __construct() {
            $this->model = new travel_model();
            $this->view  = new travel_view();
        }
        //muestra todos los travels
        public function showTravels(){
            $travels = $this->model->getAllTravels();
            $this->view->showTravels($travels);
        }
        //borrar por id el travel
        public function delete_travel($id){
            $this->model->delete_travel($id);
            header("Location: " . BASE_URL ."travel"); 
        }
        //muestra los detalles de un travel
        public function show_travel($id){
            $travel=$this->model->show_travel($id);
            $this->view->show_travel($travel);
        }
        //devuelve los viajes por id en el home
        public function show_travels($id){
            $travel=$this->model->filtertravel($id);
            return $travel;
        }
        //agrega los datos para el formulario de actualizar un viaje
        public function add_form($id,$load){
            $travel=$this->model->show_travel($id);
            $this->view->add_form($travel,$load);
        }
        //actualizar el travel
        public function updattravel($id){
            $id_load = $_POST['id_load'];
            $kilometer = $_POST['kilometer'];
            $amount_fuel = $_POST['amount_fuel'];
            $truck = $_POST['truck'];
            $driver = $_POST['driver'];
            $this->model->up_travels($id_load,$kilometer,$amount_fuel,$truck,$driver,$id);
            header("Location: " . BASE_URL ."travel");
        }   
        //agrega un travel
        public function add_travel(){
            $id_load = $_POST['id_load'];
            $kilometer = $_POST['kilometer'];
            $amount_fuel = $_POST['amount_fuel'];
            $truck = $_POST['truck']; 
            $driver = $_POST['driver'];
            $this->model->addtravel($id_load,$kilometer,$amount_fuel,$truck,$driver);
            header("Location: " . BASE_URL ."travel");
        }
        //muestra el formulario para agregar un travel
        public function adtravel($load){
            $this->view->adtravel($load);
        }
        

    }  
