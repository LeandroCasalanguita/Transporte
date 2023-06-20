<?php
class truck_load_model {
    private $db;
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_transport;charset=utf8', 'root', '');
    }
    //muestra todas las cargas
    public function getAllLoad() {
        $query = $this->db->prepare("SELECT * FROM truck_load");
        $query->execute();
        $load = $query->fetchAll(PDO::FETCH_OBJ); 
        return $load;
    }
    //borra un tipo de carga por id
    public function delete_truck_load($id){
        $query = $this->db->prepare("DELETE FROM truck_load WHERE `id_load` = ?");
        $query->execute([$id]);
    }
    //recupera los datos para llenar el formulario de editar
    public function show_load($id){
        $query = $this->db->prepare("SELECT * FROM truck_load WHERE truck_load.id_load = ?");
        $query->execute([$id]);
        $load = $query->fetch(PDO::FETCH_OBJ);
        return $load;
    }
    //actualiza los datos de una carga
    public function up_load($type_load,$value,$id){
        $query = $this->db->prepare("UPDATE truck_load SET type_load= ?, value=? WHERE id_load=?");
        $query->execute([$type_load,$value,$id]);
    }
    //agrega una nueva carga
    public function add_load($type_load,$value){
        $query= $this->db->prepare("INSERT INTO `truck_load` (`type_load`, `value`) VALUES (?,?)");
        $query->execute([$type_load,$value]); 
    }
}
