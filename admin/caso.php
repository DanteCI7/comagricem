<?php
require_once(__DIR__."/controllers/caso.php");
include_once("views/header.php");
include_once("views/menu.admin.php");
$caso->validateRol('Administrador');

$action = (isset($_GET['action'])) ? $_GET['action'] : "getAll";
$id = (isset($_GET['id'])) ? $_GET['id'] : null;

switch ($action) {
    case 'new':

        if (isset($_POST['enviar'])) {
            $data = $_POST['data'];
            $cantidad = $caso->new($data);
            if ($cantidad) {
                $caso->flash('success', 'Registro dado de alta con éxito');
                $data = $caso->get(null);
                include('views/caso/index.php');
            } else {
                $caso->flash('danger', 'Algo fallo');
                include('views/caso/form.php');
            }
        } else {
            include('views/caso/form.php');
        }
        break;
    case 'edit':
        if (isset($_POST['enviar'])) {
            $data = $_POST['data'];
            $cantidad = $caso->edit($data);
            if ($cantidad) {
                $caso->flash('success', 'Registro actualizado con éxito');
                $data = $caso->get(null);
                include('views/caso/index.php');
            } else {
                $caso->flash('danger', 'Algo fallo');
                $data = $caso->get(null);
                include('views/caso/index.php');
            }
        } else {
            $data = $caso->get($id);
            include('views/caso/form.php');
        }
        break;
    case 'delete':
        $cantidad = $caso->delete($id);
        if ($cantidad) {
            $caso->flash('success', 'Registro con el id= ' . $id . ' eliminado con éxito');
            $data = $caso->get(null);
            include('views/caso/index.php');
        } else {
            $caso->flash('danger', 'Algo fallo');
            $data = $caso->get(null);
            include('views/caso/index.php');
        }
        break;
   
        case 'getAll':
            $data = $caso->get($id);
            include('views/caso/index.php');
            break;
            
            default;
           

}
include("views/footer.php");
?>

<style type="text/css">
    body {
    margin: 0;
    color: #333333;
    background-color: #fff;
    background-image: url(images/fnd.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    }
    </style>