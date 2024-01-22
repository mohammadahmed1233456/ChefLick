<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/page.css">
    <link rel="stylesheet" href="../css/forms.css">
    <link rel="stylesheet" href="../css/contact.css">
    <title>Contact us</title>
    <div class="include">
        <?php include '../includes/header.html'; ?>
    </div>

</head>

<body>
    <main class="main">
        <div class="page-bannner">
            <h1 class="page-bannner-heading">Contact us</h1>
        </div>
        <div class="container">
            <h4 class="page-name">get in Touch</h4>
            <h1 class="heading">Contact us</h1>
            <div class="form-container">
                <form class="form">
                    <div class="inputs">
                        <div class="row">
                            <div class="field">
                                <label for="full-name" class="form-label">Your Full Name</label>
                                <input type="text" id="full-name" class="form-input" placeholder="Enter Your Name">
                            </div>
                            <div class="field">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-input" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="field">
                                <label for="phone-number" class="form-label">Phone number</label>
                                <input type="number" id="phone-number" class="form-input"
                                    placeholder="Enter your number">
                            </div>
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
                        </div>
                        <div class="row">
                            <div class="field">
                                <label for="cities" class="form-label">City</label>
                                <select id="cities" class="form-input form-select">
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
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" id="subject" class="form-input" placeholder="Subject">
                            </div>
                        </div>
                        <div class="row">
                            <div class="field">
                                <label for="message" class="form-label">Message</label>
                                <textarea id="message" class="form-input" placeholder="type here"></textarea>
                            </div>
                        </div>
                    </div>
                    <button class='form-btn signup-btn'>Register Now</button>
                </form>
            </div>
        </div>
        <div class="container ">
            <div class="contact-general-info">
                <div class="info-box">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h4 class="info">+92 303 2386515</h4>
                </div>
                <div class="info-box">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h4 class="info">info@checflick.com</h4>
                </div>
                <div class="info-box">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h4 class="info">k-3, Rafi plaza, university road karachi</h4>
                </div>
            </div>
        </div>
        <div class="include">
            <?php include "../includes/subscribe.html" ?>
        </div>
        <div class="include">
            <?php include "../includes/newreviews.html" ?>
        </div>
    </main>
    <div class="include">
        <?php include '../includes/footer.html' ?>
    </div>
</body>
<script src="../js/include.js"></script>
<html>