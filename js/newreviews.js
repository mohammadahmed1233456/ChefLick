const reviewsMain = document.querySelector('.reviews-main');
const reviewsContainer = document.querySelector('.reviews-container');
const previousArrow = document.querySelector('.arrow-left');
const nextArrow = document.querySelector('.arrow-right');


let reviews = [
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
    }
];
let currentReviewIndex = 0;

// fetch('https://example.com/api/reviews')
//   .then(response => response.json())
//   .then(data => {
//     reviews = data;
//     displayReviews();
//   })
//   .catch(error => console.error(error));

previousArrow.addEventListener('click', () => {
    currentReviewIndex--;
    console.log("previous arrow clicked")
    if (currentReviewIndex < 0) {
        currentReviewIndex = reviews.length - 1;
    }
    displayReviews();
});

nextArrow.addEventListener('click', () => {
    currentReviewIndex++;
    console.log("previous arrow clicked")
    if (currentReviewIndex >= reviews.length) {
        currentReviewIndex = 0;
    }
    displayReviews();
});

const getReviewElement = ({ name, noOfStars, review }) => {
    const reviewElement = document.createElement('div');
    reviewElement.classList.add('review-container');
    reviewElement.innerHTML = `
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
`
    return reviewElement
}

function displayReviews() {
    reviewsContainer.innerHTML = '';
    if (window.innerWidth < 768) {
        const currentReview = reviews[currentReviewIndex];
        console.log(getReviewElement(currentReview))
        reviewsContainer.appendChild(getReviewElement(currentReview));
    }
    else if (window.innerWidth < 1300) {
        for (let i = currentReviewIndex; i < currentReviewIndex + 2; i++) {
            const reviewIndex = i >= reviews.length ? i - reviews.length : i;
            const currentReview = reviews[reviewIndex];
            reviewsContainer.appendChild(getReviewElement(currentReview));
        }
    }
    else {
        for (let i = currentReviewIndex; i < currentReviewIndex + 3; i++) {
            const reviewIndex = i >= reviews.length ? i - reviews.length : i;
            const currentReview = reviews[reviewIndex];
            reviewsContainer.appendChild(getReviewElement(currentReview));
        }
    }
}

displayReviews();

window.addEventListener('resize', () => {
    displayReviews();
});
