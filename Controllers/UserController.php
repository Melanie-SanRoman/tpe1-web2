<?php

require_once './Models/UserModel.php';
require_once './Views/UserView.php';

class UserController{
    private $model;
    private $view;

	function __construct(){
        $this->model = new UserModel();
        $this->view = new UserView();
    }
    public function checkLogIn(){
        session_start();
        
        if(!isset($_SESSION['userId'])){
            header("Location: home");
            die();
        }

        if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 5000)) { 
            header("Location: home");
            die(); // destruye la sesión, y vuelve al login
        } 
        $_SESSION['LAST_ACTIVITY'] = time();
    }
    public function Login(){
        $password = $_POST['pass'];

        $usuario = $this->model->getPassword($_POST['user']);

        if (isset($usuario) && $usuario != null && password_verify($password, $usuario->Contraseña)){
            session_start();
            $_SESSION['user'] = $usuario->Email;
            $_SESSION['userId'] = $usuario->ID;
            header("Location: administradores");
        }else{
            echo 'incorrecto';
        }
    }
    function Registro(){
        $this->view->renderRegistro();
    }
    function Registrar(){
        if(isset($_POST['boton'])){
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $email=$_POST['email'];
            $password=password_hash ($_POST['password'], PASSWORD_BCRYPT);

            $registro=$this->model->getRegistrar($nombre,$apellido,$email,$password);
            
            if($registro>0){
                Header('Location: home');
            }
        }
    }
    function Logout(){
        session_start();
        session_destroy();
        header("Location: home");
    }
    function showAdministradores(){
        $this->checkLogIn();
        $this->view->renderAdministradores();
    }
    function showAdminLibros(){
        $this->checkLogIn();
        $libros= $this->model->getAdminLibros();
        $this->view->renderAdminLibros($libros);
    }
    function showAdminAutores(){
        $this->checkLogIn();
        $autores= $this->model->getAdminAutores();
        $this->view->renderAdminAutores($autores);
    }
    function showEditarLibros($id){
        $this->checkLogIn();
        $libro= $this->model->getEditarLibro($id);
        $autores=$this->model->getAdminAutores();
        $this->view->renderEditarLibro($libro,$autores,$id);
    }
    function showEditarAutores($id){
        $this->checkLogIn();
        $autor= $this->model->getEditarAutor($id);
        $this->view->renderEditarAutor($autor,$id);
    }
    function showAgregarLibro(){
        $this->checkLogIn();
        $autores=$this->model->getAdminAutores();
        $this->view->renderAgregarLibro($autores);
    }
    function showInsertLibro(){
        $this->checkLogIn();
        if(isset($_POST['agregar'])){
            $nombre = ($_POST['nombre']);
            $genero = ($_POST['genero']);
            $lanzamiento = ($_POST['lanzamiento']);
            $id_autor = ($_POST['autor']);

            $this->model->getInsertLibro($nombre,$genero,$lanzamiento,$id_autor);
            Header('Location: ../../administrar/libros');
        }
    }
    function showAgregarAutor(){
        $this->checkLogIn();
        $this->view->renderAgregarAutor();
    }
    function showInsertAutor(){
        $this->checkLogIn();
        if(isset($_POST['agregar'])){
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $nacimiento=$_POST['nacimiento'];
            $nacionalidad=$_POST['nacionalidad'];

            $this->model->getInsertAutor($nombre,$apellido,$nacimiento,$nacionalidad);
            Header('Location: ../../administrar/autores');
        }
    }
    function showEliminarLibro($id){
        $this->checkLogIn();
        $this->model->getEliminarLibro($id);
        Header('Location: ../../administrar/libros');
    }
    function showEliminarAutor($id){
        $this->checkLogIn();
        $this->model->getElimarLibroAutor($id);
        $this->model->getEliminarAutor($id);
        Header('Location: ../../administrar/autores');
    }
}