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
                <h1>GirlsInTech Mentorship Programme</h1>
                <p>Are you a girl in tech? <br><strong>We are excited to launch a mentorsip programme for you</strong></p>
                <p>GirlsInTech mentorship program is a valuable initiative designed to provide guidance and support to young girls and women interested in pursuing careers in the technology industry. The program is geared towards young girls from the ages of 12 and above with a passion for technology and provides one-on-one mentoring from experienced professionals in the field. In addition to mentoring, GirlsInTech offers workshops and training sessions on technical skills such as coding, UI/UX design, and cybersecurity. The program aims to break down gender barriers in tech by providing role models and supportive peers. By participating in the program, young women can build a network of mentors and peers that can provide ongoing guidance and support throughout their careers. </p>
            </div>
            <div class="right-side">
                <img src="images/mentorship.jpg" alt="Mentorship-Girl">
            </div>
        </div>
        <div class="section2">
            <h2>What does the programme entail</h2>
           <p>The GirlsInTech program provides one-on-one mentoring from experienced professionals, technical skill workshops, and a supportive community to young women interested in pursuing technology careers.</p>
        </div>
        <h3>Become a GIT Mentor</h3>
        <div class="section3">
            <div class="left-side">
                <p>Becoming a mentor for GirlsInTech is a rewarding opportunity to help inspire and guide young women interested in pursuing careers in the technology industry, while also contributing to the growth and diversity of the field. Mentors provide one-on-one guidance and support, share their experiences and knowledge, and serve as role models for the next generation of female leaders in tech.</p>
                <p class="apply mentor">Apply Now</p>
            </div>
            <div class="right-side">
                <img src="images/girls-tech6.jpg" alt="Become a Mentor">
            </div>
        </div>
        <h4>Become a GIT Mentee</h4>
        <div class="section3">
            <div class="left-side">
                <p>Becoming a mentee through the GirlsInTech program provides an invaluable opportunity for young women interested in technology careers to gain guidance and support from experienced professionals in the field, build their technical skills, and develop a strong network of peers and mentors. Mentees can learn from their mentors' experiences, gain insights into the industry, and work towards achieving their career goals with confidence and direction.</p>
                <p class="apply mentee">Apply Now</p>
            </div>
            <div class="right-side">
                <img src="images/girls-tech3.jpg" alt="Become a Mentor">
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
                    <select name="city" class="mt-4">
  <option value="">-- Select a city --</option>
  <optgroup label="Abia">
    <option value="Aba">Aba</option>
    <option value="Umuahia">Umuahia</option>
  </optgroup>
  <optgroup label="Adamawa">
    <option value="Yola">Yola</option>
    <option value="Mubi">Mubi</option>
  </optgroup>
  <optgroup label="Akwa Ibom">
    <option value="Uyo">Uyo</option>
    <option value="Eket">Eket</option>
  </optgroup>
  <optgroup label="Anambra">
    <option value="Awka">Awka</option>
    <option value="Onitsha">Onitsha</option>
  </optgroup>
  <optgroup label="Bauchi">
    <option value="Bauchi">Bauchi</option>
    <option value="Azare">Azare</option>
  </optgroup>
  <optgroup label="Bayelsa">
    <option value="Yenagoa">Yenagoa</option>
    <option value="Brass">Brass</option>
  </optgroup>
  <optgroup label="Benue">
    <option value="Makurdi">Makurdi</option>
    <option value="Gboko">Gboko</option>
  </optgroup>
  <optgroup label="Borno">
    <option value="Maiduguri">Maiduguri</option>
    <option value="Bama">Bama</option>
  </optgroup>
  <optgroup label="Cross River">
    <option value="Calabar">Calabar</option>
    <option value="Odukpani">Odukpani</option>
  </optgroup>
  <optgroup label="Delta">
    <option value="Warri">Warri</option>
    <option value="Asaba">Asaba</option>
  </optgroup>
  <optgroup label="Ebonyi">
    <option value="Abakaliki">Abakaliki</option>
    <option value="Afikpo">Afikpo</option>
  </optgroup>
  <optgroup label="Edo">
    <option value="Benin City">Benin City</option>
    <option value="Auchi">Auchi</option>
  </optgroup>
  <optgroup label="Ekiti">
    <option value="Ado-Ekiti">Ado-Ekiti</option>
    <option value="Ikere-Ekiti">Ikere-Ekiti</option>
  </optgroup>
  <optgroup label="Enugu">
    <option value="Enugu">Enugu</option>
    <option value="Nsukka">Nsukka</option>
  </optgroup>
  <optgroup label="FCT">
    <option value="Abuja">Abuja</option>
  </optgroup>
  <optgroup label="Gombe">
    <option value="Gombe">Gombe</option>
    <option value="Kumo">Kumo</option>
  </optgroup>
  <optgroup label="Imo">
    <option value="Owerri">Owerri</option>
    <option value="Okigwe">Okigwe</option>
  </optgroup>
  <optgroup label="Jigawa">
    <option value="Dutse">Dutse</option>
    <option value="Birnin Kudu">Birnin Kudu</option>
  </optgroup>
  <optgroup label="Kaduna">
    <option value="Kaduna">Kaduna</option>
    <option value="Zaria">Zaria</option>
  </optgroup>
  <optgroup label="Kano">
    <option value="Kano">Kano</option>
    <option value="Bichi">Bichi</option>
  </optgroup>
  <optgroup label="Katsina">
    <option value="Katsina">Katsina</option>
    <option value="Daura">Daura</option>
  </optgroup>
  <optgroup label="Kebbi">
    <option value="Birnin Kebbi">Birnin Kebbi</option>
    <option value="Yauri">Yauri</option>
  </optgroup>
  <optgroup label="Kogi">
    <option value="Lokoja">Lokoja</option>
    <option value="Idah">Idah</option>
  </optgroup>
  <optgroup label="Kwara">
    <option value="Ilorin">Ilorin</option>
    <option value="Offa">Offa</option>
  </optgroup>
  <optgroup label="Lagos">
    <option value="Lagos">Lagos</option>
    <option value="Ikeja">Ikeja</option>
  </optgroup>
  <optgroup label="Nasarawa">
    <option value="Lafia">Lafia</option>
    <option value="Keffi">Keffi</option>
  </optgroup>
  <optgroup label="Niger">
    <option value="Minna">Minna</option>
    <option value="Suleja">Suleja</option>
  </optgroup>
  <optgroup label="Ogun">
    <option value="Abeokuta">Abeokuta</option>
    <option value="Ijebu-Ode">Ijebu-Ode</option>
  </optgroup>
  <optgroup label="Ondo">
    <option value="Akure">Akure</option>
    <option value="Owo">Owo</option>
  </optgroup>
  <optgroup label="Osun">
    <option value="Osogbo">Osogbo</option>
    <option value="Ilesa">Ilesa</option>
  </optgroup>
  <optgroup label="Oyo">
    <option value="Ibadan">Ibadan</option>
    <option value="Ogbomoso">Ogbomoso</option>
  </optgroup>
  <optgroup label="Plateau">
    <option value="Jos">Jos</option>
    <option value="Shendam">Shendam</option>
  </optgroup>
  <optgroup label="Rivers">
    <option value="Port Harcourt">Port Harcourt</option>
    <option value="Bonny">Bonny</option>
  </optgroup>
  <optgroup label="Sokoto">
    <option value="Sokoto">Sokoto</option>
    <option value="Tambuwal">Tambuwal</option>
  </optgroup>
  <optgroup label="Taraba">
    <option value="Jalingo">Jalingo</option>
    <option value="Wukari">Wukari</option>
</optgroup>
<optgroup label="Yobe">
    <option value="Damaturu">Damaturu</option>
    <option value="Potiskum">Potiskum</option>
  </optgroup>
  <optgroup label="Zamfara">
    <option value="Gusau">Gusau</option>
    <option value="Kaura Namoda">Kaura Namoda</option>
  </optgroup>



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