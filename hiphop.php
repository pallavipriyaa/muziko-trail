<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hip Hop Playlist</title>
	<link rel="stylesheet" href="assets/css/playlist_player.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image:url('assets/images3/hiphopback.png'); background-repeat:no-repeat; background-size:cover;">
<div style="padding-left:1000px;;"><a href="indian.php" style="color:white; text-decoration:none;"><h3>Home</h3></a></div>

<div class="main">

    <!-- top section -->
    <div class="top_section">
  		<h5>Hip-Hop Playlist&nbsp;&nbsp;<i class="fa fa-headphones" aria-hidden="true"></i></h5>
  	</div>


  <div class="tracks">
    
    <!-- list of song will add here from 'song_list.js' file -->

    <!-- small music player -->
    <div class="small_music_player">
    	<div class="s_player_img">
    		<div class="playing_img">
    			<img src="images/1.jpg" alt="">
    		</div>
    	
           <!-- wave animation part -->
    	   <div class="wave_animation">
			 <li></li>
			 <li></li>
			 <li></li>
			 <li></li>
			 <li></li>
	       </div>
	    </div>

    	<div class="song_detail">
    		<p id="song_name">Kar Gayi Chull</p>
    		<p id="artist_name">Badshah, Neha Kakkar</p>
    	</div>
    	<i class="fa fa-chevron-up" aria-hidden="true" id="up_player"></i>
    </div>


    <!--  popup music player part -->
    <div class="popup_music_player">
         <div class="top">
    	    <p>Now Playing</p>
    	    <i class="fa fa-chevron-down" aria-hidden="true" id="down_player"></i>
        </div>
        
       <div class="song_img">
          <img src="1.jpg" alt="">
       </div>

       <div class="song_description">
          <h3 id="current_track_name">Back to you is a song by Selena Gomez</h3>
          <p id="current_singer_name">Selena Gomez</p>
       </div>

       <div class="controlls">
    	 <div class="progress_part">
    		<input type="range" min="0" max="100" value="0" id="slider" onchange="change_duration()">
    		<div class="durations">
    			<p id="current_duration">0:00</p>
    		    <p id="total_duration">0:00</p>
    		</div>

       </div>
    		
        <!-- controlls btn's -->
        <div class="controlls_btns">
			<button id="backward_btn"><i class="fa fa-step-backward" aria-hidden="true"></i></button>
			<button id="play_pause_btn"><i class="fa fa-play" aria-hidden="true"></i></button>
			<button id="forward_btn"><i class="fa fa-step-forward" aria-hidden="true"></i></button>
        </div>
      </div>
    </div>
</div>


<!-- song list file -->
<script src="playlistsong_list1.js"></script>
<!-- javascript -->
<script src="playlist_main1.js"></script>
	
</body>
</html>