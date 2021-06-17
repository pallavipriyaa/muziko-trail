//song list
let All_song = [
   {
     name: "Boy With Luv",
     path: "assets/kpop/kpop1.mp3",
     img: "assets/kpop/kpop1.jpg",
     singer: "BTS, Halsey"
   },
   {  name: "Kill This Love",
     path: "assets/kpop/kpop2.mp3",
     img: "assets/kpop/kpop2.jpg",
     singer: "Blackpink"
   },
   {
     name: "Fake Love",
     path: "assets/kpop/kpop3.mp3",
     img: "assets/kpop/kpop3.jpg",
     singer: "BTS"
   },
   {
      name: "Wannabe",
     path: "assets/kpop/kpop4.mp3",
     img: "assets/kpop/kpop4.jpg",
     singer: "ITZY"
   },
   {
     name: "LA DI DA",
     path: "assets/kpop/kpop5.mp3",
     img: "assets/kpop/kpop5.jpg",
     singer: "Everglow"
   },
   {
    name: "Dynamite",
     path: "assets/kpop/kpop6.mp3",
     img: "assets/kpop/kpop6.jpg",
     singer: "BTS"
   },
    {
    name: "How You Like That",
     path: "assets/kpop/kpop7.mp3",
     img: "assets/kpop/kpop7.jpg",
     singer: "Blackpink"
   },
    {
  name: "Black Swan",
     path: "assets/kpop/kpop8.mp3",
     img: "assets/kpop/kpop8.jpg",
     singer: "BTS"
   },
    {
  name: "I Can't Stop Me",
     path: "assets/kpop/kpop9.mp3",
     img: "assets/kpop/kpop9.jpg",
     singer: "TWICE"
   },
    {
    name: "DNA",
     path: "assets/kpop/kpop10.mp3",
     img: "assets/kpop/kpop10.jpg",
     singer: "BTS"
   }
];



/*tracks*/
let tracks = document.querySelector('.tracks');

//creating a list
for (let i = 0; i < All_song.length; i++) {

  let Html = ` <div class="song">
      <div class="img">
      <img src="${All_song[i].img}"/>
      </div>
      <div class="more">
      <audio src="${All_song[i].path}" id="music"></audio>
      <div class="song_info">
         <p id="title">${All_song[i].name}</p>
         <p>${All_song[i].singer}</p>
      </div>
      <button id="play_btn"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
      </div>
    </div>`;

  tracks.insertAdjacentHTML("beforeend", Html);
};

