<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/page.css">
    <link rel="stylesheet" href="../css/forms.css">
    <title>cooking star</title>
    <div class="include">
        <?php include '../includes/header.html'; ?>
    </div>

</head>

<body>
    <div class="main">
        <div class="page-bannner">
            <h1 class="page-bannner-heading">Cooking Star Registration</h1>
        </div>
        <div class="container">
            <h4 class="page-name">Become a Cooking Star</h4>
            <h1 class="heading">Create an Account</h1>
            <div class="form-container">
                <form class="form" id="cooking-star-form">
                    <div class="inputs">
                        <div class="row">
                            <div class="field">
                                <label for="full-name" class="form-label">Your Name</label>
                                <input type="text" id="full-name" class="form-input" placeholder="Enter Your Name">
                            </div>
                            <div class="field">
                                <label for="business-name" class="form-label">Bussiness Name</label>
                                <input type="text" id="business-name" class="form-input"
                                    placeholder="Enter Bussiness Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="field">
                                <label for="social-refrences" class="form-label">How do you find us</label>
                                <select id="social-refrences" class="form-input form-select">
                                    <option selected>Choose...</option>
                                    <option>Friend</option>
                                    <option>Social Media</option>
                                    <option>Refrence</option>
                                    <option>Broucher</option>
                                    <option>Others</option>
                                </select>
                            </div>
                            <div class="field">
                                <label for="when-should-contact" class="form-label">When Should we Contact</label>
                                <input type="text" id="when-should-contact" class="form-input"
                                    placeholder="When Should we Contact">
                            </div>
                        </div>
                        <div class="row">
                            <div class="field">
                                <label for="phone-number" class="form-label">Phone number</label>
                                <input type="number" id="phone-number" class="form-input"
                                    placeholder="Enter your number">
                            </div>
                            <div class="field">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-input" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="field">
                                <label for="city" class="form-label">City</label>
                                <select id="city" class="form-input form-select">
                                    <option selected>Choose...</option>
                                    <option>Karachi</option>
                                    <option>Lahore</option>
                                    <option>Faisalabad</option>
                                    <option>Rawalpindi</option>
                                    <option>Gujranwala</option>
                                    <option>Peshawar</option>
                                    <option>Multan</option>
                                    <option>Saidu Sharif</option>
                                    <option>Hyderabad</option>
                                    <option>Islamabad</option>
                                    <option>Quetta</option>
                                    <option>Bahawalpur</option>
                                    <option>Sargodha</option>
                                    <option>Sialkot City</option>
                                    <option>Sukkur</option>
                                </select>
                            </div>
                            <div class="field">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" id="address" class="form-input" placeholder="Enter your address">

                            </div>
                        </div>
                    </div>
                    <button type="submit" class='form-btn '>Register Now</button>
                </form>
            </div>
        </div>
    </div>
</body>
<div class="include">
    <?php include '../includes/footer.html' ?>
</div>
<script src="../js/cookingStarReg.js"></script>

</html>