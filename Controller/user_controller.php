<?php
    require_once('Model/user_model.php');
    require_once('View/user_view.php');
class user_controller{
        private $model;
        private $view;
        public function __construct() {
            $this->model = new user_model();
            $this->view  = new user_view();
        }
        //muestra el formulario de loggin
        public function showLogin(){
            $this->view->showLogin();
        }
        //valida el usuario 
        public function validate(){
            if(!empty($_POST['username']) && !empty($_POST['password'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $user = $this->model->checkuser($username);
                if((!empty($user)) && password_verify($password,$user->password)){
                    session_start();
                    $_SESSION['logeado']= true;
                    $_SESSION['email']=$user->email;
                    header("Location: " . BASE_URL ."home");
                }
                else{
                    $this->view->showLogin("Datos incorrectos");
                }
            }
        }
        //muestra el formulario de registro
        public function showRegister(){
            $this->view->Register();
        }
        //valida el usuario y crea el nuevo
        public function saveUser(){
            $username = $_POST['username'];
            $uservalido=$this->model->checkuser($username);
            if(empty($uservalido)){
            $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
            $email = $_POST['email'];
            $this->model->insertUser($username,$password,$email);
            session_start();
            $_SESSION['logeado']= true;
            $_SESSION['email']= $email ;
            header("Location: " . BASE_URL ."home");
            }
            else{
                $this->view->Register("El nombre de usuario esta en uso");
            }
        }

        public function logout(){
            session_start();
            session_destroy();
            header("Location: " . BASE_URL ."home");
        }
    }
