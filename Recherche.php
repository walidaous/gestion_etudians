<?php
include_once './racine.php';
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tables | Bootstrap Simple Admin Template</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/datatables/datatables.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
</head>
	<style type="text/css">
<!--
.input2 {
  background-color: black;
  border: none;
  color: white;
  padding: 4px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.input1{
	margin-left:300px;
}
table{
margin-left:auto;
margin-right:auto;
border-collapse:collapse;
border:1px solid #000000;
width:95%;
}
table td{
border:1px solid #000000;
}
table th{
border:1px solid #000000;
background-color:#dddddd;
color:#000000;
text-align:center;
}

-->
</style>
<body>
        <?php include_once RACINE . '/connexion/Connexion.php';?>

    <body>
        <div class="wrapper">
            <nav id="sidebar" class="active">

                <ul class="list-unstyled components text-secondary">
                    <li>
                        <a href="index.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="etudiants.html"><i class="fas fa-plus"></i> AJOUTER ETUDIANT</a>
                    </li>
                    <li>
                        <a href="classes.html"><i class="fas fa-plus-square"></i> AJOUTER UNE CLASSE</a>
                    </li>
                    <li>
                        <a href="filiere.html"><i class="fas fa-plus-circle"></i> AJOUTER UNE FILIERER</a>
                    </li>
                                    <li>
                    <a href="charts.php"><i class="fas fa-chart-bar"></i> Charts</a>
                </li>
                    <li>
                        <a href="Recherche.php"><i class="fas fa-search"></i> CHERCHER</a>
                    </li>
                </ul>
            </nav>
            <div id="body" class="active">
                <nav class="navbar navbar-expand-lg navbar-white bg-white">
                    <button type="button" id="sidebarCollapse" class="btn btn-light"><i class="fas fa-bars"></i><span></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            
                            <li class="nav-item dropdown">
                                <div class="nav-dropdown">
                                    <a href="" class="nav-item nav-link dropdown-toggle text-secondary" data-toggle="dropdown"><i class="fas fa-user"></i> <span>AOUS WALID</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                        <ul class="nav-list">
                                            <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                            <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                            <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                            <div class="dropdown-divider"></div>
                                            <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
       
            <div class="content">
                <div class="container">
                    <div class="page-title">
                        <h3>Chercher</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">chercher un etudiant</div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                      <?php include_once RACINE . '/connexion/Connexion.php';?>

<form method='post'>
		<input type='text' placeholder='recherche' name="recherche_valeur"/ class="input1">
		<input type='submit' value="Rechercher"/ class="input2">
	</form>
	<table>
		<thead>
			<tr><th>NB</th><th>NOM</th><th>PRENOM</th><th>Classe</th><th>filiere</th>
		</thead>
		<tbody>
			<?php
                                $a=0;
                                $connect = new Connexion();
				$sql='select  etudiant.nom,etudiant.prenom,classe.code, classe.id_filiere from classe inner join filiere on classe.id_filiere=Filiere.code inner join etudiant on etudiant.id_classe=classe.code  ';
				$params=[];
				if(isset($_POST['recherche_valeur'])){
					$sql.=' where classe.id_filiere like :id_filiere order by Filiere.code DESC ;';
					$params[':id_filiere']="%".addcslashes($_POST['recherche_valeur'],'_')."%";
				}
				$resultats=$connect->getConnexion()->prepare($sql);
				$resultats->execute($params);
				if($resultats->rowCount()>0){
					while($d=$resultats->fetch(PDO::FETCH_ASSOC)){
					?>
						<tr><td><?=$a=$a+1?></td><td><?=$d['nom']?></td><td><?=$d['prenom']?></td><td><?=$d['code']?></td><td><?=$d['id_filiere']?></td></tr>
					<?php
					}
					$resultats->closeCursor();
				}
				else {
                                    echo '<tr><td colspan=4>aucun résultat trouvé</td></tr>'.
				$connect=null;
                                }
			?>
		</tbody>
	</table>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/datatables/datatables.min.js"></script>
    <script src="assets/js/initiate-datatables.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>