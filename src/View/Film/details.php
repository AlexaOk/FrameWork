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

<container>
  <table class="table table-striped table-hover js-table">
    <thead>
      <tr>

        <th>Titre<br>
        <form action="/PiePHP/film/delete" method="POST" >
          <?php if (isset($_SESSION['name'])){echo'
        <button value="<?php   foreach ($details as $key => $value) { echo $value[\'id\'];} ?>" name="id"  role="button" class="btn btn-danger">Supprimer ce film</button>';
      }?>
        </form>
        </th>
        <th>Résumé<br>
        <form action="/PiePHP/film/modify" method="POST">
        <?php if (isset($_SESSION['name'])){echo'
        <button  value="<?php   foreach ($details as $key => $value) { echo $value[\'id\'];} ?>" name="id" role="button" class="btn btn-info">Modifier</button>';
      }?>
        </th>
        </form>
        <th>Année de Production</th>
        <th>Duree</th>
      </tr>
    </thead>
    <tbody>
      <tr data-toggle="collapse" data-target="#collapse4039" class="clickable">
<?php
      foreach ($details as $key => $value) {
        echo "<td>".$value['titre']."</td>";
        echo "<td>".$value['resum']."</td>";
        echo "<td>".$value['annee_prod']."</td>";
        echo "<td>".$value['duree_min']." min</td>";
      }
?>
</body>
</html>
