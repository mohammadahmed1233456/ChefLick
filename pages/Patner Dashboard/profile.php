<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/forms.css">
    <title>Patner Dashboard</title>
    <script>
        const pageTopTitle = "profile";
    </script>
</head>

<body>
    <div class="dashboard-container">
        <div class="include">
            <?php include "../../includes/patner-dashboard-sidenav.html"; ?>
        </div>
        <main>
            <div class="include">
                <?php include "../../includes/dashboard-top-header.html"; ?>
            </div>
            <div class="profile-container">
                <div class="avatar-container">
                    <div class="avatar">
                        <img src="../../assets/images/avatar.jpg" alt="">
                    </div>
                    <h4 class="name">Ahmed Soomro</h4>
                </div>
                <div class="form-container">
                    <form class="form">
                        <div class="inputs">
                            <div class="row">
                                <div class="field">
                                    <label for="full-name" class="form-label">Name</label>
                                    <input type="text" id="full-name" class="form-input" placeholder="Enter Your Name">
                                </div>
                                <div class="field">
                                    <label for="full-name" class="form-label">Father/Husband Name</label>
                                    <input type="text" id="full-name" class="form-input"
                                        placeholder="Enter Father/Husband Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="field">
                                    <label for="mobile-number" class="form-label">mobile number</label>
                                    <input type="number" id="mobile-number" class="form-input"
                                        placeholder="Enter your number">
                                </div>
                                <div class="field">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" class="form-input" placeholder="Enter your email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="field">
                                    <label for="address" class="form-label">address</label>
                                    <input type="text" id="address" class="form-input" placeholder="address">
                                </div>
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
                            </div>
                            <button class='form-btn save-btn'>Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>

</body>
<script src="../../js/include.js"></script>
<script src="../../js/form.js"></script>

</html>