let previous = document.querySelector('#pre');
let play = document.querySelector('#play');
let next = document.querySelector('#next');
let title = document.querySelector('#title');
let recent_volume= document.querySelector('#volume');
let volume_show = document.querySelector('#volume_show');
let slider = document.querySelector('#duration_slider');
let show_duration = document.querySelector('#show_duration');
let track_image = document.querySelector('#track_image');
let present = document.querySelector('#present');
let total = document.querySelector('#total');
let artist = document.querySelector('#artist');





//audio element
let track = document.createElement('audio');


//songs list
let All_song = [
  
   {
     name: "Back To You",
     path: "assets/playlist_music/back.mp3",
     img: "assets/images/selena1.jpg",
     singer: "Selena Gomez"
   },
   {
     name: "Taki Taki",
    path: "assets/playlist_music/taki.mp3",
     img: "assets/images/selena2.jpg",
     singer: "Selena Gomez, Cardi B, DJ Snake, Ozuna"
   },
   {
     name: "I Can't Get Enough",
     path: "assets/playlist_music/enough.mp3",
     img: "assets/images/selena3.jpg",
     singer: "Selena Gomez"
   },
   {
     name: "Same Old Love",
     path: "assets/playlist_music/old.mp3",
     img: "assets/images/selena4.jpg",
     singer: "Selena Gomez"
   },
   {
     name: "Kill Em With Kindness",
     path: "assets/playlist_music/kill.mp3",
     img: "assets/images/selena5.jpg",
     singer: "Selena Gomez"
   },
    {
     name: "Wolves",
     path: "assets/playlist_music/wolf.mp3",
     img: "assets/images/selena6.jpg",
     singer: "Selna Gomez , Marshmellow"
   },
    
];


//functions


// function load the track
function load_track(index_no){
	clearInterval(timer);
	reset_slider();

	track.src = All_song[index_no].path;
	title.innerHTML = All_song[index_no].name;	
	track_image.src = All_song[index_no].img;
    artist.innerHTML = All_song[index_no].singer;
    track.load();

	timer = setInterval(range_slider ,1000);
	total.innerHTML = All_song.length;
	present.innerHTML = index_no + 1;
}

load_track(index_no);


//mute sound function
function mute_sound(){
	track.volume = 0;
	volume.value = 0;
	volume_show.innerHTML = 0;
}


// checking.. the song is playing or not
 function justplay(){
 	if(Playing_song==false){
 		playsong();

 	}else{
 		pausesong();
 	}
 }


// reset song slider
 function reset_slider(){
 	slider.value = 0;
 }

// play song
function playsong(){
  track.play();
  Playing_song = true;
  play.innerHTML = '<i class="fa fa-pause" aria-hidden="true"></i>';
}

//pause song
function pausesong(){
	track.pause();
	Playing_song = false;
	play.innerHTML = '<i class="fa fa-play" aria-hidden="true"></i>';
}


// next song
function next_song(){
	if(index_no < All_song.length - 1){
		index_no += 1;
		load_track(index_no);
		playsong();
	}else{
		index_no = 0;
		load_track(index_no);
		playsong();

	}
}


// previous song
function previous_song(){
	if(index_no > 0){
		index_no -= 1;
		load_track(index_no);
		playsong();

	}else{
		index_no = All_song.length;
		load_track(index_no);
		playsong();
	}
}


// change volume
function volume_change(){
	volume_show.innerHTML = recent_volume.value;
	track.volume = recent_volume.value / 100;
}

// change slider position 
function change_duration(){
	slider_position = track.duration * (slider.value / 100);
	track.currentTime = slider_position;
}


