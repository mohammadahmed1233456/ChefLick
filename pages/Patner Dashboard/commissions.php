<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patner Dashboard</title>

    <script>
        const pageTopTitle = "commissions";
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
            <div class="widgets">
                <div class="widget">
                    <h4 class="data"><span>Rs</span>6500</h4>
                    <p class="name">Commission Earned</p>
                </div>
                <div class="widget">
                    <h4 class="data">25</h4>
                    <p class="name">number of Registrations</p>
                </div>
                <div class="widget">
                    <h4 class="data"><span>Rs</span>5000</h4>
                    <p class="name">Amount withdrawn</p>
                </div>
            </div>
            <div class="section-container">
                <h4 class="title">Comissions Earned</h4>
                <div class="table" id="commissionsTable"></div>
            </div>
            <a href="./amount-withdraw.php" class=" withdraw-btn">WITHDRAW</a>
        </main>
    </div>


</body>
<script src="../../js/include.js"></script>
<script src="../../js/dashboardTable.js"></script>
<script src="../../js/patnerDashboardComissions.js"></script>

</html>