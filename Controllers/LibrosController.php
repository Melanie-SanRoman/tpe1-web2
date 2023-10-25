<?php

require_once './Models/LibrosModel.php';
require_once './Views/LibrosView.php';

class LibrosController{
    private $model;
    private $view;

    function __construct(){
        $this->model =new LibrosModel();
        $this->view= new LibrosView();
    }
    function showHome(){
        $this->view->renderHome();
    }
    function showListLibros(){
        $libros= $this->model->getListLibros();
        $this->view->renderListLibros($libros);
    }
    function showDetalleLibro($id){
        $detalleLibros= $this->model->getDetalleLibros($id);
        $this->view->renderDetalleLibros($detalleLibros);
    }
    function showListAutores(){
        $autores= $this->model->getListAutores();
        $this->view->renderListAutores($autores);
    }
    function showDetalleAutor($id){
        $detalleAutor= $this->model->getDetalleAutor($id);
        $this->view->renderDetalleAutor($detalleAutor);
    }
}