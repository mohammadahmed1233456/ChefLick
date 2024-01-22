const searchFoodInput = document.querySelector(".search-food-input")
const suggestions = document.querySelector(".search-suggestions-list")
const filters = document.querySelector(".filters")
const filterIcon = document.querySelector(".filter-icon")

// -----------------------------------------
// js for search and suggestion
// fetch resturants here from api and use data to store those resturants
const data = [
    {
        name: "Café De Bambaa",
        type: "kitchen",
        foodType: "Western food",
        placeType: "cafe",
        rating: 4.9,
        timing: { openTime: "10:10 AM", closeTime: "10:00 PM" },
        location: "Tariq Road",
        isDiscount: true,
        Dishes: [
            {
                name: "pizza",
                rating: "4.9",
            },
            {
                name: "Burger",
                rating: "4.9",
            },
            {
                name: "Sandwich",
                rating: "4.9",
            }
        ]


    },
    {
        name: "Café Imran",
        type: "Resturant",
        foodType: "Desi food",
        placeType: "cafe",
        rating: 4.9,
        timing: { openTime: "8:00 AM", closeTime: "1:00 AM" },
        location: "Kharo",
        isDiscount: true,
        Dishes: [
            {
                name: "Keema",
                rating: "3.9",
            },
            {
                name: "Pulao",
                rating: "3.3",
            },
            {
                name: "Biryani",
                rating: "4.9",
            }
        ]
    },
    {
        name: "Suro pani",
        type: "kitchen",
        foodType: "Western food",
        placeType: "cafe",
        rating: 4.9,
        timing: { openTime: "8:00 AM", closeTime: "10:00 PM" },
        location: "Tariq Road",
        isDiscount: true,
        Dishes: [
            {
                name: "Bake Cake",
                rating: "4.9",
            },
            {
                name: "Sweet Yogard",
                rating: "4.9",
            },
            {
                name: "Sweet Rice",
                rating: "4.9",
            }
        ]
    },
    {
        name: "Café De Chuno",
        type: "Resturant",
        foodType: "Western food",
        placeType: "cafe",
        rating: 4.9,
        timing: { openTime: "8:00 AM", closeTime: "10:00 PM" },
        location: "Tariq Road",
        isDiscount: true,
        Dishes: [
            {
                name: "Capichino Coffee",
                rating: "4.1",
            },
            {
                name: "Cold Coffee",
                rating: "4.2",
            },
            {
                name: "Special Coffee",
                rating: "4.7",
            }
        ]

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
        Dishes: [
            {
                name: "Capichino Coffee",
                rating: "4.1",
            },
            {
                name: "Cold Coffee",
                rating: "4.2",
            },
            {
                name: "biryani",
                rating: "4.7",
            }
        ]
    }
]
function searchRestaurantsAndDishes(input) {
    const searchResults = [];
    if (input === "") {
        return searchResults
    } else {
        // Search for matching restaurants or dishes
        for (const item of data) {
            if (item.name.toLowerCase().includes(input.toLowerCase())) {
                // Found a matching restaurant
                const result = {
                    name: item.name,
                    rating: item.rating,
                    foodType: item.foodType,
                    placeType: item.placeType,
                    timing: item.timing,
                    location: item.location,
                    isRestaurant: true,
                    type: item.type,
                    isDish: false,
                };
                searchResults.push(result);
            } else {
                // Check if the input matches any dishes in the restaurant
                const matchingDishes = item.Dishes.filter(dish =>
                    dish.name.toLowerCase().includes(input.toLowerCase())
                );

                if (matchingDishes.length > 0) {
                    // Found matching dishes
                    for (const dish of matchingDishes) {
                        const result = {
                            name: dish.name,
                            rating: dish.rating,
                            restaurantName: item.name,
                            isRestaurant: false,
                            isDish: true,
                        };
                        searchResults.push(result);
                    }
                }
            }
        }
    }

    return searchResults;
}

function generateHtmlForSearchSuggestions(results) {
    let html = ""
    results.forEach(result => {
        if (result.isRestaurant) {
            html += `
                    <div class="suggestion">
                    <img src="../assets/images/pizza-suggestion.png" alt="">
                        <div class="info">
                            <div class="name-and-d-k">
                                <h6>${result.name}</h6>
                                <p>${result.type}</p>
                            </div>
                            <div class="t-n-and-rating">
                                <p>${result.placeType} ~ <span class="food-type">${result.foodType}</span></p>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <p>${result.rating}</p>
                                </div>
                            </div>
                            <div class="time-and-location">
                                <p>${result.timing.openTime} - ${result.timing.closeTime}</p>
                                <p>${result.location}</p>
                            </div>
                        </div>
                    </div>
                `;
        } else if (result.isDish) {
            html += `
                    <div class="suggestion">
                    <img src="../assets/images/pizza-suggestion.png" alt="">
                        <div class="info">
                            <div class="name-and-d-k">
                                <h6>${result.name}</h6>
                                <p>Dish</p>
                            </div>
                            <div class="t-n-and-rating">
                                <p>${result.restaurantName}</p>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <p>${result.rating}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
        } else {
            html;
        }
    })
    return html
}
searchFoodInput.addEventListener("keyup", (e) => {
    const searchInput = e.target.value
    const searchResults = searchRestaurantsAndDishes(searchInput);
    const suggestionsHtml = generateHtmlForSearchSuggestions(searchResults)
    // Output the search results
    suggestions.innerHTML = suggestionsHtml
    if (searchInput === "") {
        suggestions.style.display = "none"
    }
    suggestions.style.display = "flex"

})
searchFoodInput.addEventListener("blur", (e) => {
    suggestions.style.display = "none"
})

//js for filters
filterIcon.addEventListener("click", () => {
    filters.classList.toggle("open")
})






