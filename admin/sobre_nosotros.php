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

    <!-- Gallery Start -->
    <div class="container-xxl py-5 px-0">
        <div class="row g-0">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-5.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/gallery-5.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-1.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/gallery-1.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-2.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/gallery-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-6.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/gallery-6.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-7.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/gallery-7.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-3.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/gallery-3.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-4.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/gallery-4.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-8.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/gallery-8.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Products</p>
                <h1 class="mb-5">Our Dairy Products For Healthy Living</h1>
            </div>
            <div class="row gx-4">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="w-100" src="/images/comagricen_logo.jpg" alt="image">
                            <div class="product-overlay">
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-link"></i></a>
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-cart"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">Pure Milk</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-decoration-line-through">$29.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/product-2.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-link"></i></a>
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-cart"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">Fresh Meat</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-decoration-line-through">$29.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/product-3.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-link"></i></a>
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-cart"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">Dairy Products</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-decoration-line-through">$29.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/product-4.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-link"></i></a>
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-cart"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">Organic Food</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-decoration-line-through">$29.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->


   <!-- Footer Start -->
   <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="text-white mb-2" ><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="text-white mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="text-white mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
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
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
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
include_once("views/footer.php");
?>