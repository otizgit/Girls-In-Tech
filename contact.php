<?php
$title = 'Contact | GirlsInTech';
$css_file = '<link rel="stylesheet" href="css/contact.css">';
include('includes/header.php');

?>
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

        <div class="sub-footer">
            <div class="consultation">
                <div class="consultation-text">
                    <p>Need Advice?</p>
                    <p>Why not schedule a consultation <br> call.</p>
                </div>
                <div class="consultation-btn">
                    <a href="./contact.html">
                        <button>Schedule Consultation</button>
                    </a>
                </div>
            </div>
        </div>
    </main>

<?php
include('includes/footer.php')

?>