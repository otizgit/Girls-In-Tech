<?php
$title = 'Mentorship | GirlsInTech';
$css_file = '<link rel="stylesheet" href="css/mentorship.css">';
include('includes/header.php');
echo '<script defer src="./js/mentorship.js"></script>';

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

    <div class="wrapper">
        <div class="section1">
            <div class="left-side">
                <h1>GIT Mentorship Programme</h1>
                <p>Are you a girl in tech? <br><strong>We are excited to launch a mentorsip programme for you</strong></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam temporibus laboriosam earum unde. Aliquid tenetur aut deleniti architecto impedit, omnis quia atque temporibus voluptas voluptatibus quis ipsum, doloribus debitis, qui facere voluptatum? Consectetur tempora nulla dolore corrupti, adipisci dicta quod quisquam ad ipsum similique ex modi, molestiae iste, fuga eveniet?</p>
            </div>
            <div class="right-side">
                <img src="images/woman1.jpg" alt="Mentorship-Girl">
            </div>
        </div>
        <div class="section2">
            <h2>What does the programme entail</h2>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum tempore aspernatur enim suscipit voluptate sapiente. Harum nostrum accusantium cupiditate id?</p>
        </div>
        <h3>Become a GIT Mentor</h3>
        <div class="section3">
            <div class="left-side">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus ab voluptas alias repudiandae illo voluptates tempore nulla quidem error, illum, ratione minima. Quia obcaecati provident beatae aut laboriosam harum debitis, atque iusto nostrum! Deserunt corrupti autem cum nemo maxime non neque quae, beatae fuga ut. At minus nihil odio facere! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias mollitia ducimus aliquid blanditiis, harum assumenda corrupti? Earum autem reprehenderit sit sapiente laboriosam quo eos dolor officia quia nostrum nam iusto odit dignissimos velit consequatur quas dicta quae exercitationem, veritatis assumenda laborum atque et distinctio ea! Assumenda modi fuga illum eum.</p>
                <p class="apply mentor">Apply Now</p>
            </div>
            <div class="right-side">
                <img src="images/woman2.jpg" alt="Become a Mentor">
            </div>
        </div>
        <h4>Become a GIT Mentee</h4>
        <div class="section3">
            <div class="left-side">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus ab voluptas alias repudiandae illo voluptates tempore nulla quidem error, illum, ratione minima. Quia obcaecati provident beatae aut laboriosam harum debitis, atque iusto nostrum! Deserunt corrupti autem cum nemo maxime non neque quae, beatae fuga ut. At minus nihil odio facere! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat natus sit at quam asperiores et optio, quae excepturi similique quos ipsum expedita labore ut? Similique quos debitis corporis, mollitia corrupti amet provident dicta nulla sequi quia perspiciatis eveniet ad atque accusamus est eligendi consequuntur voluptatibus quibusdam dolor magni officia modi.</p>
                <p class="apply mentee">Apply Now</p>
            </div>
            <div class="right-side">
                <img src="images/woman2.jpg" alt="Become a Mentor">
            </div>
        </div>

        <div class="mentorship-form">
            <form action="">
                <div class="close-btn">&#10060;</div>
                <div class="form-box">
                    <input type="text" id="firstname" required placeholder= "First Name">
                    <input type="text" id="number" required placeholder= "Last Name">
                </div>
                <div class="form-content form-courses">
                    <label for="courses">Courses You Are Registering For:</label>
                    <select id="courses" required></select>
                </div>
                <div class="form-box">
                    <input type="email" placeholder="Email" required>
                    <input type="text" placeholder="Address" required>
                </div>
                <div class="form-box">
                    <input type="number" placeholder="Phone Number" required>
                    <input type="number" placeholder="Postal Code" required>
                </div>
                <div class="form-box">
                    <div>
                        <label for="country">Country</label>
                        <select id="country" required>
                            <option value="nigeria">Nigeria</option>
                        </select>
                    </div>
                    <div>
                        <label for="city">City</label>
                        <select id="city" required></select>
                    </div>
                </div>
                <div class="form-content">
                    <label for="refer">Refer Type:</label>
                    <select class="socials" id="refer" required>
                        <option value="facebook">Facebook</option>
                        <option value="personal">Personal</option>
                        <option value="whatsapp">Whatsapp</option>
                    </select>
                </div>
                <div class="form-content form-add">
                    <label for="refer">Name of referer:</label>
                    <input type="text" required>
                </div>

                <button type="submit"><i class="fa-solid fa-paper-plane"></i> SUBMIT</button>
            </form>
        </div>
    </div>

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

   <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

<?php
include('includes/footer.php')

?>