
<html>
    <head>
    <title>SNAKE | TheROTG.com</title>
    <link rel="stylesheet" id="style" type="text/css" href="./css/dark-snake.css">
	<link rel="icon" href="https://therotg.com/static/logo.jpg" sizes="16x16" type="image/jpeg">
		<link rel="shortcut icon" href="https://therotg.com/static/logo.jpg" sizes="16x16" type="image/jpeg">

    </head><body style="background-color: black;"><div id="mode-wrapper">
      Select which mode you would like to play in.<br>
      <button id="Easy">Easy</button><br>
      <button id="Medium">Medium</button><br>
      <button id="Difficult">Difficult</button>
    </div>
<script>
function getTheme () {
    function changeTheme (Theme) {
        document.getElementById('style').setAttribute('href', Theme);
    }
    var index = document.getElementById("select").selectedIndex;
    switch (index) {
        case 0:
          changeTheme('css/dark-snake.css');
          break;
          case 1: changeTheme('css/main-snake.css');
    }
}

</script>


    <div id="game-area" tabindex="0" class="snake-game-container" style="left: 0px; top: 0px; width: 599px; height: 666px;">
    <div class="snake-pause-screen" style="z-index: 10000;"><div style="padding:10px;">[Paused]<p>Press [space] to unpause.</p></div></div><div id="playingField" class="snake-playing-field" style="left: 20px; top: 20px; width: 540px; height: 600px;"></div><div class="snake-panel-component" style="top: 628px; width: 450px; left: 75px; display: none;"><a href="http://kentonvizdos.com/games" class="snake-link">more games made by me </a></div><div class="snake-panel-component" style="top: 628px; left: 479px;">Length: 1</div><div id="sbWelcome0" class="snake-welcome-dialog" style="z-index: 1000;"><div>A fun little snake game :)<p></p>Pretty self explainatory, use the arrow keys/wasd to move, space pauses.. Have fun :P <p></p></div><button>Play Game</button></div><div id="sbTryAgain0" class="snake-try-again-dialog"><div>A fun little snake game :)<p></p>Ya dun killed urself.<p></p></div><button>Play Again?</button></div><div class="snake-snakebody-block snake-snakebody-alive" style="left: 40px; top: 40px; width: 20px; height: 20px;"></div><div class="snake-snakebody-block" style="left: -1000px; top: -1000px; width: 20px; height: 20px;"></div><div class="snake-snakebody-block" style="left: -1000px; top: -1000px; width: 20px; height: 20px;"></div><div class="snake-snakebody-block" style="left: -1000px; top: -1000px; width: 20px; height: 20px;"></div><div class="snake-snakebody-block" style="left: -1000px; top: -1000px; width: 20px; height: 20px;"></div><div class="snake-snakebody-block" style="left: -1000px; top: -1000px; width: 20px; height: 20px;"></div><div class="snake-snakebody-block" style="left: -1000px; top: -1000px; width: 20px; height: 20px;"></div><div class="snake-snakebody-block" style="left: -1000px; top: -1000px; width: 20px; height: 20px;"></div><div class="snake-snakebody-block" style="left: -1000px; top: -1000px; width: 20px; height: 20px;"></div><div class="snake-snakebody-block" style="left: -1000px; top: -1000px; width: 20px; height: 20px;"></div><div class="snake-snakebody-block" style="left: -1000px; top: -1000px; width: 20px; height: 20px;"></div><div class="snake-snakebody-block" style="left: -1000px; top: -1000px; width: 20px; height: 20px;"></div><div class="snake-snakebody-block" style="left: -1000px; top: -1000px; width: 20px; height: 20px;"></div><div class="snake-snakebody-block" style="left: -1000px; top: -1000px; width: 20px; height: 20px;"></div><div class="snake-snakebody-block" style="left: -1000px; top: -1000px; width: 20px; height: 20px;"></div><div class="snake-snakebody-block" style="left: -1000px; top: -1000px; width: 20px; height: 20px;"></div><div class="snake-snakebody-block" style="left: -1000px; top: -1000px; width: 20px; height: 20px;"></div><div id="snake-food-0" class="snake-food-block" style="width: 20px; height: 20px; left: 200px; top: 300px;"></div></div>
        <script type="text/javascript" src="./js/snake.js"></script>

	<script type="text/javascript">
    var mySnakeBoard = new SNAKE.Board(  {
                                            boardContainer: "game-area",
                                            fullScreen: true
                                        });
    </script>



</body></html>
