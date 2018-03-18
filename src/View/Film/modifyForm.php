<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
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
        <button type="submit" class="btn btn-primary"> <?php if (isset($_SESSION['name'])){echo "Logout";} else {echo "Login";}?></button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
	<div class="row">
		<form role="form" action="/PiePHP/film/movieUpdate" method="post" id="contact-form" class="contact-form">
      <div class="row">
        <div class="col-md-12">
        <div class="form-group">
              <textarea class="form-control textarea" rows="3" name="resum" placeholder="Résumé"></textarea>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
        <form action ="/PiePHP/film/movieUpdate" method="POST">
    <button value=" <?php echo $_POST['id']; ?>" name="id" type="submit" class="btn main-btn pull-right">Modifier</button>
  </form>
    </div>
    </div>
  </form>
</div>
</div>
</body>
</html>
