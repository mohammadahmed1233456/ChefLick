<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/page.css">
    <link rel="stylesheet" href="../css/faq.css">
    <title>FAQ</title>

    <div class="include">
        <?php include '../includes/header.html'; ?>
    </div>
</head>

<body>
    <div class="main">
        <div class="page-bannner">
            <h1 class="page-bannner-heading">Frequently Asked Questions</h1>
        </div>
        <!-- questions -->
        <div class="container">
            <h4 class="page-name">Got any query</h4>
            <h1 class="heading">Frequently Asked Questions</h1>
            <div class="questions">
                <?php for ($i = 1; $i <= 12; $i++): ?>
                    <div class="question-container">
                        <div class="top">
                            <h4 class="question">What is lorem ipsum</h4>
                            <i class="fa fa-angle-down open-close-q"></i>
                        </div>
                        <p class="answer">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim
                            veniam, quis nostrud Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <!-- Subscribe -->
        <div class="include">
            <?php include "../includes/subscribe.html" ?>
        </div>
        <!-- reviews -->
        <div class="include">
            <?php include "../includes/newreviews.html" ?>
        </div>

    </div>
</body>
<div class="include">
    <?php include '../includes/footer.html' ?>
</div>

</html>
<script src="../js/include.js"></script>
<script src="../js/faq.js"></script>