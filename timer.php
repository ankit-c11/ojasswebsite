<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel ="stylesheet" href ="css/bootstrap.min.css">
<!-- <script type ="text/javascript" src ="js/jquery.js"></script> -->
<style>
.timer{
  /* display:block;
  width:100%;
  height:100%;
  background-color:#123;
  overflow:hidden; */
   height: 100vh;
    width: 100vw;
    background: #000;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 999;
    color: #fff; 
    overflow: hidden; 
}
.timer-content{
  font-size:17px;
  color:white;
  font-family: algerian;
  
  /* display:inline block; */
}
.timer-content{
  padding:20px;
  margin:20px;
  text-align:center;

  width:110px;
  height:110px;
  border-radius:50%;
}
#days{
  border:2px solid maroon;
  padding:27px;
}
#hours{
  border:2px solid yellow;
  /* padding:48px; */
}
#minutes{
  border:2px solid green;
}
#sec{
  border:2px solid orange;
}
.remove{
  display:none;
}
</style>
</head>
<body>
<div class="timer" id ="counter">
  <center><h2 style= "color:white; font-family:algerian">OJASS</h2></center>
  <center><h2 style= "color:white; font-family:algerian">COMING SOON</h2></center>
  <div class ="row">
    <div class="col-xs-6"><center><div class ="timer-content" id ="days"></div></center></div>
    <div class="col-xs-6"><center><div class ="timer-content" id="hours"></div></center></div>
    <div class="col-xs-6"><center><div class ="timer-content" id="minutes"></div></center></div>
    <div class="col-xs-6"><center><div class ="timer-content" id="sec"></div></center></div>
  </div>
  </div>
  
 
 

<script>
// Set the date we're counting down to
var countDownDate = new Date("Dec 19, 2019 13:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
 var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  // document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  // + minutes + "m " + seconds + "s ";
  document.getElementById("days").innerHTML=days+" days";
  document.getElementById("hours").innerHTML=hours+" hours";
  document.getElementById("minutes").innerHTML=minutes+" minutes";
  document.getElementById("sec").innerHTML=seconds+" seconds";
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("days").innerHTML=0+" days";
  document.getElementById("hours").innerHTML=0+" hours";
  document.getElementById("minutes").innerHTML=0+" minutes";
  document.getElementById("sec").innerHTML=0+" seconds";
  var element =document.getElementById("counter");
  element.classList.remove("timer");
  element.classList.add("remove");
  }
}, 1000);
</script>

</body>
</html>
