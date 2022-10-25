<!DOCTYPE html>
<html>
<head>
<title>Welcome to My Resume</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
 

}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('https://i.pinimg.com/originals/5a/35/0b/5a350b276270c197094dc78b824d5308.jpg');
  min-height: 100%;
  min-width: auto;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("https://i.pinimg.com/originals/5a/35/0b/5a350b276270c197094dc78b824d5308.jpg");
  min-height: 500px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url("");
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}

.flip-box {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateX(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front {
  
  background-image:url("");
  width: 460px;
  height: 320px;
 
}

.flip-box-back {
  background-image:url("");
  width: 460px;
  height: 320px;
  transform: rotateX(180deg);
}

movement {
  width: 100px;
  height: 100px;
  background-color: black;
  position: relative;
  animation-name: example;
  animation-duration: 4s;
  animation-iteration-count: infinite;
  animation-direction: alternate-reverse;
}

@keyframes example {
  0%   {background-color:black; left:0px; top:0px;}
  25%  {background-color:black; left:200px; top:0px;}
  50%  {background-color:black; left:200px; top:200px;}
  75%  {background-color:black; left:0px; top:200px;}
  100% {background-color:black; left:0px; top:0px; bottom:0px;}
}


.mask1
{
  -webkit-mask-image: url(w3logo.png);
  mask-image: url(w3logo.png);
}


body{
    background-image: url('https://i.pinimg.com/originals/fd/78/9c/fd789c2563f36186cc846db07ae1cf48.gif');
    background-size: top;
    background-position: center center;
    background-repeat: no-repeat center;

    
    
    height: 100vh;
    padding:0;
    margin:0;
}

</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="{{ route('homepage')}}" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
  <movement>
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">WELCOME <span class="w3-hide-small">MY </span> RESUME</span>
</movement>
  </div>
</div>

<!-- Container (About Section) -->

<div class="w3-content w3-container w3-padding-64" id="about">
  <p class="w3-center"><em>I love photography</em></p>
  <p>We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
    qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <b><i class=""></i></b>
      <div class="flip-box">
          <div class="flip-box-inner">
              <div class="flip-box-front">
                
              <h10><img src="https://thumbs.dreamstime.com/b/avatar-gold-icon-vector-illustration-golden-particle-background-isolated-vector-sign-symbol-education-icon-black-background-168668166.jpg" class="" alt="" width="300" height="333"></h10>
            </div>
          <div class="flip-box-back">
      <h2><img src="https://www.shefinds.com/files/2022/05/katy-perry-1.jpg" class="" alt="" width="300" height="333"></h2>
      </div>
    </div>
</div>
      <!---->
    </div> 
  

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
    <h1>Typewriter</h1>

<button onclick="typeWriter()"> Click me Please!</button>

<p id="demo"></p>
    </div>
  </div>

  <p class="w3-large w3-center w3-padding-16">Im really good at: Web Designer</p>
  <p class="w3-wide"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_9qk8-Sb6Zz3qnoQN8S7szCM6O0zdIWEuFA&usqp=CAU.jpg"></i>HTML</p>
  <div class="progressbar-wrapper">
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
  </div>
  <p class="w3-small"><img src="https://miro.medium.com/max/1024/1*9HanDsRU11ZMsgDGJwN96w.png" alt="Girl in a jacket" width="200" height="200"></i>Boostrap</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>JavaScript</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:80%">80%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>TypeScript</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:86%">86%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Vue Js</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:55%">55%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Laravel Framework</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>AngularJS</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Jquery</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:86.000000002%">86.2%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Tester7</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:87%">87%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Tester8</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:89%">89%</div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Tester9</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:88%">88%</div>
  </div>
</div>
<br>
</div>
<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">3</span><br>
    Projects
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">2</span><br>
    Projects Done
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">89+</span><br>
    Happy Clients
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">150+</span><br>
    Meetings
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">MY WORK</h3>
  <p class="w3-center"><em>Here are some of my latest lorem work ipsum tipsum.<br> Click on the images to make them bigger</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="https://cdn.educba.com/academy/wp-content/uploads/2019/12/Beta-Testing-2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Beta Testing System">
    </div>

    <div class="w3-col m3">
      <img src="https://inspiration.nlogic.ca/hubfs/debugging2.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Debug the System">
    </div>

    <div class="w3-col m3">
      <img src="https://cdn.acodez.in/wp-content/uploads/2021/08/bootstrap-web-development.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Boostrap The System">
    </div>

    <div class="w3-col m3">
      <img src="https://static.vecteezy.com/system/resources/thumbnails/004/865/921/small_2x/programmer-people-concept-use-laptop-and-programming-code-program-icon-spreading-with-modern-flat-style-free-vector.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="CSS coding">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR61tUQMO8K4lHNXDWqcZWJJYdnk0A-_5hzEw&usqp=CAU.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="HTML">
    </div>

    <div class="w3-col m3">
      <img src="https://stackify.com/wp-content/uploads/2018/10/JavaScript-Tutorials-for-Beginners.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="JS">
    </div>

    <div class="w3-col m3">
      <img src="https://cdn.educba.com/academy/wp-content/uploads/2019/09/What-is-Laravel.png" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Laravel">
    </div>

    <div class="w3-col m3">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwd3zFbFRNAlu3-JfhxR_B7htZpEttMw8MFp3bWHxIapQat-fkQXANdHoXSty9eeX4-Is&usqp=CAU.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Wordpress">
    </div>

</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  

<!-- Container (Contact Section) -->
<br>
<br>
<br><br><br>
  <h3 class="w3-center">WHERE I WORK</h3>
  <p class="w3-center"><em>I'd love your feedback!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="">
      <img src="" class="w3-image w3-round" style="width:100%">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge "></i> Malaysia,Kuala Terengganu<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge"></i> Phone:6013-7316146<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge "></i> Email: alluqmanqashyaffazmi@gmail.com<br>
      </div>
      <br>
      
    </div>
  </div>
</div>
  </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a href="https://www.google.com/" class="fa fa-facebook-official w3-hover-opacity"></a>
    <a href="https://www.instagram.com/challenge/?next=https%3A%2F%2Fwww.instagram.com%2F%3F__coig_challenged%3D1"  class="fa fa-instagram w3-hover-opacity"></a>
    <a href="https://github.com/Qashyaff/ProjectExternal"  class="fa fa-github w3-hover-opacity"></a>
    <a href="https://gitlab.com/luqmanqashyaff/ProjectExternal"  class="fa fa-gitlab w3-hover-opacity"></a>
    <a href="https://twitter.com/i/flow/login"  class="fa fa-twitter w3-hover-opacity"></a>
    <a href="https://www.linkedin.com/in/al-luqman-qashyaff-248305197/" class="fa fa-linkedin w3-hover-opacity"></a>
  </div>
 
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}


// used to typing
var i = 0;
var txt = 'Hi, my name Al-Luqman Qashyaff bin Azmi Thank you for click this because want to know more about me, I was live at Pasir Mas Kelantan';
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

</script>

</body>
</html>