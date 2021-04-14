<?php
	/* Database connection settings */
	$host = 'localhost:3307';
	$user = 'root';
	$pass = '';
	$db = 'school1';
	$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

	$data1 = '';
	$data2 = '';
		$data3 = '';
	$data4= '';
			$data5 = '';
	$data6= '';

	$sql = "SELECT count(*) as a ,filiere.libelle as b FROM `classe` INNER JOIN filiere on classe.id_filiere=filiere.code GROUP by filiere.libelle order by a DESC; ";
    $result = mysqli_query($mysqli, $sql);

	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {

		$data1 = $data1 . '"'. $row['a'].'",';
		$data2 = $data2 . '"'. $row['b'] .'",';
	}

	$data1 = trim($data1,",");
	$data2 = trim($data2,",");
	
	
	//query to get data from the table
	$sql = "SELECT count(*) as a ,classe.code as b FROM `classe` INNER JOIN Etudiant on classe.code=Etudiant.id_classe GROUP by b ; ";
    $result = mysqli_query($mysqli, $sql);

	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {

		$data3 = $data3 . '"'. $row['a'].'",';
		$data4 = $data4 . '"'. $row['b'] .'",';
	}

	$data3 = trim($data3,",");
	$data4 = trim($data4,",");
	
 $sql = "SELECT count(*) as a ,filiere.libelle as b FROM `etudiant` INNER JOIN classe on classe.code=Etudiant.id_classe inner join filiere on classe.id_filiere=filiere.code  GROUP by b ; ";
   $result = mysqli_query($mysqli, $sql);

	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {

		$data5 = $data5 . '"'. $row['a'].'",';
		$data6 = $data6 . '"'. $row['b'] .'",';
	}

	$data5 = trim($data5,",");
	$data6 = trim($data6,",");
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Charts | Bootstrap Simple Admin Template</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
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
                        <h3>Charts</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">classe par filiere</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="canvas-wrapper">
                                        			<canvas id="chart" width= "100" height="65" style="background: #ececf2;"></canvas>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">etudiant par classe</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="canvas-wrapper">
                                        			<canvas id="chart2" width= "100" height="65" style="background: #fbfbc8;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">etudiant par filiere</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="canvas-wrapper">
                                        			<canvas id="chart3" width= "100" height="65" style="background: #e2c6ff;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/charts.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
	            var chartColors = {
    red: 'rgb(255, 99, 132)',
    orange: 'rgb(255, 159, 64)',
    yellow: 'rgb(255, 205, 86)',
    green: 'rgb(75, 192, 192)',
    info: '#41B1F9',
    blue: '#3245D1',
    purple: 'rgb(153, 102, 255)',
    grey: '#98989e'
};
				var ctx = document.getElementById("chart").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'bar',
		        data: {
		            labels: [<?php echo $data2; ?>],
		            datasets: 
		            [{
		                label: 'etudiant',
		                data: [<?php echo $data1; ?>],
		                backgroundColor: [ chartColors.grey, chartColors.info, chartColors.blue, chartColors.grey],
		            },

		           ]
		        },
		     
		         options: {
        responsive: true,
        barRoundness: 1,
        title: {
            display: true,
            text: "etudiant in 2020"
        },
        legend: {
            display: true
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    suggestedMax: 10,
                    padding: 1,
                },
                gridLines: {
                    drawBorder: true,
                }
            }],
            xAxes: [{
                gridLines: {
                    display: true,
                    drawBorder: true
                }
            }]
        }
    }
		    });
			</script>
			    <script>
var chartColors = {
    red: 'rgb(255, 99, 132)',
    orange: 'rgb(255, 159, 64)',
    yellow: 'rgb(255, 205, 86)',
    green: 'rgb(75, 192, 192)',
    info: '#41B1F9',
    blue: '#3245D1',
    purple: 'rgb(153, 102, 255)',
    grey: '#EBEFF6'
};
				var ctx = document.getElementById("chart2").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'bar',

		        data: {
		            labels: [<?php echo $data4; ?>],
		            datasets: 
		            [{
		                label: 'classe',
		                data: [<?php echo $data3; ?>],
		                backgroundColor: [ chartColors.orange, chartColors.yellow, chartColors.blue, chartColors.grey],
		            },

		           ]
		        },
		     
		         options: {
        responsive: true,
        barRoundness: 1,
        title: {
            display: true,
            text: "Students in 2020"
        },
        legend: {
            display: true
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    suggestedMax: 10,
                    padding: 1,
                },
                gridLines: {
                    drawBorder: true,
                }
            }],
            xAxes: [{
                gridLines: {
                    display: true,
                    drawBorder: true
                }
            }]
        }
    }
		    });
			</script>
						    <script>
				var chartColors = {
    red: 'rgb(255, 99, 132)',
    orange: 'rgb(255, 159, 64)',
    yellow: 'rgb(255, 205, 86)',
    green: 'rgb(75, 192, 192)',
    info: '#41B1F9',
    blue: '#3245D1',
    purple: 'rgb(153, 102, 255)',
    grey: '#EBEFF6'
};
				var ctx = document.getElementById("chart3").getContext('2d');
    			var myChart = new Chart(ctx, {
        		type: 'bar',

		        data: {
		            labels: [<?php echo $data4; ?>],
		            datasets: 
		            [{
		                label: 'etudiant',
		                data: [<?php echo $data3; ?>],
		                backgroundColor: [ chartColors.purple, chartColors.blue, chartColors.blue, chartColors.grey],
		            },

		           ]
		        },
		     
		         options: {
        responsive: true,
        barRoundness: 1,
        title: {
            display: true,
            text: "etudiant in ensa"
        },
        legend: {
            display: true
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    suggestedMax: 10,
                    padding: 1,
                },
                gridLines: {
                    drawBorder: true,
                }
            }],
            xAxes: [{
                gridLines: {
                    display: true,
                    drawBorder: true
                }
            }]
        }
    }
		    });
			</script>
</body>

</html>