<?php
    require_once('Controller/travel_controller.php');
    require_once('Controller/truck_load_controller.php');
    require_once('Controller/user_controller.php');
    require_once('Controller/home_controller.php');
    require_once('./Helpers/AuthHelper.php');

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    }
    else{
        $action = 'home';
    }
    $params = explode('/', $action);   
    $homeController = new home_controller();
    $travelController = new travel_controller();
    $truckLoadController = new truck_load_controller();
    $userController = new user_controller();
    $AuthHelper  = new AuthHelper();

switch ($params[0]) {
    case 'home': //pagina de inicio que contiene items por categoria
        if(isset($params[1])){
            $homeController->showHome($params[1]); 
        }
        else{
            $homeController->showHome();
        }
        break;
    case 'travel': //mostrar items (viajes) debe mostrar el truck load(deben tener detalles)
        $travelController->showTravels();
        break;
    case 'deletetravel':// borrar un travel
         $AuthHelper->checklogin();
         $travelController->delete_travel($params[1]); 
        break;
    case 'detailstravel':// detalles de un travel
        $travelController->show_travel($params[1]);
        break;
    case 'newtravel': //carga la vista para agregar un travel 
        $AuthHelper->checklogin();      
        $load=$truckLoadController->view_load();
        $travelController->adtravel($load);
        break;
    case 'addtravel': //añadir un travel 
        $AuthHelper->checklogin();       
        $travelController-> add_travel();     
        break;
    case 'update'://formulario para modificar un travel con los datos precargados
        $AuthHelper->checklogin();
        $load=$truckLoadController->view_load();
        $travelController-> add_form($params[1],$load);
        break;
    case 'mod'://modificar un travel
        $AuthHelper->checklogin();
        $travelController-> updattravel($params[1]);
        break;
    case 'truck_load'://muestra todos los tipos de cargas
        $truckLoadController-> showLoads();
        break;
    case 'delete_truck_load'://borra un tipo de carga
        $AuthHelper->checklogin();
        $truckLoadController->delete_truck_load($params[1]);
        break;
    case 'update_truck_load'://carga el form para actualizar un tipo de carga
        $AuthHelper->checklogin();
        $truckLoadController->up_form($params[1]);
        break;
    case 'upd'://actualiza un tipo de carga
        $AuthHelper->checklogin();
        $truckLoadController->up_load($params[1]);
        break;
    case 'newload'://carga el form para agregarun tipo de carga
        $AuthHelper->checklogin();
        $truckLoadController->new_load();
        break;
    case 'addload'://agrega un tipo de carga
        $AuthHelper->checklogin();
        $truckLoadController->addload();
        break;
    case 'login': //mostrar formulario logeo
        $userController-> showLogin();
        break;
    case 'validate'://valida
        $userController-> validate();  
        break;
    case 'register':
        $userController-> showRegister();
        break;
    case 'registro':
        $userController-> saveUser();
        break;
    case 'logout':
        $userController-> logout();
        break;
    default:
       echo('403 Forbidden');
    break;
}
