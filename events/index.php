
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>Events</title>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no" />
    <link rel="shortcut icon" href="ojass_black_nb.png">
    <link rel="stylesheet" href="typopro-web/web/TypoPRO-ComicNeue/TypoPRO-ComicNeue.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/libs/animate.css">
    <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
		<script type="text/javascript" src="js/firebase.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kumar+One+Outline" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kumar+One+Outline|Satisfy" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <style>
  @import url('https://fonts.googleapis.com/css?family=Raleway');
  body{
      font-family:'Raleway' !important;
      background-color:#212121;
  }
  img{
    border-radius: 50%;
    border:5px solid white;

  }
  h3{
    font-family: 'Raleway', cursive;font-size:40px;
    color:white;
  }
  a:active{
    background:black;
  }
  .spinner {
    
  width: 80px;
  height: 80px;
  background-color: #ffffff;
  position: absolute;
top: 48%;
left: 48%;
  /*margin: 100px auto;*/
  -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
  animation: sk-rotateplane 1.2s infinite ease-in-out;
}

@-webkit-keyframes sk-rotateplane {
  0% { -webkit-transform: perspective(120px) }
  50% { -webkit-transform: perspective(120px) rotateY(180deg) }
  100% { -webkit-transform: perspective(120px) rotateY(180deg)  rotateX(180deg) }
}

@keyframes sk-rotateplane {
  0% { 
    transform: perspective(120px) rotateX(0deg) rotateY(0deg);
    -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg) 
  } 50% { 
    transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
    -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg) 
  } 100% { 
    transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
  }
}
.spinner-wrapper {
position: fixed;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: black;
z-index: 999999;
}
  </style>
  <body style="background-color:#212121;">
  
  
	<style>
		@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css');

.toggle
{
	position: fixed;
	top: 50px;
	right: 75px;
	width: 55px;
	height: 55px;
	border-radius: 50%;
	cursor: pointer;
	z-index: 5;
}
.toggle:before
{
	content: '+';
	position: absolute;
	top: 0;
	left: 0;
	font-size: 120px;
	width: 200%;
	height: 200%;
	color: #fff;
	text-align: center;
	line-height: 100px;
	border-radius: 50%;
	background: #000;
	font-weight: bold;
	transition: 0.5s;
}
.toggle.active:before
{
	transform: rotate(405deg);
	background: #EC4036;
	color: #000;
}
.overlay
{
	position: fixed;
	top: 70px;
	right: 75px;
	width: 20px;
	height: 20px;
	border-radius: 50%;
	background: rgba(0,0,0,.80);
	transition: transform 0.5s;
}
.overlay.active
{
    transform: scale(1000,1000);
    z-index:1;
}
.menu
{
	width: 100%;
	height: 100%;
	overflow: auto;
	z-index: 1020;
	visibility: hidden;
}
.menu.active
{
	visibility: visible;
	transition-delay: 0.5s;
}
.menu ul
{
    z-index:2;
	position: fixed;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	margin: 0;
	padding: 0;
}

.menu ul li
{
	list-style: none;
}

.menu ul li a
{
	position: relative;
	font-size: 100px;
	text-decoration: none;
	color: #fff;
	margin: 70px 0;
	display: block;
	font-weight: bold!important;
	text-shadow: 0 2px 5px rgba(0,0,0,.5);
}

.menu ul li a:before
{
	content: '';
	position: absolute;
	bottom: 5px;
	left: -10px;
	width: 100%;
	height: 20px;
	background: #EC4036;
	z-index: -1;
	transform: scaleX(0);
	transform-origin: left;
	transition: transform 0.5s;

}
.menu ul li a:hover:before
{
	transform: scaleX(1);
}
.far{
    font-weight:800;
}
.header{
    background:rgba(0,0,0,0.5);
  padding-bottom:5px;
}
.logo{
    margin-top:30px;
    margin-left:50px;
	border:0;
}
	</style>
<div class="header">
    <div class=""><a href="../Home/index.php"><img class="logo" src="b.jpg" width="185px"></a></div>
	<div class="toggle "></div>
	<div class="overlay "></div>
    
</div>
	<div class="menu">
		<ul>
            <strong>
			<li><a href="../Home/index.php"><i class='fas fa-home'>&nbsp;&nbsp;&nbsp;Home</i></a></li>
			<li><a href="../Events/index.php" target="_blank"><i class='far fa-calendar-check'>&nbsp;&nbsp;&nbsp;&nbsp;Events</i></a></li>
			<li><a href="../Notification/index.php" target="_blank"><i class='fas fa-bell'>&nbsp;&nbsp;&nbsp;&nbsp;Notifications</i></a></li>
			<li><a href="../Sponsors/index.php" target="_blank"><i class='fas fa-money-check-alt'>&nbsp;&nbsp;&nbsp;Sponsors</i></a></li>
			<!--<li><a href="../Modified_Gallery/index.php"><i class='fas fa-camera-retro'>&nbsp;&nbsp;&nbsp;&nbsp;Gallery</i></a></li>-->
			<li><a href="../Faqs/index.php"><i class='far fa-question-circle'>&nbsp;&nbsp;&nbsp;&nbsp;FAQ's</i></a></li>
			<li><a href="../Team/index.php"><i class='fas fa-users-cog'>&nbsp;&nbsp;&nbsp;Team</i></a></li>
			<!-- <li><a href="../Developers/index.php"><i class='fas fa-laptop-code'>&nbsp;&nbsp;&nbsp;Developers</i></a></li> -->
            </strong>
        </ul>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.toggle').click(function(){
				$('.toggle').toggleClass('active')
				$('.overlay').toggleClass('active')
				$('.menu').toggleClass('active')
			})
		})
	</script>
                <script>
                var events = {
                  "Circuit_House" : {
                    "number" : 0,
                  },
                  "AAKRITI" : {                     
                    "number" : 0,                   
                  },
                  "AVARTAN" : {                     
                    "number" : 0,                   
                  },
                  "Armageddon" : {                     
                    "number" : 0,                   
                  },
                  "ARTHASHASTRA" : {                     
                    "number" : 0,                   
                  },
                  "Rise of Machines" : {                     
                    "number" : 0,                   
                  },
                  "LiveCS" : {                     
                    "number" : 0,                   
                  },
                  "No Ground Zone" : {                     
                    "number" : 0,                   
                  },
                  "Deus-X-Machina" : {                     
                    "number" : 0,                   
                  },
                  "Paraphernalia" : {                     
                    "number" : 0,                   
                  },
                  "NSCET" : {                     
                    "number" : 0,                   
                  },
                  "Neo Drishti" : {                     
                    "number" : 0,                   
                  },
                  "PRAYAS" : {                    
                     "number" : 0,                   
                    },
                  "School Events" : {                     
                    "number" : 0,                   
                  },
                  "Silicon Valley" : {                     
                    "number" : 0,                   
                  },
                  "VishwaCodegenesis" : {
                    "number" : 0,
                  },
                  "Produs" : {
                    "number" : 0,
                  },
                  "EXPOSICION" : {
                    "number" : 0,
                  }
                };
                var event_info = {};
                var root = firebase.database().ref();
                root.child('/Events/-KcOAEcqW_WTDOYTUagm').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcOEajfJpch9OTpe2pA').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcQEcFIxgi2unQrZuw9').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcQICD7WKTDryvfgQzq').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcQLaqMdmyT0-AenWfj').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcQNgXtL3OzWD5KAbx9').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcQQNGL1gAe0bQbFNAF').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcQTNIqQlHQetm7yFJ5').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcQUPfaZLm5nr0jTT6q').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcQV8SJ2tHJbJ8U87Aq').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcQVnYXGbY-tIqNT80h').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcQWT_uXRRUusPal6at').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcT4Y1BjB3FK8QjmFB0').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcT4hdwnW4F43TYgjZ5').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcT4ouBnqgypG2sHMDg').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcT4vVO-77sj2yIIZS3').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcT4zKnsEM859q0XyxQ').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcT5RyDG4SZEYh9DE-W').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcT5hM_ib_WsQsTkJ1u').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcT5sw9srOHzlivecsbalk').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcT5sw9srOHzxUuMlkk').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcT5xmoxYZv3LkuPS23').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcTGptq6R0yIy72Nsuk').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcTJHpsDmkaKV4sr6UU').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcTL8BlmBl3p4uHDaTV').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KchaB1wsmEZ6iGIeRmd').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KciNBJESMx6r8Vj5nME').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KciNjwmSIv8XjDw-B74').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KclpP0VmbuXITy-ZVjp').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcltEupg-EjPBO3710J').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kclw0w8SYhwa87y5w0B').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KclzQND0vJPzf5MYlJ8').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KclzVQB3WsYi7_fdawG').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kclziq6SIXUQPBGl_Ll').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm-OYyNrcCT_a22GyS').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm-mZZuFX7GwpywCNE').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm0lDuLd42VKCd3w95').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm1ByvxpqFsBPQX1TH').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm23BmlCklhgys6Axt').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm2EJ4uZ9BakHRrnYd').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm2hUfPbr-jM9xCMfG').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm2k1fQX546UWYAFw7').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm2pKC1x43FLG9i7cI').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm5qeg9QWeFvcgPRvM').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm2uVtqT8SY4uYz6xm').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm3PF37gDCX4YjBIg_').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm3QyySHKhY8cTtkeY').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm3TyHu9GEcstcA5x7').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm3XicUFWzFSXgunpS').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm3_jbXkSGL--ilVyr').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm3cChPrp5CTSf1oS9').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm50DbJS_sImMiPpNg').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm5CO23PiVkz38dVZt').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm5_cN-LADSEUKCIXH').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm5lk33rOPCuxpcCNN').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm5qeg9QWeFvcgPRvM').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm5uozyeH7F3EWAP5n').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm5ySU37qNFR_A1yXa').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm61EZRD4ynRWQtCA9').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcmBMVFnXaS5sfgNu_z').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcmYpaGsiyRmvZ6bLOf').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcmZSFgMRrVb09lV44M').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcm_QO03nTDbadwyTAx').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcmaBRl0FBuXalKvqlS').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcniduM7CpN86EQkM5c').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcnk38AOixNn4MFRxs2').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcnoMsA-zvAMz3F5hj1').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcnv6Z7gKm-6DVjwx2d').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcqBWmKIs3eDBkLtwsB').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcqCuUogfvbFNJdd6D_').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcqDCTTvIMlf60mMBSl').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcqDWNFL8F_je4RbpoL').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcqE4Ygh-A6bZtrY8N_').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcqEYZAhbyh8s_1wEg8').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcqEYZAhbyjunkyardwar').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcqEYZAhbyscifari').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcqEYZAhbythewizcraft').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcqFQ-pFDndES4gOe1D').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcqS7npNlIXSfm_lYux').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcqjDRuR9KSEVMl4Om6').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-Kcqk3MT-BDrz1wQ0b9R').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcqkXY90l3YuT9v4vlg').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcqtzYpWM1sCBIdpraks').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-KcqtzYpWM1sCBIdy6Jl').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
                root.child('/Events/-l').once('value', function(snap){
                    var branch = snap.child("branch").val();
                    var name = snap.child("name").val();
                    events[branch]["number"] = events[branch]["number"] + 1;
                    events[branch][name] = snap.key;
                });
              
                </script>


        <div>
          <div class="row">
            <div class="span12 center" >


              <div class="spiel" data-wow-duration="0.5s" class="wow bounceInDown">
                  <br><br><br><br>
             <h1 style="font-size:100px;font-family: 'Raleway', cursive;color:white"> Major events</h1>
              <br><br><br><br>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-white" style="background-color:#212121;">
        <div class="container circles">

          <div class="row">
            <div data-wow-delay="0.5s" class="span3 wow rollIn" onclick="window.location.href = '../events/?branch=AAKRITI'">
              <img src="icons/akriti-01.png" height="200"  style="margin-left:10px;background-color:black; margin-right:5px;">
              <h3 style="left:70px;position:relative">Aakriti </h3>
            </div>
                
              

            <div data-wow-delay="0.5s" class="span3 wow bounceInDown center" onclick="window.location.href = '../events/?branch=Armageddon'">
              
                
              <img src="icons/armageddon-01.png" height="200"  style="background-color:black;">
              <h3 style="left:3px;">Armageddon</h3>
            </div>
            <div data-wow-delay="0.5s" class="span3 wow lightSpeedIn" onclick="window.location.href = '../events/?branch=ARTHASHASTRA'">
              
              <img src="icons/arthashastra-01.png" height="200"  style="margin-left:10px;background-color:black;">
              <h3 style="left:2px;position:relative;">Arthashastra</h3>
              
            </div>
          </div>
          <br><br><br>
          <div class="row">
            <div class="span3 wow rollIn center" oonclick="window.location.href = '../events/?branch=AVARTAN'">
              <img src="icons/avartan-01-01.png" height="200"  style="background-color:black;">
              <h3 style="left:5px;position:relative">Avartan</h3>
            </div>
            <div data-wow-iteration="5" data-wow-duration="0.15s" class="span3 wow pulse" onclick="window.location.href = '../events/?branch=Circuit_House'">
              <img src="icons/Circuit House-01.png" height="200" style="margin-left:20px;background-color:black;">
              <h3 style="left:60px;position:relative;">Circuit<br><br>House</h3>
            </div>
            <div class="span3 wow bounceInRight center" onclick="window.location.href = '../events/?branch=Deus-X-Machina'">
              <img src="icons/deus-x-machina-01.png" height="200"  style="background-color:black;">
              <h3 style="left:5px;">Dues-X-<br><br>Machina</h3>
            </div>
          </div>
          <br><br><br>
          <div class="row">
            <div class="span3 wow rollIn center" onclick="window.location.href = '../events/?branch=AAKRITI'">
              <img src="icons/live CS-01.png" height="200"  style="background-color:black;">
              <h3 style="left:5px;position:relative">Live CS</h3>
            </div>
            <div data-wow-iteration="5" data-wow-duration="0.15s" class="span3 wow pulse" onclick="window.location.href = '../events/?branch=Neo Drishti'">
              <img src="icons/neo drishti-01.png" height="200"  style="margin-left:20px;background-color:black;">
              <h3 style="left:30px;position:relative;">Neo Drishti</h3>
            </div>
            <div class="span3 wow bounceInRight center" onclick="window.location.href = '../events/?branch=No Ground Zone'">
             <img src="icons/No Ground Zone-01.png" height="200"  style="background-color:black;">
             <h3 style="left:5px;">No Ground<br><br>Zone</h3>
            </div>
          </div>
          <br><br><br>
          <div class="row">
            <div class="span3 wow rollIn center" onclick="window.location.href = '../events/?branch=NSCET'">
             <img src="icons/NSCET-01.png" height="200"  style="background-color:black;">
             <h3 style="left:1px;position:relative">NSCET</h3>
            </div>
            <div data-wow-iteration="5" data-wow-duration="0.15s" class="span3 wow pulse" onclick="window.location.href = '../events/?branch=Paraphernalia'">
              <img src="icons/paraphernalia-01.png" height="200"  style="margin-left:20px;background-color:black;">
              <h3 style="left:10px;position:relative;">Paraphernalia</h3>
            </div>
            <div class="span3 wow bounceInRight center"onclick="window.location.href = '../events/?branch=PRAYAS'">
             <img src="icons/prayas-01.png" height="200"  style="background-color:black;">
             <h3 style="left:5px;">Prayas</h3>
            </div>
          </div>
          <br><br><br>
          <div class="row">
             <div class="span3 wow bounceInLeft" onclick="window.location.href = '../events/?branch=Rise of Machines'">
               <img src="icons/rise of machines-01.png" height="200"  style="margin-left:15px;background-color:black;">
               <h3 style="left:45px;position:relative">Rise of<br><br>Machines</h3>
            </div>
            <div class="span3 wow flipInX center" onclick="window.location.href = '../events/?branch=School Events'">
              <img src="icons/SCHOOL EVENTS-01.png" height="200"  style="background-color:black;">
              <h3 style="left:8px;position:relative;">School<br><br>Events</h3>
            </div>
           <div class="span3 wow bounceInRight" onclick="window.location.href = '../events/?branch=Silicon Valley'">
               <img src="icons/silicon valley-01.png" height="200"  style="margin-left:15px;background-color:black;">
               <h3 style="left:45px;position:relative;">Silicon<br><br>Valley</h3>
            </div>
          </div>
          <br><br><br>
          <div class="row">
            
          <div class="span3 wow bounceInLeft" onclick="window.location.href = '../events/?branch=VishwaCodegenesis'">
              <img src="icons/vishwacode genesis-01.png" height="200"  style="margin-left:15px;background-color:black;">
              
              <h3 style="left:30px;position:relative ;">Vishwacode<br><br>Genesis</h3>
           
           </div>
          
           <div class="span3 wow flipInX center" onclick="window.location.href = '../events/?branch=Produs'">
              <img src="/img/icons/produs-01.png" height="200"  style="background-color:black;">
              <h3 style="left:8px;position:relative;">Produs</h3>
            </div>
           <div class="span3 wow bounceInRight" onclick="window.location.href = '../events/?branch=EXPOSICION'">
               <img src="/img/icons/exposcion-01.png" height="200"  style="margin-left:15px;background-color:black;">
               <h3 style="left:15px;position:relative;">Exposicion</h3>
            </div>
          </div>
          <br><br><br>

      </div>
     </div>
    
     <script src="dist/wow.min.js"></script>
         <script>
          new WOW().init();
         </script>

<script>

</script>

  </body>
</html>
