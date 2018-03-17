<?php
session_unset();
session_destroy();
//var_dump($_SESSION);
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
      <a class="navbar-brand" href="#">MyCinema</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/piePHP/film/list">Films</a></li>
        <li><a href="#">Genres</a></li>
        <li><a href="#">Historique</a></li>
      </ul>
      <form id="signin" action="/PiePHP/user/log" method="POST" class="navbar-form navbar-right" role="form">
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
<div class="container" style="margin-top:30px">
  <div class="col-md-12">
    <div class="modal-dialog" style="margin-bottom:0">
      <div class="modal-content">
        <div class="panel-heading">
          <h3 class="panel-title">Sign In</h3>
        </div>
        <div class="panel-body">
          <form action="/PiePHP/user/log" method = "POST" role="form">
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" value="">
              </div>
              <div class="checkbox">
              </div>
              <!-- Change this to a button or input when using this as a form -->
              <div class="control-group">
                <label class="control-label" for="singlebutton"></label>
                <div class="controls">
                  <button id="singlebutton" class="btn btn-success">Login</button>
                </div>
              </div>
            </fieldset>
          </form>
          <form action="/PiePHP/">
            <button id="singlebutton" class="btn btn-success">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
