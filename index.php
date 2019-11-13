<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel ="stylesheet" href= "style.css">
    <link rel ="stylesheet" href= "bootstrap.min.css">
    <title>Document</title>
</head>
<body style="margin-left:-4%;">
<div class="card-menu">
  <div class="card-menu-close-menu"></div>
  <div class="card-menu-section card-menu-section-1 active" data-section="1">
    <div class="card-menu-menu-btn"></div>
    <h2 class="card-menu-section-heading">HOME</h2>
    <?php// include_once 'team.php';?>
  </div>
  <div class="card-menu-section card-menu-section-2 inactive" data-section="2">
    <div class="card-menu-menu-btn"></div>
    <h2 class="card-menu-section-heading">EVENTS</h2>
    <div class ="row">
    <div class ="col-sm-12 faq" style ="background-color:yellow;">bfkjb</div>
    <div class ="col-sm-12 faq" style ="background-color:yellow;">fgnkjf</div>
    </div>
  </div>
  <div class="card-menu-section card-menu-section-3 inactive" data-section="3">
    <div class="card-menu-menu-btn"></div>
    <h2 class="card-menu-section-heading" style="color:yellow">NOTIFICATION</h2>
    <div class = "faq"> <?php include_once 'notification.php';?></div>
  </div>
  <div class="card-menu-section card-menu-section-4 inactive" data-section="4">
    <div class="card-menu-menu-btn"></div>
    <h2 class="card-menu-section-heading">SPONSORS</h2>
  </div>
  <div class="card-menu-section card-menu-section-5 inactive" data-section="5">
    <div class="card-menu-menu-btn"></div>
    <h2 class="card-menu-section-heading" style="color:yellow">FAQ</h2>
   <div class = "faq"> <?php include_once 'faq.php';?></div>
  </div>
  <div class="card-menu-section card-menu-section-6 inactive" data-section="6">
    <div class="card-menu-menu-btn"></div>
    <h2 class="card-menu-section-heading" style="color:yellow">TEAM</h2>
  </div>
</div>
<script type = "text/javascript" src="main.js"></script>
</body>
</html>