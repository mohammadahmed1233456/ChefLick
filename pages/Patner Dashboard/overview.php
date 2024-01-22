<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patner Dashboard</title>
    <script>
        const pageTopTitle = "hi, patner";
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
                    <h4 class="data">25</h4>
                    <p class="name">Number of visitors on link</p>
                </div>
                <div class="widget">
                    <h4 class="data">25</h4>
                    <p class="name">number of Registrations</p>
                </div>
                <div class="widget">
                    <h4 class="data"><span>Rs</span>5000</h4>
                    <p class="name">Commission Earned</p>
                </div>
            </div>
            <div class="section-container">
                <h4 class="title">Link</h4>
                <div class="overview-link-container">
                    <p class="link-text">affiliate.cheflick.com/hassaan1489</p>
                    <i class="fa-solid fa-copy "></i>
                    <div class="copied-message">
                        <i class="fas fa-check"></i>
                        <p>Copied</p>
                    </div>
                </div>
            </div>
            <div class="section-container">
                <h4 class="title">Registrations</h4>
                <div class="table" id="overviewTable"></div>
            </div>
        </main>
    </div>


</body>
<script src="../../js/include.js"></script>
<script src="../../js/dashboardTable.js"></script>
<script src="../../js/patnerDashboardOverview.js"></script>

</html>