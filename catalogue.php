<!DOCTYPE html><!-- quelle perte de temps -->
<html lang="fr">
<head>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Michael de Laborde">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catalogue</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="style2.css" rel="stylesheet">
    <link rel="icon" type="image/ico" href="http://195.83.128.55/~mmid116a05/img/icone1.ico">
    <script src="https://use.fontawesome.com/ffa9c99182.js"></script>
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
                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a></li>
                <li><a href="catalogue.php"><i class="fa fa-user" aria-hidden="true"></i> Catalogue</a></li>
                <li><a href="form_budget.html"><i class="fa fa-circle-o" aria-hidden="true"></i> Petit Budget</a></li>
                <li><a href="admin/gestion.html"><i class="fa fa-envelope" aria-hidden="true"></i> Privé</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-12 text-center">
	    <h1>Catalogue</h1>
	    <br>
	</div>
	<div class="col-sm-12">
		  <table class="table table-hover"><!-- tableau -->
	        <thead>
	          <tr>
	            <th>Numéro</th>
	            <th>Designation</th>
	            <th>Description</th>
	            <th>Quantité</th>
	            <th>Prix</th>
	          </tr>
	        </thead>
	        <tbody>
            <?php
            include('config.inc.php'); // importer config
            $bdd = new PDO('mysql:host='. BDD_SERVEUR .';dbname='. BDD_BDD .';charset=utf8', BDD_USER , BDD_PASS );//connection base données

            if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; // reprends la page GET

            $results_per_page = 20; // nmbr resultats

            $start_from = ($page-1) * $results_per_page; // premiere limite requete SELECT

            $requete = "SELECT * FROM articles LIMIT ".$start_from.", ".$results_per_page; //selection données base de données

            $exe = $bdd->query($requete); //requete

            while($row = $exe->fetch()) {
                ?>
                <tr>
                    <td><?php echo $row["art_num"]; ?></td>
                    <td><?php echo $row["art_desi"]; ?></td>
                    <td><?php echo $row["art_desc"]; ?></td>
                    <td><?php echo $row["art_qua"]; ?></td>
                    <td><?php echo $row["art_prix"]; ?></td>
                </tr>
            <?php
            };
            ?>
	        </tbody>
	     </table>
            <div class="page">
                <h3>Pages :</h3>
                <?php
                    for ($i=1; $i<=27; $i++) {  // print links for all pages
                        echo "<a href='catalogue.php?page=".$i."'";
                        if ($i==$page)  echo " class='curPage'";
                        echo ">".$i."</a> ";
                    };
                    if ($page==27){  echo "<style> footer{position:absolute;} </style>";};
                ?>
            </div>
	    </div>
    </div>
  </div>
</div>

<footer class="footer">
      <div class="container">
        <p class="text-muted">Copyright © 2016 - All Rights Reserved - Mr Universe 2017
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
        //while ($ligne = $exe->fetch()) //boucle while
        //{
        //echo tableau avec contenu bd
        //echo '<tr><td>'.$ligne ['art_num'].'</td><td>'.$ligne ['art_desi'].'</td><td>'.$ligne ['art_desc'].'</td><td>'.$ligne['art_qua'].'</td><td>'.number_format($ligne['art_prix'], 2).' €</td>
        //</tr>';
        //}
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