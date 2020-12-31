/*----------------------------------------------------------------
# Slider JS init
----------------------------------------------------------------*/
// Image Slider
const sliderBox = document.querySelector('.banner-img');
const slides = sliderBox.getElementsByTagName('img');
let i = 0;

function nextSlide() {
    slides[i].classList.remove('active');
    i = (i + 1) % slides.length;
    slides[i].classList.add('active');
}

function prevSlide() {
    slides[i].classList.remove('active');
    i = (i - 1 + slides.length) % slides.length;
    slides[i].classList.add('active');
}

// Contents Slider
const contentBox = document.querySelector('.slider-content');
const contentSlides = contentBox.getElementsByClassName('banner-content');
let j = 0;

function nextContentSlide() {
    contentSlides[j].classList.remove('active');
    j = (j + 1) % contentSlides.length;
    contentSlides[j].classList.add('active');
}

function prevContentSlide() {
    contentSlides[j].classList.remove('active');
    j = (j - 1 + contentSlides.length) % contentSlides.length;
    contentSlides[j].classList.add('active');
}