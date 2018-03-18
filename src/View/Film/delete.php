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
      <form id="signin" action="/PiePHP/user/logout" class="navbar-form navbar-right" role="form">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <?php if(isset($_SESSION['name'])){echo $_SESSION['name'];};?>
        </div>
        <button type="submit" class="btn btn-primary">Logout</button>
      </form>
    </div>
  </div>
</nav>


<p>Votre Film a été supprimé !</p>
</body>
</html>
