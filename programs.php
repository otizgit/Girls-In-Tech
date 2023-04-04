<?php
$title = 'Bootcamp | GirlsInTech';
$css_file = '<link rel="stylesheet" href="css/programs.css">';
echo '<script defer src="./js/home.js"></script>';
include('includes/header.php'); ?>

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
            accepted onto the bootcamp by November 30th.
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
        <h4 class="fw-semibold">14th April 2023</h4>
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
        <h4 class="fw-semibold">14th April 2023</h4>
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
        <h4 class="fw-semibold">14th April 2023</h4>
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
        <h4 class="fw-semibold">14th April 2023</h4>
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

<?php
include('includes/footer.php')

?>
