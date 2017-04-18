<!DOCTYPE html>
<html lang="en">
<head>
  <title>Videos | TheROTG.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/static/bootstrap.css">
  <link rel="stylesheet" href="../style.css">

  <script src="/static/jquery.js"></script>
  <script src="/static/bootstrap.js"></script>
  <style>
  * {
    margin: 0;
    padding: 0;
  }
  #header {
    height: 100%:
  }

  </style>
  <script>
    $.get('https://www.nick-e.co.uk/tools/api/youtubechannel?id=UCuX4KZBMpQLToSwJWy-jCBw', function(data) {
      window.onload = function() {
      document.getElementById('latestvideotitle').innerHTML = data.newvid.title;
      document.getElementById('latestvideoframe').src = data.newvid.embedurl;
      document.getElementById('subs').innerHTML = data.channel.stats.subs;
      document.getElementById('views').innerHTML = data.channel.stats.views;
      document.getElementById('videos').innerHTML = data.channel.stats.videos;
      }
    });
  </script>
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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header navbar">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.html">TheROTG.com</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/#about">About</a></li>
        <li><a href="/#plugins">Projects</a></li>
        <li><a href="/#gig">Hire Me</a></li>
        <li><a href="/#contact">Contact</a></li>
        <li><a href="/calendar/">Calendar</a></li>
        <li><a href="#">Learn To Code</a></li>
        <li><a href="../games/index.html">Fun Games</a></li>

      </ul>

    </div>
  </div>
</nav>
<div class="jumbotron" id="header">
  <div class="container text-center   ">
      <center><h3>Currently at <span id='subs'>Loading..</span> subscribers, <span id='views'>Loading..</span> views and <span id='videos'>Loading..</span> videos</h3></center>

    <h1>Latest</h1>
    <p><small id='latestvideotitle'>Loading..</small></p>
    <div class="embed-responsive embed-responsive-16by9">
      <iframe id='latestvideoframe' src="" width="100%" class="embed-responsive-item"></iframe>
    </div>
    <h1>Previous Videos</h1>
    <p><small>LEARN TO CODE BUKKIT/SPIGOT!</small></p>
    <div class="embed-responsive embed-responsive-16by9">
      <iframe src="https://www.youtube.com/embed/?listType=user_uploads&list=therealmofthegeek&showinfo=1" width="100%" class="embed-responsive-item"></iframe>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>(c) Kenton Vizdos 2017</p>
</footer>

</body>
</html>
