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
