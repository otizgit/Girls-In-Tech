<?php
$title = 'Sponsorship | GirlsInTech';
$css_file = '<link rel="stylesheet" href="css/sponsorship.css">';
echo '<script defer src="./js/donate.js"></script>';

include('includes/header.php');

?>

<main class='sponsorship-main mt-5 p-3'>
<div class="title text-center">
<h2>Welcome to Our Sponsorship Page</h2>
<p><em> To become one of our sponsors, please fill out the form below</em></p>
</div>

<form class="pb-5 sponsor-form">
  <div class="mb-3">
    <label for="companyName" class="form-label fw-semibold">Name of Company or Group</label>
    <input type="email" class="form-control" id="companyName" aria-describedby="emailHelp">
  </div>
  
  
  <div class="row">
  <div class="col">
      <label for="first-name" class="form-label fw-semibold my-2">First Name</label>
    <input type="text" class="form-control" aria-label="first-name">
  </div>
  <div class="col">
  <label for="last-name" class="form-label fw-semibold my-2">Last Name</label>
    <input type="text" class="form-control" aria-label="last-name">
  </div>
</div>
<div class="mb-3">
<label for="email" class="form-label fw-semibold my-2">Email</label>
    <input type="email" class="form-control" id="email">
    <label for="phone-number" class="form-label fw-semibold my-2">Phone Number</label>
    <input type="phone-number" class="form-control" id="phone-number">
</div>
  
<label for="" class="block fw-semibold my-2">Preferred Contact</label>
  <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="prefer-phone">
        <label class="form-check-label fw-semibold" for="prefer-phone">Phone</label>
  </div>
   <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="prefer-email">
        <label class="form-check-label fw-semibold" for="prefer-email">Email</label>
   </div>
   <div class="mb-3">
        <input type="checkbox" class="form-check-input" id="prefer-none">
        <label class="form-check-label fw-semibold" for="prefer-none">&nbsp;No Preference</label>
   </div>
   <div class="mb-3">
       <label for="sponsorship goes to?" class="fw-semibold my-2">Please describe the event or program that the sponsorship will support.</label>
  <textarea class="form-control" id="sponsorship goes to?"></textarea>
</div>
   <div class="mb-3">
       <label for="additional-comments" class="fw-semibold my-2">Additional Comments / Events.</label>
  <textarea class="form-control" id="additional-comments"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php
            include('includes/donate.php')

        ?>


</main>



<?php
include('includes/footer.php')

?>