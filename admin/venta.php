<?php
require_once(__DIR__."/controllers/venta.php");
require_once(__DIR__."/controllers/departamento.php");
include_once("views/header.php");
$roles;
$roles=implode($_SESSION['roles']);

switch($roles){
    case 'Administrador':
        include_once("views/menu.admin.php");
        break;
    case 'Cliente':
        include_once("views/menu.cliente.php");
        break;
    case 'Empleado':
        include_once("views/menu.empleado.php");
}
$venta -> validateRol('Administrador' || 'Empleado');
$action = (isset($_GET["action"])) ? $_GET["action"] : null;
$id = (isset($_GET['id'])) ? $_GET['id'] : null;
$id_tarea = (isset($_GET['id_tarea'])) ? $_GET['id_tarea'] : null;

switch ($action) {
    case 'new':
        $venta -> validatePrivilegio('Venta Crear');
        $dataDepartamentos = $departamento->get(null);
        if (isset($_POST['enviar'])) {
            $data = $_POST['data'];
            $cantidad = $venta->new($data);
            if ($cantidad) {
                $venta->flash('success', 'Registro dado de alta con éxito');
                $data = $venta->get(null);
                include('views/venta/index.php');
            } else {
                $venta->flash('danger', 'Algo fallo');
                include('views/venta/form.php');
            }
        } else {
            include('views/venta/form.php');
        }
        break;
    case 'delete':
        $venta -> validatePrivilegio('Venta Eliminar');
        $cantidad = $venta->delete($id);
        if ($cantidad) {
            $venta->flash('success', 'Registro con el id= ' . $id . ' eliminado con éxito');
            $data = $venta->get(null);
            include('views/venta/index.php');
        } else {
            $venta->flash('danger', 'Algo fallo');
            $data = $venta->get(null);
            include('views/venta/index.php');
        }
        break;
    case 'edit':
        $venta -> validatePrivilegio('Venta Actualizar');
        $dataDepartamentos = $departamento->get(null);
        if (isset($_POST['enviar'])) {
            $data = $_POST['data'];
            $id = $_POST['data']['id_venta'];
            $cantidad = $venta->edit($id, $data);
            if ($cantidad) {
                $venta->flash('success', 'Registro actualizado con éxito');
                $data = $venta->get(null);
                include('views/venta/index.php');
            } else {
                $venta->flash('danger', 'Algo fallo');
                $data = $venta->get(null);
                include('views/venta/index.php');
            }
        } else {
            $data = $venta->get($id);
            include('views/venta/form.php');
        }
        break;
        

    case 'getAll':
    default:
    $venta -> validatePrivilegio('Venta Leer');
        $data = $venta->get(null);
        include("views/venta/index.php");
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