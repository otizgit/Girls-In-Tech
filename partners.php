<?php
$title = 'Partners | GirlsInTech';
$css_file = '<link rel="stylesheet" href="css/partners.css">';
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


    <main>
        <div class="partners-hero">
            <div class="partners-hero-content">
                <h1 class="partners-title">Our Partners</h1>
                <p>At Girls in Tech we offer a range of benefits for our partners/sponsors such as working closely with the HR team in terms of Diversity & Inclusion, recruitment, brand awareness and networking.
                </p>
                <p>Do you believe we share similar values? We are on the search to connect with Organisations who are equally passionate about diversity and inclusion and ready to put action to back it; then BGiT welcomes you with open arms to support.
                </p>
                <div class="get-started"><a href="">Get Started <span><i class="fa-solid fa-arrow-right"></i></span></a></div>
            </div>
        </div>

        <div class="partners">
            <div class="partner-div">
                <img src="./images/partners/BT.jpeg" alt="">
            </div>
            <div class="partner-div">
                <img src="./images/partners/JPMorgan.png" alt="">
            </div>
            <div class="partner-div">
                <img src="./images/partners/Selfridges.jpeg" alt="">
            </div>
            <div class="partner-div">
                <img src="./images/partners/asos.png" alt="">
            </div>
            <div class="partner-div">
                <img src="./images/partners/stripe.png" alt="">
            </div>
            <div class="partner-div">
                <img src="./images/partners/accuRx.png" alt="">
            </div>
        </div>
        
   <!-- testimonial section -->
    <!-- Carousel wrapper -->
    <div id="carouselExampleControls" class="carousel slide text-center carousel-dark mb-5" data-mdb-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                <h5 class="mb-3">Maria Kate</h5>
                <p>Photographer</p>
                <p class="text-muted px-3">
                    <i class="fas fa-quote-left pe-2"></i>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                    nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia.
                </p>
                </div>
            </div>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="far fa-star fa-sm"></i></li>
            </ul>
        </div>
        <div class="carousel-item">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                <h5 class="mb-3">John Doe</h5>
                <p>Web Developer</p>
                <p class="text-muted px-3">
                    <i class="fas fa-quote-left pe-2"></i>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                    nesciunt sint eligendi reprehenderit reiciendis.
                </p>
                </div>
            </div>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="far fa-star fa-sm"></i></li>
            </ul>
        </div>
        <div class="carousel-item">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                <h5 class="mb-3">Anna Deynah</h5>
                <p>UX Designer</p>
                <p class="text-muted px-3">
                    <i class="fas fa-quote-left pe-2"></i>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus et deleniti
                    nesciunt sint eligendi reprehenderit reiciendis, quibusdam illo, beatae quia.
                </p>
                </div>
            </div>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="fas fa-star fa-sm"></i></li>
                <li><i class="far fa-star fa-sm"></i></li>
            </ul>
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

   <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

    </main>

    
<?php
include('includes/footer.php')

?>