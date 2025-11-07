document.addEventListener("DOMContentLoaded", function() {
    const hero = document.querySelector(".hero");
    const heroLogo = document.querySelector(".hero-logo");
    const heroHeading = document.querySelector(".hero h1");
    const heroSubtitle = document.querySelector(".hero .welcome-text");

    // Intersection Observer for the whole hero section
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Fade in everything
                    heroLogo.classList.add("visible");
                    heroHeading.classList.add("visible");
                    if (heroSubtitle) heroSubtitle.classList.add("visible");
                } else {
                    // Fade out everything
                    heroLogo.classList.remove("visible");
                    heroHeading.classList.remove("visible");
                    if (heroSubtitle) heroSubtitle.classList.remove("visible");
                }
            });
        },
        { threshold: 0.3 } // trigger when 30% of the hero is visible
    );

    if (hero) {
        observer.observe(hero);
    }
});


window.addEventListener('load', () => {
    const logo = document.querySelector('.hero-logo');
    const heading = document.querySelector('.hero h1');
    const welcomeText = document.querySelector('.hero .welcome-text');

    // Fade in sequence
    if (logo) logo.classList.add('visible');
    if (heading) setTimeout(() => heading.classList.add('visible'), 800);
    if (welcomeText) setTimeout(() => welcomeText.classList.add('visible'), 1500);
});

// Scroll to top on page load
window.addEventListener('beforeunload', function () {
    window.scrollTo(0, 0);
});

// Optional: also scroll to top when DOM content is loaded (extra safety)
document.addEventListener('DOMContentLoaded', function () {
    window.scrollTo(0, 0);
});

const cardsContainer = document.querySelector('.carousel-cards');
const cards = document.querySelectorAll('.carousel-cards .card');
const prevBtn = document.getElementById('prev');
const nextBtn = document.getElementById('next');
const indicator = document.getElementById('indicator');

let currentIndex = 0;

function updateCarousel() {
    // Move container
    cardsContainer.style.transform = `translateX(-${currentIndex * 100}%)`;

    // Add active class to front card
    cards.forEach((card, index) => {
        card.classList.toggle('active', index === currentIndex);
    });

    // Update indicator
    indicator.textContent = `${currentIndex + 1} / ${cards.length}`;
}

prevBtn.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + cards.length) % cards.length;
    updateCarousel();
});

nextBtn.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % cards.length;
    updateCarousel();
});

// Initialize
updateCarousel();
