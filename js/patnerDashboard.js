const navlinks = document.querySelectorAll(".link")

// Get the current URL and set class active to it
const currentUrl = window.location.href;
navlinks.forEach(link => {
    if (link.href === currentUrl) {
        link.classList.add('active');
    }
});


// table pagi and sorting

