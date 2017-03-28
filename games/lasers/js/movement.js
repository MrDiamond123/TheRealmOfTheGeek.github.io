var speed = 10;
var move = false;

var player = document.getElementById('player-container');
var mouseDown = 0;



document.body.onmousedown = function() {
  mouseDown = 1;
  console.log(mouseDown);

}
document.body.onmouseup = function() {
  mouseDown = 0;
  console.log(mouseDown);

}

function mouseOut() {
  mouseDown = 0;
  console.log(mouseDown);
}

function mouseEnter() {
  mouseDown = 0;
}

window.onload = function() {

  document.getElementById('start-btn').onclick = startGame;
  document.getElementById('end-btn').onclick = died;


  var url_loc = window.location + '';
  var ifdead = url_loc.split("?");

  if(ifdead[1] == "died") {
    startGame();
  }
  
    setupLasers();



}

var gameMech;

function startGame() {
  document.getElementById('start-window').style.display = "none";
  document.getElementById('end-window').style.display = "none";

  startLasers();
  gameMech = setInterval(function(){
      if($('#player-container').offset().top > 15) {
          if(mouseDown == 1) {
              speed = speed - 2;
              player.style.top = speed;
          } else {
            if(($("#player-container").offset().top) > $('#game-container').height() - $("#player-container").height()) {
              if(mouseDown == 1) {
                  speed = speed - 0;
                  player.style.top = speed;
              }
            } else {
                speed = speed + 2;
                player.style.top = speed;
            }
          }

      } else {
        if(mouseDown == false) {
            speed = speed + 2;
            player.style.top = speed;
        }
      }

  }, 5);


}

function died() {
  var url_loc = window.location + '';
  var ifdead = url_loc.split("?");
  if(ifdead.length > 1) {
    window.location = window.location;
  } else {
    window.location = window.location + "?died";
  }
}
var gameOver = 0;
function endGame() {
  var hs = localStorage.getItem("highscore");
  document.getElementById('hs_death').innerHTML = "Your highscore is " + hs;

  localStorage.setItem("newhighscore", score);
  var newhs = localStorage.getItem("newhighscore");

  document.getElementById('livescore').innerHTML = score;

  if(score > hs) {
    document.getElementById('hs_death').innerHTML = "Your <strong>new</strong> highscore is " + score;
    localStorage.setItem("highscore", score);
  }

  gameOver = 1;
  clearInterval(gameMech);
  clearInterval(laserpickerMech);
  document.getElementById('end-window').style.display = "inline";
  var tweet = document.getElementById('tweetr');
  tweet.href = "https://twitter.com/intent/tweet?text=I just did great in the %23LasersGame%21 I dodged " + score + " lasers%21%21 try your skills and tweet your score%21 lasers.therotg.com";
}
