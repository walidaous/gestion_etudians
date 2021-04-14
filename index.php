<!doctype html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pointage</title>
        <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
        <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
        <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/master.css" rel="stylesheet">
        <link href="assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
        <link href="assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
    </head>

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
                        <div class="row">
                            <div class="col-md-12 page-header">
                                <div class="page-pretitle"></div>
                                <h2 class="page-title">pointage</h2>
                            </div>
                        </div>
                        <a href="etudiants.html"> 
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                                    <div class="card">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="icon-big text-center">
                                                        <i class="teal fas fa-plus"></i>
                                                    </div>
                                                </div>

                                                <div class="col-sm-8">
                                                    <div class="detail">
                                                        <p class="detail-subtitle">Ajouter un etudiant</p>
                                                        <span class="number"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            </a>
                                            <div class="footer">
                                                <hr />
                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                <a href="classes.html">
                                    <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                                        <div class="card">
                                            <div class="content">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="icon-big text-center">
                                                            <i class="olive fas fa-plus-circle"></i>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-8">
                                                        <div class="detail">
                                                            <p class="detail-subtitle" >Ajouter une classe</p>
                                                            <span class="number"></span>
                                                        </div>
                                                    </div>
                                                </div></a>
                                                <div class="footer">
                                                    <hr />
 
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                                        <div class="card">
                                            <div class="content">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="icon-big text-center">
                                                            <i class="violet fas fa-plus-square"></i>
                                                        </div>
                                                    </div>
                                                    <a href="filiere.html" >
                                                        <div class="col-sm-8">
                                                            <div class="detail">
                                                                <p class="detail-subtitle">ajouter une filiere</p>
                                                                <span class="number"></span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="footer">
                                                    <hr />
   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="charts.php">
                                    <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                                        <div class="card">
                                            <div class="content">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="icon-big text-center">
                                                            <i class="olive fas fa-chart-bar"></i>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-8">
                                                        <div class="detail">
                                                            <p class="detail-subtitle" >charts</p>
                                                            <span class="number"></span>
                                                        </div>
                                                    </div>
                                                </div></a>
                                                <div class="footer">
                                                    <hr />
 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="Recherche.php">
                                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                                            <div class="card">
                                                <div class="content">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="icon-big text-center">
                                                                <i class="orange fas fa-search"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="detail">
                                                                <p class="detail-subtitle">chercher un etudiant</p>
                                                                <span class="number"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </a>
                                                    <div class="footer">
                                                        <hr />

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>

                                        <script src="assets/vendor/jquery/jquery.min.js"></script>
                                        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                                        <script src="assets/vendor/chartsjs/Chart.min.js"></script>
                                        <script src="assets/js/dashboard-charts.js"></script>
                                        <script src="assets/js/script.js"></script>
                                        </body>

                                        </html>