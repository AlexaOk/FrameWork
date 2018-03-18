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
      </ul>
      <form id="signin" action="/PiePHP/user/logout" class="navbar-form navbar-right" role="form">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <?php if(isset($_SESSION['name'])){echo $_SESSION['name'];};?>
        </div>
        <button type="submit" class="btn btn-primary"> <?php if (isset($_SESSION['name'])){echo "Logout";} else {echo "Login";}?></button>
      </form>
    </div>
  </div>
</nav>

<div class="main">
  <div class="one">
    <div class="register">
      <h3>Modifiez vos informatons personnelles</h3>
      <form id="reg-form" action="/PiePHP/user/modifySuccess" method="post">
        <div>
          <label for="name">Name</label>
          <input type="text" id="name" name="name" spellcheck="false" placeholder="ex : Martin Dupont"/>
        </div>
        <div class="control-group">
          <label class="control-label" for="singlebutton"></label>
          <div class="controls">
            <button id="singlebutton" class="btn btn-success">Modifier</button>
          </div>
        </div>
      </form>
      <form id="reg-form" action="/PiePHP/user/modifySuccess" method="post">
        <div>
          <label for="email">Email</label>
          <input type="text" id="email" name="email" spellcheck="false" placeholder="ex : martindupont@email.com"/>
        </div>
        <div class="control-group">
          <label class="control-label" for="singlebutton"></label>
          <div class="controls">
            <button id="singlebutton" class="btn btn-success">Modifier</button>
          </div>
        </div>
      </form>
      <form id="reg-form" action="/PiePHP/user/modifySuccess" method="post">
        <div>
          <label for="password">Password</label>
          <input type="password" name="password" id="password" />
        </div>
        <div class="control-group">
          <label class="control-label" for="singlebutton"></label>
          <div class="controls">
            <button id="singlebutton" class="btn btn-success">Modifier</button>
          </div>
        </div>
      </form>
      <form action="/piePHP/user/delete" method="POST">
        <button  class="btn btn-danger">Supprimez votre compte</button>
        </form>
        <!-- Button -->


      </div>
    </div>
  </div>
