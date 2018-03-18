<nav class="navbar navbar-default">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/PiePHP/">MyCinema</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
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

<div class="main">
  <div class="one">
    <div class="register">
      <h3>Create your account</h3>
      <form id="reg-form" action="/PiePHP/user/register" method="post">
        <div>
          <label for="name">Name</label>
          <input type="text" id="name" name="name" spellcheck="false" placeholder="ex : Martin Dupont"/>
        </div>
        <div>
          <label for="email">Email</label>
          <input type="text" id="email" name="email" spellcheck="false" placeholder="ex : martindupont@email.com"/>
        </div>
        <div>
          <label for="password">Password</label>
          <input type="password" name="password" id="password" />
        </div>
        <!-- Button -->
        <div class="control-group">
          <label class="control-label" for="singlebutton"></label>
          <div class="controls">
            <button id="singlebutton" class="btn btn-success">Create acount</button>
          </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>
