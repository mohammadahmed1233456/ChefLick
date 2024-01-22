<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/page.css">
    <link rel="stylesheet" href="../css/payment-form.css">
    <link rel="stylesheet" href="../css/forms.css">
    <title>Payment Form</title>
    <div class="include">
        <?php include '../includes/header.html'; ?>
    </div>

</head>

<body>
    <div class="main">
        <div class="page-bannner">
            <h1 class="page-bannner-heading">Payment form</h1>
        </div>
        <div class="container">
            <h1 class="heading">Payment Form</h1>
            <form class="form" id="cooking-star-form">
                <div class="inputs">
                    <div class="row">
                        <div class="field">
                            <label for="account-title" class="form-label">Account Title</label>
                            <input type="text" id="account-title" class="form-input" placeholder="Enter Your Name">
                        </div>
                        <div class="field">
                            <label for="account-number" class="form-label">Account Number</label>
                            <input type="number" id="account-number" minlength="12" maxlength="19" class="form-input"
                                pattern="[0-9]{10}" required placeholder="0000 1111 2222 3333">
                        </div>
                    </div>
                    <div class="row">
                        <div class="field">
                            <label for="expiry" class="form-label">expiry</label>
                            <input type="text" id="expiry" name="expiry" maxlength="5"
                                pattern="^(0[1-9]|1[0-2])\/\d{2}$" required class="form-input" placeholder="02/28">
                        </div>
                        <div class="field">
                            <label for="cvv" class="form-label">Cvv</label>
                            <input type="text" id="cvv" class="form-input" minlength="3" maxlength="4" pattern="\d{3,4}"
                                required>
                        </div>
                    </div>
                </div>
                <button type="submit" class='form-btn '>Pay Now</button>
            </form>

        </div>
    </div>
</body>
<div class="include">
    <?php include '../includes/footer.html' ?>
</div>
<script src="../js/paymentForm.js"></script>

</html>