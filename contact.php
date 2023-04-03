<?php
$title = 'Contact | GirlsInTech';
$css_file = '<link rel="stylesheet" href="css/contact.css">';
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
        <div class="partners-hero contact-hero">
            <div class="partners-hero-content contact-hero-content">
                <h1 class="partners-title">Contact Us</h1>
                <p>Have a question or need advice?</p>
                <p>We'd love to hear from you.</p>
            </div>
        </div>

        <div class="contact-form">
            <form>
                <div class="form-div top-layer-form">
                    <input type="text" placeholder="Your Full Name*"> 
                    <input type="email" placeholder="Your Email Address*"> 
                </div>
                <div class="form-div">
                    <textarea rows="2" placeholder="Please Type your message here"></textarea>
                </div>
                <div class="form-div top-layer-form bottom-layer-form">
                    <div class="file-input">
                        <!-- <input class="file" type="file" placeholder="Attach a file"> -->
                        <div class="attach">
                            <img src="./images/attach-image.svg" alt="attach-image">
                            <p>Attach File</p>
                        </div>
                        <p>Maximum size: 10MB</p>
                    </div>
                    <div class="form-submit">Submit</div>
                </div>
            </form>
        </div>

        <div class="contact-branches">
            <div class="first-layer">
                <p>Our Other Branches</p>
            </div>
            <div class="bottom-layer">
                <img src="./images/Logo/Girls in Tech Nigeria Logo Icon.png" alt="logo">
                <p>Girls In Tech</p>
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