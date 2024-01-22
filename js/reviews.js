var reviewsContainer = document.querySelector(".reviews");
var dotsContainer = document.querySelector(".review-navigation");
// when use api then make this array empty
var reviews = [
    {
        name: "ahmed soomro",
        noOfStars: 4,
        review: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren"
    },
    {
        name: "shan",
        noOfStars: 4,
        review: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren"
    },
    {
        name: "haider",
        noOfStars: 4,
        review: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren"
    },
    {
        name: "ahmed soomro",
        noOfStars: 4,
        review: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren"
    },
    {
        name: "shan",
        noOfStars: 4,
        review: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren"
    },
    {
        name: "haider",
        noOfStars: 4,
        review: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren"
    },
    {
        name: "ahmed soomro",
        noOfStars: 4,
        review: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren"
    },
    {
        name: "shan",
        noOfStars: 4,
        review: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren"
    },
    {
        name: "haider",
        noOfStars: 4,
        review: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren"
    },
    {
        name: "mudasir",
        noOfStars: 4,
        review: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren"
    },
    {
        name: "zubair",
        noOfStars: 3,
        review: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren"
    },
    {
        name: "huzaifa",
        noOfStars: 4,
        review: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren"
    },
    {
        name: "asalam",
        noOfStars: 4,
        review: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren"
    },
    {
        name: "john",
        noOfStars: 4,
        review: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren"
    }
];
var currentPage = 1;
var reviewsPerPage = 3;


function fetchReviews() {
    // fetch('/reviews')
    //     .then(response => response.json())
    //     .then(data => {
    //         reviews = data;
    //         renderReviews();
    //         renderDots();
    //     });
    renderReviews();
    renderDots();
}

function renderReviews() {
    var startIndex = (currentPage - 1) * reviewsPerPage;
    var endIndex = startIndex + reviewsPerPage;
    var reviewsToRender = reviews.slice(startIndex, endIndex);
    var reviewsHtml = '';
    reviewsToRender.forEach(({ name, noOfStars, review }) => {

        reviewsHtml += `<div class="review-container">
                            <div class="review-info">
                                <h4 class="reviewer-name">${name}</h4>
                                <div class="review-stars-container">
                                    <div class="stars">
                                        <i class="fa fa-star star"></i>
                                        <i class="fa fa-star star"></i>
                                        <i class="fa fa-star star"></i>
                                        <i class="fa fa-star star"></i>
                                        <i class="fa fa-star star"></i>
                                    </div>
                                    <p class="number-of-people">${noOfStars} star rating</p>
                                </div>
                            </div>
                            <p class="review">${review}</p>
                        </div>`
        reviewsContainer.innerHTML = reviewsHtml;
    });

}

function renderDots() {
    dotsContainer.innerHTML = '';
    var numPages = Math.ceil(reviews.length / reviewsPerPage);

    for (var i = 1; i <= numPages; i++) {
        console.log(i)
        var dot = document.createElement('div');
        dot.classList.add('dot');
        dot.setAttribute('data-page', i);
        if (i === currentPage) {
            dot.classList.add('active');
        }
        dot.addEventListener('click', function () {
            currentPage = parseInt(this.getAttribute('data-page'));
            renderReviews();
            renderDots();
        });
        dotsContainer.appendChild(dot);
    }

}

fetchReviews();


