<?php
class travel_model{
    
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_transport;charset=utf8', 'root', '');
    }
    //funcion que muestra todos los viajes
    public function getAllTravels() {
        $query = $this->db->prepare("SELECT travel.id_travel, truck_load.type_load, travel.kilometer,travel.amount_fuel, travel.truck,travel.driver FROM travel INNER JOIN truck_load ON travel.id_load = truck_load.id_load");
        $query->execute();
        $travel = $query->fetchAll(PDO::FETCH_OBJ); 
        return $travel;
    }
    //funcion que borra viaje por id
    public function delete_travel($id){
        $query = $this->db->prepare('DELETE FROM travel WHERE `id_travel` = ?');
        $query->execute([$id]);
    }
    //funcion que modifica un viaje por id
    public function up_travels($id_load,$kilometer,$amount_fuel,$truck,$driver,$id){
        $query = $this->db->prepare("UPDATE travel SET id_load=?, kilometer=?, amount_fuel=?, truck=?, driver=? WHERE id_travel=?");
        $query->execute(array($id_load, $kilometer, $amount_fuel, $truck, $driver, $id));
    }
    //agrega un viaje 
    function addtravel($id_load,$kilometer, $amount_fuel,$truck,$driver){
        $query= $this->db->prepare("INSERT INTO travel (`id_load`, `kilometer`, `amount_fuel`, `truck`, `driver`) VALUES (?, ?, ?, ?, ?)");
        $query->execute(array($id_load,$kilometer,$amount_fuel,$truck,$driver));
    }
    //muestra los detalles del viaje
    public function show_travel($id){
        $query = $this->db->prepare('SELECT travel.id_travel, truck_load.type_load, travel.kilometer,travel.amount_fuel, travel.truck,travel.driver FROM travel INNER JOIN truck_load ON travel.id_load = truck_load.id_load WHERE `id_travel` = ?');
        $query->execute([$id]);
        $travel = $query->fetchAll(PDO::FETCH_OBJ);
        return ($travel);
    }
    //filtra los viajes por tipo de carga
    public function filtertravel($id){
        $query = $this->db->prepare("SELECT kilometer,amount_fuel,truck,driver FROM travel WHERE id_load = ?");
        $query->execute([$id]);
        $travel = $query->fetchAll(PDO::FETCH_OBJ);
        return ($travel);
    }


}




