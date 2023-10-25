<?php

require_once './libs/Smarty.class.php';
class UserView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    function renderRegistro(){
        $this->smarty->display('./templates/renderRegistro.tpl');
    }
    function renderAdministradores(){
        $this->smarty->display('./templates/renderAdministradores.tpl');
    }
    function renderAdminLibros($libros){
        $this->smarty->assign('libros', $libros);
        $this->smarty->display('./templates/renderAdminLibros.tpl');
    }
    function renderAdminAutores($autores){
        $this->smarty->assign('autores', $autores);
        $this->smarty->display('./templates/renderAdminAutores.tpl');
    }
    function renderEditarLibro($libros, $autores, $id){
        foreach($libros as $libro):
            $nombre_libro=$libro->Nombre;
            $genero=$libro->Genero;
            $lanzamiento=$libro->Lanzamiento;
            $id_autor=$libro->id_autor;
            $nombre_autor=$libro->Nombre_autor;
            $apellido=$libro->Apellido;
        endforeach;

        $this->smarty->assign('id', $id);
        $this->smarty->assign('nombre_libro', $nombre_libro);
        $this->smarty->assign('genero', $genero);
        $this->smarty->assign('lanzamiento', $lanzamiento);
        $this->smarty->assign('id_autor', $id_autor);
        $this->smarty->assign('nombre_autor', $nombre_autor);
        $this->smarty->assign('apellido', $apellido);
        $this->smarty->assign('autores', $autores);
        $this->smarty->display('./templates/renderEditarLibro.tpl');
    }
    function renderEditarAutor($autores, $id){
        foreach($autores as $autor){
            $nombre_autor=$autor->Nombre_autor;
            $apellido=$autor->Apellido;
            $nacimiento=$autor->Fecha_de_nacimiento;
            $nacionalidad=$autor->Nacionalidad;
        }

        $this->smarty->assign('id', $id);
        $this->smarty->assign('nombre_autor', $nombre_autor);
        $this->smarty->assign('apellido', $apellido);
        $this->smarty->assign('nacimiento', $nacimiento);
        $this->smarty->assign('nacionalidad', $nacionalidad);
        $this->smarty->display('./templates/renderEditarAutor.tpl');
    }
    function renderAgregarLibro($autores){
        $this->smarty->assign('autores',$autores);
        $this->smarty->display('./templates/renderAgregarLibro.tpl');
    }
    function renderAgregarAutor(){
        $this->smarty->display('./templates/renderAgregarAutor.tpl');
    }
}

?>