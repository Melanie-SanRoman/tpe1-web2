<?php

require_once './Controllers/LibrosController.php';
require_once './Controllers/UserController.php';

$controller= new LibrosController();
$controllerUser= new UserController();


$action = $_GET['action'];
$params = explode('/', $action);


switch ($params[0]) {
    case 'home':
        $controller->showHome();
        break;
    case '':
        $controller->showHome();
        break;
    case 'libros':
        $controller->showListLibros();
        break;
    case 'detalle':
        if (isset($params[1]) && isset($params[2])) {
            switch ($params[1]) {
                case 'libros':
                    $id = $params[2];
                    $controller->showDetalleLibro($id);
                    break;
                case 'autores':
                    $id = $params[2];
                    $controller->showDetalleAutor($id);
                    break;
            }
        }
        break;
    case 'autores':
        $controller->showListAutores();
        break;
    case 'login':
        $controllerUser->Login();
        break;
    case 'register':
        $controllerUser->Registro();
        break;
    case 'registrar':
        $controllerUser->Registrar();
        break;
    case 'logout':
        $controllerUser->Logout();
        break;
    case 'administradores':
        $controllerUser->showAdministradores();
        break;
    case 'administrar':
        switch ($params[1]) {
            case 'libros':
                $controllerUser->showAdminLibros();
                break;
            case 'autores':
                $controllerUser->showAdminAutores();
                break;
        }
        break;
    case 'editar':
        switch ($params[1]) {
            case 'libro':
                $controllerUser->showEditarLibros($params[2]);
                break;
            case 'autor':
                $controllerUser->showEditarAutores($params[2]);
                break;
        }
        break;
    case 'agregar':
        switch ($params[1]) {
            case 'libro':
                $controllerUser->showAgregarLibro();
                if (isset($params[2])) {
                    $controllerUser->showInsertLibro();
                    break;
                }
                break;
            case 'autor':
                $controllerUser->showAgregarAutor();
                if (isset($params[2])) {
                    $controllerUser->showInsertAutor();
                    break;
                }
                break;
        }
        break;
    case 'eliminar':
        switch ($params[1]) {
            case 'libro':
                $controllerUser->showEliminarLibro($params[2]);
                break;
            case 'autor':
                $controllerUser->showEliminarAutor($params[2]);
                break;
        }
        break;
    default:
        echo ('404 Page not found');
        break;
}



// if ($params[0] == '' || $params[0] == 'home') {
//     echo showHome();
// } elseif ($params[0] == 'libros') {
//     echo showListLibros();
// }
// elseif ($params[1] == 'detalleLibros') {
//     $id = $params[2];
//     echo showDetalleLibro($id);
// }
// elseif ($params[0] == 'autores') {
//     echo showListAutores();
//}

// elseif(){
//     echo listado();

// }
// elseif($params[0]=='login_up'){

// }
// elseif($params[0]=='administradores'){
//     echo verificar();
// }

?>