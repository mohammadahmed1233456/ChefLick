<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/page.css">
    <link rel="stylesheet" href="../css/forms.css">
    <title>otp</title>

    <div class="include">
        <?php include '../includes/header.html'; ?>
    </div>
</head>

<body>
    <div class="main">
        <div class="container">
            <h4 class="page-name">Forget Password</h4>
            <h1 class="heading">We Have Send an OTP to Your Email</h1>
            <p class="head-message">
                Please check your Email<br />
                mahmed0303@outlook.com to continue
            </p>
            <div class="form-container forget-password-form">
                <form class="form" id="forget-password-form">
                    <div class="otp-row">
                        <input type="text" id="opt-1-digit" maxlength="1" class="otp-input">
                        <input type="text" id="opt-2-digit" maxlength="1" class="otp-input">
                        <input type="text" id="opt-3-digit" maxlength="1" class="otp-input">
                        <input type="text" id="opt-4-digit" maxlength="1" class="otp-input">
                    </div>
                    <button type="submit" class='form-btn '>Next</button>
                </form>
                <h6 class="resend-otp-messsage">Didn't Received? <span>Resend<span></h6>
                <p class="info-text">For login issue, Call us on +923020009459 </br> or Email us at
                    login@sofrahh.com
                </P>
            </div>
        </div>
    </div>
    <div class="agreement-footer page-foot">
        <p class="form-foot-question">by continuing, you agree to our</p>
        <div class="form-foot-options">
            <a href="#">Disclaimer</a>
            <a href="#">Terms & conditions</a>
            <a href="#">Content Policy</a>
            <a href="#">Privacy Policy</a>
        </div>
    </div>
    <!-- <div class="include-agreement-footer page-foot"> -->

    <!-- </div> -->

</body>
<script src="../js/form.js"></script>
<script src="../js/include.js"></script>

</html>