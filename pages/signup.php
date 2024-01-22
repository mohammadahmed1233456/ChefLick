<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/page.css">
    <link rel="stylesheet" href="../css/forms.css">
    <title>Sign Up</title>

    <div class="include">
        <?php include '../includes/header.html'; ?>
    </div>
</head>

<body>
    <div class="main">
        <div class="page-bannner">
            <h1 class="page-bannner-heading">Get onboard</h1>
        </div>
        <div class="container">
            <h4 class="page-name">SIGN UP</h4>
            <h1 class="heading">Create an Account</h1>
            <div class="form-container">
                <form class="form" id="signup-form">
                    <div class="inputs">
                        <div class="row">
                            <div class="field">
                                <label for="full-name" class="form-label">Full Name</label>
                                <input type="text" id="full-name" class="form-input" placeholder="Enter your name">
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
                                <label for="address" class="form-label">Address</label>
                                <input type="text" id="address" class="form-input" placeholder="Enter your address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="field">
                                <label for="secondary-address" class="form-label">Secondary Address</label>
                                <input type="text" id="secondary-address" class="form-input"
                                    placeholder="Enter your secondary address">
                            </div>
                            <div class="field">
                                <label for="city" class="form-label">City</label>
                                <select id="city" class="form-input form-select"> </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="field">
                                <label for="password" class="form-label">password</label>
                                <input type="password" id="password" class="form-input"
                                    placeholder="Enter your password " onblur="checkPassword()"
                                    onfocus="resetPassword()">
                            </div>
                            <div class="field">
                                <label for="confirm-password" class="form-label">confirm password</label>
                                <input type="password" id="confirm-password" class="form-input" onblur="checkPassword()"
                                    onfocus="resetPassword()" placeholder="Confirm your password">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="field checkbox-field">
                            <input type="checkbox" class="form-checkbox" id="terms" name="terms">
                            <label for="terms" class='form-label checkbox-label'>I agree to accept <a>Terms
                                    Conditions</a></label>
                        </div>
                        <div class="field checkbox-field">
                            <input type="checkbox" id="remember" class="form-checkbox" name="remember">
                            <label for="remember" class='form-label'>Remember password</label>
                        </div>
                    </div>
                    <button type="submit" class='form-btn signup-btn'>Register Now</button>
                </form>
                <div class="social-signup">
                    <h6 class="signup-question">or signup with</h6>
                    <div class="social-icons">
                        <div class="icon-container">
                            <img alt="fb-icon" src="../assets/images/createUser/facebook.png" />
                        </div>
                        <div class="icon-container">
                            <img alt="fb-icon" src="../assets/images/createUser/google.png" />
                        </div>
                        <div class="icon-container">
                            <img alt="fb-icon" src="../assets/images/createUser/linkin.png" />
                        </div>
                        <div class="icon-container">
                            <img alt="fb-icon" src="../assets/images/createUser/apple.png" />
                        </div>
                    </div>
                </div>
                <div class="include-agreement-footer">
                    <?php include '../includes/agreement-footer.html' ?>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../js/include.js"></script>
<script src='../API/createUser.js'></script>
<script src="../js/signup.js"></script>

</html>