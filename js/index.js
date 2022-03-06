// slider
var slideIndex = 1;
// Slider for desktop version
showSlidesD(slideIndex);
function plusSlidesD(n) {
  showSlidesD((slideIndex += n));
}

function showSlidesD(n) {
  const slides = document.getElementsByClassName("slidesD");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";
}
// Slider for tablet version
showSlidesT(slideIndex);
function plusSlidesT(n) {
  showSlidesT((slideIndex += n));
}

function showSlidesT(n) {
  const slides = document.getElementsByClassName("slidesT");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";
}
// Slider for mobile version
showSlidesM(slideIndex);
function plusSlidesM(n) {
  showSlidesM((slideIndex += n));
}

function showSlidesM(n) {
  const slides = document.getElementsByClassName("slidesM");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";
}

// getCheckboxesValues
function getCheckboxesValues() {
  return [].slice
    .apply(document.querySelectorAll("input[type=checkbox]"))
    .filter(function (c) {
      return c.checked;
    })
    .map(function (c) {
      return c.value;
    });
}

// varieble to store checked boxes
var checked = [];

// function will be executed after delete button click
function sendToPHP() {
  // store checked boxes
  checked = getCheckboxesValues();

  // send to php file
  $.ajax({
    url: "includes/deleteInc.php",
    method: "post",
    data: { checked },
    success: function (res) {
      console.log(res);
    },
  });
  // reset checkboxes and reload page
  $(":checkbox").prop("checked", false);
  location.reload();
}
