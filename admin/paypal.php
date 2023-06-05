<?php 
include_once('controllers/sistema.php');
include_once('views/header.php');
$productName = "Cotización promedio";
$currency = "MXN";
$productPrice = 8;
$productId = 587965;
$orderNumber = 567;
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

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
 
<title>Ejemplo de paypal</title>
</head>

<body>
<div class="container">
    <h2>Cotización ejemplo paypal</h2>  
    <br>
    <table class="table">
        <tr>
          <td style="width:150px"><img src="images/comagricen_logo.jpg" style="width:100px" /></td>
          <td style="width:150px"><?php echo $productPrice; ?> MXN</td>
          <td style="width:150px">
          <?php include 'paypalCheckout.php'; ?>
          </td>
        </tr>
    </table>    
</div>
</body>

<?php
    include_once('views/footer.php')
?>