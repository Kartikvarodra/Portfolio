
// Initialize AOS for scroll animations
AOS.init();

// jQuery for various UI interactions
$(document).ready(function () {
    $(window).scroll(function () {
        // sticky navbar on scroll script
        if (this.scrollY > 20) {
            $('.navbar').addClass("sticky");
        } else {
            $('.navbar').removeClass("sticky");
        }

        // scroll-up button show/hide script
        if (this.scrollY > 500) {
            $('.scroll-up-btn').addClass("show");
        } else {
            $('.scroll-up-btn').removeClass("show");
        }
    });

    // slide-up script
    $('.scroll-up-btn').click(function () {
        $('html').animate({ scrollTop: 0 });
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "auto");
    });

    $('.navbar .menu li a').click(function () {
        // applying again smooth scroll on menu items click
        $('html').css("scrollBehavior", "smooth");
    });

    // toggle menu/navbar script
    $('.menu-btn').click(function () {
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

    // typing text animation script
    var typed = new Typed(".typing", {
        strings: ["Software Engineer", "Web Developer", "Mobile App Developer", "React JS Expert", "Flutter Developer"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    var typed2 = new Typed(".typing-2", {
        strings: ["Software Engineer", "Web Developer", "Mobile App Developer", "React JS Expert", "Flutter Developer"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

    // Owl Carousel for responsive sliders
    $('.carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: false
            }
        }
    });
});

// Loader fade-out effect
window.addEventListener("load", () => {
    const loader = document.getElementById("loader");
    loader.style.opacity = "0";
    setTimeout(() => {
        loader.style.display = "none";
    }, 500); // Adjust timing to match the fade-out effect
});

// Welcome window animation with GSAP
const welcomeWindow = document.getElementById("welcome-window");
const homeSection = document.querySelector(".home");

function showWelcomeWindow() {
    // Add blur to the home section
    homeSection.classList.add("blur-effect");

    // Use GSAP to animate the welcome window
    gsap.fromTo(welcomeWindow,
        { opacity: 0, y: -100 }, // Start position (hidden and above)
        { opacity: 1, y: 0, duration: 1, ease: "power3.out" } // End position (visible and in place)
    );

    // Hide the welcome window after 3 seconds (total animation time)
    gsap.to(welcomeWindow, {
        opacity: 0,
        y: 100,
        duration: 1, // Duration for fade-out and move-down
        delay: 2, // Wait for 2 seconds before starting fade-out
        ease: "power3.in", // Smooth ease for fade-out
        onComplete: () => {
            // Hide the welcome window and remove blur effect after animation
            welcomeWindow.style.display = "none";
            homeSection.classList.remove("blur-effect");
        }
    });
}

// Trigger the welcome window animation on page load
window.addEventListener("load", showWelcomeWindow);
