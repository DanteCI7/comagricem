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
<div style="background-color: #fff;border-radius: 20px; padding:10px;" class="container-fluid px-0 mb-5 col-6">
  <br>
<h3 align="center">Agroquímicos</h3>
<hr>
<div class="row">
<div class="col-4">
<p align="right"><img src="./images/catalogo.png" class="img-fluid" alt="" width="250px" /></p>
</div>
<div class="col-8"><br><br><br>
      <h2>CATALOGO PRODUCTOS 2023</h2><br>
</div>
</div>
<div class="row">
<div class="col-4">
<p align="right"><img src="./images/kirio.jpg" class="img-fluid" alt="" width="250px" /></p>
</div>
<div class="col-8"><br><br><br>
      <h2>KIRIO ZEON 5 SC</h2><br>
</div>
</div>
<div class="row">
<div class="col-4">
<p align="right"><img src="./images/kenja.jpg" class="img-fluid" alt="" width="250px" /></p>
</div>
<div class="col-8"><br><br><br>
      <h2>Kenja UPL</h2><br>
</div>
</div>
<div class="row">
<div class="col-4">
<p align="right"><img src="./images/atzingao.jpg" class="img-fluid" alt="" width="250px" /></p>
</div>
<div class="col-8"><br><br><br>
      <h2>Atzingao Greencorp</h2><br>
</div>
</div>
<div class="row">
<div class="col-4">
<p align="right"><img src="./images/scarlet.png" class="img-fluid" alt="" width="250px" /></p>
</div>
<div class="col-8"><br><br><br>
      <h2>Scarlet Adama</h2><br>
</div>
</div>

    </div>
</div>

<br><br>

<?php
include_once("views/footer.php");
?>