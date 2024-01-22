<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/page.css">
    <link rel="stylesheet" href="../css/forms.css">
    <title>Forget password</title>

    <div class="include">
        <?php include '../includes/header.html'; ?>
    </div>
</head>

<body>
    <div class="main">
        <div class="container">
            <h4 class="page-name">Forget Password</h4>
            <h1 class="heading">Reset Password</h1>
            <div class="form-container forget-password-form">
                <form class="form" id="forget-password-form">
                    <div class="inputs">
                        <div class="row">
                            <div class="field">
                                <label for="password" class="form-label ">Password</label>
                                <input type="password" id="password" class="form-input password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="field">
                                <label for="confirm-password" class="form-label">Confirm Password</label>
                                <input type="password" id="confirm-password" class="form-input password">
                                <!-- <i class="fas fa-eye-slash eye-icon"></i> -->
                            </div>
                        </div>
                    </div>
                    <button type="submit" class='form-btn '>Next</button>
                </form>
                <p class="info-text">For login issue, Call us on +923020009459 </br> or Email us at login@sofrahh.com
                </P>
            </div>
        </div>

    </div>
    <div class="page-foot ">
        <p class="form-foot-question">by continuing, you agree to our</p>
        <div class="form-foot-options">
            <a href="#">Disclaimer</a>
            <a href="#">Terms & conditions</a>
            <a href="#">Content Policy</a>
            <a href="#">Privacy Policy</a>
        </div>
    </div>
</body>
<script src="../js/include.js"></script>
<script src="../js/form.js"></script>

</html>