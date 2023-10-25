<?php

require_once 'config.php';

class LibrosModel{
    private $db;

    function __construct(){
        $this->db =new PDO(
            'mysql:host=' . host . ';dbname=' . name,
            user,
            pass
        );
    }
    function getListLibros(){
        $query= $this->db->prepare("SELECT id_libros,Nombre, Genero, Lanzamiento, Nombre_autor, Apellido FROM libros INNER JOIN autores WHERE libros.id_autor= autores.ID");
        $query->execute();
    
        return($query->fetchALL(PDO::FETCH_OBJ));
    }
    function getDetalleLibros($id){
        $query= $this->db->prepare("SELECT * FROM libros INNER JOIN autores WHERE `id_libros`= '$id' AND libros.id_autor = autores.ID");
        $query->execute();

        return ($query->fetchALL(PDO::FETCH_OBJ));
    }
    function getListAutores(){
        $query = $this->db->prepare("SELECT * FROM autores");
        $query->execute();

        return ($query->fetchALL(PDO::FETCH_OBJ));
    }
    function getDetalleAutor($id){
        $query= $this->db->prepare("SELECT * FROM autores INNER JOIN libros WHERE `ID`= '$id' AND libros.id_autor = autores.ID");
        $query->execute();

        return ($query->fetchALL(PDO::FETCH_OBJ));
    }
}