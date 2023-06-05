<?php
include_once("views/header.php");

require_once(__DIR__ . "/controllers/departamento.php");

require_once(__DIR__ . "/controllers/sistema.php");
require_once(__DIR__ . "/controllers/venta.php");
include_once("views/header.php");
$roles;
$roles = implode($_SESSION['roles']);

switch ($roles) {
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
    <h3 align="center">Contacto</h3>
    <hr>
    <div class=" container-fluid px-0 mb-10 col-10">
                    <h5 class=" col-mb-4">Our Office</h5>
                    <p class=" mb-2" ><i class="fa fa-map-marker-alt me-3"></i>216 Emiliano Zapata, Celaya, Mexico</p>
                    <p class=" mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class=" mb-2"><i class="fa fa-envelope me-3"></i>comagricenmexico@example.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href="https://www.facebook.com/comagricenmexico"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href="https://www.facebook.com/comagricenmexico"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href="https://wa.me/+524613983696/?text=Hola Comagricen"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href="https://www.facebook.com/comagricenmexico"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    
    </div>
    <br>
    <div class=" container-fluid px-0 mb-10 col-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.2469358618564!2d-100.80095569999999!3d20.537075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cba9e31198b03%3A0xf2a40407f9e4efbf!2sUniversidad%20Lasallista%20Benavente%20216%2C%20Emiliano%20Zapata%2C%2038030%20Celaya%2C%20Gto.!5e0!3m2!1ses!2smx!4v1685680313060!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


</div>
</div>

<br><br>

<?php
include_once("views/footer.php");
?>