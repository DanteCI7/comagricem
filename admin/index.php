<?php 
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
        break;
}




$reporte = $venta->chartVenta();
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
    backdrop-filter: blur(10px);
    }
    </style>

<div class="container-fluid px-0 mb-5">
    <br>
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="./images/fnd2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img class="w-100" src="./images/fnd3.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="./images/1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <body>
  <!--Div that will hold the pie chart-->
  <div class="container-fluid px-0 mb-5 col-4" id="chart_div"></div>
</body>
 
<?php include_once('./nosotros.php') ?>
<?php include_once('./catalogo.php') ?>
<?php include_once('./contacto.php') ?>


   <!-- Footer Start -->
   <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="text-white mb-2" ><i class="fa fa-map-marker-alt me-3"></i>216 Emiliano Zapata, Celaya, Mexico</p>
                    <p class="text-white mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="text-white mb-2"><i class="fa fa-envelope me-3"></i>comagricenmexico@example.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href="https://www.facebook.com/comagricenmexico"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href="https://www.facebook.com/comagricenmexico"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href="https://wa.me/+524613983696/?text=Hola Comagricen"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href="https://www.facebook.com/comagricenmexico"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Business Hours</h5>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Footer End -->

<script type="text/javascript">

  // Load the Visualization API and the corechart package.
  google.charts.load('current', { 'packages': ['corechart'] });

  // Set a callback to run when the Google Visualization API is loaded.
  google.charts.setOnLoadCallback(drawChart);

  // Callback that creates and populates a data table,
  // instantiates the pie chart, passes in the data and
  // draws it.
  function drawChart() {

    // Create the data table.

    var data = google.visualization.arrayToDataTable([
      ["Element", "Density", { role: "style" } ],
      <?php foreach ($reporte as $key => $value): ?> 
        ['<?php echo $value['mes']; ?>', <?php echo $value['cantidad']; ?>, '#b87333'],
         <?php endforeach; ?>
    ]);

    // Set chart options
    var options = {
      'title': 'Ventas mensuales',
      'width': 400,
      'height': 300
    };

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
</script>


<?php

?>