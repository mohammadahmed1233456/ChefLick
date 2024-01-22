<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta offer-name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/page.css">
    <link rel="stylesheet" href="../css/resturants.css">
    <link href="../assets/icons/fontawesome/css/regular.min.css" rel="stylesheet">
    <title>Restaurant</title>

    <div class="include">
        <?php include "../includes/second-header.html" ?>
    </div>
</head>

<body>
    <div class="main" id="main">
        <div class="search-and-filters">
            <div class="search-food">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search Food" class="search-food-input">
                <i class="fa-solid fa-filter filter-icon"></i>
                <div class="search-suggestions-list"></div>
                <ul class="filters">
                    <li class="name">Prize</li>
                    <li class="filter">
                        <label for="low-to-high">low to high</label>
                        <input type="checkbox" id="low-to-high" name="low-to-high" value="low-to-high">
                    </li>
                    <li class="filter">
                        <label for="high-to-low">high to low</label>
                        <input type="checkbox" id="high-to-low" name="high-to-low" value="high-to-low">
                    </li>
                    <li class="name">Others</li>
                    <li class="filter">
                        <label for="free-delivery">Free Delivery</label>
                        <input type="checkbox" id="free-delivery" name="free-delivery" value="free-delivery">
                    </li>
                    <li class="filter">
                        <label for="online-payment">online payment</label>
                        <input type="checkbox" id="online-payment" name="online-payment" value="online-payment">
                    </li>
                    <li class="filter">
                        <label for="deals">deals</label>
                        <input type="checkbox" id="deals" name="deals" value="deals">
                    </li>
                    <li class="filter">
                        <label for="highest-rated">Highest rated</label>
                        <input type="checkbox" id="highest-rated" name="highest-rated" value="highest-rated">
                    </li>
                </ul>
            </div>
            <div class="categories">
                <input type="text" placeholder="Categories">
                <i class="fa fa-chevron-down"></i>
                <ul class="options">
                    <li class="option-1">
                        <img src="../assets/images/categories/cousines.png" alt="">
                        Cousines
                        <ul class="nested-options">
                            <li class="option">
                                <img src="../assets/images/categories/cousines.png" alt="">
                                Pakistani
                            </li>
                            <li class="option">
                                <img src="../assets/images/categories/cousines.png" alt="">
                                Pakistani
                            </li>
                            <li class="option">
                                <img src="../assets/images/categories/cousines.png" alt="">
                                Pakistani
                            </li>
                            <li class="option">
                                <img src="../assets/images/categories/cousines.png" alt="">
                                Pakistani
                            </li>
                            <li class="option">
                                <img src="../assets/images/categories/cousines.png" alt="">
                                Pakistani
                            </li>
                        </ul>
                    </li>
                    <li class="option-1"><img src="../assets/images/categories/burgur.png" alt="">Frozen Food</li>
                    <li class="option-1"><img src="../assets/images/categories/diet.png" alt="">Diet Meal</li>
                    <li class="option-1"><img src="../assets/images/categories/noodles.png" alt="">Kids Meals</li>
                    <li class="option-1"><img src="../assets/images/categories/burgur.png" alt="">Fast Food</li>
                    <li class="option-1"><img src="../assets/images/categories/cousines.png" alt="">Snacks and Drinks
                    </li>
                    <li class="option-1"><img src="../assets/images/categories/diet.png" alt="">Homemade</li>
                </ul>
            </div>
        </div>
        <div class="container resturant-container">
            <!-- Offers -->
            <div class="resturant-page-section">
                <h1 class="title">Offers</h1>
                <div class="offers-container">
                    <div class="offers-list"></div>
                    <div class="arrow prev-arrow">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="arrow next-arrow">
                        <i class="fas fa-chevron-right "></i>
                    </div>
                </div>
            </div>
            <!--resturants Options -->
            <div class="resturant-page-section">
                <div class="banners">
                    <div class="banner">
                        <h2 class="title">Jhat Pat</h2>
                        <p class="info">Dishes that can be delivered</p>
                        <p class="time info">in 30-35 mints</p>
                    </div>
                    <div class="banner">
                        <h2 class="title">Zara Hat Kay</h2>
                        <p class="info">Dishes that can be delivered</p>
                        <p class="time info">in 30-35 mints</p>
                    </div>
                    <div class="banner">
                        <h2 class="title">Kya Khao Gay</h2>
                        <p class="info">Dishes that can be delivered</p>
                        <p class="time info">in 30-35 mints</p>
                    </div>
                </div>
            </div>
            <!--Cheflick Picks -->
            <div class="resturant-page-section">
                <h1 class="title">Cheflick Picks</h1>
                <div class="resturants-container">
                    <div class="resturants-list-row cheflick-pick-resturants"></div>
                    <div class="scroll scroll-left">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="scroll scroll-right">
                        <i class="fas fa-chevron-right "></i>
                    </div>
                </div>
            </div>
            <!--50% Discounts -->
            <div class="resturant-page-section">
                <h1 class="title">50% Discounts</h1>
                <div class="resturants-container">
                    <div class="resturants-list-row discount-resturants"></div>
                    <div class="scroll scroll-left">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="scroll scroll-right">
                        <i class="fas fa-chevron-right "></i>
                    </div>
                </div>
            </div>
            <!--Free Delivery -->
            <div class="resturant-page-section">
                <h1 class="title">Free Delivery</h1>
                <div class="resturants-container">
                    <div class="resturants-list-row free-delivery-resturants"></div>
                    <div class="scroll scroll-left">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="scroll scroll-right">
                        <i class="fas fa-chevron-right "></i>
                    </div>
                </div>
            </div>
            <!--Kitchens Nearby -->
            <div class="resturant-page-section">
                <h1 class="title">Kitchens Nearby</h1>
                <div class="resturants-container">
                    <div class="resturants-list-column">
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                        <div class="resturant">
                            <img src="../assets/images/karthik-garikapati-oBbTc1VoT-0-unsplash@2x.png" alt=""
                                class="banner">
                            <div class="info">
                                <div class="name-and-like">
                                    <h1 class="name">Cafe de Bamboo</h1>
                                    <div class="like">
                                        <i class="fa-solid fa-heart"></i>
                                    </div>
                                </div>
                                <div class="type-and-rating">
                                    <p class="type">cafe - <span>Western Food</span> </p>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <p>4.9</p>
                                    </div>
                                </div>
                                <div class="tags">
                                    <div class="pill-container">
                                        <i class="fa-solid fa-tag fa-flip-horizontal"></i>
                                        <p>Discount</p>
                                    </div>
                                    <div class="pill-container">
                                        <p>Kitchen</p>
                                    </div>
                                    <div class="resturant-status pill-container ">
                                        <i class="fa-regular fa-clock"></i>
                                        <p>open</p>
                                    </div>
                                </div>
                                <div class="time-and-location">
                                    <p class="time">8:00AM - 10:00PM</p>
                                    <p class="location">Tariq Road</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe -->
        <div class="include">
            <?php include "../includes/subscribe.html" ?>
        </div>

        <!-- reviews -->
        <div class="include">
            <?php include "../includes/newreviews.html" ?>
        </div>

    </div>
</body>
<div class="include">
    <?php include '../includes/footer.html' ?>
</div>

</html>
<script src="../js/include.js"></script>
<script src="../js/resturants.js"></script>
<script src="../js/searchFoodFilters.js"></script>