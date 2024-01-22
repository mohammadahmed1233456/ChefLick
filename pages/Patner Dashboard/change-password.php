<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/forms.css">
    <title>Patner Dashboard</title>
    <script>
        const pageTopTitle = "Change Password";
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
                                    <label for="old-password" class="form-label">old password</label>
                                    <input type="password" id="old-password" class="form-input password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="field">
                                    <label for="new-password" class="form-label">new password</label>
                                    <input type="password" id="new-password" class="form-input password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="field">
                                    <label for="confirm-password" class="form-label">confirm password</label>
                                    <input type="password" id="confirm-password" class="form-input password">
                                </div>
                            </div>
                        </div>
                        <button class='form-btn save-btn'>Save</button>
                    </form>
                </div>
            </div>
        </main>
    </div>

</body>
<script src="../../js/include.js"></script>
<script src="../../js/form.js"></script>

</html>