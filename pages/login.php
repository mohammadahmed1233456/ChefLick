<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/page.css">
    <link rel="stylesheet" href="../css/forms.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Sign Up</title>

    <div class="include">
        <?php include '../includes/header.html'; ?>
    </div>
</head>

<body>
    <div class="main">
        <div class="container">
            <div class="page-section login-page">
                <div class="section-left">
                    <h2 class="sub-title">Lets Order</h2>
                    <h1 class="title">Something</h1>
                    <p>The founders of Cheflick are friends who were born and raised in Karachi. They have a strong
                        desire to contribute to their society and a deep affection for their homeland. They discovered a
                        socioeconomic divide where women had fewer opportunities to become self-sufficient due to family
                        constraints or environmental and societal challenges.

                    </p>
                    <div class="apps-images">
                        <img src="../assets/images/apple.png" alt="" class="apple">
                        <img src="../assets/images/google.png" alt="" class="google">
                    </div>
                </div>
                <div class="section-right">
                    <div class="form-container">
                        <form class="form" id="signup-form">
                            <div class="inputs">
                                <div class="row">
                                    <div class="field">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" id="email" class="form-input"
                                            placeholder="Enter your Email ">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="field">
                                        <label for="password" class="form-label">password</label>
                                        <input type="password" id="password" class="form-input"
                                            placeholder="Enter your password ">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="field checkbox-field">
                                    <input type="checkbox" id="remember" class="form-checkbox" name="remember">
                                    <label for="remember" class='form-label'>Remember password</label>
                                </div>
                                <div class="field">
                                    <a href="#" class="forget-password">Forget password</a>
                                </div>
                            </div>

                            <div class="social-signup">
                                <h6 class="signup-question">or login with</h6>
                                <div class="social-icons">
                                    <div class="icon-container">
                                        <img alt="fb-icon.png" class="social-icon"
                                            src="../assets/images/createUser/facebook.png" />
                                    </div>
                                    <div class="icon-container">
                                        <img alt="google-icon.png" class="social-icon"
                                            src="../assets/images/createUser/google.png" />
                                    </div>
                                    <div class="icon-container">
                                        <img alt="linked-icon.png" class="social-icon"
                                            src="../assets/images/createUser/linkin.png" />
                                    </div>
                                    <div class="icon-container">
                                        <img alt="apple-icon.png" class="social-icon"
                                            src="../assets/images/createUser/apple.png" />
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class='form-btn '>Login</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
</body>
<script src="../js/include.js"></script>

</html>