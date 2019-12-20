<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/logo.png" type="image" sizes="40px">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  
  <link href="https://fonts.googleapis.com/css?family=Jura|Rock+Salt" rel="stylesheet">
    <link rel ="stylesheet" href= "css/style.css">
    <link rel ="stylesheet" href= "css/bootstrap.min.css">
    <link rel="stylesheet" href="css/loader.css" />
    <script type ="text/javascript" src ="js/jquery.js"></script>
    <script type ="text/javascript" src ="js/index.js"></script>
    
    <title>OJASS'20</title>
</head>
<body style="margin-left:-4%;">
<!--loader-->
<!-- <div id="loader-wrapper" style="overflow: hidden">
        <div id="main-loader">
            <div class="ring el-1"></div>
            <div class="ring el-2"></div>
            <div class="ring el-3"></div>
            <div class="ring el-4"></div>
            <div class="ring el-5"></div>
            <div class="ring el-6"></div>
            <div class="ring el-7"></div>
            <div class="ring el-8"></div>
            <div class="ring el-9"></div>
            <div class="ring el-10"></div>
            <div class="ring el-11"></div>
            <div class="ring el-12"></div>
            <div class="ring el-13"></div>
            <div class="ring el-14"></div>
            <div class="ring el-15"></div>
        </div>
        <div id="oasis-text">
            <div id="oasis-title">
                <ul>
                    <li class="oasis-li li-1">O</li>
                    <li class="oasis-li li-2">J</li>
                    <li class="oasis-li li-3">A</li>
                    <li class="oasis-li li-4">S</li>
                    <li class="oasis-li li-5">S</li>
                    <li class="oasis-li li-6">'</li>
                    <li class="oasis-li li-7">2</li>
                    <li class="oasis-li li-8">0</li>
                </ul>
            </div> -->
            <!-- <div id="oasis-slogan">
                Epyllion De Science
            </div> -->
        <!-- </div>
        <div id="oasis-date">
        Epyllion De Science
        </div>
    </div> -->
    <?php include_once 'timer.php'; ?>
<div class="card-menu">
  <div class="card-menu-close-menu"></div>
  <div class="card-menu-section card-menu-section-1 active" data-section="1">
    <div class="card-menu-menu-btn"></div>
    <h2 class="card-menu-section-heading"><img src ="images/logo.png" width ="50" height ="50" style ="margin-top:-5%;">&nbsp;&nbsp;&nbsp;HOME</h2>
    <div class = "faq"> <?php include_once 'home.php';?></div>
  </div>
  <div class="card-menu-section card-menu-section-2 inactive" data-section="2">
    <div class="card-menu-menu-btn"></div>
    <h2 class="card-menu-section-heading"><img src ="images/logo.png" width ="50" height ="50" style ="margin-top:-5%;">&nbsp;&nbsp;&nbsp;EVENTS</h2>
    
  </div>
  <div class="card-menu-section card-menu-section-3 inactive" data-section="3">
    <div class="card-menu-menu-btn"></div>
    <h2 class="card-menu-section-heading" style="color:yellow"><img src ="images/logo.png" width ="50" height ="50" style ="margin-top:-5%;">&nbsp;&nbsp;&nbsp;NOTIFICATION</h2>
    <div class = "faq"> <?php include_once 'notification.php';?></div>
  </div>
  <div class="card-menu-section card-menu-section-4 inactive" data-section="4">
    <div class="card-menu-menu-btn"></div>
    <h2 class="card-menu-section-heading"><img src ="images/logo.png" width ="50" height ="50" style ="margin-top:-5%;">&nbsp;&nbsp;&nbsp;SPONSORS</h2>
    <div class = "faq"> <?php include_once 'sponsor.php';?></div>
 
  </div>
  <div class="card-menu-section card-menu-section-5 inactive" data-section="5">
    <div class="card-menu-menu-btn"></div>
    <h2 class="card-menu-section-heading" style="color:yellow"><img src ="images/logo.png" width ="50" height ="50" style ="margin-top:-5%;">&nbsp;&nbsp;&nbsp;FAQ</h2>
   <div class = "faq"> <?php include_once 'faq.php';?></div>
  </div>
  <div class="card-menu-section card-menu-section-6 inactive" data-section="6">
    <div class="card-menu-menu-btn"></div>
    <h2 class="card-menu-section-heading" style="color:yellow"><img src ="images/logo.png" width ="50" height ="50" style ="margin-top:-5%;">&nbsp;&nbsp;&nbsp;TEAM</h2>
    <div class = "faq"> <?php// include_once 'team.php';?></div>
  </div>

</div>
<script type = "text/javascript" src="js/main.js"></script>
<script>
  
  $(document).ready(function() {
window.onload = function () {
$('#loader-wrapper').fadeOut(4000, function(){ $('#loader-wrapper').remove(); } );
}
});


  </script>
</body>
</html>