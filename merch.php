<?php
$title = 'Merch | GirlsInTech';
$css_file = '<link rel="stylesheet" href="css/companies.css">';
echo '<script defer src="./js/donate.js"></script>';

include('includes/header.php');
?>

<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
  rel="stylesheet"
/>


<section class="container mt-2 mb-5">
    <h1 class="text-center mb-4">Welcome to Our Merch Page</h1>
    <div class="row">
      <div class="col-md-3 my-2">
        <div class="card">
          <img src="./images/merch-images/merch-shirt.jpg" alt="Merch-Tshirt" class="card-img-top">
          <div class="card-body py-3">
            <h5 class="card-title mt-3">GirlsInTech T-shirt</h5>
            <!-- <p class="card-text">Description of Item 1</p> -->
            <!-- <h6 class="card-subtitle mb-2 text-muted">N4,000</h6> -->
            <a href="https://wa.me/message/QZHDLHUU4LXWF1" target="_blank" class="btn btn-primary mt-3">Buy Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 my-2">
        <div class="card">
          <img src="./images/merch-images/merch-bagpack.jpg"  alt="Item 2" class="card-img-top">
          <div class="card-body py-3">
            <h5 class="card-title mt-3">GirlsInTech BagPack</h5>
            <!-- <p class="card-text">Description of Item 2</p> -->
            <!-- <h6 class="card-subtitle mb-2 text-muted">N7,000</h6> -->
            <a href="https://wa.me/message/QZHDLHUU4LXWF1" target="_blank" class="btn btn-primary mt-3">Buy Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 my-2">
        <div class="card">
          <img src="./images/merch-images/merch-cap.jpg"  alt="Item 3" class="card-img-top image-fluid">
          <div class="card-body py-3">
            <h5 class="card-title mt-3">GirlsInTech Face Cap</h5>
            <!-- <p class="card-text">Description of Item 3</p> -->
            <!-- <h6 class="card-subtitle mb-2 text-muted">N2,000</h6> -->
            <a href="https://wa.me/message/QZHDLHUU4LXWF1" target="_blank" class="btn btn-primary mt-3">Buy Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 my-2">
        <div class="card">
          <img src="./images/merch-images/wristband1.jpg"  alt="Item 4" class="card-img-top">
          <div class="card-body py-3">
            <h5 class="card-title mt-3">GirlsInTech Wristband</h5>
            <!-- <p class="card-text">Description of Item 4</p> -->
            <!-- <h6 class="card-subtitle mb-2 text-muted">N1,000</h6> -->
            <a href="https://wa.me/message/QZHDLHUU4LXWF1" target="_blank" class="mt-3 btn btn-primary">Buy Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
   <!-- testimonial section -->
    <!-- Carousel wrapper -->
    <div id="carouselExampleControls" class="carousel slide text-center carousel-dark mb-5" data-mdb-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                <h5 class="mb-3">Funke Opeke</h5>
                <p> Founder and CEO of MainOne</p>
                <p class="text-muted px-3">
                    <i class="fas fa-quote-left pe-2"></i>
                    Technology can bridge the gap in healthcare, education, and economic development in Africa.
                    <i class="fas fa-quote-right pe-2"></i>
                </p>
                </div>
            </div>
            <!-- <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="far fa-star fa-sm"></i></li>
            </ul> -->
        </div>
        <div class="carousel-item">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                <h5 class="mb-3">Dr. Naledi Pandor</h5>
                <p> South African Minister of Higher Education and Training</p>
                <p class="text-muted px-3">
                    <i class="fas fa-quote-left pe-2"></i>
                    Africa needs to invest in digital infrastructure and the skills of its people to take advantage of the fourth industrial revolution.
                    <i class="fas fa-quote-right pe-2"></i>
                </p>
                </div>
            </div>
            <!-- <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="far fa-star fa-sm"></i></li>
            </ul> -->
        </div>
        <div class="carousel-item">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                <h5 class="mb-3">Baratang Miya</h5>
                <p>South African social entrepreneur and founder of Girlhype Coders</p>
                <p class="text-muted px-3">
                    <i class="fas fa-quote-left pe-2"></i>
                    Innovation is about creating solutions that are accessible, affordable, and sustainable for everyone, not just a privileged few.
                    <i class="fas fa-quote-right pe-2"></i>
                </p>
                </div>
            </div>
            <!-- <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="far fa-star fa-sm"></i></li>
            </ul> -->
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls"
        data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls"
        data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    <!-- Carousel wrapper -->

    <?php
            include('includes/donate.php')

        ?>

   <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    
<?php
include('includes/footer.php')

?>