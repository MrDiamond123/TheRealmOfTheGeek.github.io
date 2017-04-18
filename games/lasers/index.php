<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lasers - An Original Game By Kenton Vizdos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link rel="stylesheet" media="screen and (min-device-width: 1300px)" type="text/css" href="css/large.css">
    <link rel="stylesheet" media="screen and (max-device-width: 1299px)" type="text/css" href="css/1200.css">

    <link rel="stylesheet" media="screen and (max-device-width: 450px)" type="text/css" href="css/mobile.css">
    <script>
      var sentscore = false;
     function sendscore(s, t) {
       if (!sentscore) {
         $.get('http://jslasers.simpleshare.online/score.html?score=' + s + '&time=' + t, function(data) {});
       }
       sentscore = true;
     }
     function updatesubs() {
        $.get('https://www.nick-e.co.uk/tools/api/youtubechannel?source=lasersgameajax&id=UCuX4KZBMpQLToSwJWy-jCBw', function(data) {
          var subs = data.channel.stats.subs;
          console.log('Kento has ' + subs + ' subs!');
          document.getElementById('ksubs').innerHTML = "(" + data.channel.stats.subs + ")";
        });
      }
      setTimeout(updatesubs, 1000);
      setInterval(updatesubs, 30000);
    </script>
    <style >

    </style>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47286500-3', 'auto');
  ga('send', 'pageview');

</script>
  </head>

  <body>
    <div id="game-container" onmouseleave="mouseOut()">
      <div id="player-container">
        <div class="player"></div>
      </div>

      <div class="laser-shooter">
        <div id="laserbeam" class="laser">
        </div>
        <div id="prelaserbeam" class="prelaser">
        </div>
      </div>

      <div class="laser-shooter">
        <div id="laserbeam" class="laser">
        </div>
        <div id="prelaserbeam" class="prelaser">
        </div>
      </div>

      <div class="laser-shooter">
        <div id="laserbeam" class="laser">
        </div>
        <div id="prelaserbeam" class="prelaser">
        </div>
      </div>

      <div class="laser-shooter">
        <div id="laserbeam" class="laser">
        </div>
        <div id="prelaserbeam" class="prelaser">
        </div>
      </div>


      <div class="laser-shooter">
        <div id="laserbeam" class="laser">
        </div>
        <div id="prelaserbeam" class="prelaser">
        </div>
      </div>

      <p class="scorekeeper">Your current score is: <span id="livescore-alive">0</span></p>

    </div>

    <div class="overlay start" id="start-window">
      <h3 class="overlay-title">Lasers! - A full JS game.</h3>
      <p class="overlay-info">Click to go up, your player will automagically go down. <br>The orange lasers show where the red laser will be, you can hit the orange lasers, but not the red ones.<br><strong>PLEASE REPORT ANY ISSUES TO GITHUB</strong><br> Click 'start' to start.</p>

      <button class="overlay-btn" id="start-btn">Start</button>
    </div>

    <div class="overlay end" id="end-window">
      <h3 class="overlay-title">YOU DIED!</h3>
      <p class="overlay-info">You got a score of <span id="livescore">0</span>.<br><span id="hs_death">Your highscore is 0</span></p>
      <button class="overlay-btn" id="end-btn">Replay</button>
      <a class="twitter-share-button" href="#" data-size="large" id="tweetr"><button class="overlay-btn" id="tweet-btn" target="_blank"> Tweet your score</button></a>
      <p>Like the game? Help me create more by supporting me.</p>
      <a class="support-me-button" href="http://s.therotg.com/patreon?source=lasergame" data-size="large" id="patreon" target="_blank"><button class="overlay-btn" id="patreon-btn">Patreon</button></a>
      
  </div>
  <div id="loadjs"></div>
    <iframe src="tweets" id="tweets" style="border: none; position: fixed; top: 0; right: 0; width: 20%; height: 100%;">            
          
    </iframe>
    <script src="js/highscore.js"></script>
    <script src="js/movement.js"></script>
    <script src="js/laserpicker.js"></script>
    <script src="js/deathtrigger.js"></script>
    <script src="js/optimize.js"></script>
  </body>


      <div id="footer">
        <a target="_blank" href="http://s.therotg.com/games?source=lasergame">More Games By Me</a>
        <a target="_blank" href="http://s.therotg.com/twitter?source=lasergame">Follow Me (@kvizdos)!</a>
        <a target="_blank" href="http://s.therotg.com/youtube?source=lasergame">Sub to Kento on Youtube <span id='ksubs'></span> !</a>
        <a target="_blank" href="http://s.therotg.com/webgithub?source=lasergame">Hack This Game (e.g github)</a>
      </div>
</html>
