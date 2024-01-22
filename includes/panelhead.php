<!DOCTYPE html>
<html>
<head>
<?php 
include 'link.php';
?>
<link rel="stylesheet" href="css/panelhead.css">

</head>
<body>
<header>
        <div class="container-width-pan">
            <div class="top-bar row">
                <div class="navbar-log col-sm-2">
                    <div id="main">
                        <button class="openbtn" onclick="openNav()">☰</button>  
                    </div>
                </div>
                <div class="col-sm-9">
                    
                </div>
                <div class="out-log col-sm-1">
                    <div id="main">
                        <button class="openbtn" onclick="openNav()"><i class="fa fa-sign-out"></i></button>  
                    </div>
                </div>
            </div>
        </div>               
        <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="refer-a-friend.php">REFERAL</a>
        <a href="location.php">LOCATION</a>
        <a href="#">DASHBOARD</a>
        </div>



        <script>
        function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        }
        </script>

    </header>
   
</body>
</html> 
