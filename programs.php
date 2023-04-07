<?php
$title = 'Bootcamp | GirlsInTech';
$css_file = '<link rel="stylesheet" href="css/programs.css">';
echo '<script defer src="./js/home.js"></script>';
echo '<script defer src="./js/donate.js"></script>';
include('includes/header.php'); ?>

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
      <h1>GirlsInTech Spring Programs 2023</h1>
      <p>
        We are launching our brand new
        <strong
          >FREE programs in Frontend Development, UI/UX Design, Basic Computer
          Appreciation / Microsoft Office and Graphic Design bootcamps</strong
        >
        which will equip you to go from beginner to industry junior level. With
        each bootcamp , participants will have the opportunity to interview with
        / land a junior role with one of our partner companies.
      </p>
      <p class="apply">
        Please note applications close
        <strong>April 15th at 6pm.</strong>
      </p>
    </div>
    <div class="right-side">
      <img src="images/bootcamp-img.jpeg" alt="Mentorship-Girl" />
    </div>
  </div>

  <div class="section2">
    <section>
      <h2 class="mb-0">What are we looking for?</h2>
      <ul>
        <li>
          &nbsp;&nbsp;Highly enthusiastic individuals with a passion for
          technology and curiosity to learn new skills
        </li>
        <li>
          &nbsp;&nbsp;A keen interest in building a career inFrontend
          Development, UI/UX Design, Basic Computer Appreciation / Microsoft
          Office and Graphic Design
        </li>

        <li>&nbsp;&nbsp;Great communication both written and verbal.</li>
        <li>
          &nbsp;&nbsp;A genuine passion for technology, willingness to learn,
          and thrive as a member of a high-performing team.
        </li>
      </ul>
      <div class="note">
        The bootcamps will run virtually and will require 6hrs a week which
        students must be able to commit to.
      </div>

      <div class="register-steps">
        <strong>How do I register?</strong>
        <ol>
          <li>
            &nbsp;Students can register below to be directed to the sign up
            form.
          </li>
          <li>
            &nbsp;Candidates will then be shortlisted and invited for an
            interview.
          </li>
          <li>
            &nbsp;Candidates will then be notified wether or not they have been
            accepted onto the bootcamp by April 17th, 2023.
          </li>
        </ol>
        <span
          >For any queries please contact us at
          info@girlsintechnigeria.org</span
        >
      </div>
    </section>
  </div>
  <div class="parent">
    <div class="div1">
      <div class="card-logo">
        <img src="images/uiux.svg" alt="UI/UX" />
      </div>
      <div class="description">
        <h3 class="my-2">UI/UX Bootcamp</h3>
        <p>Starting on</p>
        <h4 class="fw-semibold">17th April 2023</h4>
        <p>Duration : 12 Weeks</p>
        <button class="mentee">Register Here</button>
      </div>
      </div>
    <div class="div1">
      <div class="card-logo logo2">
        <img src="images/webdev.svg" alt="" />
      </div>
      <div class="description">
        <h3 class="my-2">Frontend Development</h3>
        <p>Starting on</p>
        <h4 class="fw-semibold">17th April 2023</h4>
        <p>Duration : 24 Weeks</p>
        <button class="mentee">Regiser Here</button>
      </div>
    </div>
    <div class="div1">
      <div class="card-logo logo2">
        <img src="images/webdev.svg" alt="" />
      </div>
      <div class="description">
        <h3 class="my-2">Computer Appreciation <br/>&amp; Microsoft Office</h3>
        <p>Starting on</p>
        <h4 class="fw-semibold">17th April 2023</h4>
        <p>Duration : 24 Weeks</p>
        <button class="mentee">Regiser Here</button>
      </div>
    </div>
    <div class="div1">
      <div class="card-logo logo2">
        <img src="images/webdev.svg" alt="" />
      </div>
      <div class="description">
        <h3 class="my-2">Graphic Design</h3>
        <p>Starting on</p>
        <h4 class="fw-semibold">17th April 2023</h4>
        <p>Duration : 24 Weeks</p>
        <button class="mentee">Regiser Here</button>
      </div>
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
                    <select id="courses" required>
                    <option value="">---select---</option>
                    <option value="ui-ux">UI/UX</option>
  <option value="frontend-development">Frontend Development</option>
  <option value="computer-appreciation">Computer Appreciation
& Microsoft Office</option>
  <option value="graphic-design">Graphic Design</option>
                    </select>
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
                    <select name="nigeria-states" required class="mt-4">
  <option value="">Select a State</option>
  <option value="Abia">Abia</option>
  <option value="Adamawa">Adamawa</option>
  <option value="Akwa Ibom">Akwa Ibom</option>
  <option value="Anambra">Anambra</option>
  <option value="Bauchi">Bauchi</option>
  <option value="Bayelsa">Bayelsa</option>
  <option value="Benue">Benue</option>
  <option value="Borno">Borno</option>
  <option value="Cross River">Cross River</option>
  <option value="Delta">Delta</option>
  <option value="Ebonyi">Ebonyi</option>
  <option value="Edo">Edo</option>
  <option value="Ekiti">Ekiti</option>
  <option value="Enugu">Enugu</option>
  <option value="Gombe">Gombe</option>
  <option value="Imo">Imo</option>
  <option value="Jigawa">Jigawa</option>
  <option value="Kaduna">Kaduna</option>
  <option value="Kano">Kano</option>
  <option value="Katsina">Katsina</option>
  <option value="Kebbi">Kebbi</option>
  <option value="Kogi">Kogi</option>
  <option value="Kwara">Kwara</option>
  <option value="Lagos">Lagos</option>
  <option value="Nasarawa">Nasarawa</option>
  <option value="Niger">Niger</option>
  <option value="Ogun">Ogun</option>
  <option value="Ondo">Ondo</option>
  <option value="Osun">Osun</option>
  <option value="Oyo">Oyo</option>
  <option value="Plateau">Plateau</option>
  <option value="Rivers">Rivers</option>
  <option value="Sokoto">Sokoto</option>
  <option value="Taraba">Taraba</option>
  <option value="Yobe">Yobe</option>
  <option value="Zamfara">Zamfara</option>
</select>

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

    <?php
            include('includes/donate.php')

        ?>

    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
<?php
include('includes/footer.php')

?>
