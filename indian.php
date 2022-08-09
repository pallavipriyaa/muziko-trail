 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> INDIAN MUSIC | MUZIKO </title>
    <link rel="stylesheet" href="assets/css/indian.css">
</head>
<body>
	<div id="pic">
		<div id="header">
			<img id="img1" src="assets/images/logo1.png">

				<ul>
				<li><a href="musicpage.php">HOME</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
				</ul>
	</div>
	<center>
	<div class="carousel">
	<div class="slider">
		<div class="slides">
			
			<input type="radio" name="radio-btn" id="radio1">
			<input type="radio" name="radio-btn" id="radio2">
			<input type="radio" name="radio-btn" id="radio3">
			<input type="radio" name="radio-btn" id="radio4">			
			<input type="radio" name="radio-btn" id="radio5">
			<input type="radio" name="radio-btn" id="radio6">
			<input type="radio" name="radio-btn" id="radio7">
			<input type="radio" name="radio-btn" id="radio8">
				
				<div class="slide first">
					<img src="assets/images3/rap1.png">
				</div>
				<div class="slide">
					<img src="assets/images3/indie2.png">
				</div>
				<div class="slide">
					<img src="assets/images3/work3.png">
				</div>
				<div class="slide">
					<img src="assets/images3/top4.png">
				</div>
				<div class="slide">
					<img src="assets/images3/workout5.png">
				</div>
				<div class="slide">
					<img src="assets/images3/punjabi6.png">
				</div>
				<div class="slide">
					<img src="assets/images3/retro7.png">
				</div>
				<div class="slide">
					<img src="assets/images3/top8.png">
				</div>
			
			<div class="navigation-auto">
				<div class="auto-btn1"></div>
				<div class="auto-btn2"></div>
				<div class="auto-btn3"></div>
				<div class="auto-btn4"></div>
				<div class="auto-btn5"></div>
				<div class="auto-btn6"></div>
				<div class="auto-btn7"></div>
				<div class="auto-btn8"></div>
			</div>
		</div>
			<div class="navigation-manual">
				<label for="radio1" class="manual-btn"></label>
				<label for="radio2" class="manual-btn"></label>
				<label for="radio3" class="manual-btn"></label>
				<label for="radio4" class="manual-btn"></label>
				<label for="radio5" class="manual-btn"></label>
				<label for="radio6" class="manual-btn"></label>
				<label for="radio7" class="manual-btn"></label>
				<label for="radio8" class="manual-btn"></label>
			</div>
	</div>
	</div></center>
			<script type="text/javascript">
				var counter=1;
				setInterval(function(){
				document.getElementById('radio' + counter).checked=true;
				counter++;
				if(counter > 8){
				counter=1;
				}
				},5000);
			</script>
			<!--#######################		ARTIST SECTION		########################-->

	<div id="container">
	<h1>Artists Of The Month</h1>
	<div id="artist"><a href="arijit.php"><img id="img2" src="assets/images3/arijit.jpg"></a>
	<h2>Arijit Singh</h2></div>
	<div id="artist"><a href="neha.php"><img id="img2" src="assets/images3/neha.jpg"></a>
	 <h2>Neha Kakkar</h2></div>
	<div id="artist"><a href="stebin.php"><img id="img2" src="assets/images3/stebin.jpg"></a>
	<h2>Stebin Ben</h2></div>
	<div id="artist"><a href="tulsii.php"><img id="img2" src="assets/images3/tulsi.jpg"></a>
	 <h2>Tulsi Kumar</h2></div>
	</div>
					<!--#####################		PLAYLIST SECTION	########################-->

	<div id="horizontal_slider"><h1>Genres</h1>
	<div id="slider_content">
	<div id="content">
	<a href="#"><img id="img4" src="assets/images3/bollywood.png">
		<h3> Bollywood Music</h3></div>
	<div id="content"><a href="punjabi.php"><img id="img4" src="assets/images3/punjabipop.png">
		<h3> Punjabi Pop</h3></div>
	<div id="content"><a href="hiphop.php"><img id="img4" src="assets/images3/hiphop.png">
		<h3> Hip Hop</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/indianblues.png">
		<h3> Indian Blues</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/rock.png">
		<h3> Rock</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/indiepop.png">
		<h3> Indie Pop</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/classical.png">
		<h3> Classical</h3></div></div></div>
					<!--#####################		PICK YOUR MOOD	########################-->
	
	<div id="horizontal_slider"><h1>Pick Your Mood</h1>
	<div id="slider_content">
	<div id="content">
	<a href="#"><img id="img4" src="assets/images3/workout.png">
		<h3> Morning Mood</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/romantic.png">
		<h3> Romance</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/workaholic.png">
		<h3> Workaholic</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/wedding.png">
		<h3> Wedding</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/lofi.png">
		<h3> Lo-Fi</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/festival.png">
		<h3> Festival</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/retro.png">
		<h3> Retro</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/rap.png">
		<h3> Rap</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/vintage.png">
		<h3> Vintage</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/devotional.png">
		<h3> Devotional</h3></div></div></div>
					<!--#####################		TOP CHARTS	########################-->
		
	<div id="horizontal_slider"><h1>Top Charts</h1>
	<div id="slider_content">
	<div id="content"><a href="#"><img id="img4" src="assets/images3/1.png">
		<h3> TOP 100 <br> Muziko</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/2.png">
		<h3> TOP 20 <br> Romantic</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/3.png">
		<h3> TOP 50 <br> Weekly</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/4.png">
		<h3> TOP 10 <br> Ghazal</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/5.png">
		<h3> TOP 20 <br> Dance</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/6.png">
		<h3> TOP 10 <br> Hot Hits</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/7.png">
		<h3> TOP 20 <br> Punjabi</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/8.png">
		<h3> TOP 10 <br> Retro</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/9.png">
		<h3> TOP 10 <br> Trending</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/10.png">
		<h3> TOP 20 <br> Chartbusters</h3></div></div></div>
					<!--#####################		WEEKLY JUKEBOX	########################-->
		
	<div id="horizontal_slider"><h1>Weekly Jukebox</h1>
	<div id="slider_content">
	<div id="content">
	<a href="#"><img id="img4" src="assets/images3/monday.png">
		<h3> Monday</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/tuesday.png">
		<h3> Tuesday</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/wednesday.png">
		<h3> Wednesday</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/thursday.png">
		<h3> Thursday</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/friday.png">
		<h3> Friday</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/saturday.png">
		<h3> Saturday</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/sunday.png">
		<h3> Sunday</h3></div></div></div>
					<!--#####################		PODCASTS	########################-->
		
	<div id="horizontal_slider"><h1>PODCASTS</h1>
	<div id="slider_content">
	<div id="content">
	<a href="#"><img id="img4" src="assets/images3/bollywood.png">
		<h3> BOLLYWOOD MUSIC</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/punjabipop.png">
		<h3> PUNJABI POP</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/hiphop.png">
		<h3> HIP HOP</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/indianblues.png">
		<h3> INDIAN BLUES</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/rock.png">
		<h3> ROCK</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/indiepop.png">
		<h3> INDIE POP</h3></div>
	<div id="content"><a href="#"><img id="img4" src="assets/images3/classical.png">
		<h3> CLASSICAL</h3></div></div></div>
<!--########################## FOOTER SECTION ###########################-->
    <footer>
        <div class="footer">
            <div class="footer-logo">
                <img src="assets/images/logo1.png" alt="logo" class="logo">
            </div>
            <br>
            <div class="footer-links">
                <table>
                    <tr>
                        <th>COMPANY</th>
                        <th>COMMUNITIES</th>
                        <th>USEFUL LINKS</th>                   
                    </tr>
                    <tr>
                        <td>About</td>    
                        <td>For Artists</td>
                        <td>Support</td>
                    </tr>
                    <tr>
                        <td>Jobs</td>
                        <td>Developers</td>
                        <td>Web Player</td>
                    </tr>
                    <tr>
                        <td>For the Record</td>
                        <td>Advertising</td>
                        <td>Free Mobile App</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Investors</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Vendors</td>
                        <td></td>
                    </tr>
                </table>
    		</div>
		</div>
	</div>
</body>
</html>
