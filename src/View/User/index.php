<?php
$_SESSION['name']=$userInfos['name'];
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a class="navbar-brand" href="/piePHP/">MyCinema</a></li>
        <li><a href="/PiePHP/film/list">Films</a></li>
        <li><a href="#">Genres</a></li>
        <li><a href="#">Historique</a></li>
        <li><a href="/PiePHP/user/infos">Voir mon Profil</a></li>
        <li><a href="/PiePHP/user/modify">Modifier mon Profil</a></li>
      </ul>
      <form id="signin" action="/PiePHP/user/log" class="navbar-form navbar-right" role="form">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <?php if(isset($_SESSION['name'])){echo $_SESSION['name'];};?>
        </div>
        <button type="submit" class="btn btn-primary"> <?php if (isset($_SESSION['name'])){echo "Logout";} else {echo "Login";}?></button>
      </form>
    </div>
  </div>
</nav>
<div class="newaccount">
  <h3>Bienvenue <?php echo $_SESSION['name'];?> ! </h3>
</div>
<div class = "images">
<img id="img" src="..\webroot\assets\avatar.jpg"/>
<img id="img" src="..\webroot\assets\badtrip.jpg"/>
<img id="img" src="..\webroot\assets\chtis.jpg"/>
<img id="img" src="..\webroot\assets\gladiator.jpg"/>
<img id="img" src="..\webroot\assets\life.jpg"/>
<img id="img" src="..\webroot\assets\matrix.jpg"/>
<img id="img" src="..\webroot\assets\anneaux.jpg"/>
<img id="img" src="..\webroot\assets\avengers.jpg"/>
<img id="img" src="..\webroot\assets\intouchable.jpg"/>
<img id="img" src="..\webroot\assets\safari.jpg"/>
</div>
</body>
</html>
