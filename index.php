<!DOCTYPE html>
<?php

error_reporting(0);
$q = $_GET["q"];
error_reporting(E_ALL);

if (empty($q)){
  $q = "mainpage";
}

?>
<html lang="de">

<head>
  <title>tim.krals.ch</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery.min.js"></script>
  <script src="http://kingsoft.dyndns-home.com:19138/JSCAPP/main.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
    .selected {
      background-color: rgb(61, 61, 61);
    }

    .dropdown-menu li a {
      color: white;
    }

    .dropdown-menu li a:hover {
      background-color: rgb(100, 100, 100);
      color: white;
    }
  </style>
</head>

<body style="background-color: rgb(30, 30, 30); width: 100%;">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid" id="myNavbar">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand">tim.krals.ch</a>
        <!-- <a class="navbar-brand" style="cursor: pointer;" data-toggle="collapse" data-target="#nav"><i class="glyphicon glyphicon-menu-hamburger"></i></a> -->
        <a class="navbar-brand" data-toggle="tab" href="#secret"> </a>
      </div>
      <div class="collapse navbar-collapse" id="navbar1">
        <ul class="nav navbar-nav">
          <li class="<?php if($q == " mainpage") echo "active" ; ?>">
            <a data-toggle="tab" href="#mainpage">Hauptseite</a>
          </li>
          <li class="<?php if($q == " gaming") echo "active" ; ?>">
            <a data-toggle="tab" href="#gaming">Gaming</a>
          </li>
          <li class="<?php if($q == " posts") echo "active" ; ?>">
            <a data-toggle="tab" href="#posts">RSS</a>
          </li>
          <li class="<?php if($q == " docs") echo "active" ; ?>">
            <a data-toggle="tab" href="#docs">Dokumentation</a>
          </li>
          <li class="<?php if($q == " discord") echo "active" ; ?>">
            <a data-toggle="tab" href="#discord">Discord</a>
          </li>

          <!-- <li><a data-toggle="tab" href="#devlog">DevLog</a></li>
            <li><a data-toggle="tab" href="#randomchat">RandomChat</a></li> -->

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Github <span class="caret"></span></a>
            <ul class="dropdown-menu" style="background-color: rgb(30, 30, 30);">
              <li>
                <a data-toggle="tab" href="#githubprojects" target="_blank">Projekte</a>
              </li>
              <li>
                <a href="https://github.com/TimKral5" class="glyphicon glyphicon-user" target="_blank">TimKral5</a>
              </li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form" action="">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="deaktiviert">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
        </form>
      </div>
    </div>
  </nav>

  <br><br><br><br>

  <div class="tab-content">
    <div id="secret" class="tab-pane">
      <h5 style="color: deeppink; text-align: center;">
        01011001-01100001-01101110-01101001-01101110-01100001--01010011-01100011-01101000-01101101-01101001-01100100
      </h5>
    </div>
  </div>
  <div class="container-fluid text-center">
    <div class="alert alert-warning col-sm-push-2 col-sm-8 col-xs-12 alert-dismissible fade in">
      <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
      Webseite ist noch im Aufbau!
    </div>
  </div>
  <div class="tab-content">

    <div id="mainpage" class="tab-pane fade in container <?php if($q == " mainpage") echo "active" ; ?>">
      <h1 style="text-align: center; color: grey;">Willkommen auf tim.krals.ch!</h1>
      <h1 style="text-align: center; color: grey;">&#2192;</h1>
    </div>

    <div id="gaming" class="tab-pane fade container <?php if($q == " gaming") echo "active in" ; ?>">
      <h1 style="text-align: center; color: grey;">Inhalte folgen...</h1>
    </div>

    <div id="discord" class="tab-pane fade container <?php if($q == " discord") echo "active in" ; ?>">
      <h1 style="text-align: center; color: grey;">Discord</h1>
      <br><br>
      <h2 style="text-align: center; color:grey;">The Gamers</h2>
      <h4 style="text-align: center; color: gray;">Einladungslink: <a target="_blank"
          href="https://discord.gg/xy4MexSjYG">https://discord.gg/xy4MexSjYG</a></h4>
      <iframe src="https://discord.com/widget?id=762412509469999104&theme=dark"
        class="col-sm-push-1 col-xs-12 col-sm-10" height="500" allowtransparency="true" frameborder="0"
        sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
    </div>

    <div id="githubprojects" class="tab-pane fade container <?php if($q == " githubprojects") echo "active in" ; ?>">
      <h1 style="text-align: center; color: grey;">Github Projekte</h1>
      <br><br>
      <h2 style="text-align: center; color:grey;">UtilityLib</h2>
      <h4 style="text-align: center; color: gray;">Link: <a target="_blank"
          href="https://github.com/TimKral5/UtilityLib">https://github.com/TimKral5/UtilityLib</a></h4>
      <h2 style="text-align: center; color:grey;">tim.krals.ch</h2>
      <h4 style="text-align: center; color: gray;">Link: <a target="_blank"
          href="https://github.com/TimKral5/tim.krals.ch">https://github.com/TimKral5/tim.krals.ch</a></h4>
    </div>

    <div id="posts" class="tab-pane fade container <?php if($q == " posts") echo "active in" ; ?>">
      <h1 style="text-align: center; color: grey;">RSS-Feed</h1>
      <h2 style="text-align: center; color: grey;">
        <a
          href="http://kingsoft.dyndns-home.com:19138/RSS/rss.php">http://kingsoft.dyndns-home.com:19138/RSS/rss.php</a>
      </h2>
    </div>

    <div id="docs" class="tab-pane fade container <?php if($q == " docs") echo "active in" ; ?>">
      <h1 style="text-align: center; color: grey;">Dokumentation</h1>
      <br><br>
      <div class="panel panel-primary">
        <div class="panel-heading">Einrichtung der Programmierumgebung</div>
        <div class="panel-body">
          <pre>F??r Webdevelopment eignen sich die Entwicklungsumgebungen Visual Studio Code und Atom. <br>Links: <a target="_blank" href="https://code.visualstudio.com/">https://code.visualstudio.com/</a>, <a target="_blank" href="https://atom.io/">https://atom.io/</a><br><br>Will man nur mit HTML, CSS und Javascript arbeiten, muss man nichts weiteres installieren. <br>Will man jedoch auch mit PHP arbeiten, so muss man auch noch XAMPP oder zumindest den Apache Webserver <br>oder aber eine Alternative installieren, welche mit PHP arbeiten kann.<br><br>Hier ist der Link zu einer eigens entwickelten visual Studio Code Erweiterung: <a target="_blank" href="https://marketplace.visualstudio.com/items?itemName=TimKral.tksnippets">https://marketplace.visualstudio.com/items?itemName=TimKral.tksnippets</a><br>Diese Erweiterung vereinfacht das Arbeiten mit der bootstrap Library indem </pre>
        </div>
      </div>
      <div class="panel panel-primary">
        <div class="panel-heading">Weitere Links</div>
        <div class="panel-body">
          <pre>Webdevelopment Tutorials (The Morpheus Tutorials): <a target="_blank" href="https://www.youtube.com/c/TheMorpheus407/playlists?view=50&sort=dd&shelf_id=5">https://www.youtube.com/c/TheMorpheus407/playlists?view=50&sort=dd&shelf_id=5</a><br>W3Schools: <a href="https://www.w3schools.com/">https://www.w3schools.com/</a></pre>
        </div>
      </div>
      <div class="panel panel-primary">
        <div class="panel-heading">Kingsoft Package Manager</div>
        <div class="panel-body">
          <pre><a href="" style="text-align: center;">download</a></pre>
        </div>
      </div>
    </div>

    <div id="index" class="tab-pane fade container <?php if($q == " index") echo "active in" ; ?>">
      <h1 style="text-align: center; color: grey;">Dokumentation</h1>
      <h2 style="text-align: center; color: grey;">Variablen:</h2>
      <h3 style="text-align: center; color: grey;">q: page to show [ "mainpage", "gaming", "discord", "githubprojects",
        "posts", "docs", "index" ]</h3>
    </div>

  </div>

  <br><br><br><br><br><br>

  <nav class="navbar navbar-inverse navbar-fixed-bottom">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"></a>
      </div>
      <ul class="nav navbar-nav">
      </ul>
    </div>
  </nav>

</body>

</html>