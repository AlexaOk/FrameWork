<?php
session_unset();
session_destroy();
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
        <li><a href="/piePHP/film/list">Films</a></li>
        <li><a href="#">Genres</a></li>
        <li><a href="#">Historique</a></li>
      </ul>
      <form id="signin" action="/PiePHP/user/log" method="post" class="navbar-form navbar-right" role="form">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address">
        </div>

        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
      </form>

    </div>
  </div>
</nav>
<p>Votre compte a été supprimé !</p>
