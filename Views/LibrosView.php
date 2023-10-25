<?php

require_once './libs/Smarty.class.php';
class LibrosView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function renderHome(){
        $this->smarty->display("./templates/renderHome.tpl");
    }
    function renderListLibros($libros){
        $this->smarty->assign("libros", $libros);
        $this->smarty->display('./templates/renderListLibros.tpl');
    }
    function renderDetalleLibros($detalleLibros){
        $this->smarty->assign('detalleLibros',$detalleLibros);
        $this->smarty->display('./templates/renderDetalleLibros.tpl');
    }
    function renderListAutores($autores){
        $this->smarty->assign('autores',$autores);
        $this->smarty->display('./templates/renderListAutores.tpl');
    }
    function renderDetalleAutor($detalleAutor){
        foreach($detalleAutor as $autor){
            $autor= $autor->Nombre_autor . ' ' . $autor->Apellido;
        }
        $this->smarty->assign('autor', $autor);
        $this->smarty->assign('detalleAutor', $detalleAutor);
        $this->smarty->display('./templates/renderDetalleAutor.tpl');
    }

}

?>