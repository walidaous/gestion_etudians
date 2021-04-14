<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gestion de pointage</title>
        <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
        <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
        <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/datatables/datatables.min.css" rel="stylesheet">
        <link href="assets/css/master.css" rel="stylesheet">
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
                <div class="container">
                    <br />

                    <h3 align="center">Etudiant</a></h3><br />
                    <br />
                    <div align="right" style="margin-bottom:5px;">
                        <button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
                    </div>
                    <div class="table-responsive" id="user_data">

                    </div>
                    <br />
                </div>

                <div id="user_dialog" title="Add Data">
                    <form method="post" id="user_form">
                        <div class="form-group">
                            <label>Enter First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" />
                            <span id="error_first_name" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label>Enter Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" />
                            <span id="error_last_name" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label>Enter ville:</label>
							<br>
							
                                                                        <select name="ville" id="ville" class="form-control" >
                                                                            <option value="Marrakech">Marrakech</option>
                                                                            <option value="Rabat">Rabat</option>
                                                                            <option value="Agadir">Agadir</option>
                                                                            <option value="el jadida">el jadida</option>
                                                                            <option value="casa">casa</option>
                                                                            <option value="fes">fes</option>
                                                                            <option value="azzemour">azzemour</option>
                                                                            <option value="setat">setat</option>
                                                                            <option value="ifran">ifran</option>

                                                                        </select>
                            
                        </div>
                        <div class="form-group">
                            <label>Enter sexe</label><br>
                         
							                                                                        <input type="radio" name="sexe" id="sexe" value="homme" />M
                                                                        <input type="radio" name="sexe" id="sexe"  value="femme" />F
                        </div>
                        <div class="form-group">
                            <label>Enter classe</label>
                            <input type="text" name="classe" id="classe" class="form-control" />
							
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="action" id="action" value="insert" />
                            <input type="hidden" name="hidden_id" id="hidden_id" />
                            <input type="submit" name="form_action" id="form_action" class="btn btn-info" value="Insert" />
                        </div>
                    </form>
                </div>

                <div id="action_alert" title="Action">

                </div>

                <div id="delete_confirmation" title="Confirmation">
                    <p>Are you sure you want to Delete this data?</p>
                </div>
            </div>
        </div>
        <link rel="stylesheet" href="jquery-ui.css">

        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/datatables/datatables.min.js"></script>
        <script src="assets/js/initiate-datatables.js"></script>
        <script src="assets/js/script.js"></script>
        <script src="jquery.min.js"></script>  
        <script src="jquery-ui.js"></script>
        <script src="et.js"></script>


    </body>

</html>