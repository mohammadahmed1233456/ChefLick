<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/forms.css">
    <title>Patner Dashboard</title>
    <script>
        const pageTopTitle = "Withdraw Amount";
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
            <div class="profile-container" style="margin-bottom:32px;">
                <div class="avatar-container">
                    <h4 class="data"><span>Rs</span>5000</h4>
                    <h4 class="name">Amount to Withdraw</h4>
                </div>
                <div class="form-container">
                    <form class="form">
                        <div class="inputs">
                            <div class="row">
                                <div class="field">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" class="form-input" placeholder="Enter Your Email">
                                </div>
                                <div class="field">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="number" id="phone" class="form-input" placeholder="00 303 2386515">
                                </div>
                            </div>
                            <div class="row">
                                <div class="field">
                                    <label for="account-title" class="form-label">Account Title</label>
                                    <input type="text" id="account-title" class="form-input"
                                        placeholder="Muhammad Ahmed">
                                </div>
                                <div class="field">
                                    <label for="account-number" class="form-label">Account Number</label>
                                    <input type="text" id="account-number" class="form-input"
                                        placeholder="8301 0106901111">
                                </div>
                            </div>
                            <div class="row">
                                <div class="field">
                                    <label for="bank" class="form-label">Bank</label>
                                    <select id="bank" class="form-input form-select">
                                        <option selected>Choose...</option>
                                        <option>HBL</option>
                                        <option>MCB</option>
                                        <option>UBL</option>
                                        <option>Meezan limited</option>
                                        <option>Islamic</option>
                                    </select>
                                </div>
                                <div class="field">
                                    <button class='form-btn save-btn'>Register Now</button>
                                </div>
                            </div>
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