document.addEventListener('DOMContentLoaded', function() {
    let currentSlide = 0;
    const slides = document.querySelectorAll('.hero-slider .slide');
    const totalSlides = slides.length;
    const dots = document.querySelectorAll('.dot');
    const loginNowBtn = document.getElementById('login-now-btn');
    const registerNowBtn = document.getElementById('register-now-btn');
    const loginFormSection = document.getElementById('login-form-section');
    const registerFormSection = document.getElementById('register-form-section');

    // Function to move to a specific slide
    function moveSlide(direction) {
        if (slides.length === 0) return;  // Check if slides exist
        slides[currentSlide].classList.remove('active');
        dots[currentSlide].classList.remove('active');
        currentSlide += direction;
        if (currentSlide < 0) currentSlide = totalSlides - 1;
        if (currentSlide >= totalSlides) currentSlide = 0;
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
        document.querySelector('.hero-slider').style.transform = `translateX(-${currentSlide * 100}%)`;
    }

    // Function to move to a specific slide when a dot is clicked
    function moveSlideTo(slideIndex) {
        if (slides.length === 0) return;  // Check if slides exist
        slides[currentSlide].classList.remove('active');
        dots[currentSlide].classList.remove('active');
        currentSlide = slideIndex;
        slides[currentSlide].classList.add('active');
        dots[currentSlide].classList.add('active');
        document.querySelector('.hero-slider').style.transform = `translateX(-${currentSlide * 100}%)`;
    }

    // Show login form and hide register form
    function showLoginForm() {
        loginFormSection.style.display = 'flex';
        registerFormSection.style.display = 'none';
    }

    // Show register form and hide login form
    function showRegisterForm() {
        registerFormSection.style.display = 'flex';
        loginFormSection.style.display = 'none';
    }

    // Initialize the hero slider
    function initHeroSlider() {
        if (slides.length > 0) {
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }
    }

    // Event listeners for slider navigation buttons (Ensure elements exist)
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');

    if (prevButton && nextButton) {
        prevButton.addEventListener('click', function() {
            moveSlide(-1); // Move to the previous slide
        });
        nextButton.addEventListener('click', function() {
            moveSlide(1); // Move to the next slide
        });
    } else {
        console.error("Navigation buttons not found.");
    }

    // Event listeners for pagination dots
    if (dots.length > 0) {
        dots.forEach((dot, index) => {
            dot.addEventListener('click', function() {
                moveSlideTo(index);
            });
        });
    } else {
        console.error("Pagination dots not found.");
    }

    // Event listener for the Login/Register button
    if (loginNowBtn && registerNowBtn) {
        loginNowBtn.addEventListener('click', function() {
            moveSlide(1); // Move to the login form slide
        });
        registerNowBtn.addEventListener('click', function() {
            moveSlide(2); // Move to the register form slide
        });
    } else {
        console.error("Login/Register button not found.");
    }

    // Initialize the slider on load
    initHeroSlider();
});
