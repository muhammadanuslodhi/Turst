
/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')

/* Menu show */
navToggle.addEventListener('click', () =>{
   navMenu.classList.add('show-menu')
})

/* Menu hidden */
navClose.addEventListener('click', () =>{
   navMenu.classList.remove('show-menu')
})

/*=============== SEARCH ===============*/
const search = document.getElementById('search'),
      searchBtn = document.getElementById('search-btn'),
      searchClose = document.getElementById('search-close')

/* Search show */
searchBtn.addEventListener('click', () =>{
   search.classList.add('show-search')
})

/* Search hidden */
searchClose.addEventListener('click', () =>{
   search.classList.remove('show-search')
})

/*=============== LOGIN ===============*/


const login = document.getElementById('login'),
      loginBtn = document.getElementById('login-btn'),
      loginClose = document.getElementById('login-close')

/* Login show */
loginBtn.addEventListener('click', () =>{
   login.classList.add('show-login')
})

/* Login hidden */
loginClose.addEventListener('click', () =>{
   login.classList.remove('show-login')
})

// Navbar End




//===================================== hero start =====================================


document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll('.carousel-item');
    let currentSlide = 0;
    const totalSlides = slides.length;

    // Initially show the first slide
    slides[currentSlide].classList.add('active');

    // Function to show the next slide
    function showNextSlide() {
      slides[currentSlide].classList.remove('active');
      currentSlide = (currentSlide + 1) % totalSlides; // Loop back to first slide if at the end
      slides[currentSlide].classList.add('active');
    }

    // Function to show the previous slide
    function showPrevSlide() {
      slides[currentSlide].classList.remove('active');
      currentSlide = (currentSlide - 1 + totalSlides) % totalSlides; // Loop back to last slide if at the start
      slides[currentSlide].classList.add('active');
    }

    // Auto-slide every 5 seconds
    setInterval(showNextSlide, 5000);

    // Event listeners for the manual controls
    document.getElementById('nextSlide').addEventListener('click', function (event) {
      event.preventDefault();
      showNextSlide();
    });

    document.getElementById('prevSlide').addEventListener('click', function (event) {
      event.preventDefault();
      showPrevSlide();
    });
  });



//==================================== service 3 =====================================



const cardContainer = document.querySelector('.card-container');
const mobileSlider = document.querySelector('.mobile-slider');

let moving = false;
let mouseLastPosition = 0;
let transform = 0;
let lastPageX = 0;
let transformValue = 0;
console.log(mobileSlider.offsetWidth);

cardContainer.addEventListener('mousedown', (e) => {
   moving = true;
   mouseLastPosition = e.pageX;
   transform = window.getComputedStyle(cardContainer)
   .getPropertyValue('transform') !== 'none'
   ? window.getComputedStyle(cardContainer)
   .getPropertyValue('transform').split(',')[4].trim() : 0;

});

cardContainer.addEventListener('mousemove', function (e) {
    // console.log(transform);
    if (moving) {
        const diffX = e.pageX - mouseLastPosition;
        if (e.pageX - lastPageX > 0) {
            if (transformValue > 0) {
                return;
            }
        } else {
            if (Math.abs(transformValue) > cardContainer.offsetWidth - mobileSlider.offsetWidth ) {
                return;
            }
        }
        transformValue = parseInt(transform) + diffX;
        cardContainer.style.transform = `translateX(${transformValue}px)`;
    }
    lastPageX = e.pageX;
});

cardContainer.addEventListener('mouseup', function () {
    console.log(mobileSlider.offsetWidth);

    moving = false;
});



//==================================== service 4 =====================================
