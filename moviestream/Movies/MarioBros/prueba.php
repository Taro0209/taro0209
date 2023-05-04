<!DOCTYPE html>
<html>
  <head>
    <title>Reproductor de video</title>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.0/plyr.css" />
    <style>
      body {
        background-color: black;
        color: red;
      }
    </style>
  </head>
  <body>
    <h1>TaroFlix</h1>
    <h2>Mario Bros</h2>
    <div id="player-container"></div>
    <progress id="progress-bar" max="1"></progress>
    <script src="https://cdn.plyr.io/3.7.0/plyr.js"></script>
    <script>
      const streamUrl = "https://guccihide.com/w/p41qplbdqn3l";
      const playerContainer = document.getElementById("player-container");

      // Create the StreamHide player
      const player = new StreamHidePlayer(playerContainer, {
        url: streamUrl,
        poster: "", // Add a poster image if you want
        autoplay: false,
        controls: true,
        playbackRate: {
          enabled: true,
          initial: 1,
          max: 2,
          min: 0.5,
        },
        playback: {
          autoQuality: true,
        },
      });

      const progressBar = document.querySelector("#progress-bar");

      // Update the progress bar as the video loads
      player.on("progress", (event) => {
        const duration = event.duration;
        const buffered = event.buffered;

        if (duration > 0) {
          progressBar.value = buffered / duration;
        }
      });
    </script>
  </body>
</html>
