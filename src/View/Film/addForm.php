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


<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
<div class="container">
	<div class="row">
		<form role="form" action="/PiePHP/film/register" method="post" id="contact-form" class="contact-form">
                    <div class="row">

										<div class="col-md-6">
                  		<div class="form-group">
                            <input type="text" class="form-control" name="titre" autocomplete="off" placeholder="titre">
                  		</div>
                  	</div>
                    	<div class="col-md-6">
                  		<div class="form-group">
                            <input type="text" class="form-control" name="duree_min" autocomplete="off" placeholder="Durée en min">
                  		</div>
                  	</div>
										<div class="col-md-6">
										<div class="form-group">
													<input type="text" class="form-control" name="annee_prod" autocomplete="off" placeholder="Année de production">
										</div>
									</div>

									<select name="id_genre" class="col-md-6">
									  <option value="0">detective</option>
									  <option value=1>dramatic comedy</option>
									  <option value=2>science fiction</option>
									  <option value=3>drama</option>
									  <option value=4>documentary</option>
										<option value=5>animation</option>
										<option value=6>comedy</option>
										<option value=7>fantasy</option>
										<option value=8>action</option>
										<option value=9>thriller</option>
										<option value=10>adventure</option>
										<option value=11>various</option>
										<option value=12>historical</option>
										<option value=13>western</option>
										<option value=14>romance</option>
										<option value=15>music</option>
										<option value=16>musical</option>
										<option value=17>horror</option>
										<option value=18>war</option>
										<option value=19>unknow</option>
										<option value=20>spying</option>
										<option value=21>historical epic</option>
										<option value=22>biography</option>
										<option value=23>experimental</option>
										<option value=24>short film</option>
									</select>

                  	</div>
                  	<div class="row">
                  		<div class="col-md-12">
                  		<div class="form-group">
                            <textarea class="form-control textarea" rows="3" name="resum" placeholder="Résumé"></textarea>
                  		</div>
                  	</div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                  <button type="submit" class="btn main-btn pull-right">Ajouter</button>
                  </div>
                  </div>
                </form>
	</div>
</div>
</body>
</html>
