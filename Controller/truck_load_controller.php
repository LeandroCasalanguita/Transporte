<?php
    require_once('Model/truck_load_model.php');
    require_once('View/truck_load_view.php');
    class truck_load_controller{
        private $model;
        private $view;
        public function __construct() {
            $this->model = new truck_load_model();
            $this->view  = new truck_load_view();
        }
        //muestra todas las cargas
        public function showLoads(){
            $loads = $this->model->getAllLoad();
            $this->view-> displayLoad($loads);
        }
        //trae las cargas para el home 
        public function view_load(){
            $load =$this->model->getAllLoad();
            return $load;
        }
        //borra un tipo de carga
        public function delete_truck_load($id){
            $this->model->delete_truck_load($id);
            header("Location: " . BASE_URL ."truck_load");            
        }
        //carga el formulario de actualizar tipo de carga
        public function up_form($id){
            $load[]=$this->model->show_load($id);
            $this->view->up_form($load);
        }
        //actualiza el tipo de carga
        public function up_load($id){
            $type_load = $_POST['type_load'];
            $value = $_POST['value'];
            $this->model->up_load($type_load,$value,$id);
            header("Location: " . BASE_URL ."truck_load");           
        }
        //muestra el form para agregar un tipo de carga
        public function new_load(){
            $this->view->form_newload();
        }
        //agrega un tipo de carga
        public function addload(){
            $type_load = $_POST['type_load'];
            $value = $_POST['value'];
            $this->model->add_load($type_load,$value);
            header("Location: " . BASE_URL ."truck_load");           
        }  
    }
