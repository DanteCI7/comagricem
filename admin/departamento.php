<?php
require_once(__DIR__."/controllers/departamento.php");
include_once('views/header.php');
include_once("views/menu.admin.php");
$departamento -> validateRol('Administrador');

$action = (isset($_GET['action'])) ? $_GET['action'] : "getAll";
$id = (isset($_GET['id'])) ? $_GET['id'] : null;

switch ($action) {
    case 'new':
        if (isset($_POST['enviar'])) {
            $data = $_POST['data'];
            $cantidad = $departamento->new($data);
            if ($cantidad) {
                $departamento->flash('success', 'Registro dado de alta con éxito');
                $data = $departamento->get(null);
                include('views/departamento/index.php');
            } else {
                $departamento->flash('danger', 'Algo fallo');
                include('views/departamento/form.php');
            }
        } else {
            include('views/departamento/form.php');
        }
        break;
    case 'edit':
        if (isset($_POST['enviar'])) {
            $data = $_POST['data'];
            $id = $_POST['data']['id_departamento'];
            $cantidad = $departamento->edit($id, $data);
            if ($cantidad) {
                $departamento->flash('success', 'Registro actualizado con éxito');
                $data = $departamento->get(null);
                include('views/departamento/index.php');
            } else {
                $departamento->flash('danger', 'Algo fallo');
                $data = $departamento->get(null);
                include('views/departamento/index.php');
            }
        } else {
            $data = $departamento->get($id);
            include('views/departamento/form.php');
        }
        break;
    case 'delete':
        $cantidad = $departamento->delete($id);
        if ($cantidad) {
            $departamento->flash('success', 'Registro con el id= ' . $id . ' eliminado con éxito');
            $data = $departamento->get(null);
            include('views/departamento/index.php');
        } else {
            $departamento->flash('danger', 'Algo fallo');
            $data = $departamento->get(null);
            include('views/departamento/index.php');
        }
        break;
   
        case 'getAll':
            $data = $departamento->get($id);
            include('views/departamento/index.php');
            break;

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