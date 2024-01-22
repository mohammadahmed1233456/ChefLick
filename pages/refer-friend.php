<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/page.css">
    <link rel="stylesheet" href="../css/forms.css">
    <title>Refer a Friend</title>
    <?php include '../includes/header.html'; ?>

</head>

<body>
    <div class="main">
        <div class="container">
            <h4 class="page-name">SHOOTOUT</h4>
            <h1 class="heading">Refer a friend</h1>
            <div class="form-container">
                <form class="form" id="signup-form">
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
                                <label for="time" class="form-label">When Should we Contact</label>
                                <input type="text" id="time" class="form-input" placeholder="When Should we Contact">
                            </div>
                        </div>
                        <div class="row">
                            <div class="field">
                                <label for="to" class="form-label">To</label>
                                <input type="number" id="time-to" class="form-input" placeholder="From">
                            </div>
                            <div class="field">
                                <label for="from" class="form-label">From</label>
                                <input type="number" id="time-from" class="form-input" placeholder="To">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class='form-btn signup-btn'>Register Now</button>
                </form>
            </div>
        </div>
    </div>
</body>
<?php include "../includes/footer.html" ?>

</html>