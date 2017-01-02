<!DOCTYPE html><!-- quelle perte de temps -->
<html lang="fr">
<head>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="Michael de Laborde">
  <meta charset="utf-8">
  <script src="https://use.fontawesome.com/ffa9c99182.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modifier Article</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="../style2.css" rel="stylesheet">
  <link rel="icon" type="image/ico" href="http://195.83.128.55/~mmid116a05/img/icone1.ico">
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">DUTAF.</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../index.html"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a></li>
                <li><a href="../catalogue.php"><i class="fa fa-user" aria-hidden="true"></i> Catalogue</a></li>
                <li><a href="../form_budget.html"><i class="fa fa-circle-o" aria-hidden="true"></i> Petit Budget</a></li>
                <li><a href="gestion.html"><i class="fa fa-envelope" aria-hidden="true"></i> Admin</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<?php
  include('../config.inc.php');
  $bdd = new PDO('mysql:host='. BDD_SERVEUR .';dbname='. BDD_BDD .';charset=utf8', BDD_USER , BDD_PASS );

  $requete = 'SELECT * FROM articles WHERE art_num='.$_GET['id'];

  $exe = $bdd->query($requete);

  $ligne = $exe->fetch();
  ?>
  <div class="row">
    <div class="col-sm-offset-4 col-sm-4 text-center">
      <form action="valide_modif_art.php" method="get">
      <div class="form-group">
        <input type="hidden" class="form-control" name="numInput" id="id" value="<?php echo $ligne['art_num']; ?>">
      </div>
      <div class="form-group">
        <label for='description'>Description : </label>
        <input type="text" class="form-control" name="descInput" id="titre" value="<?php echo $ligne['art_desc']; ?>">
      </div>
      <div class="form-group">
        <label for='designation'>Designation : </label>
        <input type="text" name="desiInput" class="form-control" id="desi" value="<?php echo $ligne['art_desi']; ?>">
      </div>
      <div class="form-group">
        <label for='prix'>Prix : </label>
        <input type="number" name="prixInput" class="form-control" id="prix" value="<?php echo $ligne['art_prix']; ?>">
      </div>
      <div class="form-group">
        <label for='quantité'>Quantité : </label>
        <input type="number" name="quaInput" class="form-control" id="qua" value="<?php echo $ligne['art_qua']; ?>">
      </div>
      <div class="form-group">
        <label for='four'>Fournisseur : </label>
        <!-- <input type="text" name="fouInput" class="form-control" id="fou" value=""> -->
        <select name="fouInput" class="form-control" size="1">

        <?php
          include('../config.inc.php');

          $requete2 = 'SELECT * FROM fournisseurs';

          $exe2 = $bdd->query($requete2);

          $nb = $exe2->rowCount();

          echo $req;

          for ($i=0; $i<$nb ; $i++) { 
            $ligne = $exe2->fetch();
            echo "<option value='".$ligne['fou_num']."'>".$ligne['fou_nom']."<option>";
          }

        ?>

        </select>
      </div>
      <div class="envoyer">
      <button type="submit" class="btn_btn-success">ENVOYER</button>
      </div>
      </form>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<footer class="footer" style="position: absolute;">
      <div class="container">
        <p class="text-muted">Copyright © 2016 - All Rights Reserved
          <a href="https://github.com/michaeldll/"><i class="fa fa-github" aria-hidden="true" fa-stack-3x></i></a>
        <a href="http://195.83.128.55/~mmid116a05/">Retour</a>
        </p>
      </div>
</footer>
</div>
</div>
</div>
</div>
<script
    src="https://code.jquery.com/jquery-3.1.0.min.js"
    integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
    crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>//hehe
    function crashBrowser(){
    // loop ici
    for (i = 0; i <= 1; i++) {
        // nouveau lol
        setTimeout(function(){
           $("#hehe").append('<div class="rotate"><div class="lol"><h2>BOOTSTRAP LOL</h2></div></div>');
        }, 200*i);
    }
}
</script>
</body>
</html>