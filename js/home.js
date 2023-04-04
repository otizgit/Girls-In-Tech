const mentorshipForm = document.querySelector(".mentorship-form");
const mentee = document.querySelectorAll(".mentee");
const popUp = document.querySelector(".form-add");
const courses = document.querySelector(".form-courses");
const socials = document.querySelector(".socials");
const closeBtn = document.querySelector(".close-btn")

function showMentorshipForm() {
  mentorshipForm.classList.add("show-form");
}

function hideMentorshipForm() {
  mentorshipForm.classList.remove("show-form")
}

mentee.forEach (menteeBtn => {
    menteeBtn.addEventListener("click", function () {
      showMentorshipForm();
      courses.classList.add("show-courses");
    });
})

closeBtn.addEventListener("click", hideMentorshipForm)

mentorshipForm.addEventListener("click", (e) => {
  if (e.target === mentorshipForm) {
    hideMentorshipForm()
  }
});

socials.addEventListener("click", function (e) {
  if (e.target.value === "personal" || e.target.value === "whatsapp") {
    popUp.classList.add("show-form-add");
  } else {
    popUp.classList.remove("show-form-add");
  }
});
