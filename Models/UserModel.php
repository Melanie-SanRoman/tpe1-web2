<?php

require_once 'config.php';

class UserModel{
    private $db;

    function __construct(){
        $this->db =new PDO(
            'mysql:host=' . host . ';dbname=' . name,
            user,
            pass
        );
    }
    function getPassword($user){
        $query = $this->db->prepare( "SELECT * FROM usuarios WHERE Email = ?");
        $query->execute(array($user));
        
        return ($query->fetch(PDO::FETCH_OBJ));
    }
    function getRegistrar($nombre, $apellido, $email, $password){
        $query= $this->db->prepare("INSERT INTO usuarios (Nombre,Apellido,Email, Contraseña) VALUES (?,?,?,?)");
        
        return ($query->execute([$nombre, $apellido, $email, $password]));
    }
    function getAdminLibros(){
        $query = $this->db->prepare("SELECT * FROM libros");
        $query->execute();

        return ($query->fetchALL(PDO::FETCH_OBJ));
    }
    function getAdminAutores(){
        $query = $this->db->prepare("SELECT * FROM autores");
        $query->execute();

        return ($query->fetchALL(PDO::FETCH_OBJ));
    }
    function getEditarLibro($id){
        $query= $this->db->prepare("SELECT Nombre,Genero,Lanzamiento,id_autor, Nombre_autor, Apellido FROM libros INNER JOIN autores WHERE libros.id_libros= '$id' AND libros.id_autor = autores.ID");
        $query->execute();
    
        return ($query->fetchALL(PDO::FETCH_OBJ));
    }
    function getEditarAutor($id){
        $query= $this->db->prepare("SELECT * FROM autores WHERE `ID`= '$id'");
        $query->execute();
    
        return ($query->fetchALL(PDO::FETCH_OBJ));
    }
    function getInsertLibro($nombre,$genero,$lanzamiento,$id_autor){
        $query = $this->db->prepare("INSERT INTO libros (Nombre, Genero, Lanzamiento, id_autor) VALUES ('$nombre','$genero','$lanzamiento', '$id_autor')");
        $query->execute();
    }
    function getInsertAutor($nombre,$apellido,$nacimiento,$nacionalidad){
    $query = $this->db->prepare("INSERT INTO autores (Nombre_autor, Apellido, Fecha_de_nacimiento, Nacionalidad) VALUES ('$nombre','$apellido','$nacimiento', '$nacionalidad')");
    $query->execute();
    }
    function getEliminarLibro($id){
        $query = $this->db->prepare("DELETE FROM `libros` WHERE `id_libros`=$id");
        $query->execute();
    }
    function getElimarLibroAutor($id){
        $query = $this->db->prepare("DELETE FROM libros WHERE id_autor=$id");
        $query->execute();
    }
    function getEliminarAutor($id){
        $query = $this->db->prepare("DELETE FROM autores WHERE ID=$id");
        $query->execute();
    }
    function getUpdateLibro($id, $nombre, $genero, $lanzamiento,$id_autor){
        $query= $this->db->prepare("UPDATE `libros` SET `id_libros`='$id',`Nombre`='$nombre',`Genero`='$genero',`Lanzamiento`='$lanzamiento',`id_autor`='$id_autor' WHERE id_libros='$id'");
        $query->execute();
    }
    function getUpdateAutor($id, $nombre, $apellido, $nacimiento,$nacionalidad){
        $query= $this->db->prepare("UPDATE autores SET Nombre_autor='$nombre', Apellido='$apellido' WHERE ID='$id'");
        $query->execute();
    }
}   

?>