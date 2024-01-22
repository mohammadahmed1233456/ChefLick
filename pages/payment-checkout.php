<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/page.css">
    <link rel="stylesheet" href="../css/payment-checkout.css">
    <link rel="stylesheet" href="../css/forms.css">
    <title>Payment Checkout</title>
    <div class="include">
        <?php include '../includes/header.html'; ?>
    </div>

</head>

<body>
    <div class="main">
        <div class="page-bannner">
            <h1 class="page-bannner-heading">Payment Checkout</h1>
        </div>
        <div class="container">
            <h1 class="heading">Payment Checkout</h1>
            <div class="payment-container">
                <div class="become-A-cheif-container">
                    <h2 class="title">Become A Chief</h2>
                    <div class="data">
                        <h6 class="label">Name</h6>
                        <h6 class="value">Ahmed Soomro</h6>
                    </div>
                    <div class="data">
                        <h6 class="label">Contact</h6>
                        <h6 class="value">0303-2386515</h6>
                    </div>
                    <div class="data">
                        <h6 class="label">Email</h6>
                        <h6 class="value">mahmed0303@outlook.com</h6>
                    </div>
                    <div class="data">
                        <h6 class="label">Business Name</h6>
                        <h6 class="value">Salo chips</h6>
                    </div>
                    <div class="data">
                        <h6 class="label">Address</h6>
                        <h6 class="value">J-2 8 street phase 4</h6>
                    </div>
                    <div class="data">
                        <h6 class="label">City</h6>
                        <h6 class="value">Karachi</h6>
                    </div>
                    <div class="amount-container">
                        <div class="data">
                            <h6 class="label">Sub Total</h6>
                            <h6 class="value">Rs.6800</h6>
                        </div>
                        <div class="data">
                            <h6 class="label">Discount</h6>
                            <h6 class="value">Rs.500</h6>
                        </div>
                        <div class="data">
                            <h6 class="label">GST</h6>
                            <h6 class="value">Rs.800</h6>
                        </div>
                        <div class="data">
                            <h6 class="label">Total</h6>
                            <h6 class="value">Rs.8100</h6>
                        </div>
                    </div>
                </div>
                <form class="form" id="process-to-pay-form">
                    <div class="inputs">
                        <div class="row">
                            <div class="field">
                                <label for="full-name" class="form-label">Appy Voucher</label>
                                <input type="text" id="full-name" class="form-input" placeholder="H123hc">
                            </div>
                        </div>
                        <div class="row">
                            <div class="field">
                                <label for="select-payment" class="form-label">Select Payment Method </label>
                                <select id="select-payment" class="form-input form-select">
                                    <option selected>Choose...</option>
                                    <option>Easy Paisa</option>
                                    <option>Debit Card</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class='form-btn '>Proceed to pay</button>
                </form>
            </div>
        </div>
    </div>
</body>
<div class="include">
    <?php include '../includes/footer.html' ?>
</div>
<script src="../js/paymentCheckout.js"></script>

</html>