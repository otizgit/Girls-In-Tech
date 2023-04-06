const donateForm = document.querySelector(".donate-form");
const mainDonateForm = document.querySelector(".donate-form form");
const donate = document.querySelector(".donate");
const donateItems = document.querySelector(".donate-items");
const inputFormCol = document.querySelector(".input-form-col");

mainDonateForm.onsubmit = function (e) {};

function showDonateForm() {
  donateForm.classList.add("show-donate-form");
}

function hideDonateForm() {
  donateForm.classList.remove("show-donate-form");
}

donate.addEventListener("click", () => {
  donateForm.classList.add("show-donate-form");
});

donateForm.addEventListener("click", (e) => {
  if (e.target === donateForm) {
    hideDonateForm();
  }
});

donateItems.addEventListener("click", (e) => {
  if (e.target.value === "cash") {
    inputFormCol.classList.add("display-input-col");
  } else {
    inputFormCol.classList.remove("display-input-col");
  }
});
