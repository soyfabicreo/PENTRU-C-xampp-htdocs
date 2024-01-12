<?php
include('connect.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/TRY FOR EXPERIENCE.CSS" />

    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,200,300,400,,500,600,700,800,900"
      rel="stylesheet"
    />
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    <style>
      body {
      margin: 0;
      overflow: hidden;
      height: 100vh;
      position: relative;
    }

    
    audio {
      display: none;
    }
    
    .gifFullScreen {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1; /* Asigură-te că acesta este în fața celeilalte imagini */
    }
    
    .gifSmall {
      width: 30%; /* Ajustează dimensiunea la nevoie */
      position: absolute;
      bottom: 10px; /* Ajustează poziția la nevoie */
      left: 50%; /* Centrare pe orizontală */
      transform: translateX(-50%);
      z-index: 2; /* Asigură-te că acesta este în fața celeilalte imagini */
    }
    
    h1 {
      text-align: top;
      color: white;
      font-size: 5rem;
      /* margin-top: 0; */
    }

    .titleContainer {
      position: absolute;
      top: 0;
      left: 25%;
      /* transform: translate(0, -50%); */
      text-align: top;
      justify-content: top;
      z-index: 2;
    }

    .audioPlayer {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      background: rgba(0, 0, 0, 0.5);
      text-align: center;
      padding: 10px;
    }

    .volumeControl {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      width: 200px;
      z-index: 3;
    }

    </style>
    <title>Formula 1 V2.0 &dash; Try for experience</title>
  </head>
  <body>
    
  
    
    <img class="gifFullScreen" src="../IMG/sunwaves.gif" alt="Full Screen GIF">
    
    <img class="gifSmall" src="../IMG/Nota 10.gif" alt="Small GIF">
    <div class="titleContainer">
    <h1>Duuh, merge. Ne pricepem.</h1>
  </div>

  <div id="volumeControl">
  <audio class="audioPlayer" autoplay volume="0.1">
    <!-- OFENBACH - KATCHY -->
    <source src="../IMG/videoplayback.m4a" type="audio/mp3">
    <label for="volumeRange">Adjust Volume:</label>
    <input type="range" id="volumeRange" min="0" max="1" step="0.01" value="0.5">
  </audio>
</div>

  <!-- <div id="volumeControl">
    <label for="volumeRange">Adjust Volume:</label>
    <input type="range" id="volumeRange" min="0" max="1" step="0.01" value="0.5">
  </div> -->
  </body>
</html>
