const toggleIcon = document.querySelector(".toggle-icon");
const closeMoblibeNav = document.querySelector(".close-mobile-nav");
const closeTopBar = document.querySelector(".close-top-bar");
const topBar = document.querySelector(".top-bar");
const navLinks = document.querySelector(".nav-links");

// remove active class from navlinks and display none closeMoblibeNav
function reset() {
    navLinks.classList.remove("active");
    closeMoblibeNav.style.display = "none"
}

// when user hit toggle btn display close and nav items
toggleIcon.addEventListener("click", function () {
    navLinks.classList.toggle("active");
    closeMoblibeNav.style.display = "block"
});

// when user hit closeMoblibeNav call reset function and display none close icon
closeMoblibeNav.addEventListener("click", function () {
    reset()
});
// when resize scrren to 720px or above then display close icon and call reset function
window.addEventListener('resize', function () {
    if (window.innerWidth >= 720) {
        reset();
        closeMoblibeNav.style.display = "none"
    }
});

closeTopBar.addEventListener('click', () => topBar.style.display = "none");
// Get the current URL and set class active to it
const currentUrl = window.location.href;
navLinks.childNodes.forEach(link => {
    if (link.href === currentUrl) {
        console.log(link)
        link.classList.add('active-link');
    }
});

