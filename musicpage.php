<?php

// Starting the session, to use and
// store data in session variable
session_start();

// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You have to log in first";
	header('location: login1.php');
}

// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after loggin out

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>
@keyframes move_wave {
    0% {
        transform: translateX(0) translateZ(0) scaleY(1)
    }
    50% {
        transform: translateX(-25%) translateZ(0) scaleY(0.55)
    }
    100% {
        transform: translateX(-50%) translateZ(0) scaleY(1)
    }
}
.waveWrapper {
    overflow: hidden;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    margin: auto;
}
.waveWrapperInner {
    position: absolute;
    width: 100%;
    overflow: hidden;
    height: 100%;
    bottom: -1px;
    background-image: linear-gradient(to top, #86377b 20%, #27273c 80%);
}
.bgTop {
    z-index: 15;
    opacity: 0.75;
}
.bgMiddle {
    z-index: 10;
    opacity: 0.75;
}
.bgBottom {
    z-index: 5;
}
.wave {
    position: absolute;
    left: 0;
    width: 200%;
    height: 100%;
    background-repeat: repeat no-repeat;
    background-position: 0 bottom;
    transform-origin: center bottom;
}
.waveTop {
    background-size: 50% 100px;
}
.waveAnimation .waveTop {
  animation: move-wave 3s;
   -webkit-animation: move-wave 3s;
   -webkit-animation-delay: 1s;
   animation-delay: 1s;
}
.waveMiddle {
    background-size: 50% 120px;
}
.waveAnimation .waveMiddle {
    animation: move_wave 10s linear infinite;
}
.waveBottom {
    background-size: 50% 100px;
}
.waveAnimation .waveBottom {
    animation: move_wave 15s linear infinite;
}


 *{
    margin: 0;
    padding: 0;
    font-family:  sans-serif;
}

.container{
    padding-left: 19%;
    padding-top: 6%;
    padding-right: 10%;
    
}
.content{
    width: 40%;
    display: inline-block;
    margin-right: 5%;
    position: relative;
}
figure{
    overflow: hidden;
}

img{
    border-radius: 40px;
}

.image1{
    width: 100%;
}
.image2{
    /* width: 500px;
    height: 580px; */
    width: 100%;  
}

.img-overlay{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    color: #ffffff;
    border-radius: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.25s;
}
.img-overlay > * {
    transform: translateY(20px);
    transition: transform 0.25s;
}

.img-overlay:hover{
    opacity: 1;
}
.img-overlay:hover > *{
    transform: translateY(0);
}
.img-overlay-blur{
    backdrop-filter: blur(5px);
}
.img-overlay-solid{
    background: rgb(59, 143, 4);
}
img:hover{
    transform: scale(1.3);
}
.img-title{
    font-size: 2em;
    font-weight: bold;
}
.img-des{
    font-size: 15px;
    margin-top: 10px;
    margin-left: 2px;
    margin-right: 2px;
    align-items: center;
}

h3{
    position: absolute;
    padding-left: 20px;
    padding-bottom: 60px;
    color: rgba(0, 0, 0, 0.932);
}

a{
    text-decoration: none;
    color: rgb(255, 255, 255);
}
button{
    border-radius: 35px;
    width: 18%;
    height: 56px;
    background-color: rgb(10, 10, 10);
    text-decoration: none;
    font-size: 25px;
}
button:hover{
    border-radius: 35px;
    width: 20%;
    height: 60px;
}


</style>

	</head>
	<body>
	<div class="waveWrapper waveAnimation">
  <div class="waveWrapperInner bgTop">
  
  
    <div class="container">
	
	
        <!-- ********* FIRST IMAGE ******* -->
        <div class="content">
		
	    <!-- information of the user logged in -->
		<!-- welcome message for the logged in user -->
		<?php if (isset($_SESSION['username'])) : ?>
			
<p style="padding-right:10px; color: white; font-size:20px;">
				 You are logged in as : &nbsp;&nbsp;
				<strong>
					<?php echo $_SESSION['username']; ?>
				</strong>
				</p>
				<br><br>
			<?php endif ?>


            <a href="indian.php"><figure class="img1"><img src="assets/images/arijit.jpg" alt="Indian Music" class="image1"></figure>
            <div class="img-overlay img-overlay-blur">
            <div class="img-title">Indian Music</div>
                <p class="img-des">Listen to your favourite Indian Music here..</p>
            </div>
            </a>
            
        </div>
        <!-- ********* SECOND IMAGE ******* -->
        <div class="content">
            <a href="international.php"><figure class="img2"><img src="assets/images/avamax.jpg" alt="International Music" class="image2"></figure>
            <div class="img-overlay img-overlay-blur">
                <div class="img-title">International Music</div>
                <p class="img-des">Listen to your favourite International Music here..</p>
            </div>
            </a>
        </div> 

    </div>
    <br><br><br><br>
    <center>
        <button><a href="logout.php">Log Out</a></button>
    </center>
    <br><br>
	
  
    <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
  </div>
  <div class="waveWrapperInner bgMiddle">
    <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
  </div>
  <div class="waveWrapperInner bgBottom">
    <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
  </div>
</div>


	</body>
	</html>