<?php 
include_once("views/header.php");

require_once(__DIR__."/controllers/departamento.php");

require_once(__DIR__."/controllers/sistema.php");
require_once(__DIR__."/controllers/venta.php");
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


$reporte = $venta->chartVenta();
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link href="/admin/css/style.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/2df4df1988.js" crossorigin="anonymous"></script>
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
<br><br><br><br>
<div style="background-color: #fff;border-radius: 20px; " class="container-fluid px-0 mb-5 col-6">
<br><br>
      <div class="row">
        <div class="col-md-4">
          <center>
          <img src="../admin/images/agroquimicos.png" class="img-fluid" width="120px">
          </center>
        </div>
        <div class="col-md-4">
          <center> 
          <img src="../admin/images/semillas.png"class="img-fluid"  width="120px">
          </center>
        </div>
        <div class="col-md-4">
          <center>
          <img src="../admin/images/fertilizantes.png"  width="120px">
          </center>
        </div>
      </div>
        <br>
<h3 style="text-align:center"><span style="line-height: 107%; color: rgb(255, 102, 0);"><font face="helvetica" style="" size="5">Somos una comercializadora cuyo objetivo es otorgar todo tipo de
servicios agrícolas e industriales y específicamente la venta de agroquímicos, fertilizantes,
semillas, entre otros aquéllos que sean útiles para la variedad de los cultivos
atendiendo a las necesidades de cada uno de nuestros clientes.</font></span></h3>    <br><br>
    </div>
</div>

<br><br>

<?php
include_once("views/footer.php");
?>