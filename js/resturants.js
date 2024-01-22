const names = document.querySelectorAll('.offer-name');
const offersContainer = document.querySelector(".offers-container")
const offersList = offersContainer.querySelector('.offers-list');
const preArrow = offersContainer.querySelector('.prev-arrow');
const nArrow = offersContainer.querySelector('.next-arrow');
const noOfOffers = document.querySelectorAll('.offer')


// breaking names of offers into two parts so it looks like require ui
function setOfferName(name) {
    const words = name.split(/\s+/);
    const lineBreakLocation = (words.length / 2)
    words.splice(lineBreakLocation, 0, "<br/>")
    return words.join(" ")
}

// get offer background color randomly 
function getRandomGradient() {
    // Generate a random hue value between 0 and 360
    const hue = Math.floor(Math.random() * 360);

    // Generate a random saturation value between 50% and 100%
    const saturation = Math.floor(Math.random() * 50) + 50;

    // Generate a random lightness value between 30% and 70%
    const lightness = Math.floor(Math.random() * 40) + 30;

    // Convert the hue, saturation, and lightness values to HSL color strings
    const lightColor = `hsl(${hue}, ${saturation}%, ${lightness}%)`;
    const darkColor = `hsl(${hue}, ${saturation}%, ${lightness - 20}%)`;

    // Combine the light and dark colors into a linear-gradient CSS string
    const gradient = `linear-gradient(to right, ${lightColor}, ${darkColor})`;

    return gradient;
}

// -------------------------------------------------------
// js for offers from Array (for Now api is not api but when its on replace hard offers array with api data)
// ------------------------------------------------------------
const offers = [
    {
        offerName: "pehlay Aoo, Pehlay Paoo",
        moto: "Get Amazing 50% Discount on First order.",
        link: "#",
        img: "../assets/images/offer-img.png"
    },
    {
        offerName: "Dhamaka Offer",
        moto: "Get Amazing 50% Discount on First order.",
        link: "#",
        img: "../assets/images/offer-img.png"
    },
    {
        offerName: "Eid Jashan",
        moto: "Get Amazing 50% Discount on First order.",
        link: "#",
        img: "../assets/images/offer-img.png"
    },
    {
        offerName: "Pait Bharlo",
        moto: "Get Amazing 50% Discount on First order.",
        link: "#",
        img: "../assets/images/offer-img.png"
    },
    {
        offerName: "Chalo Bhar se Khalo",
        moto: "Get Amazing 50% Discount on First order.",
        link: "#",
        img: "../assets/images/offer-img.png"
    },
    {
        offerName: "Ghum Aoo, Kha Aoo",
        moto: "Get Amazing 50% Discount on First order.",
        link: "#",
        img: "../assets/images/offer-img.png"
    },
    {
        offerName: "Pait Khali, Tou Bharlo",
        moto: "Get Amazing 50% Discount on First order.",
        link: "#",
        img: "../assets/images/offer-img.png"
    },
    {
        offerName: "Dhamaka Offer",
        moto: "Get Amazing 50% Discount on First order.",
        link: "#",
        img: "../assets/images/offer-img.png"
    },
    {
        offerName: "Eid Jashan",
        moto: "Get Amazing 50% Discount on First order.",
        link: "#",
        img: "../assets/images/offer-img.png"
    }
]



let currentOfferIndex = 0;

preArrow.addEventListener('click', () => {
    currentOfferIndex--;
    if (currentOfferIndex < 0) {
        currentOfferIndex = offers.length - 1;
    }
    displayOffers();
});

nArrow.addEventListener('click', () => {
    currentOfferIndex++;
    if (currentOfferIndex >= offers.length) {
        currentOfferIndex = 0;
    }
    displayOffers();
});

const getOfferElement = ({ offerName, moto, link, img }) => {
    const OfferElement = document.createElement('div');
    OfferElement.classList.add('offer');
    OfferElement.style.backgroundImage = getRandomGradient()
    OfferElement.innerHTML =
        `<div class="offer-info">
            <h4 class="offer-name">${setOfferName(offerName)}</h4>
            <p class="moto">${moto}</p>
            <a href="${link}" class="link">Avail Now</a>
        </div>
        <img src="${img}" alt="">`
    return OfferElement
}

function displayOffers() {
    offersList.innerHTML = '';
    if (window.innerWidth < 920) {
        const currentOffer = offers[currentOfferIndex];
        offersList.appendChild(getOfferElement(currentOffer));
    }
    else if (window.innerWidth < 1300) {
        for (let i = currentOfferIndex; i < currentOfferIndex + 2; i++) {
            const offerIndex = i >= offers.length ? i - offers.length : i;
            const currentOffer = offers[offerIndex];
            offersList.appendChild(getOfferElement(currentOffer));
        }
    }
    else {
        for (let i = currentOfferIndex; i < currentOfferIndex + 3; i++) {
            const OfferIndex = i >= offers.length ? i - offers.length : i;
            const currentOffer = offers[OfferIndex];
            offersList.appendChild(getOfferElement(currentOffer));
        }
    }
}

displayOffers();

window.addEventListener('resize', () => {
    displayOffers();
});
// -------------------------------------------------------
// end of js for offers
// ------------------------------------------------------------


// js for resturants list

function fetchResturants(data, list) {
    let resturants = "";
    const resturantsHTML = data.map(data => {
        const { name, type, foodType, placeType, rating, timing, location } = data;
        return ` 
            <div class="resturant">
              <div class="head">
                <div class="head-info">
                  <div class="resturant-status pill-container ${shopStatusChecker(timing).class} ">
                    <i class="fa-regular fa-clock"></i>
                    <p>${shopStatusChecker(timing).status}</p>
                  </div>
                  <div class="like">
                    <i class="fa-solid fa-heart"></i>
                  </div>
                </div>
                <div class="foot-info">
                  <div class="pill-container">
                    <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                    <p>Discount</p>
                  </div>
                  <div class="pill-container">
                    <p>Kitchen</p>
                  </div>
                </div>
              </div>
              <div class="body">
                <h4 class="title">${name}</h4>
                <div class="type-and-rating">
                  <p class="type">${placeType} - <span class="food-type">${foodType}</span> </p>
                  <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <p>${rating}</p>
                  </div>
                </div>
                <div class="time-and-location">
                  <p class="time">${timing.openTime} - ${timing.closeTime}</p>
                  <p class="location">${location}</p>
                </div>
              </div>
            </div>`;
    });
    resturants = resturantsHTML.join("");
    list.innerHTML = resturants;
}
const scrollButtons = document.querySelectorAll(".scroll")
const cheflickPicksResturants = document.querySelector(".cheflick-pick-resturants")
const freeDeliveryResturants = document.querySelector(".free-delivery-resturants")
const discountResturants = document.querySelector(".discount-resturants")

// checking shop status
const shopStatusChecker = ({ openTime, closeTime }) => {
    // Convert the opening and closing times to Date objects
    const openingTime = new Date();
    const openingTimeParts = openTime.split(/:|\s/);
    openingTime.setHours(
        (parseInt(openingTimeParts[0]) % 12) + (openingTimeParts[2].toLowerCase() === "pm" ? 12 : 0),
        parseInt(openingTimeParts[1]), 0
    );

    const closingTime = new Date();
    const closingTimeParts = closeTime.split(/:|\s/);
    closingTime.setHours(
        (parseInt(closingTimeParts[0]) % 12) + (closingTimeParts[2].toLowerCase() === "pm" ? 12 : 0),
        parseInt(closingTimeParts[1]), 0
    );

    // Get the current time
    const currentTime = new Date();

    // Check if the current time is within the opening and closing times
    const isOpen = currentTime >= openingTime && currentTime <= closingTime;

    if (isOpen) {
        return { status: "open", class: "" };
    } else {
        return { status: "closed", class: "unactive" };
    }
}

// resturants data. This is general data your api is on, then you replace this with real time data for every resturants list like for cheflickpicks, 50% discount list and free delivery onces. 
const resturantsData = [
    {
        name: "Café De Bambaa",
        type: "kitchen",
        foodType: "Western food",
        placeType: "cafe",
        rating: 4.9,
        timing: { openTime: "10:10 AM", closeTime: "10:00 PM" },
        location: "Tariq Road",
        isDiscount: true,
    },
    {
        name: "Café De Bambaa",
        type: "kitchen",
        foodType: "Western food",
        placeType: "cafe",
        rating: 4.9,
        timing: { openTime: "8:00 AM", closeTime: "10:00 PM" },
        location: "Tariq Road",
        isDiscount: true,
    },
    {
        name: "Café De Bambaa",
        type: "kitchen",
        foodType: "Western food",
        placeType: "cafe",
        rating: 4.9,
        timing: { openTime: "8:00 AM", closeTime: "10:00 PM" },
        location: "Tariq Road",
        isDiscount: true,
    },
    {
        name: "Café De Bambaa",
        type: "kitchen",
        foodType: "Western food",
        placeType: "cafe",
        rating: 4.9,
        timing: { openTime: "8:00 AM", closeTime: "10:00 PM" },
        location: "Tariq Road",
        isDiscount: true,
    },
    {
        name: "Café De Bambaa",
        type: "kitchen",
        foodType: "Western food",
        placeType: "cafe",
        rating: 4.9,
        timing: { openTime: "8:00 AM", closeTime: "10:00 PM" },
        location: "Tariq Road",
        isDiscount: true,
    },
    {
        name: "Café De Bambaa",
        type: "kitchen",
        foodType: "Western food",
        placeType: "cafe",
        rating: 4.9,
        timing: { openTime: "8:00 AM", closeTime: "5:00 PM" },
        location: "Tariq Road",
        isDiscount: true,
    }
]

// fetching cheflick picks resturants
fetchResturants(resturantsData, cheflickPicksResturants)
// fetching 50% discount resturants
fetchResturants(resturantsData, discountResturants)
// fetching free delivery resturants
fetchResturants(resturantsData, freeDeliveryResturants)


// -------------------------------------------------
// js for scrolling
// -------------------------------------------------
const resturantsLists = document.querySelectorAll(".resturants-list-row")
const resturantWidth = document.querySelector(".resturants-list-row .resturant").clientWidth
let scrollStep = resturantWidth + 24; // adjust this value to change the scroll distance
scrollButtons.forEach(button => {
    button.addEventListener('click', event => {
        const direction = event.target.classList.contains('scroll-left') ? -1 : 1;
        event.target.parentElement.querySelector(".resturants-list-row").scrollBy({
            left: direction * scrollStep,
            behavior: 'smooth'
        });

    });
});
// scrolling of resturants on resizing
window.addEventListener('resize', event => {
    resturantsLists.forEach(list => {
        list.scrollBy({
            left: -1 * (resturantWidth * list.children.length),
            behavior: 'smooth'
        });
    })
});


// js for Categories
const categories = document.querySelector(".categories")
const optionsContainer = categories.querySelector(".options")
const arrowIcon = categories.querySelector(".fa-chevron-down");
const input = categories.querySelector("input")

arrowIcon.addEventListener('click', () => {
    optionsContainer.classList.toggle("open")
    arrowIcon.classList.toggle("fa-chevron-up")
    arrowIcon.classList.toggle("fa-chevron-down")
})

const options = optionsContainer.querySelectorAll(".option-1")
const icon = document.createElement("i")
icon.classList.add("fa", "fa-chevron-right", "nested-icon")

const arrowIconNested = `<i class="fa fa-chevron-up"></i>`
options.forEach((opt) => {
    if (opt.querySelector(".nested-options")) {
        opt.appendChild(icon)
        const optionIcon = opt.querySelector(".nested-icon")
        optionIcon.addEventListener("click", () => {
            const optionIcon = opt.querySelector(".nested-icon")
            optionIcon.classList.toggle("fa-chevron-left")
            optionIcon.classList.toggle("fa-chevron-right")
            opt.querySelector(".nested-options").classList.toggle("open-nested")
        })
    }
})