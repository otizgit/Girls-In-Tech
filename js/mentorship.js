const mentorshipForm = document.querySelector(".mentorship-form");
const mentee = document.querySelector(".mentee");
const mentor = document.querySelector(".mentor");
const popUp = document.querySelector(".form-add");
const courses = document.querySelector(".form-courses");
const socials = document.querySelector(".socials");

function showMentorshipForm() {
  mentorshipForm.classList.add("show-form");
}

mentee.addEventListener("click", function () {
  showMentorshipForm();
  courses.classList.add("show-courses");
});
mentor.addEventListener("click", function () {
  showMentorshipForm();
  courses.classList.remove("show-courses");
});

mentorshipForm.addEventListener("click", (e) => {
  if (e.target === mentorshipForm) {
    mentorshipForm.classList.remove("show-form");
  }
});

socials.addEventListener("click", function (e) {
  if (e.target.value === "personal" || e.target.value === "whatsapp") {
    popUp.classList.add("show-form-add");
  } else {
    popUp.classList.remove("show-form-add");
  }
});
